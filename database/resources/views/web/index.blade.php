@extends('web.layouts.main')
@section('after.js')
    @if($_system_config->is_alert_on == 0)
        <div id="modal-tit" class="modal modal-login">
            <div class="modal-content" style="width: 650px;height: 414px;padding: 0">
                <a href="" class="close bg-icon" style="top: 0;right: -20px;opacity: 1;background-color: #ccc"></a>
                <a href="javascript:;">
                    <img src="{{ $_system_config->alert_img }}" alt="">
                </a>
            </div>
        </div>
        <script>
            (function($){
                $(function(){
                    $('#modal-tit').modal();
                })
            })(jQuery);
        </script>
    @endif
@endsection
@section('content')
    <div id="main">
        <div class="cp_style">
            <center>
                <!--主体 start-->
                <div class="indexmain">
                    <div class="indexbanner" id="indexbanner">
                        <div class="lunbo w1000" style="overflow: hidden;">
                            <div class="hd">
                                <ul>
                                    <li class="">2</li>
                                    <li class="">3</li>
                                    <li class="">4</li>
                                    <li class="on">5</li>
                                </ul>
                            </div>
                            <div class="bd">
                                <ul class="w1000">
                                    <li style="display: none;"><a href="#"><img src="{{ asset('/web/images/newYear.png') }}"></a></li>
                                    <li style="display: none;"><a href="#"><img src="{{ asset('/web/images/sd1.png') }}"></a></li>
                                    <li style="display: none;"><a href="#"><img src="{{ asset('/web/images/banner02.png') }}"></a></li>
                                    <li style=""><a href="#"><img src="{{ asset('/web/images/banner03.png') }}"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="games">
                        <ul class="w1000">
                            <li class="g01"><a href="{{ route('web.esports') }}"></a></li>
                            <li class="g02"><a href="{{ route('web.liveCasino') }}"></a></li>
                            <!---<li class="g03"><a href="{{ route('web.eGame') }}?api_name=BBIN"></a></li>//-->
							<li class="g03"><a href="{{ route('web.eGame') }}"></a></li>
							<li class="g04"><a href="{{ route('web.lottory') }}"></a></li>
                        </ul>
                        <div class="clear"></div>
                        <!--公告栏 start-->
                        <div class="gonggao" id="newsBar"><!--公告栏 start-->

                            <div class="zxxx">
                                <div class="noticeContent">
                                    <span class="noticeTitle">{{ __('ft.latest_news') }}：</span>
                                    <div class="noticeScrollText" id="noticeScrollText">

                                        <marquee scrollamount="3" scrolldelay="10" direction="left" nowarp="" onmouseover="this.stop();" onmouseout="this.start();">
                                            <nobr>
                                                <span class="noticeScrollText_Span" id="noticeText" style="color: #fff;">
                                                    @foreach($_system_notices as $v)
                                                        <span>~{{ $v->title }}~</span>
                                                        <span>{{ $v->content }}</span>
                                                    @endforeach
                                                </span>
                                            </nobr>
                                        </marquee>

                                    </div>
                                    <div class="noticeBtns" id="noticeBtns">
                                        <div id="noticeBtn0" class="noticeBtn noticeBtnSelected"></div>
                                        <div id="noticeBtn1" class="noticeBtn "></div>
                                        <div id="noticeBtn2" class="noticeBtn "></div>
                                        <div id="noticeBtn3" class="noticeBtn "></div>
                                        <div id="noticeBtn4" class="noticeBtn "></div>
                                    </div>
                                </div>
                            </div>
                            <!--公告栏 end-->
                        </div>
                    </div>

                    <div class="mainlink w1000">
                        <div class="caijin" id="superMoney">588,621,025.84</div>
                        <a href="{{ route('web.activityList') }}" class="youhui"></a>
                        <a href="https://www.ub66.com/UB-Launcher.exe" target="_blank" class="zixun"></a>
                    </div>

                    <div class="clear"></div>
                </div>
            </center>
        </div>
    </div>

    <script type="text/javascript">
        $(function(){
            jQuery(".lunbo").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"fold",  autoPlay:true, autoPage:true, trigger:"click" });

//            var newsArr=[
//                '尊敬的会员您好，手机版支付宝已恢复正常使用，祝您游戏愉快！',
//                '尊敬的会员您好，DS游戏厅临时维护，时间11:00-11:40 期间无法进行游戏。 给您造成不便，敬请谅解，祝您游戏愉快！',
//                '尊敬的会员您好，DS游戏厅临时维护，时间11:00-11:40 期间无法进行游戏。 给您造成不便，敬请谅解，祝您游戏愉快！',
//                '尊敬的会员您好，8月27日的返水已到帐，请您查收。祝您游戏愉快!',
//                '尊敬的会员您好，8月26日的返水已到帐，请您查收。祝您游戏愉快!'
//            ];
//            $('.noticeBtns .noticeBtn').on('click',function(){
//                var $index=$(this).index();
//                $('.noticeBtns .noticeBtn').removeClass('noticeBtnSelected');
//                $(this).addClass('noticeBtnSelected');
//                $('#noticeText').text(newsArr[$index]);
//            })
        });
    </script>
@endsection
