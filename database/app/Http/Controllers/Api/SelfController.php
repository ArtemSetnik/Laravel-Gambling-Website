<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Web\WebBaseController;
use App\Models\Api;
use App\Models\GameRecord;
use App\Models\Member;
use App\Models\MemberAPi;
use App\Models\Transfer;
use App\Services\AgService;
use App\Services\SelfService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Log;
use Mockery\Exception;

class SelfController extends WebBaseController
{
    protected $service,$api;
    public function __construct()
    {
        $this->service = new SelfService();
        $this->api = Api::where('api_name', 'SELF')->first();
    }

    public function register($username,$password)
    {
        $res = $this->service->register($username, $password);
    }

    public function credit($api_name)
    {

        $return = [
            'Code' => 0,
            'Message' => 'success',
            'url' => '',
            'Data' => '',
        ];

        $res = json_decode($this->service->credit($api_name), TRUE);


        //print_r($res);
        if ($res['statusCode'] == 01)
        {
            $api_mod = Api::where('api_name', $api_name)->where('on_line', 0)->first();
            $money = sprintf('%.2f',$res['data']);
            $api_mod->update([
                'api_money' => $money
            ]);
            $return['Data'] = $money;
        } else {
            $return['Code'] = $res['statusCode'];
            $return['Message'] = '查询商户余额失败！'.$res['message'].' 请联系客服';
        }

        return $return;
    }

    public function balance($api_name, $username, $password)
    {
        //检查账号是否注册
        $member = Member::where('name', $username)->first();
        $api = Api::where('api_name', $api_name)->where('type', 5)->first();
        $member_api = $member->apis()->where('api_id', $api->id)->first();

        $return = [
            'Code' => 0,
            'Message' => 'success',
            'url' => '',
            'Data' => '',
        ];

        if (!$member_api)
        {
            if ($api_name == 'YC')
            {
                $return['Code'] = -22;
                $return['Message'] = '开通YC前请先进入YC彩票游戏激活';
                return $return;
            }
            //var_dump($this->service->register($api_name,$username,$password));exit;
            $res = json_decode($this->service->register($api_name,$username,$password), TRUE);
            //print_r($res);
            if (!is_array($res))
            {
                $return['Code'] = -1;
                $return['Message'] = '网络错误请重试';
                return $return;
            }
            if ($res['statusCode'] != 01)
            {
                $return['Code'] = $res['statusCode'];
                $return['Message'] = $res['message'];
                return $return;
            }

            //创建api账号
            $member_api = MemberAPi::create([
                'member_id' => $member->id,
                'api_id' => $api->id,
                'username' => $member->name,
                'password' => $member->original_password
            ]);
        }

        //var_dump($this->service->balance($api_name,$username, $password));exit;
        $res = json_decode($this->service->balance($api_name,$username, $password), TRUE);

        //print_r($res);
        if ($res['statusCode'] == 01)
        {
            $m = $res['data'];
            $member_api->update([
                'money' => $m
            ]);
            $return['Data'] = $m;
        } else {
            $return['Code'] = $res['statusCode'];
            $return['Message'] = $res['message'];
        }

        return $return;
    }

