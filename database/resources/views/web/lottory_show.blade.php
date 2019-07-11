@extends('web.layouts.main')
@section('content')
    <link rel="stylesheet" href="{{ asset('/web/css/lottory.css') }}">
    <div class="body"
         style="">
        <!--banner-->
        <div class="banner" style="height: 355px;">
            <div class="bd">
                <ul>
                    <li style=""><img src="{{ asset('/web/images/lottoryBanner.jpg') }}" alt=""></li>
                </ul>
            </div>
        </div>

        <!--notice-->


        <!--notice-->
        <div class="notice-row">
            <div class="noticeBox">
                <div class="w">
                    <div class="title">
                        最新公告：
                    </div>
                    <div class="bd2">
                        <div id="memberLatestAnnouncement" style="cursor:pointer;color:#fff;">
                            {{--<marquee scrollamount="3" scrolldelay="100" direction="left" onclick="hotNewsHistory()" onmouseover="this.stop();" onmouseout="this.start();">--}}
                            {{--@foreach($_system_notices as $v)--}}
                            {{--<span>~{{ $v->title }}~</span>--}}
                            {{--<span>{{ $v->content }}</span>--}}
                            {{--@endforeach--}}
                            {{--</marquee>--}}
                            <marquee id="mar0" scrollAmount="4" direction="left" onmouseout="this.start()" onmouseover="this.stop()">
                                @foreach($_system_notices as $v)
                                    <span>~{{ $v->title }}~</span>
                                    <span>{{ $v->content }}</span>
                                @endforeach
                            </marquee>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="lotteryPage">
            <div class="lottery" style="width: 1200px;height: 680px;">
                <iframe src="{{ $res }}" width="100%" height="100%" frameborder="0">

                </iframe>
                <div class="clear"></div>
            </div>
        </div>
    </div>

    @include('web.layouts.aside')
@endsection