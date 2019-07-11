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
    <div id="content_nosign" style="padding-top: 1786px !important;">
        <div class="wrapper">
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