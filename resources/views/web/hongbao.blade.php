<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $_system_config->site_title or 'motoo' }}</title>
    <link rel="stylesheet" href="{{ asset('/web') }}/css/yk_modal.css">
    <script src="{{ asset('/web') }}/js/jquery-2.1.3.min.js"></script>
    <script src="{{ asset('/web') }}/js/yk_modal.js"></script>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        body {
            position: relative;
        }

        img {
            display: block;
        }

        .hongbao_container {
            /*position: fixed;*/
            /*left: 0;*/
            /*top: 0;*/
            /*right: 0;*/
            /*bottom: 0;*/
            /*z-index: 99;*/
            overflow: hidden;
        }

        .hongbao_container img {
            position: fixed;
            top: -100px;
            z-index: 999;
            cursor: pointer;
        }
        .yk_modal-hd,.yk_modal-ft{
            display: none;
        }
        .yk_modal .yk_modal-container{
            background: transparent;
        }
        .yk_modal .yk_modal-content{
            overflow-y: hidden;
        }
        .hb_content{
            width: 300px;
            height: 215px;
            position: absolute;
            left: 50%;
            top: 50%;
            margin-left: -75px;
            margin-top: -105px;
        }
        .hb_content .hb_close{
            display: block;
            width: 48px;
            height: 48px;
            text-align: center;
            line-height: 45px;
            background: #FFF;
            color: #FF0000;
            position: absolute;
            right: 52px;
            top: -14px;
            border-radius: 50%;
            font-weight: bold;
            font-size: 42px;
            border: solid 2px #FF0000;
            cursor: pointer;
        }

        .hb_content img{
            margin: 0 auto;
        }
        .hb_content p{
            font-size: 18px;
            font-weight: 600;
            color: yellow;
            text-align: center;
        }

        li{list-style:none;}
        body{color:#FFF;}

        .cenbox{width:1000px; margin:auto;}
        .hongbao img{position:fixed; z-index:9990; cursor:pointer;}
        .banner{height:720px; background-image:url({{ asset('/web') }}/images/hb/banner.jpg); background-repeat:no-repeat; background-position:center center; position:relative;}
        .banner marquee{width:400px; height:200px; position:absolute; left:50%; margin-left:-200px; bottom:173px; overflow:hidden;}
        .banner ul li{padding-top:5px; padding-bottom:5px; font-size:16px;}
        .banner ul li small{font-size:14px; margin-right:20px;}
        .banner ul li span{color:#00FF00; margin-right:20px;}
        .banner ul li strong{color:#FFFF00;}
        .main1{height:100%; background-image:url({{ asset('/web') }}/images/hb/big_bg.jpg); background-repeat:repeat-y; background-position:center top; padding-top:40px; padding-bottom:40px;}
        .main1 table{text-align:center; background-color:#990000;}
        .main1 table td{padding:10px;}
        .main1 table tr:first-child td{font-weight:bold; background-color:#FFFF00; color:#FF0000; font-size:24px;}
        .main1 table tr td{background-color:#FF0000; font-size:18px;}
        .footbox{background-color:#670002; padding-top:40px; padding-bottom:40px;}
        .footbox h1{text-align:center; font-size:24px; color:#FFCC00;}
        .footbox p{padding-top:15px; color:#FFFF00;}
    </style>
</head>
<body>
<div class="hongbao_container"></div>
<div id="yk_modal" class="yk_modal">
    <div class="yk_modal-container">
        <!--<a data-close="close" href="javascript:;" class="yk_modal-close"></a>-->
        <!--<div class="yk_modal-hd" style="display: none"></div>-->
        <div class="yk_modal-content"></div>
        <!--<div class="yk_modal-ft" style="display: none">-->
        <!--<a href="javascript:;" class="yk_btn-sure">确定</a>-->
        <!--</div>-->
    </div>
</div>
<div class="yk_backdrop"></div>

<div class="banner">
    <marquee direction="up" scrollamount="4">
        <ul id="scrollobj">
            <li><small>{{ date('Y-m-d H:i', strtotime('-3 minute')) }}:18</small><span>1047s***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 26.00{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-3 minute')) }}:11</small><span>lsr88***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 14.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-3 minute')) }}:07</small><span>wi928***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 6.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-3 minute')) }}:25</small><span>1047s***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 88.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-3 minute')) }}:52</small><span>1047s***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 256.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-3 minute')) }}:30</small><span>wi928***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 8.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-3 minute')) }}:25</small><span>y7311***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 23.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-3 minute')) }}:49</small><span>lf579***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 36.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-3 minute')) }}:29</small><span>cgfk8***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 76.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-3 minute')) }}:56</small><span>zv811***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 83.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-3 minute')) }}:48</small><span>zv811***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 6366.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-3 minute')) }}:02</small><span>ra958***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 33.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-3 minute')) }}:17</small><span>qq567***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 555.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-3 minute')) }}:40</small><span>zsi41***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 58.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-3 minute')) }}:09</small><span>cgfk8***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 344.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-3 minute')) }}:40</small><span>lxddu***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 29.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-3 minute')) }}:50</small><span>y7311***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 444.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-3 minute')) }}:29</small><span>lsr88***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 384.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-3 minute')) }}:25</small><span>36615***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 122.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-3 minute')) }}:33</small><span>qq567***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 41.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-3 minute')) }}:25</small><span>lxddu***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 233.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-3 minute')) }}:15</small><span>lsr88***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 222.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-3 minute')) }}:12</small><span>lf579***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 77.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-3 minute')) }}:38</small><span>36615***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 88.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-3 minute')) }}:27</small><span>1047s***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 3777.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-3 minute')) }}:56</small><span>lsr88***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 177.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-3 minute')) }}:44</small><span>lf579***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 344.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-3 minute')) }}:21</small><span>zv811***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 677.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-3 minute')) }}:33</small><span>zcx17***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 111.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-3 minute')) }}:48</small><span>wdr60***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 66.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-3 minute')) }}:16</small><span>lf579***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 566.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-3 minute')) }}:37</small><span>qq567***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 25.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-3 minute')) }}:14</small><span>36615***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 453.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-3 minute')) }}:19</small><span>zcx17***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 64.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-3 minute')) }}:39</small><span>zsi41***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 222.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-3 minute')) }}:08</small><span>lsr88***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 73.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-3 minute')) }}:08</small><span>zsi41***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 93.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-3 minute')) }}:59</small><span>cgfk8***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 54.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-3 minute')) }}:43</small><span>cgfk8***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 355.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-3 minute')) }}:15</small><span>js289***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 188.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-3 minute')) }}:32</small><span>cgfk8***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 152.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-3 minute')) }}:29</small><span>ra958***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 77.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-3 minute')) }}:10</small><span>1047s***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 9.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-3 minute')) }}:00</small><span>wdr60***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 321.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:41</small><span>zv811***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 178.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:08</small><span>36615***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 152.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:59</small><span>qq567***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 2.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:44</small><span>1047s***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 32.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:17</small><span>js289***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 7.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:11</small><span>zsi41***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 244.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:09</small><span>qq567***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 42.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:54</small><span>wi928***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 94.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:46</small><span>zv811***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 432.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:20</small><span>qq567***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 22.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:28</small><span>lxddu***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 58.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:59</small><span>lsr88***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 266.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:30</small><span>wi928***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 162.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:15</small><span>y7311***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 93.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:49</small><span>zsi41***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 12.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:22</small><span>zsi41***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 57.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:37</small><span>zsi41***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 21.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:21</small><span>wi928***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 47.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:16</small><span>lf579***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 999.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:58</small><span>wi928***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 105.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:38</small><span>wi928***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 63.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:12</small><span>1047s***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 95.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:45</small><span>js289***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 5.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:29</small><span>zv811***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 2888.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:32</small><span>lsr88***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 422.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:55</small><span>zsi41***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 56.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:14</small><span>wi928***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 92.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:53</small><span>1047s***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 77.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:54</small><span>wi928***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 37.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:55</small><span>ra958***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 666.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:20</small><span>wdr60***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 92.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:15</small><span>lxddu***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 233.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:21</small><span>lf579***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 894.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:10</small><span>lsr88***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 44.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:41</small><span>js289***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 233.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:32</small><span>1047s***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 854.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:48</small><span>lsr88***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 331.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:24</small><span>36615***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 56.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:11</small><span>lf579***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 1223.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:38</small><span>wi928***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 92.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:23</small><span>cgfk8***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 334.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:46</small><span>wdr60***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 1231.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:29</small><span>wi928***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 299.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:16</small><span>cgfk8***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 44.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:51</small><span>lxddu***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 321.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:18</small><span>ra958***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 84.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:17</small><span>36615***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 36.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:21</small><span>zcx17***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 62.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:42</small><span>qq567***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 234.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:21</small><span>qq567***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 45.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:44</small><span>zsi41***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 12.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:29</small><span>cgfk8***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 43.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:04</small><span>36615***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 88.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:48</small><span>cgfk8***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 64.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-2 minute')) }}:41</small><span>wdr60***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 992.{{ __('ft.Yuan_red_envelope') }}</strong></li>

            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:18</small><span>1047s***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 26.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:11</small><span>lsr88***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 14.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:07</small><span>wi928***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 6.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:25</small><span>1047s***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 88.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:52</small><span>1047s***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 256.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:30</small><span>wi928***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 8.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:25</small><span>y7311***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 23.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:49</small><span>lf579***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 36.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:29</small><span>cgfk8***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 76.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:56</small><span>zv811***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 83.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:48</small><span>zv811***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 6366.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:02</small><span>ra958***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 33.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:17</small><span>qq567***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 555.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:40</small><span>zsi41***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 58.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:09</small><span>cgfk8***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 344.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:40</small><span>lxddu***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 29.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:50</small><span>y7311***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 444.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:29</small><span>lsr88***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 384.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:25</small><span>36615***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 122.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:33</small><span>qq567***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 41.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:25</small><span>lxddu***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 233.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:15</small><span>lsr88***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 222.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:12</small><span>lf579***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 77.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:38</small><span>36615***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 88.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:27</small><span>1047s***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 3777.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:56</small><span>lsr88***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 177.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:44</small><span>lf579***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 344.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:21</small><span>zv811***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 677.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:33</small><span>zcx17***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 111.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:48</small><span>wdr60***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 66.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:16</small><span>lf579***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 566.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:37</small><span>qq567***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 25.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:14</small><span>36615***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 453.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:19</small><span>zcx17***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 64.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:39</small><span>zsi41***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 222.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:08</small><span>lsr88***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 73.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:08</small><span>zsi41***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 93.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:59</small><span>cgfk8***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 54.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:43</small><span>cgfk8***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 355.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:15</small><span>js289***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 188.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:32</small><span>cgfk8***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 152.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:29</small><span>ra958***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 77.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:10</small><span>1047s***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 9.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:00</small><span>wdr60***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 321.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:41</small><span>zv811***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 178.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:08</small><span>36615***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 152.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:59</small><span>qq567***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 2.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:44</small><span>1047s***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 32.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:17</small><span>js289***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 7.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:11</small><span>zsi41***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 244.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:09</small><span>qq567***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 42.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:54</small><span>wi928***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 94.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:46</small><span>zv811***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 432.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:20</small><span>qq567***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 22.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:28</small><span>lxddu***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 58.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:59</small><span>lsr88***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 266.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:30</small><span>wi928***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 162.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:15</small><span>y7311***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 93.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:49</small><span>zsi41***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 12.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:22</small><span>zsi41***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 57.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:37</small><span>zsi41***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 21.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:21</small><span>wi928***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 47.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:16</small><span>lf579***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 999.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:58</small><span>wi928***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 105.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:38</small><span>wi928***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 63.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:12</small><span>1047s***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 95.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:45</small><span>js289***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 5.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:29</small><span>zv811***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 2888.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:32</small><span>lsr88***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 422.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:55</small><span>zsi41***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 56.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:14</small><span>wi928***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 92.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:53</small><span>1047s***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 77.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:54</small><span>wi928***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 37.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:55</small><span>ra958***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 666.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:20</small><span>wdr60***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 92.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:15</small><span>lxddu***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 233.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:21</small><span>lf579***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 894.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:10</small><span>lsr88***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 44.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:41</small><span>js289***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 233.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:32</small><span>1047s***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 854.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:48</small><span>lsr88***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 331.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:24</small><span>36615***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 56.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:11</small><span>lf579***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 1223.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:38</small><span>wi928***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 92.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:23</small><span>cgfk8***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 334.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:46</small><span>wdr60***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 1231.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:29</small><span>wi928***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 299.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:16</small><span>cgfk8***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 44.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:51</small><span>lxddu***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 321.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:18</small><span>ra958***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 84.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:17</small><span>36615***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 36.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:21</small><span>zcx17***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 62.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:42</small><span>qq567***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 234.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:21</small><span>qq567***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 45.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:44</small><span>zsi41***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 12.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:29</small><span>cgfk8***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 43.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:04</small><span>36615***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 88.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:48</small><span>cgfk8***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 64.{{ __('ft.Yuan_red_envelope') }}</strong></li>
            <li><small>{{ date('Y-m-d H:i', strtotime('-1 minute')) }}:41</small><span>wdr60***</span>{{ __('ft.Grab') }} {{ __('ft.Yuan') }}<strong> 992.{{ __('ft.Yuan_red_envelope') }}</strong></li>
        </ul>
    </marquee>
