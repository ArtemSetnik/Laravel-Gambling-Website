<?php

namespace App\Http\Controllers\Daili;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Hash;
class AuthController extends DailiBaseController
{
   // use CurlRequest;

    /**
     * 视图：登录
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getLogin()
    {
        if ($this->getDaili())
            return redirect()->to(route('daili.index'));

        return view('daili..auth.login');
    }

    /**
     * 动作：执行登录
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postLogin(Request $request)
    {
        $daili = Member::where('name', $request->get('name'))->first();
        if (!$daili)
            return respF('用户名或密码错误');
        //dd($request->all());exit;
        if (!Hash::check($request->get('password'), $daili->password))
        {
            return respF('密码错误');
        }

        if ($daili->is_daili != 1)
            return respF('该账号不是代理');

        $request->session()->put('daili_login_info', $daili);
        //session('daili_login_info', $daili);

        return respS('登录成功', route('daili.index'));
    }

    /**
     * 动作：退出
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getLoginOut(Request $request)
    {
        $request->session()->forget('daili_login_info');

        return redirect()->to(route('daili.login'));
    }
}