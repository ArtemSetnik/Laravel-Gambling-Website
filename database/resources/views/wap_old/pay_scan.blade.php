<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>扫码支付</title>
    <link type="text/css" rel="stylesheet" href="{{ asset('/wap/css/bootstrap.min.css') }}">
    <script src="{{ asset('/web/js/jquery-2.1.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/web/js/base64.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/web/js/jquery.qrcode.js') }}"></script>
    <script type="text/javascript">
        function generateQrcode(url) {
            var options = {
                render: 'image',
                text: url,
                size: 180,
                ecLevel: 'M',
                color: '#222222',
                minVersion: 1,
                quiet: 1,
                mode: 0
            };
            $("#qrcode").empty().qrcode(options);
        }

        $(function(){
            var base64=$('#base64').text();
            generateQrcode(base64);

        })
    </script>
</head>
<body>
<a id="base64" style="display: none">{{ $base64 }}</a>
<div id="qrcode" class="text-center"></div>








</body>
</html>