</div>

<div class="main1">
    <div class="cenbox">
        <table width="100%" border="0" cellpadding="0" cellspacing="1">
            <tr>
                <td>{{ __('ft.Single_deposit') }}</td>
                <td>{{ __('ft.Number_of_times') }}</td>
                <td>{{ __('ft.Red_envelope_ratio') }}</td>
                <td>{{ __('ft.Withdrawal_request') }}</td>
                <td>{{ __('ft.Payout_method') }}</td>
            </tr>
            @foreach($red as $k => $v)
            <tr>
                <td>{{ (int)$v->min_amount }}-{{ (int)$v->max_amount }}</td>
                <td>{{ $v->times }}</td>
                <td>{{ $v->min_rate }}%-{{ $v->max_rate }}%</td>
                @if($k == 0)
                <td rowspan="9">1{{ __('ft.Double_water') }}</td>
                <td rowspan="9">{{ __('ft.That_is_to_grab_the_delivery') }}</td>
                    @endif
            </tr>
            @endforeach
        </table>
    </div>
</div>


<div class="footbox">
    <div class="cenbox">
        <h1>{{ __('ft.Rules_and_terms') }}</h1>
        <p>{{ __('ft.1_The_red_envelope_amount_is_automatically_matched_according_to_the_deposit') }}</p>
        <p>{{ __('ft.2_the_red_envelope_is_only_1_times_running_water') }}</p>
        <p>{{ __('ft.3_grab_red_envelope') }}</p>
        <p>{{ __('ft.4_Partial_arbitrage_violation_of_company') }}</p>
        <p>{{ __('ft.5') }}<!-- {{ $_system_config->site_name }} -->{{ __('ft.Retain_the_final_interpretation_of_the_event') }}</p>
    </div>
