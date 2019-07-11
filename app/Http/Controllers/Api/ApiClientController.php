<?php
namespace App\Http\Controllers\Api;


use App\Http\Controllers\Web\WebBaseController;
use App\Models\Api;
use App\Models\Member;
use App\Services\CurlService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class ApiClientController extends WebBaseController
{

    public function index()
    {
        return view('api.index');
    }

    //查询会员余额
    public function check(Request $request)
    {
        $api_name = strtoupper($request->get('api_name'));
        $member = $this->getMember();

        $mod = new SelfController();
        $res =  $mod->balance($api_name,$member->name, $member->original_password);
        return $res;
    }

    //转入游戏
    public function deposit($api_name,$username,$password,$amount,$amount_type)
    {
        $api_name = strtoupper($api_name);
        $mod = new SelfController();
        $res = $mod->deposit($api_name,$username, $password, $amount, $amount_type);
        return $res;
    }

    //转出游戏
    public function withdrawal($api_name,$username,$password,$amount,$amount_type)
    {
        $api_name = strtoupper($api_name);

        $mod = new SelfController();
        $res = $mod->withdrawal($api_name,$username, $password, $amount, $amount_type);
        return $res;
    }

    //查询商户余额
    public function credit(Request $request)
    {
        $api_name = strtoupper($request->get('api_name'));

        $mod = new SelfController();
        $res =  $mod->credit($api_name);
        return $res;
    }

    //后台查询用户余额
    public function balance($id, $api_name)
    {
        $member = Member::findOrFail($id);
        $mod = new SelfController();
        $res =  $mod->balance($api_name,$member->name, $member->original_password);
        return $res;
    }

    public function transfer_all(Request $request)
    {
        $amount = $request->get('amount');
        $api_code = $request->get('api_code');
        $member = $this->getMember();
        $amount = $amount >= $member->money?$member->money:$amount;
        $amount = $amount <= 1 ?1 :$amount;
        $mod = new SelfController();
        $mod->deposit($api_code,$member->name, $member->original_password, $amount);

        $str = $request->get('str');

        return redirect()->to($str);

    }
    public function trans()
    {
        
    }

    /**
     * 获取用户中心钱包
     * @return int|string
     */
    public function wallet_balance(Request $request)
    {

        $name = $request->get('name','');
        $mod = new SelfController();
        $res = $mod->wallet_balance($name);
        return $res;
    }
}