    public function deposit($api_name,$username, $password, $amount, $amount_type = 'money')
    {
        //检查账号是否注册
        $member = $this->getMember();
        $api = Api::where('api_name', $api_name)->where('type', 5)->first();
        $member_api = $member->apis()->where('api_id', $api->id)->first();

        $return = [
            'Code' => 0,
            'Message' => 'success',
            'url' => '',
            'Data' => '',
        ];
        if (!$member_api)
        {
            if ($api_name == 'YC')
            {
                $return['Code'] = -22;
                $return['Message'] = '额度转换前请先进入YC彩票游戏激活';
                return $return;
            }
            $res = json_decode($this->service->register($api_name,$username,$password), TRUE);
            if ($res['statusCode'] != 01)
            {
                $return['Code'] = $res['statusCode'];
                $return['Message'] = $res['message'];
                return $return;
            }

            //创建api账号
            $member_api = MemberAPi::create([
                'member_id' => $member->id,
                'api_id' => $api->id,
                'username' => $member->name,
                'password' => $member->original_password
            ]);
        }
        //判断余额
        if ($amount_type == 'money')
        {

            if ($member->money < $amount)
            {
                $return['Code'] = -1;
                $return['Message'] = '账户余额不足';
                return $return;
            }
        } else {
            if ($member->fs_money < $amount)
            {
                $return['Code'] = -1;
                $return['Message'] = '账户余额不足';
                return $return;
            }
        }
        $s_d = [
            'name' => $username,
            'amount' => $amount,
            'api_id' => $member_api->api_id,
            'time' => date('YmdHis'),
            'type' => 1,
            'before_amount' =>  $api->api_money
        ];

        Log::info(json_encode($s_d));

        //先扣除用户余额
        $member->decrement($amount_type , $amount);

        //判断余额
        if ($amount_type == 'money')
        {
            if ($member->money < 0)
            {

                $return['Code'] = -1;
                $return['Message'] = '账户余额不足';
                return $return;
            }
        } else {
            if ($member->fs_money < 0)
            {
                $return['Code'] = -1;
                $return['Message'] = '账户余额不足';
                return $return;
            }
        }


        $result = $this->service->transfer($api_name,$username, $password,$amount);
        $res = json_decode($result, TRUE);

        if (!is_array($res))
        {
            $return['Code'] = -99;
            $return['Message'] = '网络错误，请重试';
            //退回用户
            $member->increment($amount_type , $amount);

            return $return;
        }

        if (is_array($res) && $res['status']['errorCode'] == 0)
        {
            try{
                DB::transaction(function() use($member_api, $res,$amount_type,$amount,$member,$result,$api) {
                    //平台账户
                    $member_api->increment('money', $amount);
                    //个人账户
                    $member->decrement($amount_type , $amount);
                    //额度转换记录
                    Transfer::create([
                        'bill_no' => getBillNo(),
                        'api_type' => $member_api->api_id,
                        'member_id' => $member->id,
                        'transfer_type' => 0,
                        'money' => $amount,
                        'transfer_in_account' => $member_api->api->api_name.'账户',
                        'transfer_out_account' => $amount_type == 'money'?'中心账户':'返水账户',
                        'result' => $result
                    ]);
                    //修改api账号余额
                    $api->decrement('api_money' , $amount);
                });
            }catch(\Exception $e){
                DB::rollback();
            }
        } else {
            //退回用户
            $member->increment($amount_type , $amount);

            $return['Code'] = $res['status']['errorCode'];
            $return['Message'] = $res['status']['msg'];
        }

        $s_d = [
            'name' => $username,
            'amount' => $amount,
            'api_id' => $member_api->api_id,
            'time' => date('YmdHis'),
            'type' => 1,
            'after_amount' =>  $api->api_money
        ];

        Log::info(json_encode($s_d));

        return $return;
    }

