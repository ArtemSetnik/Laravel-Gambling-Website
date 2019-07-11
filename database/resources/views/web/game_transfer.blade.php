<html>
<head>
    <meta charset="UTF-8">
    <title>{{ $_system_config->site_title or 'motoo' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="{{ $_system_config->keyword }}">
    <script src="{{ asset('/web/js/jquery-2.1.3.min.js') }}"></script>
    <script src="{{ asset('/web/layer/layer.js') }}"></script>
    <style>
        body {
            background: #000;
        }
    </style>
</head>
<body>
<p style="display: none" id="uri">{{ $str }}</p>
<script>
    (function ($) {
        $(function () {
            layer.open({
                type: 1,
                title: '额度转换(网站主账户额度转入游戏平台)',
                closeBtn: 0,
                shadeClose: false,
                skin: 'yourclass',
                area: ['400px', '150px'],
                btn: ['确定转入游戏平台','无需转换直接进入游戏'],
                content: '<form action="{{ route('transfer_all') }}" id="transfer_form" method="post"><div style="margin:15px;text-align:center">' +
                    '{!! csrf_field() !!}'+
                '<input type="hidden" name="api_code" value="{{ $api_code }}">'+
                '<input type="hidden" name="str" value="{{ $str }}">'+
                '<p>即将转入【{{ $api_code }}】&nbsp; &nbsp;<input type="number" name="amount" style="width:100px;" value="{{ $_member->money }}" >&nbsp; &nbsp;额度</p>' +
                '</div></form>',
                yes: function (index, layer) {
                    //按钮【按钮一】的回调
                    $('#transfer_form').submit();
                },
                btn2: function (index, layer) {
                    //按钮【按钮二】的回调
                    var uri = $('#uri').html().replace(/&amp;/g,'\&');
                    location.href=uri;
                    //return false 开启该代码可禁止点击该按钮关闭
                },
                {{--btn3: function (index, layer) {--}}
                        {{--//按钮【按钮二】的回调--}}
                        {{--//return false 开启该代码可禁止点击该按钮关闭--}}
                        {{--},--}}
                cancel: function () {
                    //右上角关闭回调

                    //return false 开启该代码可禁止点击该按钮关闭
                }
            });
        })
    })(jQuery);
</script>

</body>
</html>