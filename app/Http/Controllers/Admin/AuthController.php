<?php

namespace App\Http\Controllers\Admin;

use App\Models\AdminLoginLog;
use App\Services\CurlService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
   // use CurlRequest;

    /**
     * 视图：登录
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getLogin()
    {
        if (Auth::user())
            return redirect()->to(route('admin.index'));
        $is_mbk_on = $this->isMbkOn();
        return view('admin.auth.login',compact('is_mbk_on'));
    }

    //判断是否开启密保卡验证
    public function isMbkOn(){
        $result = DB::select("select is_mbk_on from system_config where id = 1");
        return ($result[0]->is_mbk_on==0)?true:false;
    }

    public function getMbk(){
        $param1 = substr(session('mbk'), 0,2);
        $param2 = substr(session('mbk'), 2, 2);
        $mbk_arr = json_decode(config('admin')['mbk']['mbk_arr'],true);
        return $mbk_arr[$param1].$mbk_arr[$param2];
    }

    /**
     * 动作：执行登录
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postLogin(Request $request)
    {

        if(!session('milkcaptcha')||session('milkcaptcha') != $request->get('captcha'))
            return respF('验证码错误');

        if($this->isMbkOn()){
            if(!session('mbk')||$this->getMbk() != strtoupper($request->get('mbk')))
            return respF('密保卡错误');
        }
        
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            $user = Auth::user();
            $user->last_session = Session::getId();
            $user->save();
            AdminLoginLog::create([
                'user_id' => $user->id,
                'ip' => getIp()
            ]);
            session()->forget('milkcaptcha');
            session()->forget('mbk');
            return respS('登录成功',  route('admin.index'));
        }
        return respF('邮箱或密码错误');
    }

    /**
     * 动作：退出
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getLoginOut()
    {
        Auth::logout();
        return redirect()->guest('admin/login');
    }
}