    public function withdrawal($api_name,$username, $password, $amount, $amount_type = 'money')
    {
        //检查账号是否注册
        $member = $this->getMember();
        //获取用户余额
        $result = $this->service->wallet_balance($member->name);
        $res = json_decode($result,true);
        $return = [
            'Code' => 0,
            'Message' => 'success',
            'url' => '',
            'Data' => '',
        ];
        if(!is_array($res)){
            $return['Code'] = -99;
            $return['Message'] = '网络错误，请重试';
            return $return;
        }
        //print_r($res);
        if(is_array($res) && $res['statusCode'] == 01){
            $money = $res['data'];
            if($money > 0){
                if($money < $amount){
                    $return['Code'] = -99;
                    $return['Message'] = '中心钱包余额不足---';
                    return $return;
                }
                $amount = $amount > 0 ? -$amount:$amount;

                //print_r([$money,$amount]);
                $result2 = $this->service->trans($username, $amount);
                $res2 = json_decode($result2, TRUE);
                if(!is_array($res2)){
                    $return['Code'] = -99;
                    $return['Message'] = '网络错误，请重试';
                    return $return;
                }

                if(is_array($res2) && $res2['statusCode'] == 01){
                    try{
                        DB::transaction(function() use($res,$amount_type,$amount,$member,$result2) {
                            //个人账户
                            $member->increment($amount_type , abs($amount));
                            //额度转换记录
                            Transfer::create([
                                'bill_no' => getBillNo(),
                                'api_type' => '0',
                                'member_id' => $member->id,
                                'transfer_type' => 1,
                                'money' => $amount,
                                'transfer_in_account' => $amount_type == 'money'?'中心账户':'返水账户',
                                'transfer_out_account' => '中心钱包账户',
                                'result' => $result2
                            ]);
                        });
                    }catch(\Exception $e){
                        DB::rollback();
                    }
                    $return['Code']= $res2['statusCode'] == 01 ? 0 : 0;
                    $return['Message'] = $res2['message'];
                    return $return;
                }else{
                    $return['Code'] = $res2['statusCode'];
                    $return['Message'] = $res2['message'];
                    return $return;
                }
            }else{
                $return['Code'] = -99;
                $return['Message'] = '中心钱包余额不足';
                return $return;
            }
        }else{
            $return['Code'] = $res['statusCode'];
            $return['Message'] = $res['message'];
            return $return;
        }
        return $return;
    }
//    public function withdrawal($api_name,$username, $password, $amount, $amount_type = 'money')
//    {
//        //检查账号是否注册
//        $member = $this->getMember();
//        $api = Api::where('api_name', $api_name)->where('type', 5)->first();
//        $member_api = $member->apis()->where('api_id', $api->id)->first();
//
//        $return = [
//            'Code' => 0,
//            'Message' => 'success',
//            'url' => '',
//            'Data' => '',
//        ];
//
//        if (!$member_api)
//        {
//            $res = json_decode($this->service->register($api_name,$username,$password), TRUE);
//            if ($res['statusCode'] != 01)
//            {
//                $return['Code'] = $res['statusCode'];
//                $return['Message'] = $res['message'];
//                return $return;
//            }
//
//            //创建api账号
//            $member_api = MemberAPi::create([
//                'member_id' => $member->id,
//                'api_id' => $api->id,
//                'username' => $member->name,
//                'password' => $member->original_password
//            ]);
//        }
//
//        if ($member_api->money < $amount)
//        {
//            $return['Code'] = -1;
//            $return['Message'] = '余额不足';
//            return $return;
//        }
//
//        $s_d = [
//            'name' => $username,
//            'amount' => $amount,
//            'api_id' => $member_api->api_id,
//            'time' => date('YmdHis'),
//            'type' => 2,
//            'after_money' => $api->api_money
//        ];
//
//        Log::info(json_encode($s_d));
//
//        $result = $this->service->transfer($api_name,$username, $password,$amount,2);
//        //var_dump($result);exit;
//        $res = json_decode($result, TRUE);
//
//        if (is_array($res) && $res['status']['errorCode'] == 0)
//        {
//            try{
//                DB::transaction(function() use($member_api, $res,$amount_type,$amount,$member,$result,$api) {
//                    //平台账户
//                    $member_api->decrement('money' , $amount);
//                    //个人账户
//                    $member->increment($amount_type , $amount);
//                    //额度转换记录
//                    Transfer::create([
//                        'bill_no' => getBillNo(),
//                        'api_type' => $member_api->api_id,
//                        'member_id' => $member->id,
//                        'transfer_type' => 1,
//                        'money' => $amount,
//                        'transfer_in_account' => $amount_type == 'money'?'中心账户':'返水账户',
//                        'transfer_out_account' => $member_api->api->api_name.'账户',
//                        'result' => $result
//                    ]);
//                    $api->increment('api_money' , $amount);
//                });
//            }catch(\Exception $e){
//                DB::rollback();
//            }
//        } else {
//            $return['Code'] = $res['status']['errorCode'];
//            $return['Message'] = $res['status']['msg'];
//        }
//
//        $s_d = [
//            'name' => $username,
//            'amount' => $amount,
//            'api_id' => $member_api->api_id,
//            'time' => date('YmdHis'),
//            'type' => 2,
//            'after_money' => $api->api_money
//        ];
//
//        Log::info(json_encode($s_d));
//
//        return $return;
//    }

