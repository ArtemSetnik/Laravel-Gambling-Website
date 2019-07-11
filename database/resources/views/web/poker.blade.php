@extends('web.layouts.main')
@section('content')
    <link rel="stylesheet" href="{{ asset('/web/css/pocker.css') }}">

    <div class="notice-row" style="top: 49px;">
        <div class="noticeBox">
            <div class="w">
                <div class="title">
                    {{ __('ft.Latest_Announcement') }}：
                </div>
                <div class="bd2">
                    <div id="memberLatestAnnouncement" style="cursor:pointer;color:#fff;">
                        <marquee id="mar0" scrollamount="4" direction="left" onmouseout="this.start()"
                                 onmouseover="this.stop()">
                            @foreach($_system_notices as $v)
                                <div class="module" style="display: inline-block;">
                                    <span>~{{ $v->title }}~</span>
                                    <span>{{ $v->content }}</span>
                                </div>
                            @endforeach
                        </marquee>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="content" style="padding-top: 1786px !important;">
        <div class="wrapper">

            <section id="lobby" ng-controller="LobbiesCtrl" class="ng-scope">
                <ul class="game-list en-gamelist" ng-init="show='kg'">
                    @if(in_array('MT', $_api_list))
                        <li game-box="mt" onclick="getGameList('mt')" class="active"></li>
                    @endif
                    @if(in_array('FG', $_api_list))
                        <li game-box="fg" onclick="getGameList('fg')"></li>
                    @endif
                    @if(in_array('AP', $_api_list))
                        <li game-box="city761" onclick="getGameList('ap')"></li>
                    @endif
                    @if(in_array('VG', $_api_list))
                        <li game-box="vg" onclick="getGameList('vg')"></li>
                    @endif
                    @if(in_array('LEG', $_api_list))
                        <li game-box="leg" onclick="getGameList('leg')"></li>
                    @endif
                    @if(in_array('KY', $_api_list))
                    <li game-box="ky" onclick="getGameList('ky')"  ></li>
                    @endif
                </ul>
                <iframe style="display: none !important;" id="gameFrame" src="{{ route('ng.playGame') }}?plat_type=MT&game_type=7" ng-show="show=='kg'" class="ng-animate" style=""></iframe>
            </section>
        </div>
    </div>
<script>
    $(function () {
        $('.en-gamelist li').click(function () {
            $(this).addClass('active');
            $(this).siblings('li').removeClass('active');
        })
    })
    function getGameList(plat_type) {
        var url = "{{route('ng.playGame')}}?plat_type=" + plat_type + "&game_type=7";
        $("#gameFrame").attr("src", url);//
    }
</script>

@endsection