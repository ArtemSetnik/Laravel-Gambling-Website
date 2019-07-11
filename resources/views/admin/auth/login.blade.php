<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $_system_config->site_name }}-后台登录</title>
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
            background: url("{{ asset('/backstage/images/login_bg2.png') }}") no-repeat;
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
        <a href="#"><b>{{ $_system_config->site_name }}<br>管理后台{{trans('words.management_background')}}</b></a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg"></p>
        <form action="{{ route('admin.login.post') }}" method="post">
            {!! csrf_field() !!}
            <div class="form-group has-feedback">
                <input type="email" class="form-control" name="email" placeholder="Email" required title="请输入登录邮箱" value="{{ old('email') }}"/>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" name="password" placeholder="Password" required title="请输入密码"/>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="text" class="form-control" required name="captcha" placeholder=""  title="请输入验证码"/>
                <div class="yzm-img"><a onclick="javascript:re_captcha_re();" ><img src="{{ URL('kit/captcha/1') }}" id="c2c98f0de5a04167a9e427d883690ff11"></a></div>
                <script>
                    function re_captcha_re() {
                        $url = "{{ URL('kit/captcha') }}";
                        $url = $url + "/" + Math.random();
                        document.getElementById('c2c98f0de5a04167a9e427d883690ff11').src=$url;
                    }
                </script>
            </div>
            @if($is_mbk_on)
            <div class="form-group has-feedback">
                <input type="text" class="form-control" required name="mbk" placeholder="请输入密保卡数据" title="请输入密保卡数据">
                <div class="yzm-img"><img src="{{ URL('kit/mbk/1') }}" onclick="this.src = '{{ URL('kit/mbk') }}' +'/'+ Math.floor(Math.random()*10);"></div>
            </div>
            @endif
            <div class="row">
                <div class="col-xs-8">
                    {{--<div class="checkbox icheck">--}}
                         <label style="color: red;font-weight: bold;">
                            {{--<input type="checkbox"> Remember Me--}}
                          {{--   账号：aobet@qq.com <br>
                            密码：123456 --}}
                        </label>
                    {{--</div>--}}
                </div>
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">登录</button>
                </div><!-- /.col -->
            </div>
        </form>
        {{--<a href="javascript:void (0)">忘记密码?</a><br>--}}
    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->
</body>
</html>