    public function login(Request $request)
    {
        //exit();
        $member = $this->getMember();

        if($member) {
            $username = $member->name;
            $password = $member->original_password;
            //$api_code = strtolower($request->get('api_code'));
            $api_code = $plat_type = strtolower($request->get('plat_type'));
            //$id = $request->get('gametype');
            $game_type = $request->get('game_type');
			
			//temp
			if($game_type == 7)
			{
				return;
			}
			
            $isMobile = $request->get('devices') == 1?1:0;
            $api = Api::where('api_name', $plat_type)->first();
            $game_code = $request->get('game_code');
            $lott_type = $request->get('lott_type');
            //检查账号是否注册
            $member_api = $member->apis()->where('api_id', $api->id)->first();
            //dd($member_api);
            if (!$member_api)
            {
                $res = json_decode($this->service->register($api->api_name,$username,$password), TRUE);
                if ($res['statusCode'] != 01) {
                    echo $res['statusCode'].' 请联系客服';exit;
                }

                //创建api账号
                $member_api = MemberAPi::create([
                    'member_id' => $member->id,
                    'api_id' => $api->id,
                    'username' => $api->prefix.$member->name,
                    'password' => $member->original_password
                ]);
            }

            //还需要添加中心钱包
            /*if ($this->getConfig()->is_transfer_on == 0)
            {
                $str = route('web.index').$request->getRequestUri();
echo $str;

                if (!$request->get('in'))
                {
                    $str = preg_match('/\?/i', $str)?$str.'&in=1':$str.'?in=1';
                    return view('web.game_transfer', compact('str', 'api_code'));
                }

            }*/

            //先转换钱包
            $this->trans();
            if ($api_code == 'MG')
            {
                $gameName = $request->get('gametype');
                if (is_Mobile()) {
                    $gameType = $gameName?1:2;
                    if ($gameType == 1 && !$gameName)
                    {
                        echo '错误的游戏名称';exit;
                    }
                    $res = json_decode($this->service->login('MG',$username, $password, $gameType, $gameName, 1), TRUE);

                } else {
                    $gameType = $gameName?1:0;
                    $res = json_decode($this->service->login('MG',$username, $password, $gameType, $gameName), TRUE);
                }
            } else {
                //var_dump($this->service->login($api->api_name,$username, $password, $id,'',$isMobile));exit;
                $res = json_decode($this->service->login($api->api_name,$username, $password, $game_type,$game_code,$isMobile,$lott_type), TRUE);

            }
            //dd($res);
            if ($res['statusCode'] == 01) {
                $url = $res['data'];


                //die;
                return redirect()->to($url);
            } else {
                echo '错误代码 '.$res['message'].' 请联系客服';exit;
            }

        }else{
            //试玩地址
            $isMobile = $request->get('devices') == 1?1:0;
            $game_type = $request->get('game_type');
            $plat_type = $request->get('plat_type');
            $uri = config('web.game_url');
            $url = $uri."/game/index?plat_type={$plat_type}&sign_key={$this->api->api_key}&is_mobile={$isMobile}&game_code=newgaming&game_type={$game_type}";
            return redirect()->to($url);
        }

    }

