@extends('wap.layouts.main')
@section('content')
    @include('wap.layouts.header')
    <div class="m_container">
        <div class="m_body">
            <div class="m_userCenter">
                <div class="m_userCenter-title">{{ __('mb.Member_Centre') }}</div>
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
                            {{ __('mb.Online_Deposit') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('wap.drawing') }}">
                            <img class="trade-icon" src="{{ asset('/wap/images/m_userCenter-icon3.png') }}" alt="">
                            {{ __('mb.Online_Withdraw') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('wap.recharge_record') }}">
                            <img class="trade-icon" src="{{ asset('/wap/images/m_userCenter-icon4.png') }}" alt="">
                            {{ __('mb.Deposit_History') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('wap.drawing_record') }}">
                            <img class="trade-icon" src="{{ asset('/wap/images/m_userCenter-icon5.png') }}" alt="">
                            {{ __('mb.Withdraw_History') }}
                        </a>
                    </li>
                   <!--  <li>
                        <a href="{{ route('wap.transfer_record') }}">
                            <img class="trade-icon" src="{{ asset('/wap/images/m_userCenter-icon6.png') }}" alt="">
                           额度转换记录
                        </a>
                    </li> -->
                    <!-- <li>
                        <a href="{{ route('wap.game_record') }}">
                            <img class="trade-icon" src="{{ asset('/wap/images/m_userCenter-icon7.png') }}" alt="">
                            投注记录
                        </a>
                    </li> -->
					<!--
                    <li>
                        <a href="{{ route('wap.userinfo') }}">
                            <img class="trade-icon" src="{{ asset('/wap/images/m_userCenter-icon8.png') }}" alt="">
                           {{ __('mb.Member_Profile') }} 
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('wap.agent') }}">
                            <img class="trade-icon" src="{{ asset('/wap/images/m_userCenter-icon9.png') }}" alt="">
                            {{ __('mb.Agent_Centre') }} 
                        </a>
                    </li>
					//-->
                    <li>
                        <a href="{{ route('wap.reset_password') }}">
                            <img class="trade-icon" src="{{ asset('/wap/images/m_userCenter-icon10.png') }}" alt="">
                           {{ __('mb.Change_Password') }} 
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('wap.msg') }}">
                            <img class="trade-icon" src="{{ asset('/wap/images/m_userCenter-icon10.png') }}" alt="">
                           {{ __('mb.Message') }} 
                        </a>
                    </li>
                    <li>
                        <a href="{{ $_system_config->service_link }}">
                            <img class="trade-icon" src="{{ asset('/wap/images/m_userCenter-icon11.png') }}" alt="">
                          {{ __('mb.Customer_Service') }}  
                        </a>
                    </li>
                </ul>

                <a href="javascript:;" class="m_logout" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{ __('mb.Log_Out') }}</a>
                <form id="logout-form" action="{{ route('wap.logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
@endsection