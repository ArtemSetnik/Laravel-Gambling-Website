@extends('member.layouts.main')
@section('content')
    <div id="layout-main-area">
        <div id="main-menu">
            <div class="menu-area">
                <ul class="list-group">
                    <li class="list-group-item member-info">
                        <a href="{{ route('member.userCenter') }}">{{ __('ft.Member_Data') }}</a>
                    </li>
                    <li class="list-group-item member-password active">
                        <a href="{{ route('member.login_psw') }}">{{ __('ft.Change_Password') }}</a>
                    </li>
                </ul>
            </div>
        </div>

        <div id="main-container">
            <div class="module-top">
                <div class="top-menu-area">
                    <a href="{{ route('member.login_psw') }}" class="active">{{ __('ft.Modify_Password') }}</a>
                    <a href="{{ route('member.safe_psw') }}">{{ __('ft.Modify_the_withdrawal_password') }}</a>
                </div>
            </div>
            <div class="module-main" style="height: 630px; overflow: auto;margin-top:20px">
                <form action="{{ route('member.update_login_password') }}" method="post"
                      class="form-horizontal">
                    <div class="form-group">
                        <label class="col-xs-3 control-label">{{ __('ft.Old_Password') }}：</label>
                        <div class="col-xs-6">
                            <input name="old_password" type="password" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">{{ __('ft.New_Password') }}：</label>
                        <div class="col-xs-6">
                            <input name="password" type="password" class="form-control">
                        </div>
                        <div class="col-xs-3 info">
                             {{ __('ft.6_12Regular_Character') }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">{{ __('ft.Confirm_the_new_password') }}：</label>
                        <div class="col-xs-6">
                            <input id="mdl-37_repassword" name="password_confirmation" type="password"
                                   class="form-control">
                        </div>
                        <div class="col-xs-3 info">
                             {{ __('ft.6_12Regular_Character') }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label"></label>
                        <div class="col-xs-6">
                            <button type="button" class="btn btn-primary form-control ajax-submit-btn">{{ __('ft.Submit') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
