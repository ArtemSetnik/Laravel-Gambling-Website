@extends('member.layouts.main')
@section('content')
<div class="userbasic_head">
    <a href="javascript:void(0)" class="active" _href="{{ route('sync.tpl', ['name' => 'safe_manage']) }}">安全验证</a>
    <a href="javascript:void(0)" _href="{{ route('sync.tpl', ['name' => 'safe_psw']) }}">安全密码</a>
    <a href="javascript:void(0)" _href="{{ route('sync.tpl', ['name' => 'login_psw']) }}">登录密码</a>
</div>
<div class="userbasic_body">
    <div class="safe_level_box">
        您的账户安全等级：
        <span class="level_line"><span class="level" levelnum="40%"></span></span>
        低
        <span class="fr">还有<span class="themeCr">3</span>项未通过验证/设定</span>
    </div>
    <ul class="msg_list">
        <li>
            <img src="{{ asset('/web/images/n-u-1.png') }}">
            <div class="titleshow">
                <h3>邮箱验证 <span class="is_modify none">未验证</span></h3>
                <p>绑定邮箱可增加账号安全级别，也可以确保在邮箱正常的情况下取回登录密码。</p>
            </div>
            <button class="fr modify modifypre">立即验证</button>
        </li>
        <li>
            <img src="{{ asset('/web/images/n-u-2.png') }}">
            <div class="titleshow">
                <h3>邮箱验证 <span class="is_modify">已验证</span></h3>
                <p>绑定邮箱可增加账号安全级别，也可以确保在邮箱正常的情况下取回登录密码。</p>
            </div>
            <button class="fr modify modifyed">完成</button>
        </li>
        <li>
            <img src="{{ asset('/web/images/n-u-3.png') }}">
            <div class="titleshow">
                <h3>邮箱验证 <span class="is_modify">已验证</span></h3>
                <p>绑定邮箱可增加账号安全级别，也可以确保在邮箱正常的情况下取回登录密码。</p>
            </div>
            <button class="fr modify modifyed">完成</button>
        </li>
        <li>
            <img src="{{ asset('/web/images/n-u-4.png') }}">
            <div class="titleshow">
                <h3>邮箱验证 <span class="is_modify">已验证</span></h3>
                <p>绑定邮箱可增加账号安全级别，也可以确保在邮箱正常的情况下取回登录密码。</p>
            </div>
            <button class="fr modify modifyed">完成</button>
        </li>
    </ul>
</div>
    @endsection
