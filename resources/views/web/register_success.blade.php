@extends('web.layouts.main')
@section('content')
    <div class="top_margin">
        <div class="container">
            <div class="register_con register_last">
                <div class="register_success">
                    <div class="imgtips"><img src="{{ asset('/web/images/bg-ico_02.png') }}"></div>
                    <div class="texttips">
                        <h1>恭喜您，注册成功</h1>
                        <h3>为提高您的游戏体验与账户安全，请尽快完善个人信息，祝您投注愉快！</h3>
                    </div>
                </div>
                <div class="success_next">继续完成以下操作，可在用户中心领取 <span class="themeCr">【个人信息认证红利】</span></div>
                <ul class="msg_list">
                    <li>
                        <img src="{{ asset('/web/images/n-u-4.png') }}">
                        <div class="titleshow">
                            <h3>银行卡</h3>
                            <p>方便您在游戏中通过银行卡和支付宝进行存取款业务的操作</p>
                        </div>
                        <button class="fr modify modifypre">立即绑定</button>
                    </li>
                    <li>
                        <img src="{{ asset('/web/images/n-u-6.png') }}">
                        <div class="titleshow">
                            <h3>安全验证</h3>
                            <p>用于保障您的账户和资金安全，需要确认您的联系方式与认证信息</p>
                        </div>
                        <button class="fr modify modifypre">立即验证</button>
                    </li>
                    <li>
                        <img src="{{ asset('/web/images/n-u-41.png') }}">
                        <div class="titleshow">
                            <h3>会员首次存款</h3>
                            <p>新会员第一次存款可享受最高58%的存款返利</p>
                        </div>
                        <button class="fr modify modifypre">立即付款</button>
                    </li>
                </ul>
                <div class="register_morestep">想先逛逛，稍后再进行认证    <a href="{{ route('web.index') }}">返回首页</a>   或  <a href="userCenter.html"> 进入个人中心</a></div>
            </div>

            @include('web.layouts.hot_act')
        </div>
    </div>
@endsection