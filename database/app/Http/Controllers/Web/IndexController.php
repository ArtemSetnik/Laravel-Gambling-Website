<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\Banners;
use App\Models\BlackListIp;
use App\Models\GameList;
use App\Models\MemberLoginLog;
use App\Models\Red;
use App\Models\TcgGameList;
use App\Models\Member;
use App\Models\SystemConfig;
use App\Models\SystemNotice;
use Illuminate\Http\Request;
use App\Traits\ValidationTrait;
use Auth;
use Session;
use App\Models\Api;
class IndexController extends Controller
{
    use ValidationTrait;
    public function index()
    {
        $do_main = $_SERVER['HTTP_HOST'];
        $arr = explode('.', $do_main);
        if (count($arr) == 3 && $arr[0] == 'pc')
        {
            $con = SystemConfig::find(1);
            return redirect()->to($con->pic_link);
        }
        if (count($arr) == 2)
        {
            return redirect()->to('http://www.'.$do_main);
        }
        if (is_Mobile()) {
            return redirect()->to(route('wap.index'));
        }

        $banners = Banners::where('type', 1)->get();

        return view('web.index', compact('banners'));
    }

    public function activityList(Request $request)
    {

        $mod = new Activity();
        $type = $request->get('type');
        if($type) {
            $mod = $mod->where('type',$type);
        }
        $data = $mod->where('on_line', 0)->orderBy('sort', 'asc')->orderBy('created_at', 'desc')->get();

        return view('web.activityList', compact('data'));
    }

    public function activityDetail($id)
    {
        $data = Activity::where('on_line', 0)->where('id', $id)->first();

        return view('web.activityDetail', compact('data'));
    }

    public function liveCasino()
    {
        return view('web.liveCasino');
    }
    public function poker()
    {
        return view('web.poker');
    }
    public function pic()
    {
        return view('web.pic');
    }
    public function esports()
    {
        $system_notices = SystemNotice::where('on_line', 0)->orderBy('sort', 'asc')->orderBy('created_at', 'desc')->get();
        return view('web.esports', compact('system_notices'));
    }
    public function lottory()
    {
        $system_notices = SystemNotice::where('on_line', 0)->orderBy('sort', 'asc')->orderBy('created_at', 'desc')->get();
        return view('web.lottory', compact('system_notices'));
    }

    public function eGame(Request $request)
    {

        $api_name = $request->get('api_name')?strtoupper($request->get('api_name')):'PT';

        if (in_array($api_name, [
            'CQ9',
            'DG',
            'IBC',
            'PNG',
            'TTG',
            'PT',
            'AB',
            'GG',
        ]))
        {
            $mod = new TcgGameList();

            //$api_mod = Api::where('api_name', $api_name)->first();

            $mod = $mod->where('productCode', $api_name);

            $gameName =  '';

            if ($request->has('name'))
            {
                $gameName = $request->get('name');
                $mod = $mod->where('gameName', 'LIKE', "%$gameName%");
            }

            $game_list = $mod->where('on_line', 0)->where('platform', 'LIKE', "%flash%")->orderBy('sort', 'asc')->get();

            return view('web.eGame3', compact('game_list','gameName', 'api_name'));
        }

        $mod = new GameList();

        //$api_mod = Api::where('api_name', $api_name)->first();

        $mod = $mod->where('api_name', $api_name);

        $gameName =  '';

        if ($request->has('name'))
        {
            $gameName = $request->get('name');
            $mod = $mod->where('name', 'LIKE', "%$gameName%");
        }

        $game_list = $mod->where('on_line', 0)->orderBy('sort', 'asc')->get();

        return view('web.eGame', compact('game_list','gameName', 'api_name'));
    }

    public function catchFish()
    {
        return view('web.catchFish');
    }
    public function hongbao()
    {
        return view('web.hongbao');
    }

    public function novice_guidance()
    {
        return view('web.novice_guidance');
    }

    public function maintain()
    {
        $mod = SystemConfig::findOrFail(1);
        if ($mod->is_maintain == 0)
            return redirect()->to(route('web.index'));

        $str = $mod->maintain_desc;
        return view('web.maintain', compact('str'));
    }

    public function register_one(Request $request)
    {
        $i_code = $request->get('i');
        if (is_Mobile()) {
            return redirect()->to(route('wap.register').'?i='.$i_code);
        }

        $register_name = $request->has('register_name')?$request->get('register_name'):'';

        return view('web.register_one', compact('i_code', 'register_name'));
    }
    public function login(Request $request)
    {
        return view('web.login');
    }

