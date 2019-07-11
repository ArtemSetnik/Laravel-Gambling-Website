<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>{{ $_system_config->site_title or '标题' }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/wap/css/bootstrap.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/wap/css/main.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/wap/css/font-awesome.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/wap/css/member.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/wap/css/ssc.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/wap/css/mmenu.all.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/wap/css/commonCss.css') }}">
    <script type="text/javascript" src="{{ asset('/wap/js/jquery.js') }}"></script>
    @yield('after.css')
</head>
<body class="m_bac">
@yield('content')
@include('wap.layouts.footer')
@yield('before.js')
<script type="text/javascript" src="{{ asset('/wap/js/touchslide.js') }}"></script>
<script type="text/javascript" src="{{ asset('/wap/js/marquee.js') }}"></script>
<script type="text/javascript" src="{{ asset('/wap/js/layer.js') }}"></script>
<script type="text/javascript" src="{{ asset('/wap/js/base.js') }}"></script>
<script type="text/javascript" src="{{ asset('/wap/js/wap_ajax-submit-form.js') }}"></script>
<script type="text/javascript">
    TouchSlide({
        slideCell: "#slide",
        mainCell: ".bd",
        titCell: ".hd",
        effect: "leftLoop",
        autoPage: true,
        autoPlay: true
    });
    $("#news").marquee({duration: 10000});
    var info = function () {
        lay_msg('请登录后操作！', null);
    };
    var g_login = function () {
        var e = function () {
            location.replace("/guest.php");
        };
        lay_msg('试玩账号，登录成功！', e);
    };
    var onUrl = function (t) {
        t = Number(t) > 0 ? Number(t) : 1;
        location.replace('/route.php?t=' + t);
    };
</script>
@yield('after.js')
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
</body>
</html>