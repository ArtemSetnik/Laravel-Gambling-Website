<?php

namespace App\Http\Controllers\Wap;

use App\Models\Member;
use App\Models\MemberLoginLog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Traits\ValidationTrait;
use Session;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers,ValidationTrait;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/member/dash';
    protected $username;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth.wap', ['except' => 'logout']);
//        //$this->username = config('admin.global.username');
//    }
    /**
     * 重写登录视图页面
     * @author 晚黎
     * @date   2016-09-05T23:06:16+0800
     * @return [type]                   [description]
     */
    public function showLoginForm()
    {
        return view('wap.login');
    }

    public function postLogin(Request $request)
    {
        $validator = $this->verify($request, 'member.login');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }

        $member = Member::where('name', $request->name)->first();
        if ($member)
        {
            if ($member->status == 1)
                return responseWrong('该账号被禁用');
        }

        if (Auth::guard('member')->attempt(['name' => $request->name, 'password' => $request->password]))
        {
            $member = auth('member')->user();
            $member->last_session = Session::getId();
            $member->save();
            MemberLoginLog::create([
                'member_id' => $member->id,
                'ip' => getIp()
            ]);
            return responseSuccess('', '登录成功', route('wap.index'));
        }
        return responseWrong('用户名或密码错误');
    }

    public function logout()
    {
        //$member = auth('member')->user();
//        $member->update([
//            'is_login' => 0
//        ]);
        Auth::guard('member')->logout();
        return redirect()->route('wap.index');
    }
}
