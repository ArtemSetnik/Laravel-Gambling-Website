<!DOCTYPE html>
<html>
<head>
    <title>{{ $page_title or '游戏列表' }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link type="text/css" rel="stylesheet" href="{{ asset('/wap/css/commonCss.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('/wap/css/ssc.css') }}"/>
    <script type="text/javascript" src="{{ asset('/wap/js/jquery.min.js') }}"></script>
    <style type="text/css">
        body {
            padding: 0;
            margin: 0;
            background-color: #fff;
        }

        .gamelist {
            padding: 0;
            margin: 15px 5px 5px 5px;
        }

        .gamelist a {
            text-decoration: none
        }

        .gamelist p {
            color: #3088ac;
            margin: 0 0 5px 0;
            font-size: 12px;
            border: 1px solid #3088ac;
            padding: 1px 0;
            border-radius: 4px;
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap;
        }

        .gamelist li {
            width: 31%;
            margin: 1%;
            padding: 2%;
            text-align: center;
            float: left;
            list-style: none;
        }

        .gamelist li img {
            max-width: 100%;
        }

        .gamelist a.start_game {
            color: #fff;
            background-color: #008ed6;
            display: block;
            padding: 2px 0;
            margin: 0 auto;
            font-size: 12px;
            text-decoration: none;;
            border-radius: 4px;
        }

        .top {
            padding: 5px 0px;
            height: 22px;
            overflow: hidden;
            position: fixed;
            width: 100%;
            background-color: #F66;
            top: 0;
        }

        .top button {
            margin-left: 6px;
            background-color: #fff;
            border: solid 1px #ccc;
            color: #f60;
        }
    </style>
    <script type="text/javascript">
        $(function () {
            $('.gamelist li').each(function (index, el) {
                //$(this).height($(this).width());
            });
        });
    </script>
</head>
<body class="gm_main m_bac">
@include('wap.layouts.header')
<div class="m_container">
    <div class="m_body">
        @yield('content')
    </div>
</div>
@include('wap.layouts.footer')
</body>
</html>