    /**
     * @throws \Throwable
     */
    public function trans()
    {
        $member = $this->getMember();
        $money = intval($member->money);
        //$result = $this->service->trans($member->name,-100);
        //dd($result);
        if($money > 0){
            //先扣除用户余额
            DB::beginTransaction();
            try{
                $t = date('Y-m-d H:i:s');
                $sql = "update `members` set `money` = `money` - ?, `updated_at` = ? where `id` = ? and `deleted_at` is null and money >= ? and money >0";
                $rs = DB::update($sql,[$money,$t,$member->id,$money]);

                if(!$rs){
                    DB::rollBack();
                    echo "内部错误！请联系管理员！";
                    exit();
                }
                $result = $this->service->trans($member->name,$money);
                $res = json_decode($result,true);
                if(!isset($res['statusCode']) || $res['statusCode'] != 01){
                    DB::rollBack();
                    echo "网络错误！请重新进入游戏！";
                    exit();
                }
                DB::commit();
            }catch (\Exception $e){
                DB::rollBack();
                echo "网络错误2！请重新进入游戏！";
                exit();
            }
            if(is_array($res) && $res['statusCode'] == 01){
                try{
                    DB::transaction(function() use($res,$money,$member,$result) {
                        //个人账户
                        //$member->decrement('money' , $money);
                        //额度转换记录
                        Transfer::create([
                            'bill_no' => getBillNo(),
                            'api_type' => 0,//中心钱包
                            'member_id' => $member->id,
                            'transfer_type' => 0,
                            'money' => $money,
                            'transfer_in_account' => '用户中心钱包账户',
                            'transfer_out_account' => '中心账户',
                            'result' => $result
                        ]);
                    });
                }catch(\Exception $e){
                    DB::rollback();
                }
            }
        }

    }

    public function game_record(Request $request)
    {
        $game_type = strtoupper($request->get('game_type'));
        $plat_type = $request->get('plat_type');
        return view('api.api_sf.getRecord',compact('game_type','plat_type'));
    }

    public function getGameRecord($platformCode, $startTime, $endTime, $PageIndex, $limit, $time,$game_type_game){

        // $platformCode = $platformCode == 'BBIN'?'BB':$platformCode;
        // $res = $this->service->GetMerchantReport($platformCode, $startTime, $endTime, $PageIndex, $limit, $time);
        $platformCode=strtolower($platformCode);
        $res=$this->service->record($startTime,$endTime,$PageIndex,$limit,$username = '',$platformCode,$game_type_game);

        return $res;
    }
    public function test(Request $request)
    {
        $username = 'sw'.$request->get('username');
        $api_name = $request->get('api_name');
        $password = 123456;
        //检查账号是否注册
        $member = Member::where('name', $username)->first();

        if (!$member)
        {
            $member = Member::create([
                'name' => $username,
                'original_password' => substr(md5(md5($username)), 0,10),
                'o_password' => $password,
                'password' => bcrypt($password),
                'invite_code' => getRandom(7),
                'top_id' => 0,
                'qk_pwd' => 123456,
                'register_ip' => $request->getClientIp()
            ]);
        }

        $api = Api::where('api_name', $api_name)->where('type', 5)->first();
        $member_api = $member->apis()->where('api_id', $api->id)->first();
        if (!$member_api)
        {
            $res = json_decode($this->service->register($username,$password,1), TRUE);
            if (is_array($res) && $res['Code'] != 0)
            {
                echo '开通账号失败！错误代码 '.$res['Code'].' 请联系客服';exit;
            }

            //创建api账号
            $member_api = MemberAPi::create([
                'member_id' => $member->id,
                'api_id' => $api->id,
                'username' => $this->api->prefix.$member->name,
                'password' => $member->original_password
            ]);
        }

        $res = json_decode($this->service->login($username, $password, 0,1), TRUE);

        if ($res['Code'] == 0)
        {
            $url = $res['Data'];

            return redirect()->to($url);
        } else {
            echo '错误代码 '.$res['Code'].' 请联系客服';exit;
        }
    }

    /**
     * 获取用户中心钱包
     * @param $username
     * @return int|string
     */
    public function wallet_balance($name='')
    {
        if(!$name){
            $member = $this->getMember();
            $name = $member->name;
        }

        return $this->service->wallet_balance($name);
    }
}