</div>


<script>
    var member = "{{ $_member }}";
    (function ($) {
        $(function () {

            var hb_counts=0;
            var $hongbao_container = $('.hongbao_container');
            $hongbao_container.css({width: $(document).width()});

            function getNum(min, max) {
                return Math.floor(Math.random() * (max - min)) + min;
            }

            var win = (parseInt(window.innerWidth));

            var addImg = function () {
                var img = new Image();
                img.src = '{{ asset('/web') }}/images/hb/hb_1.png';
                $hongbao_container.append(
                        $(img).css({
                            width: getNum(40, 80) + 'px',
                            left: parseInt(getNum(0, win))
                        }).attr(
                                'data-money',getNum(0,1000)
                        )
                );
                if (parseInt($(img).css('left'))>window.innerWidth-parseInt($(img).css('width'))) {
                    $($(img).css({
                        left:window.innerWidth-parseInt($(img).css('width'))
                    }))
                }
                $(img).animate({'top': $(window).height() + 20}, getNum(5000,10000), function () {
                    //删掉已经显示的红包
                    this.remove()
                })

            };

            addImg();
            setInterval(addImg, 500);

            $hongbao_container.on('click', 'img', function () {
                if (!member)
                {
                    $('#yk_modal').yk_modal({
                        width:'300px',
                        height:'325px',
                        content:'<div class="hb_content">' +
                        '<span class="hb_close" data-close="close">×</span>' +
                        '<img class="hb_img" src="{{ asset('/web') }}/images/hb/bighongbao.png" />'+
                         '<p>{{ __('ft.please_log_in_first') }}</p>' +
                        '</div>'
                    });
                    return false;
                }
                $(this).remove();
                $('#yk_modal').yk_modal({
                    width:'300px',
                    height:'325px',
                    content:'<div class="hb_content">' +
                    '<span class="hb_close" data-close="close">×</span>' +
                    '<img class="hb_img" src="{{ asset('/web') }}/images/hb/bighongbao.png" />'+
                    // '<p>恭喜你抢到￥'+money+'元现金红包</p>' +
                    '</div>',
                    closeCallback: function () {
                        hb_counts = 0;
                    }
                });
                $(this).siblings('img').stop();
                //
            });
            $('.yk_modal').on('click','.hb_img',function(e){
                if (member && hb_counts < 1)
                {
                    var url = "{{ route('member.distillRed') }}";
                    $.ajax({
                        type: 'GET',
                        url: url,
                        data: {},
                        dataType: "json",
                        success: function(data){
                            hb_counts = 1
                            if (data.status.errorCode == 0)
                            {
                                var m = data.data;
                                $('.hb_content').append('<p>恭喜你抢到￥'+m+'元现金红包</p>'+ '<p>已发放到中心账户</p>')

                            } else {
                                var html = '';

                                if (!typeof (data.status.msg) == 'string')
                                {
                                    html+= data.status.msg;
                                } else {
                                    var obj = JSON.parse (data.status.msg);
                                    for ( var p in obj )
                                    {
                                        if (typeof (obj[p]) == 'string')
                                        {
                                            html+= '<p><b>'+ obj[p] + '</b></p>';
                                        } else if(obj[p] instanceof Array)
                                        {
                                            for (var i=0;i<obj[p].length;i++)
                                            {
                                                html+= '<p><b>'+ obj[p][i] + '</b></p>';
                                            }

                                        }
                                    }
                                }


                                $('.hb_content').append('<p>'+html+'</p>')
                            }

                        }
                    });
                }

                e.stopPropagation();
            });

        });
    })(jQuery);
</script>

</body>
</html>