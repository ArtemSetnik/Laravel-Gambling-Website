@extends('wap.layouts.main')
@section('content')
    @include('wap.layouts.header')
    <div class="m_container">
        <div class="m_body">
            <div class="m_userCenter">
                <div class="m_userCenter-title">会员中心</div>
                <div class="m_userCenter-line"></div>
                <ul class="m_userCenter-list">
                    {{--<li>
                        <a href="{{ route('wap.transfer') }}">
                            <img class="trade-icon" src="{{ asset('/wap/images/m_userCenter-icon1.png') }}" alt="">
                            额度转换
                        </a>
                    </li>--}}
                    <li>
                        <a href="{{ route('wap.recharge') }}">
                            <img class="trade-icon" src="{{ asset('/wap/images/m_userCenter-icon2.png') }}" alt="">
                            在线充值
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('wap.drawing') }}">
                            <img class="trade-icon" src="{{ asset('/wap/images/m_userCenter-icon3.png') }}" alt="">
                            在线取款
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('wap.recharge_record') }}">
                            <img class="trade-icon" src="{{ asset('/wap/images/m_userCenter-icon4.png') }}" alt="">
                            充值记录
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('wap.drawing_record') }}">
                            <img class="trade-icon" src="{{ asset('/wap/images/m_userCenter-icon5.png') }}" alt="">
                            提款记录
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('wap.transfer_record') }}">
                            <img class="trade-icon" src="{{ asset('/wap/images/m_userCenter-icon6.png') }}" alt="">
                            额度转换记录
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('wap.game_record') }}">
                            <img class="trade-icon" src="{{ asset('/wap/images/m_userCenter-icon7.png') }}" alt="">
                            投注记录
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('wap.userinfo') }}">
                            <img class="trade-icon" src="{{ asset('/wap/images/m_userCenter-icon8.png') }}" alt="">
                            会员资料
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('wap.agent') }}">
                            <img class="trade-icon" src="{{ asset('/wap/images/m_userCenter-icon9.png') }}" alt="">
                            代理中心
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('wap.reset_password') }}">
                            <img class="trade-icon" src="{{ asset('/wap/images/m_userCenter-icon10.png') }}" alt="">
                            修改密码
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('wap.msg') }}">
                            <img class="trade-icon" src="{{ asset('/wap/images/m_userCenter-icon10.png') }}" alt="">
                            站内信
                        </a>
                    </li>
                    <li>
                        <a href="{{ $_system_config->service_link }}">
                            <img class="trade-icon" src="{{ asset('/wap/images/m_userCenter-icon11.png') }}" alt="">
                            在线客服
                        </a>
                    </li>
                </ul>

                <a href="javascript:;" class="m_logout" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">登出</a>
                <form id="logout-form" action="{{ route('wap.logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
@endsection