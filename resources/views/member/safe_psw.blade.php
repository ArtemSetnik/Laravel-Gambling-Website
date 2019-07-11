@extends('member.layouts.main')
@section('content')
    <div id="layout-main-area">
        <div id="main-menu">
            <div class="menu-area">
                <ul class="list-group">
                    <li class="list-group-item member-info">
                        <a href="{{ route('member.userCenter') }}">会员资料</a>
                    </li>
                    <li class="list-group-item member-password active">
                        <a href="{{ route('member.login_psw') }}">修改密码</a>
                    </li>
                </ul>
            </div>
        </div>

        <div id="main-container">
            <div class="module-top">
                <div class="top-menu-area">
                    <a href="{{ route('member.login_psw') }}">修改登录密码</a>
                    <a href="{{ route('member.safe_psw') }}" class="active">修改取款密码</a>
                </div>
            </div>
            <div class="module-main" style="height: 630px; overflow: auto;margin-top:20px">
                <form action="{{ route('member.update_qk_password') }}" method="post"
                      class="form-horizontal">
                    <div class="form-group">
                        <label class="col-xs-3 control-label">旧密码：</label>
                        <div class="col-xs-6">
                            <input name="old_password" type="password" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">新密码：</label>
                        <div class="col-xs-6">
                            <input name="password" type="password" class="form-control">
                        </div>
                        <div class="col-xs-3 info">
                            * 6个纯数字
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">确认新密码：</label>
                        <div class="col-xs-6">
                            <input id="mdl-37_repassword" name="password_confirmation" type="password"
                                   class="form-control">
                        </div>
                        <div class="col-xs-3 info">
                            * 6个纯数字
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label"></label>
                        <div class="col-xs-6">
                            <button type="button" class="btn btn-primary form-control ajax-submit-btn">提交</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
