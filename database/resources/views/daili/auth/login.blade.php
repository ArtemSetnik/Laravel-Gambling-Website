<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ __('ft.Agent_management_system') }}</title>
    <link rel="stylesheet" href="{{ asset('/node_modules/admin-lte/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ asset("/admin/lib/font-awesome/4.3.0/css/font-awesome.min.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("/admin/lib/ionicons/2.0.1/css/ionicons.min.css") }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/node_modules/admin-lte/dist/css/AdminLTE.min.css') }}">
    <script src="{{ asset('/node_modules/admin-lte/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
    <style>
        body{
            height: auto;
        }
        .login-page{
            background: url("{{ asset('/web/images/login_bg2.png') }}") no-repeat;
            background-size:100% 100%;  
        }
        .login-logo a{
            color: white;
        }
        .login-box-body{
            background: #DBEAF4;
        }
        .yzm-img{
            position: absolute;
            right: 0;
            top: 0;
            height: 34px;
        }
        .yzm-img img{
            max-height: 34px;
        }
    </style>
</head>
<body class="login-page">
@include('admin.layouts.topInfo')
<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>{{ $_system_config->site_name }}</b></a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">{{ __('ft.Agent_management_system') }}</p>
        <form action="{{ route('daili.login.post') }}" method="post">
            {!! csrf_field() !!}
            <div class="form-group has-feedback">
                <input type="text" class="form-control" name="name" placeholder="{{ __('ft.account_number') }}" required title="请输入账号" value="{{ old('name') }}"/>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" name="password" placeholder="{{ __('ft.password') }}" required title="请输入密码"/>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    {{--<div class="checkbox icheck">--}}
                        {{--<label>--}}
                            {{--<input type="checkbox"> Remember Me--}}
                        {{--</label>--}}
                    {{--</div>--}}
                </div>
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('ft.log_in') }}</button>
                </div><!-- /.col -->
            </div>
        </form>
        {{--<a href="javascript:void (0)">忘记密码?</a><br>--}}
    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->
</body>
</html>