    public function post_register_one(Request $request)
    {

        if(!session('milkcaptcha')||session('milkcaptcha') != $request->get('captcha'))
            return responseWrong(__('ft.Verification_code_error'));

        $validator = $this->verify($request, 'member.register_one');

        if ($validator->fails())
            return responseWrong($validator->messages()->toArray());

        //验证ip
        if (in_array($request->getClientIp(), BlackListIp::pluck('ip')->toArray()))
            return responseWrong('该ip限制，请联系客服');

        //必须以字母开头
        if (!preg_match('/^[a-z]+$/', substr((string)$request->get('name'),0,1)) || !preg_match('/^[0-9a-z]+$/', $request->get('name')))
            return responseWrong('用户名只能以小写字母开头且字母数字组合');


        if(strlen((string)$request->get('qk_pwd')) != 6){
            return responseWrong('取款密码为6位纯数字');
        }
        $data = $request->all();

        $name = trim($data['name'], ' ');
        $pwd = trim($data['password'], ' ');
        $i_code = isset($data['i_code'])?trim($data['i_code'], ' '):'';

        $dali_mod = '';
        //判断域名
        $do_main = $_SERVER['HTTP_HOST'];
        $m = Member::where('is_daili', 1)->where('agent_uri', $do_main)->first();
        if ($m)
        {
            $dali_mod = $m;
        } elseif ($request->has('i_code'))
        {
            $dali_mod = Member::where('is_daili', 1)->where('invite_code', $request->get('i_code'))->first();
        } elseif ($request->has('t_name')) {
            $dali_mod = Member::where('is_daili', 1)->where('name', $request->get('t_name'))->first();
        }

        Member::create([
            'name' => $name,
            'original_password' => substr(md5(md5($name)), 0,10),
            'o_password' => $pwd,
            'password' => bcrypt($pwd),
            'invite_code' => getRandom(7),
            'top_id' => $dali_mod?$dali_mod->id:0,
            'qk_pwd' => $data['qk_pwd'],
            'register_ip' => getIp(),
            'real_name' => $data['real_name'],
        ]);

        if (Auth::guard('member')->attempt(['name' => $data['name'], 'password' => $data['password']])) {
            $member = auth('member')->user();
//            $member->update([
//                'is_login' => 1
//            ]);
            $member->last_session = Session::getId();
            $member->save();
            MemberLoginLog::create([
                'member_id' => $member->id,
                'ip' => getIp()
            ]);
            return responseSuccess('',  __('ft.login_success') , route('member.userCenter'));
        }

        return responseSuccess('', '', route('web.register_two')."?register_name=$name&pwd=$pwd&i_code=$i_code");
    }

    public function register_two(Request $request)
    {
        $register_name = $request->get('register_name');
        $pwd = $request->get('pwd');
        $i_code = $request->get('i_code');

        return view('web.register_two', compact('register_name', 'pwd', 'i_code'));
    }

    public function post_register_two(Request $request)
    {
        $validator = $this->verify($request, 'member.register_two');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }

        $data = $request->all();

        //判断是否为代理邀请注册
        $dali_mod = '';
        if ($request->has('invite_code'))
        {
            $dali_mod = Member::where('is_daili', 1)->where('invite_code', $request->get('invite_code'))->first();
        }

        Member::create([
            'name' => $data['name'],
            'original_password' => substr(md5(md5($data['name'])), 0,10),
            'password' => bcrypt($data['password']),
            'invite_code' => str_random(7),
            'real_name' => $data['real_name'],
            'gender' => $data['gender'],
            'phone' => $data['phone'],
            'qq' => $data['qq'],
            'email' => $data['email'],
            'top_id' => $dali_mod?$dali_mod->id:0,
            'qk_pwd' => $data['qk_pwd'],
            'register_ip' => $request->getClientIp()
        ]);

        if (Auth::guard('member')->attempt(['name' => $data['name'], 'password' => $data['password']]))
        {
            $member = auth('member')->user();
            $member->update([
                'is_login' => 1
            ]);
            MemberLoginLog::create([
                'member_id' => $member->id,
                'ip' => $request->getClientIp()
            ]);
            return responseSuccess('', '登录成功', route('member.userCenter'));
        }

        return responseSuccess('', '', route('web.register_success'));
    }

    public function register_success(Request $request)
    {
        return view('web.register_success');
    }

    public function syncTpl($name)
    {
        return view('web.member.'.$name);
    }

    public function red_index()
    {
        $red = Red::where('on_line', 0)->orderBy('sort', 'asc')->get();
        return view('web.hongbao', compact('red'));
    }

    public function translate($locale) {
        if (!in_array($locale, ['en', 'zh_cn','malaya'])){
            $locale = 'zh_cn';
        }
        Session::put('locale', $locale);
        return redirect('/');
        
    }


}

