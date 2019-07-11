@extends('web.layouts.main')
@section('content')
<style type="text/css">
    .line_form .line .tit {
    width: 125px !important;
}
</style>
    <div class="top_margin">
        <div class="container">
            <div class="register_con login_con">
                <div class="top">
                    <a href="javascript:;" class="active">{{ __('ft.log_in') }}</a>
                    {{--<a href="javascript:;"><span class="num">②</span>填写详细资料</a>--}}
                    {{--<a href="javascript:;"><span class="num">③</span>注册成功</a>--}}
                </div>
                <div class="register_left login_left">
                    <div class="bank_tips">{{ __('ft.log_in_Reminder_Sign_is_required') }}</div>
                    <div class="line_form">
                        <form method="POST" action="{{ route('member.login.post') }}">
                            <div class="line">
                                <span class="tit">{{ __('ft.Login_account') }}</span>
                                {{--<div class="add_form">--}}
                                    {{--<span class="front">tb</span>--}}
                                    <input class="username inp" type="text" placeholder="{{ __('ft.please_enter_user_name') }}" required name="name">
                                {{--</div>--}}
                                <span class="tips"><span class="themeCr">*</span>{{ __('ft.Must_be_7_10_characters') }}</span>
                            </div>
                            <div class="line">
                                <span class="tit">{{ __('ft.Login_Password') }}</span>
                                <input class="psw inp" type="password" placeholder="{{ __('ft.Please_enter_your_password') }}" required name="password">
                                <span class="tips"><span class="themeCr">*</span>{{ __('ft.6_12_characters') }}</span>
                            </div>
                            <div class="line">
                                <span class="tit">{{ __('ft.Verification_code') }}</span>
                                <input class="psw inp" type="text" placeholder="{{ __('ft.please_enter_verification_code') }}" required name="captcha">
                                <div class="yzm-img"><a onclick="javascript:re_captcha_re();" ><img src="{{ URL('kit/captcha/1') }}" id="c2c98f0de5a04167a9e427d883690ff11"></a></div>
                                <script>
                                    function re_captcha_re() {
                                        $url = "{{ URL('kit/captcha') }}";
                                        $url = $url + "/" + Math.random();
                                        document.getElementById('c2c98f0de5a04167a9e427d883690ff11').src=$url;
                                    }
                                </script>
                            </div>
                            {{--<div class="line">--}}
                                {{--<span class="tit">确认密码</span>--}}
                                {{--<input type="password" class="inp" name="password_confirmation">--}}
                                {{--<span class="tips"><span class="themeCr">*</span>必须与登录密码一致</span>--}}
                            {{--</div>--}}
                            {{--<div class="line minline">--}}
                                {{--<span class="tit"></span>--}}
                                {{--<input type="checkbox" class="checkbox" checked="checked" name="check1" value="1">--}}
                                {{--提呈申请的同时，本人已超过合法年龄以及本人在此网站的所有活动幷没有抵触本人所身在的国家所管辖的法律。--}}
                            {{--</div>--}}
                            {{--<div class="line minline">--}}
                                {{--<span class="tit"></span>--}}
                                {{--<input type="checkbox" class="checkbox" checked="checked" name="check2" value="2">--}}
                                {{--本人也接受在此项申请下有关的所有规则与条例以及隐私声明。--}}
                            {{--</div>--}}
                            <div class="line">
                                <span class="tit"></span>
                                <a href="javascript:;" class="ajax-submit-without-confirm-btn account_save">{{ __('ft.determine') }}</a>
                                {{--<a href="javascript:void(0)" class="account_save">重新填写</a>--}}
                            </div>
                        </form>
                    </div>
                </div>
                {{--<div class="register_links">--}}
                    {{--<img src="{{ asset('/web/images/n-reg-bg3a.png') }}">--}}
                {{--</div>--}}
            </div>

            @include('web.layouts.hot_act')
        </div>
    </div>
@endsection