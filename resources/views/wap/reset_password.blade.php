@extends('wap.layouts.main')
@section('content')
    @include('wap.layouts.header')
    <div class="m_container">
        <div class="m_body">
            <div class="container-fluid gm_main">
                {{--<div class="head">--}}
                    {{--<a class="f_l" href="#u_nav"><img src="{{ asset('/wap/images/user_menu.png') }}" alt=""></a>--}}
                    {{--<span>修改密码</span>--}}
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
						{{__('mb.Change_Password')}}
                </div>
                <div class="m_userCenter-line"></div>
                <div class="userInfo setCard">
                    <form action="{{ route('wap.reset_login_password') }}" method="post" name="form1">
                        <dl class="set_card">
                            <dt>{{__('mb.Change_Login_Password')}}</dt>
                            <dd>
                                <div class="pull-left">
                                    {{__('mb.Old_Password')}}
                                </div>
                                <input class="pull-left" type="password" placeholder="" name="old_password"
                                       id="oldpass">
                            </dd>
                            <dd>
                                <div class="pull-left">
                                    {{__('mb.New_Password')}}
                                </div>
                                <input class="pull-left" type="password" placeholder="" name="password" id="newpass">
                            </dd>
                            <dd>
                                <div class="pull-left">
                                    {{__('mb.Confirm_new_Password')}}
                                </div>
                                <input class="pull-left" type="password" placeholder="" name="password_confirmation"
                                       id="newpass2">
                            </dd>
                            <dd>
                                <input type="button" value="{{__('mb.Confirm_Change')}}" class="submit_btn ajax-submit-btn">
                            </dd>
                        </dl>
                    </form>
                    <form action="{{ route('wap.reset_qk_password') }}" method="post" name="form1">
                        <dl class="set_card">
                            <dt>{{__('mb.Change_Pin')}}</dt>
                            <dd>
                                <div class="pull-left">
                                    {{__('mb.Old_Pin')}}
                                </div>
                                <input class="pull-left" type="password" minlength="6" maxlength="6" placeholder="" name="old_password"
                                       id="oldmoneypass">
                            </dd>
                            <dd>
                                <div class="pull-left">
                                    {{__('mb.New_Pin')}}
                                </div>
                                <input class="pull-left" type="password" minlength="6" maxlength="6" placeholder="" name="password"
                                       id="newmoneypass">
                            </dd>
                            <dd>
                                <div class="pull-left">
                                    {{__('mb.Confirm_Pin')}}
                                </div>
                                <input class="pull-left" type="password" minlength="6" maxlength="6" placeholder="" name="password_confirmation"
                                       id="newmoneypass2">
                            </dd>
                            <dd>
                                <input type="button" value="{{__('mb.Confirm_Change')}}" class="submit_btn ajax-submit-btn">
                            </dd>
                        </dl>
                    </form>
                </div>
                <div class="wrap">
                    <div class="info">
                        <p><strong>{{__('mb.Forget_Password')}}</strong></p>
                        <p>{{__('mb.Contact_Customer_Service')}}</p>
                        <p>{{__('mb.In_order_to_ensure_the_security_of_funds_We_need_to_scan_your_ID_to_verify_your_identity')}}</p>
						<p>{!! str_replace('@',$_system_config->site_name,__('mb.Your_Privacy_is_our_Companys_Priority')) !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection