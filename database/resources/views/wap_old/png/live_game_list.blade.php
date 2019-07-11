<!DOCTYPE html>
<html>
<head>
    <title>PNG 真人游戏</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link type="text/css" rel="stylesheet" href="{{ asset('/wap/css/ssc.css') }}"/>
    <script type="text/javascript" src="{{ asset('/wap/js/jquery.min.js') }}"></script>
    <style type="text/css">
        body{ padding: 0; margin: 0; background-color: #fff; }
        .gamelist{ padding: 0; margin: 35px 5px 5px 5px; }
        .gamelist p { color: #3088ac; margin: 0 0 5px 0; font-size: 12px;border: 1px solid #3088ac;padding: 1px 0;border-radius: 4px;text-overflow:ellipsis;overflow:hidden;white-space:nowrap;}
        .gamelist li { width: 27%; margin: 1%; padding: 2%; text-align: center; float: left; list-style: none;}
        .gamelist a.start_game { color: #fff; background-color: #008ed6; display: block; padding: 2px  0; margin: 0 auto; font-size: 12px;text-decoration:none;;border-radius: 4px;}
        .top { padding: 5px 0px; height: 22px; overflow: hidden; position: fixed; width: 100%; background-color: #F66; top: 0;}
        .top button{ margin-left: 6px; background-color: #fff; border: solid 1px #ccc; color: #f60; }
    </style>
    <script type="text/javascript">
        $(function(){
            $('.gamelist li').each(function(index, el) {
                //$(this).height($(this).width());
            });
        });
    </script>
</head>
<body class="gm_main">
<div class="head">
    <a class="f_l" href="javascript:history.go(-1)" style="margin-top: 8px"><img src="{{ asset('/wap/images/user_back.png') }}" alt=""></a>
    <span>PNG真人</span>
    <a class="f_r" href="javascript:history.go(-1)" style="visibility: hidden"><img src="{{ asset('/wap/images/user_back.png') }}" alt=""></a>
</div>
<ul class="gamelist clear">
    @foreach($data as $item)
        <?php
        $game_name_arr = (explode('_', $item->gameName));
        ?>
        <li>
            <a href="{{ route('member.play_game') }}?api_name=PT&product_type=3&game_code={{ $item->tcgGameCode }}">
                <img src="http://images.uxgaming.com/TCG_GAME_ICONS/PT/{{ $item->tcgGameCode }}.png" width="80%">
            </a>
            <p>{{ isset($game_name_arr[1])?$game_name_arr[1]:$game_name_arr[0] }}</p>
            <a class="start_game" href="{{ route('member.play_game') }}?api_name=PT&product_type=3&game_code={{ $item->tcgGameCode }}">进入</a>
        </li>
    @endforeach
</ul>
</body>
</html>