@extends('web.layouts.main')
@section('content')
<style type="text/css">
    .line_form .line .tit {
    width: 125px !important;
}
</style>
    <div class="top_margin" style="margin-top: 30px;">
        <div class="container">
            <div class="register_con">
                <div class="top">
                    <a href="javascript:;" class="active" style="width: 100%">{{ __('ft.Account_Information') }}</a>
                    {{--<a href="javascript:;"><span class="num">②</span>填写详细资料</a>--}}
                    {{--<a href="javascript:;"><span class="num">③</span>注册成功</a>--}}
                </div>
                <div class="register_left">
                    <div class="bank_tips">{{ __('ft.Note_If_the_customer_is_found_to_have_multiple_accounts') }}</div>
                    <div class="line_form">
                        <form method="POST" action="{{ route('web.post_register_one') }}">
                            
                            <input type="hidden" name="i_code" value="{{ $i_code }}">
                            <div class="line">
                                <span class="tit">{{ __('ft.Reference_ID') }}</span>
                                <input class="inp" name="t_name" value="">
                            </div>
                            <div class="line">
                                <span class="tit">{{ __('ft.Login_ID') }}</span>
                                {{--<div class="add_form">--}}
                                    {{--<span class="front">tb</span>--}}
                                    <input class="inp" name="name" value="{{ $register_name }}" maxlength="8">
                                {{--</div>--}}
                                <span class="tips"><span class="themeCr">*</span>{{ __('ft.Must_be_6to8_characters_only_letters_numbers') }}</span>
                            </div>
                            <div class="line">
                                <span class="tit">{{ __('ft.Login_Password') }}</span>
                                <input type="password" class="inp" name="password" placeholder="" maxlength="12">
                                <span class="tips"><span class="themeCr">*</span>{{ __('ft.Must_be-6to8_characters') }}</span>
                            </div>
                            <div class="line">
                                <span class="tit">{{ __('ft.Confirm_Password') }}</span>
                                <input type="password" class="inp" name="password_confirmation" maxlength="12">
                                <span class="tips"><span class="themeCr">*</span>{{ __('ft.Must_match_the_login_password') }}</span>
                            </div>
                            <div class="line">
                                <span class="tit">{{ __('ft.Name') }}</span>
                                <input type="text" class="inp" name="real_name">
                                <span class="tips"><span class="themeCr">*</span></span>
                            </div>
                            <div class="line">
                                <span class="tit">{{ __('ft.Withdraw_Pin') }}</span>
                                <input type="password" class="inp" name="qk_pwd" maxlength="6">
                                <span class="tips"><span class="themeCr">*</span>{{ __('ft.Required_6_Digits') }}</span>
                            </div>
                            <div class="line">
                                <span class="tit">{{ __('ft.Verification_code') }}</span>
                                <input type="text" class="inp" name="captcha" maxlength="4">
                                <span class="tips"><span class="themeCr">*</span></span>
                                <div class="yzm-img"><a onclick="javascript:re_captcha_re();" ><img src="{{ URL('kit/captcha/1') }}" id="c2c98f0de5a04167a9e427d883690ff67"></a></div>
                                <script>
                                    function re_captcha_re() {
                                        $url = "{{ URL('kit/captcha') }}";
                                        $url = $url + "/" + Math.random();
                                        document.getElementById('c2c98f0de5a04167a9e427d883690ff67').src=$url;
                                    }
                                </script>
                            </div>
                            <div class="line minline">
                                <span class="tit"></span>
                                <input type="checkbox" class="checkbox" checked="checked" name="check1" value="1">
                                {{ __('ft.In_the_time_as_the_application_is_submitted') }}
                            </div>
                            <div class="line minline">
                                <span class="tit"></span>
                                <input type="checkbox" class="checkbox" checked="checked" name="check2" value="2">
                                {{ __('ft.I_also_accept_all_rules_and_regulations') }}
                            </div>
                            <div class="line">
                                <span class="tit"></span>
                                <a href="javascript:;" class="ajax-submit-without-confirm-btn account_save">{{ __('ft.Confirm') }}</a>
                                <a href="javascript:void(0)" class="account_save">{{ __('ft.fill_in_again') }}</a>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- <div class="register_links">
                    <img src="{{ asset('/web/images/n-reg-bg3a.png') }}">
                </div> -->
            </div>

            @include('web.layouts.hot_act')
        </div>
    </div>
@endsection