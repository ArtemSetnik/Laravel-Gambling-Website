<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $_system_config->site_title or 'motoo' }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="{{ $_system_config->keyword }}">
    <script src="{{ asset('/web/js/jquery-2.1.3.min.js') }}"></script>
    <style>
        .maintain{width: 1220px;margin: 10% auto 0;font-family: "微软雅黑"}
        .tipsleft_show{width: 315px;float: left;margin-left: 100px}
        .tipsright_show{margin-left: 415px;background: url('{{ asset('/web/images/tipsRight.png') }}') no-repeat center top;height: 556px;
            text-align: center;}
        .tipsright_show h1{font-size: 32px;color: #3e4a7c;padding-top: 140px;}
        .tipsright_show .dot{font-size: 100px;color: #3e4a7c;margin-top: -60px}
    </style>
</head>
<body>
<div class="maintain">
    <div class="tipsleft_show"><img src="{{ asset('/web/images/tipsLeft.png') }}"></div>
    <div class="tipsright_show">
        <h1>{{ $str or '网站维护中' }}</h1>
        <div class="dot">...</div>
        {{--<p>可能原因：</p>--}}
        {{--<p>网络信号弱</p>--}}
        {{--<p>找不到请求页面</p>--}}
    </div>
</div>

<script>
    (function ($) {
        $(function () {
            var winWidth=$(document).width();
            var winHeight=$(document).height();
            $('html,body').css({
                'background':'#b8dce8',
                'width':winWidth,
                'height':winHeight,
                'overflow':'hidden'
            })
        })
    })(jQuery)
</script>
</body>
</html>