@extends('wap.layouts.main')
@section('content')
    @include('wap.layouts.header')
    <link type="text/css" rel="stylesheet" href="{{ asset('/wap/css/hotgame.css') }}">
    <div class="m_container">
        <div class="m_body">
            <div class="container-fluid gm_main">
                {{--<div class="head">--}}
                {{--<a class="f_l" href="#u_nav"><img src="{{ asset('/wap/images/user_menu.png') }}" alt=""></a>--}}
                {{--<span>在线充值</span>--}}
                {{--<a class="f_r" href="#type"><img src="{{ asset('/wap/images/user_game.png') }}" alt=""></a>--}}
                {{--</div>--}}
                {{--@include('wap.layouts.aside')--}}
                {{--<div id="type" style="display: none">--}}
                {{--<ul class="g_type">--}}
                {{--<li>--}}
                {{--@include('wap.layouts.aside_game_list')--}}
                {{--</li>--}}
                {{--</ul>--}}
                {{--</div>--}}
                <div class="m_member-title clear textCenter">
                    <a class="pull-left" href="javascript:history.go(-1);">&nbsp;{{ __('mb.Back') }}</a>
                   {{ __('mb.'.$type) }} 
                </div>
                <div class="m_userCenter-line"></div>

                <img src="{{ asset('/wap/images/hotgame_'.$type.'.png') }}" id="game_png" alt="" style="max-width: 100%;margin-top: 8px;">
                <div id="input_container">
                    <div class="input-group input_custom">
                        <img class="place_img" src="{{asset('/web/images/poker/login.png')}}">
                        <input type="text" placeholder="Login :" class="input_element" id="game_id1" value="">
                    </div>
                    <br>
                    <div class="input-group input_custom">
                        <img class="place_img" src="{{asset('/web/images/poker/pass.png')}}">
                        <input type="text" placeholder="Password :" class="input_element" id="game_pass1" value="">
                    </div>
                    <br>
                    <div class="input-group input_balance">
                        <img class="place_img" src="{{asset('/web/images/poker/balance.png')}}">
                        <input type="text" placeholder="Balance :" id="balance1" class="balance" value="">

                        <img src="{{asset('/web/images/poker/deposite_bt.png')}}" style="margin-left: 20px" onclick="deposit(1)">
                        <img src="{{asset('/web/images/poker/withdrawl_bt.png')}}" style="margin-left: 10px" onclick="withdraw(1)">
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div style="display: inline-flex">
                        <img src="{{asset('/web/images/poker/android_bt.png')}}">
                        <img src="{{asset('/web/images/poker/ios_bt.png')}}" style="margin-left: 40px">

                    </div>
                </div>

                <div class="wrap">
                   
                   <!--  @if($_system_config->is_bankpay_on == 0)
                    <div align="center" class="pay-style">
                         银行卡转账
                        <a href="{{ route('wap.bank_pay') }}">
                            <img src="{{ asset('/wap/images/m_card.png') }}" class="pic"/>
                            <div class="text">银行卡转账</div>
                        </a>
                    </div>
                    @endif
                    @if($_system_config->is_wechat_on == 0)
                        <div align="center" class="pay-style">
                            微信转账
                            <a href="{{ route('wap.weixin_pay') }}">
                                <img src="{{ asset('/wap/images/m_weixinpay.png') }}" class="pic"/>
                                <div class="text">微信转账</div>
                            </a>
                        </div>
                    @endif -->
                   <!--  @if($_system_config->is_alipay_on == 0)
                        <div align="center" class="pay-style">
                             支付宝转账
                            <a href="{{ route('wap.ali_pay') }}">
                                <img src="{{ asset('/wap/images/m_alipay.png') }}" class="pic"/>
                                <div class="text">支付宝转账</div>
                            </a>
                        </div>
                    @endif -->
                       <!--  @if($_system_config->is_qq_on == 0)
                            <div align="center" class="pay-style">
                             支付宝转账
                                <a href="{{ route('wap.qq_pay') }}">
                                    <img src="{{ asset('/wap/images/m_scan.png') }}" class="pic"/>
                                    <div class="text">QQ扫码转账</div>
                                </a>
                            </div>
                        @endif -->
                </div>
            </div>
        </div>
    </div>
@endsection