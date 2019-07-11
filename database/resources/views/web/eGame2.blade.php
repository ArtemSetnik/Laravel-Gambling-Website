@extends('web.layouts.main')
@section('content')

    <div class="body"  style="background: url('{{ asset('/web/images/egame-banner.jpg') }}') no-repeat;">
        <div class="container tbbg-margin">
            <div class="notice clear" style="margin-top:-220px">
                <div class="notice-bg"></div>
                <div class="notice-title pullLeft">
                    <div class="notice-title_bg"></div>
                    <span class="bg-icon pullLeft"></span>
                    系统公告
                </div>
                <marquee id="mar0" scrollAmount="4" direction="left" onmouseout="this.start()" onmouseover="this.stop()">
                    @foreach($_system_notices as $v)
                        <span>~{{ $v->title }}~</span>
                        <span>{{ $v->content }}</span>
                    @endforeach
                </marquee>
            </div>
            <div class="egameslide">
                <div class="hd">
                    <ul>
                        <li class="on">
                            {{--<img class="isComing" src="{{ asset('/web/images/isComing2.png') }}" alt="">--}}
                            <p class="pic">
                                <img src="{{ asset('/web/images/app-bg-pt1.png') }}" class="default">
                                <img src="{{ asset('/web/images/app-bg-pt2.png') }}" class="activepic">
                            </p>
                            <p class="tit">PT厅</p>
                        </li>
                        {{--<li>--}}
                        {{--<img class="isComing" src="{{ asset('/web/images/isComing2.png') }}" alt="">--}}
                        {{--<p class="pic">--}}
                        {{--<img src="{{ asset('/web/images/app-bg-ag1.png') }}" class="default">--}}
                        {{--<img src="{{ asset('/web/images/app-bg-ag2.png') }}" class="activepic">--}}
                        {{--</p>--}}
                        {{--<p class="tit">AG厅</p>--}}
                        {{--</li>--}}
                        <li>
                            <p class="pic">
                                <img src="{{ asset('/web/images/app-bg-mg1.png') }}" class="default">
                                <img src="{{ asset('/web/images/app-bg-mg2.png') }}" class="activepic">
                            </p>
                            <p class="tit">MG厅</p>
                        </li>
                        <li>
                            <p class="pic">
                                <img src="{{ asset('/web/images/app-bg-by1.png') }}" class="default">
                                <img src="{{ asset('/web/images/app-bg-mg2.png') }}" class="activepic">
                            </p>
                            <p class="tit">BB厅</p>
                        </li>
                        {{--<li>--}}
                        {{--<img class="isComing" src="{{ asset('/web/images/isComing2.png') }}" alt="">--}}
                        {{--<p class="pic">--}}
                        {{--<img src="{{ asset('/web/images/app-bg-gg1.png') }}" class="default">--}}
                        {{--<img src="{{ asset('/web/images/app-bg-gg2.png') }}" class="activepic">--}}
                        {{--</p>--}}
                        {{--<p class="tit">GG厅</p>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                        {{--<img class="isComing" src="{{ asset('/web/images/isComing2.png') }}" alt="">--}}
                        {{--<p class="pic">--}}
                        {{--<img src="{{ asset('/web/images/app-bg-png1.png') }}" class="default">--}}
                        {{--<img src="{{ asset('/web/images/app-bg-png2.png') }}" class="activepic">--}}
                        {{--</p>--}}
                        {{--<p class="tit">PNG厅</p>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                        {{--<img class="isComing" src="{{ asset('/web/images/isComing2.png') }}" alt="">--}}
                        {{--<p class="pic">--}}
                        {{--<img src="{{ asset('/web/images/app-bg-ttg1.png') }}" class="default">--}}
                        {{--<img src="{{ asset('/web/images/app-bg-ttg2.png') }}" class="activepic">--}}
                        {{--</p>--}}
                        {{--<p class="tit">TTG厅</p>--}}
                        {{--</li>--}}
                        <li>
                            {{--<img class="isComing" src="{{ asset('/web/images/isComing2.png') }}" alt="">--}}
                            <p class="pic">
                                <img src="{{ asset('/web/images/app-bg-ttg1.png') }}" class="default">
                                <img src="{{ asset('/web/images/app-bg-ttg2.png') }}" class="activepic">
                            </p>
                            <p class="tit">SA厅</p>
                        </li>
                        <div class="last">
                            <a href="javascript:;" @if($_member) onclick="javascript:window.open('{{ route('ag.playGame') }}?gametype=8','','width=1024,height=768')"
                               @else onclick="return layer.msg('请先登录!',{icon:6})" @endif>
                                <p class="pic">
                                    <img src="{{ asset('/web/images/app-bg-by1.png') }}" style="display: inline;">
                                </p>
                                <p class="tit">AG电子游戏</p>
                            </a>
                        </div>

                    </ul>
                </div>
                <div class="bd">
                    {{--pt--}}
                    <div class="module">
                        <div class="top">
                            <div class="egameTit"></div>
                            <div class="egame_filter_top">
                                <span class="title"><img src="{{ asset('/web/images/pt-pic-bz.png') }}">PT厅</span>
                                <span class="list_wrap active"><a href="javascript:void(0)" class="list ">全部</a></span>
                            </div>
                        </div>
                        <div class="bodylist">
                            <div class="egame_list">
                                <ul>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href=" " @if($_member) onclick="javascript:window.open('{{ route('pt.playGame') }}?gametype=arc','','width=1024,height=768')" @else onclick="return alert('请先登录！')"  @endif>
                                            <img data-original="{{ asset('/web/images/games/pt/arc.jpg')}}" class="lazy">
                                            <p class="collect">弓兵</p >
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="egame_recommond">
                                {{--<div class="top_qrcode">--}}
                                {{--<div class="qrimg"><img src="{{ asset('/web/images/PT-APP.png') }}"></div>--}}
                                {{--<dl>--}}
                                {{--<dt>PT Android版</dt>--}}
                                {{--<dd>下载客户端，随时随地玩游戏,轻轻松松中大奖</dd>--}}
                                {{--</dl>--}}
                                {{--<a class="pc_download">PC客户端下载</a>--}}
                                {{--</div>--}}
                                <div class="hot_recommond">
                                    <h3><span class="tit">热门推荐</span></h3>
                                    <ul>
                                        @foreach($pt_rng_list as $k => $v)
                                            @if ($k < 10)
                                                <li @if($k == 0) class="on" @endif>
                                            <span class="index">
                                              {{ $k + 1 }}
                                            </span>
                                                    <span class="gamepic">
                                              <img src="http://images.uxgaming.com/TCG_GAME_ICONS/{{ $v->productCode }}/{{ $v->tcgGameCode }}.png">
                                            </span>
                                                    <dl>
                                                        <?php
                                                        $game_name_arr = (explode('_', $v->gameName));
                                                        ?>
                                                        <dt>{{ isset($game_name_arr[1])?str_limit($game_name_arr[1], 8):str_limit($game_name_arr[0], 8) }}</dt>
                                                        <dd class="star"><i class="iconfont">&#xe659;</i><i class="iconfont">
                                                                &#xe659;</i><i class="iconfont">&#xe659;</i><i class="iconfont">
                                                                &#xe659;</i><i class="iconfont">&#xe659;</i></dd>
                                                        <dd class="gogame"><a href="javascript:;"  @if($_member) onclick="javascript:window.open('{{ route('pt.playGame') }}?game_code={{ $v->tcgGameCode }}','','width=1024,height=768')" @else onclick="return alert('请先登录！')"  @endif >进入游戏</a></dd>
                                                    </dl>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--mg--}}
                    <div class="module">
                        <div class="top">
                            <div class="egameTit"></div>
                            <div class="egame_filter_top">
                                <span class="title"><img src="{{ asset('/web/images/pt-pic-bz.png') }}">MG厅</span>
                                <span class="list_wrap active"><a href="javascript:void(0)" class="list ">全部</a></span>
                            </div>
                        </div>
                        <!--MG-->
                        <div class="bodylist">
                            <div class="egame_list mg_game">
                                <ul>
                                    {{--@foreach($game_list as $v)--}}
                                    {{--<li class="scrollLoading" style="width: 130px;height: 168.44px">--}}
                                    {{--<a href="javascript:;" @if($_member) onclick="javascript:window.open('{{ route('member.play_game') }}?api_name=PT&product_type=3&game_code={{ $v->tcgGameCode }}','','width=1024,height=768')" @else onclick="return alert('请先登录！')"  @endif>--}}
                                    {{--<img data-original="http://images.uxgaming.com/TCG_GAME_ICONS/PT/{{ $v->tcgGameCode }}.png"--}}
                                    {{--class="lazy">--}}
                                    {{--<p class="collect">--}}
                                    {{--{{ $v->gameName }}--}}
                                    {{----}}
                                    {{--</p>--}}
                                    {{--<span class="button">开始游戏</span>--}}
                                    {{--</a>--}}
                                    {{--</li>--}}
                                    {{--@endforeach--}}

                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=Breakaway','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_BreakAway.png')}}"
                                                 class="lazy">
                                            <p class="collect">冰上曲棍球</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=Carnaval','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_Carnaval.png')}}"
                                                 class="lazy">
                                            <p class="collect">狂欢节</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    {{--<li class="scrollLoading" style="width: 130px;height: 168.44px">--}}
                                    {{--<a href="javascript:;"--}}
                                    {{--@if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=MermaidMillions','','width=1024,height=768')"--}}
                                    {{--@else onclick="return alert('请先登录！')" @endif>--}}
                                    {{--<img data-original="{{ asset('/web/images/games/mg/BTN_MermaidsMillions.png')}}"--}}
                                    {{--class="lazy">--}}
                                    {{--<p class="collect">百万美人鱼</p>--}}
                                    {{--<span class="button">开始游戏</span>--}}
                                    {{--</a>--}}
                                    {{--</li>--}}
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=LadiesNite','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_LadiesNite.png')}}"
                                                 class="lazy">
                                            <p class="collect">淑女派对</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>

                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=LuckyKoi','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_LuckyKoi.png')}}"
                                                 class="lazy">
                                            <p class="collect">幸运的锦鲤</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=EuroRouletteGold','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_EuropeanRouletteGold.png')}}"
                                                 class="lazy">
                                            <p class="collect">欧式黄金轮盘</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    {{--<li class="scrollLoading" style="width: 130px;height: 168.44px">--}}
                                    {{--<a href="javascript:;"--}}
                                    {{--@if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=MermaidsMillions','','width=1024,height=768')"--}}
                                    {{--@else onclick="return alert('请先登录！')" @endif>--}}
                                    {{--<img data-original="{{ asset('/web/images/games/mg/BTN_MermaidsMillions.png')}}"--}}
                                    {{--class="lazy">--}}
                                    {{--<p class="collect">海底世界</p>--}}
                                    {{--<span class="button">开始游戏</span>--}}
                                    {{--</a>--}}
                                    {{--</li>--}}
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=AsianBeauty','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_AsianBeauty.png')}}"
                                                 class="lazy">
                                            <p class="collect">亚洲风情</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>

                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=pureplatinum','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_pureplatinum.png')}}"
                                                 class="lazy">
                                            <p class="collect">纯铂金</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=RetroReels','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_RetroReels.png')}}"
                                                 class="lazy">
                                            <p class="collect">复古旋转</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=Thunderstruck','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_Thunderstruck.png')}}"
                                                 class="lazy">
                                            <p class="collect">雷神</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=FootballStar','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_FootballStar.png')}}"
                                                 class="lazy">
                                            <p class="collect">足球明星</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>

                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=Playboy','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_Playboy.png')}}"
                                                 class="lazy">
                                            <p class="collect">花花公子</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=TheFinerReelsofLife','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_TheFinerReelsofLife.png')}}"
                                                 class="lazy">
                                            <p class="collect">好日子</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=KaratePig','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_KaratePig.png')}}"
                                                 class="lazy">
                                            <p class="collect">功夫小胖猪</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=RubyAgentJaneBlonde','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_AgentJaneBlonde.png')}}"
                                                 class="lazy">
                                            <p class="collect">美女密探</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=Terminator2','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_Terminator2.png')}}"
                                                 class="lazy">
                                            <p class="collect">终结者2</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=RetroReelsDiamondGlitz','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_RetroReelsDiamondGlitz.png')}}"
                                                 class="lazy">
                                            <p class="collect">钻石浮华</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>

                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=Avalon2','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_AvalonII-L-QuestForTheGrail.png')}}"
                                                 class="lazy">
                                            <p class="collect">阿瓦隆2</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=TheDarkKnightRises','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_TheDarkKnightRises.png')}}"
                                                 class="lazy">
                                            <p class="collect">黑暗骑士崛起</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=LeaguesOfFortune','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_LeaguesOfFortune.png')}}"
                                                 class="lazy">
                                            <p class="collect">财富联盟</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=InItToWinIt','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_InItToWinIt.png')}}"
                                                 class="lazy">
                                            <p class="collect">人人有奖</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=LooseCannon','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_LooseCannon.png')}}"
                                                 class="lazy">
                                            <p class="collect">混沌加农炮</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=Playboy','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_Playboy.png')}}"
                                                 class="lazy">
                                            <p class="collect">花花公子</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=DrWattsUp','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_DrWattsUp.png')}}"
                                                 class="lazy">
                                            <p class="collect">恐怖实验室</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=UntamedCrownedEagle','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_UntamedCrownedEagle.png')}}"
                                                 class="lazy">
                                            <p class="collect">狂野之鹰</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=GirlsWithGuns','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_GirlsWithGuns-L-JungleHeat.png')}}"
                                                 class="lazy">
                                            <p class="collect">女孩与枪</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=GirlsWithGunsFrozenDawn','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_GirlswithGuns-L-FrozenDawn.png')}}"
                                                 class="lazy">
                                            <p class="collect">女孩与枪II</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=BustTheBank','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_BustTheBank.png')}}"
                                                 class="lazy">
                                            <p class="collect">抢劫银行</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=HighSociety','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_HighSociety.png')}}"
                                                 class="lazy">
                                            <p class="collect">上流社会</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=MysticDreams','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_MysticDreams.png')}}"
                                                 class="lazy">
                                            <p class="collect">神秘梦境</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=SecretSanta','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_SecretSanta.png')}}"
                                                 class="lazy">
                                            <p class="collect">圣诞老人的秘密</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=RacingForPinks','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_RacingForPinks.png')}}"
                                                 class="lazy">
                                            <p class="collect">为粉红而战</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=StarlightKiss','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_StarlightKiss.png')}}"
                                                 class="lazy">
                                            <p class="collect">星梦之吻</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=LuckyKoi','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_LuckyKoi.png')}}"
                                                 class="lazy">
                                            <p class="collect">幸运的锦鲤</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=DolphinQuest','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_DolphinQuest.png')}}"
                                                 class="lazy">
                                            <p class="collect">寻访海豚</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=BootyTime','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_BootyTime.png')}}"
                                                 class="lazy">
                                            <p class="collect">藏宝时间</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=Bridezilla','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_Bridezilla.png')}}"
                                                 class="lazy">
                                            <p class="collect">新娘吉拉</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=PiggyFortunes','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_PiggyFortunes.png')}}"
                                                 class="lazy">
                                            <p class="collect">小猪财富</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>

                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=WheelOfWealthSE','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_WheelOfWealthSpecialEdition.png')}}"
                                                 class="lazy">
                                            <p class="collect">财富转轮特别版</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=BushTelegraph','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_BushTelegraph.png')}}"
                                                 class="lazy">
                                            <p class="collect">丛林摇摆</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=WhatonEarth','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_WhatonEarth.png')}}"
                                                 class="lazy">
                                            <p class="collect">地球生物</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=TheTwistedCircus','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_TheTwistedCircus.png')}}"
                                                 class="lazy">
                                            <p class="collect">反转马戏团</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=MadHatters','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_MadHatters.png')}}"
                                                 class="lazy">
                                            <p class="collect">疯狂的帽子</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>

                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=TombRaider','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_TombRaider.png')}}"
                                                 class="lazy">
                                            <p class="collect">古墓丽影</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=RubyTombRaiderII','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_TombRaider2.png')}}"
                                                 class="lazy">
                                            <p class="collect">古墓丽影2</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=MermaidsMillions','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_MermaidsMillions.png')}}"
                                                 class="lazy">
                                            <p class="collect">海底世界</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=Cashville','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_Cashville.png')}}"
                                                 class="lazy">
                                            <p class="collect">挥金如土</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>

                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=RubyWasabiSan','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_WasabiSan.png')}}"
                                                 class="lazy">
                                            <p class="collect">芥末寿司</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=Cashanova','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_Cashanova.png')}}"
                                                 class="lazy">
                                            <p class="collect">卡萨努瓦</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=DinoMight','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_DinoMight.png')}}"
                                                 class="lazy">
                                            <p class="collect">恐龙迪诺</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=SkullDuggery','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_SkullDuggery.png')}}"
                                                 class="lazy">
                                            <p class="collect">骷髅陷阱</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=Thunderstruck2','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_Thunderstruck2.png')}}"
                                                 class="lazy">
                                            <p class="collect">雷神2</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>

                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=RoboJack','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_RoboJack.png')}}"
                                                 class="lazy">
                                            <p class="collect">洛伯杰克</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=PollenNation','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_PollenNation.png')}}"
                                                 class="lazy">
                                            <p class="collect">蜜蜂乐园</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=RubyWitchesWealth','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_WitchesWealth.png')}}"
                                                 class="lazy">
                                            <p class="collect">女巫的财富</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=SantasWildRide','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_SantasWildRide.png')}}"
                                                 class="lazy">
                                            <p class="collect">圣诞老人的疯狂 ？</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>

                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=RubyWheelofWealth','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_WheelofWealth.png')}}"
                                                 class="lazy">
                                            <p class="collect">水果财富</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=RubyHalloweenies','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_Halloweenies.png')}}"
                                                 class="lazy">
                                            <p class="collect">万圣节</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=Loaded','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_Loaded.png')}}"
                                                 class="lazy">
                                            <p class="collect">炫富一族</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=UntamedWolfPack','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_UntamedWolfPack.png')}}"
                                                 class="lazy">
                                            <p class="collect">野性的狼群</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=UntamedBengalTiger','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_UntamedBengalTiger.png')}}"
                                                 class="lazy">
                                            <p class="collect">野性的孟加拉虎</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>

                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=BreakDaBankAgain','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_BreakDaBankAgain.png')}}"
                                                 class="lazy">
                                            <p class="collect">银行爆破</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=Moonshine','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_Moonshine.png')}}"
                                                 class="lazy">
                                            <p class="collect">月光</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=BigKahuna','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_BigKahuna.png')}}"
                                                 class="lazy">
                                            <p class="collect">征服钱海</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=RubyHitman','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_HitMan.png')}}"
                                                 class="lazy">
                                            <p class="collect">终极杀手</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=FootballStar','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_FootballStar.png')}}"
                                                 class="lazy">
                                            <p class="collect">足球明星</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>

                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=Starscape','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_Starscape.png')}}"
                                                 class="lazy">
                                            <p class="collect">星云</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=Shoot','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_Shoot.png')}}"
                                                 class="lazy">
                                            <p class="collect">射击</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=RubyDogfather','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_RubyDogfather.png')}}"
                                                 class="lazy">
                                            <p class="collect">狗爸爸</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=RubyHellBoy','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_RubyHellBoy.png')}}"
                                                 class="lazy">
                                            <p class="collect">地狱男爵</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=PhantomCash','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_PhantomCash.png')}}"
                                                 class="lazy">
                                            <p class="collect">幻影现金</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=RubyHouseofDragons','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_RubyHouseofDragons.png')}}"
                                                 class="lazy">
                                            <p class="collect">龙之家</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=RubyKingArthur','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_RubyKingArthur.png')}}"
                                                 class="lazy">
                                            <p class="collect">亚瑟王</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>

                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=Spectacular','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_SpectacularWheelOfWealth.png')}}"
                                                 class="lazy">
                                            <p class="collect">财富之轮</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=CashCrazy','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_CashCrazy.png')}}"
                                                 class="lazy">
                                            <p class="collect">财运疯狂</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=Belissimo','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_Belissimo.png')}}"
                                                 class="lazy">
                                            <p class="collect">超级厨王</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=RubyFlyingAce','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_FlyingAce.png')}}"
                                                 class="lazy">
                                            <p class="collect">超级飞行员</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=RubyGoldCoast','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_GoldCoast.png')}}"
                                                 class="lazy">
                                            <p class="collect">黄金海岸</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>

                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=gdragon','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_GoldenDragon.png')}}"
                                                 class="lazy">
                                            <p class="collect">黄金龙</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=RubyRapidReels','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_RapidReels.png')}}"
                                                 class="lazy">
                                            <p class="collect">急速转轮</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=CoolBuck','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_CoolBuck.png')}}"
                                                 class="lazy">
                                            <p class="collect">酷巴克</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=jexpress','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_JackpotExpress.png')}}"
                                                 class="lazy">
                                            <p class="collect">累计奖金快车</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=RubyJingleBells','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_JingleBells.png')}}"
                                                 class="lazy">
                                            <p class="collect">铃儿响叮当</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>

                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=RomanRiches','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_RomanRiches.png')}}"
                                                 class="lazy">
                                            <p class="collect">罗马财富</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=fan7','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_Fantastic7s.png')}}"
                                                 class="lazy">
                                            <p class="collect">奇妙7</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=BreakDaBank','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_BreakDaBank.png')}}"
                                                 class="lazy">
                                            <p class="collect">抢银行</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=zebra','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_ZanyZebra.png')}}"
                                                 class="lazy">
                                            <p class="collect">燃尼巨蟒</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=TripleMagic','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_TripleMagic.png')}}"
                                                 class="lazy">
                                            <p class="collect">三魔法</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>

                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=CouchPotato','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_CouchPotato.png')}}"
                                                 class="lazy">
                                            <p class="collect">沙发土豆</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=dm','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_DoubleMagic.png')}}"
                                                 class="lazy">
                                            <p class="collect">双魔</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=DoubleWammy','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_DoubleWammy.png')}}"
                                                 class="lazy">
                                            <p class="collect">双重韦密</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=fruits','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_FruitSlots.png')}}"
                                                 class="lazy">
                                            <p class="collect">水果老虎机</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=CashClams','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_CashClams.png')}}"
                                                 class="lazy">
                                            <p class="collect">现金蚬</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>

                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=FortuneCookie','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_FortuneCookie.png')}}"
                                                 class="lazy">
                                            <p class="collect">幸运曲奇</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=RockTheBoat','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_RockTheBoat.png')}}"
                                                 class="lazy">
                                            <p class="collect">摇滚船</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=RubyLegacy','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_Legacy.png')}}"
                                                 class="lazy">
                                            <p class="collect">遗产L</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=cosmicc','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_CosmicCat.png')}}"
                                                 class="lazy">
                                            <p class="collect">宇宙猫</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=WildCatch','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_WildCatch.png')}}"
                                                 class="lazy">
                                            <p class="collect">野生捕鱼</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=SweetHarvest','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_SweetHarvest.png')}}"
                                                 class="lazy">
                                            <p class="collect">甜蜜的收获</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>

                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=RubyHotShot','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_HotShot.png')}}"
                                                 class="lazy">
                                            <p class="collect">棒球直击</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=ImmortalRomance','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_ImmortalRomance.png')}}"
                                                 class="lazy">
                                            <p class="collect">不朽的爱情</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=GreatGriffin','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_GreatGriffin.png')}}"
                                                 class="lazy">
                                            <p class="collect">大狮鹫</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=UntamedGiantPanda','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_UntamedGiantPanda.png')}}"
                                                 class="lazy">
                                            <p class="collect">大熊猫</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>

                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=OrientalFortune','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_OrientalFortune.png')}}"
                                                 class="lazy">
                                            <p class="collect">东方财富</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=CrazyChameleons','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_CrazyChameleons.png')}}"
                                                 class="lazy">
                                            <p class="collect">疯狂的变色龙</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=SoManyMonsters','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_SoManyMonsters.png')}}"
                                                 class="lazy">
                                            <p class="collect">怪兽多多</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=MonsterMania','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_MonsterMania.png')}}"
                                                 class="lazy">
                                            <p class="collect">怪物躁狂症</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>

                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=LadyInRed','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_LadyInRed.png')}}"
                                                 class="lazy">
                                            <p class="collect">红衣女郎</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=RedHotDevil','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_RedHotDevil.png')}}"
                                                 class="lazy">
                                            <p class="collect">紅唇誘惑</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=GopherGold','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_GopherGold.png')}}"
                                                 class="lazy">
                                            <p class="collect">黄金囊地鼠</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=GoldenEra','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_GoldenEra.png')}}"
                                                 class="lazy">
                                            <p class="collect">黃金時代</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=GeniesGems','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_GeniesGems.png')}}"
                                                 class="lazy">
                                            <p class="collect">精灵宝石</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>

                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=Carnaval','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_Carnaval.png')}}"
                                                 class="lazy">
                                            <p class="collect">狂欢节</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=RubyCashapillar','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_Cashapillar.png')}}"
                                                 class="lazy">
                                            <p class="collect">昆虫派对</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=ReelThunder','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_ReelThunder.png')}}"
                                                 class="lazy">
                                            <p class="collect">雷电击</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=BigTop','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_BigTop.png')}}"
                                                 class="lazy">
                                            <p class="collect">马戏篷</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=WhatAHoot','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_WhatAHoot.png')}}"
                                                 class="lazy">
                                            <p class="collect">猫头鹰乐园</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>

                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=RubyBurningDesire','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_BurningDesire.png')}}"
                                                 class="lazy">
                                            <p class="collect">燃烧的欲望</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=RubyDeckTheHalls','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_DeckTheHalls.png')}}"
                                                 class="lazy">
                                            <p class="collect">闪亮的圣诞节</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=RubyScrooge','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_Scrooge.png')}}"
                                                 class="lazy">
                                            <p class="collect">守财奴</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=SoMuchSushi','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_SoMuchSushi.png')}}"
                                                 class="lazy">
                                            <p class="collect">寿司多多</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=SunQuest','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_SunQuest.png')}}"
                                                 class="lazy">
                                            <p class="collect">探索太阳</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>

                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=SoMuchCandy','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_SoMuchCandy.png')}}"
                                                 class="lazy">
                                            <p class="collect">糖果多多</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=RubyTotemTreasure','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_TotemTreasure.png')}}"
                                                 class="lazy">
                                            <p class="collect">图腾宝藏</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=HappyNewYear','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_HappyNewYear.png')}}"
                                                 class="lazy">
                                            <p class="collect">新年快樂</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=RubyTheOsbournes','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_TheOsbournes.png')}}"
                                                 class="lazy">
                                            <p class="collect">摇滚奥斯本</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>

                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=VinylCountdown','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_VinylCountdown.png')}}"
                                                 class="lazy">
                                            <p class="collect">乙烯基倒计时</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=wwizards','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_WinningWizards.png')}}"
                                                 class="lazy">
                                            <p class="collect">赢得向导</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=LuckyFirecracker','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_LuckyFirecracker.png')}}"
                                                 class="lazy">
                                            <p class="collect">招财鞭炮</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=MaxDamage','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_MaxDamage.png')}}"
                                                 class="lazy">
                                            <p class="collect">終極破壞</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>

                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=TitansoftheSunHyperion','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_TitansoftheSunHyperion.png')}}"
                                                 class="lazy">
                                            <p class="collect">太阳神之许珀里翁</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=Ariana','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_Ariana.png')}}"
                                                 class="lazy">
                                            <p class="collect">爱丽娜</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=RugbyStar','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_RugbyStar.png')}}"
                                                 class="lazy">
                                            <p class="collect">橄榄球明星</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=HotAsHades','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_HotAsHades.png')}}"
                                                 class="lazy">
                                            <p class="collect">地府烈焰</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=GoldenPrincess','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_GoldenPrincess.png')}}"
                                                 class="lazy">
                                            <p class="collect">千金</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=LuckyZodiac','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_LuckyZodiac.png')}}"
                                                 class="lazy">
                                            <p class="collect">幸运生肖</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>


                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=RubyAvalon','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_Avalon.png')}}"
                                                 class="lazy">
                                            <p class="collect">阿瓦隆</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=ReelGems','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_ReelGems.png')}}"
                                                 class="lazy">
                                            <p class="collect">宝石迷阵</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=SpringBreak','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_SpringBreak.png')}}"
                                                 class="lazy">
                                            <p class="collect">春假</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=RubyGoodToGo','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_GoodToGo.png')}}"
                                                 class="lazy">
                                            <p class="collect">疯狂赛道</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>

                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=RetroReelsDiamondGlitz','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_RetroReelsDiamondGlitz.png')}}"
                                                 class="lazy">
                                            <p class="collect">复古卷轴钻石耀眼</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=RetroReels','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_RetroReels.png')}}"
                                                 class="lazy">
                                            <p class="collect">复古旋转</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=AdventurePalace','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_AdventurePalace.png')}}"
                                                 class="lazy">
                                            <p class="collect">宫廷历险</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=RubyMunchkins','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_Munchkins.png')}}"
                                                 class="lazy">
                                            <p class="collect">怪兽曼琪肯</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=RubyHarveys','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_Harveys.png')}}"
                                                 class="lazy">
                                            <p class="collect">哈维斯的晚餐</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>

                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=MonteCarloRiches','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_RivieraRiches.png')}}"
                                                 class="lazy">
                                            <p class="collect">海滨财富</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=HoHoHo','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_HoHoHo.png')}}"
                                                 class="lazy">
                                            <p class="collect">嗬嗬嗬</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=GoldFactory','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_GoldFactory.png')}}"
                                                 class="lazy">
                                            <p class="collect">黄金工厂</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=ReelStrike','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_ReelStrike.png')}}"
                                                 class="lazy">
                                            <p class="collect">卷行使价</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>

                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=RubyKathmandu','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_Kathmandu.png')}}"
                                                 class="lazy">
                                            <p class="collect">卡萨缦都</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=CoolWolf','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_CoolWolf.png')}}"
                                                 class="lazy">
                                            <p class="collect">酷狼</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=ThunderStruck','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_Thunderstruck.png')}}"
                                                 class="lazy">
                                            <p class="collect">雷神</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=RubyAgentJaneBlonde','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_AgentJaneBlonde.png')}}"
                                                 class="lazy">
                                            <p class="collect">美女密探</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=SecretAdmirer','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_SecretAdmirer.png')}}"
                                                 class="lazy">
                                            <p class="collect">秘密崇拜者</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=LadiesNite','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_LadiesNite.png')}}"
                                                 class="lazy">
                                            <p class="collect">女仕之夜</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=FishParty','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_FishParty.png')}}"
                                                 class="lazy">
                                            <p class="collect">派对鱼</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=HotInk','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_HotInk.png')}}"
                                                 class="lazy">
                                            <p class="collect">神奇墨水</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=rubyelementals','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_Elementals.png')}}"
                                                 class="lazy">
                                            <p class="collect">水果怪兽</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>

                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=BattlestarGalactica','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_BattlestarGalactica.png')}}"
                                                 class="lazy">
                                            <p class="collect">太空堡垒</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=TallyHo','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_TallyHo.png')}}"
                                                 class="lazy">
                                            <p class="collect">泰利嗬</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=LuckyWitch','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_LuckyWitch.png')}}"
                                                 class="lazy">
                                            <p class="collect">幸运女巫</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>

                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=SilverFang','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_SilverFang.png')}}"
                                                 class="lazy">
                                            <p class="collect">银芳</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=MugshotMadness','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_MugshotMadness.png')}}"
                                                 class="lazy">
                                            <p class="collect">疯狂假面</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=MayanPrincess','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_MayanPrincess.png')}}"
                                                 class="lazy">
                                            <p class="collect">玛雅公主</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=Octopays','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_Octopays.png')}}"
                                                 class="lazy">
                                            <p class="collect">章鱼</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=Jackspwrpoker','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_Jackspwrpoker.png')}}"
                                                 class="lazy">
                                            <p class="collect">对J高手</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=DoubleJoker','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_DoubleJoker.png')}}"
                                                 class="lazy">
                                            <p class="collect">红利扑克</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=AcesfacesPwrPoker','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_AcesAndFaces.png')}}"
                                                 class="lazy">
                                            <p class="collect">A与人头扑克</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=JokerPwrPoker','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_JokerPoker.png')}}"
                                                 class="lazy">
                                            <p class="collect">小丑扑克</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=DoubleDoubleBonus','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_DoubleDoubleBonus.png')}}"
                                                 class="lazy">
                                            <p class="collect">换牌扑克</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=LouisianaDouble','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_LouisianaDouble.png')}}"
                                                 class="lazy">
                                            <p class="collect">路易斯安那双</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=jacks','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_JacksOrBetter.png')}}"
                                                 class="lazy">
                                            <p class="collect">千斤顶或更好</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=TensorBetterPwrPoker','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_TensOrBetter.png')}}"
                                                 class="lazy">
                                            <p class="collect">数万或更好</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>

                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=DeucesWildPwrPoker','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_DeucesWild.png')}}"
                                                 class="lazy">
                                            <p class="collect">万能两点</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=PremierTrotting','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_PremierTrotting.png')}}"
                                                 class="lazy">
                                            <p class="collect">超级马车赛</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=PremierRacing','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_PremierRacing.png')}}"
                                                 class="lazy">
                                            <p class="collect">超级赛马</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=ElectroBingo','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_ElectroBingo.png')}}"
                                                 class="lazy">
                                            <p class="collect">电宾果</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=PharaohBingo','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_PharaohBingo.png')}}"
                                                 class="lazy">
                                            <p class="collect">法老宾果</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=CrownAndAnchor','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_CrownAndAnchor.png')}}"
                                                 class="lazy">
                                            <p class="collect">国际鱼虾蟹骰宝</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>

                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=MayanBingo','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_MayanBingo.png')}}"
                                                 class="lazy">
                                            <p class="collect">玛雅宾果</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=EnchantedWoods','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_EnchantedWoods.png')}}"
                                                 class="lazy">
                                            <p class="collect">魔法森林</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=SambaBingo','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_SambaBingo.png')}}"
                                                 class="lazy">
                                            <p class="collect">萨巴宾果</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=FourByFour','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_FourByFour.png')}}"
                                                 class="lazy">
                                            <p class="collect">四乘四</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=Germinator','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_Germinator.png')}}"
                                                 class="lazy">
                                            <p class="collect">细菌对对碰</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>

                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href="javascript:;"
                                           @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?gametype=MaxDamage','','width=1024,height=768')"
                                           @else onclick="return alert('请先登录！')" @endif>
                                            <img data-original="{{ asset('/web/images/games/mg/BTN_MaxDamageAndTheAlienAttack.png')}}"
                                                 class="lazy">
                                            <p class="collect">星战传奇</p>
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="egame_recommond">
                                {{--<div class="top_qrcode">--}}
                                {{--<div class="qrimg"><img src="{{ asset('/web/images/PT-APP.png') }}"></div>--}}
                                {{--<dl>--}}
                                {{--<dt>PT Android版</dt>--}}
                                {{--<dd>下载客户端，随时随地玩游戏,轻轻松松中大奖</dd>--}}
                                {{--</dl>--}}
                                {{--<a class="pc_download">PC客户端下载</a>--}}
                                {{--</div>--}}
                                <div class="hot_recommond">
                                    <h3><span class="tit">热门推荐</span></h3>

                                    <ul>
                                        <li class="on">
                                            <span class="index">
                                              1
                                            </span>
                                            <span class="gamepic">
                                              <img src="{{ asset('/web/images/games/mg/BTN_BreakAway.png')}}">
                                            </span>
                                            <dl>
                                                <dt>冰上曲棍球</dt>
                                                <dd class="star"><i class="iconfont">&#xe659;</i><i class="iconfont">
                                                        &#xe659;</i><i class="iconfont">&#xe659;</i><i class="iconfont">
                                                        &#xe659;</i><i class="iconfont">&#xe659;</i></dd>
                                                <dd class="gogame"><a href="#" @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?id=Breakaway','','width=1024,height=768')"
                                                                      @else onclick="return alert('请先登录！')" @endif>进入游戏</a></dd>
                                            </dl>
                                        </li>


                                        <li>
                                        <span class="index">
                                          2
                                        </span>
                                            <span class="gamepic">
                                          <img src="{{ asset('/web/images/games/mg/BTN_Carnaval.png')}}">
                                        </span>
                                            <dl>
                                                <dt>狂欢节</dt>
                                                <dd class="star"><i class="iconfont">&#xe659;</i><i class="iconfont">
                                                        &#xe659;</i><i class="iconfont">&#xe659;</i><i class="iconfont">
                                                        &#xe659;</i><i class="iconfont">&#xe659;</i></dd>
                                                <dd class="gogame"><a href="#"
                                                                      @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?id=Carnaval','','width=1024,height=768')"
                                                                      @else onclick="return alert('请先登录！')" @endif>进入游戏</a></dd>
                                            </dl>
                                        </li>

                                        <li>
                                        <span class="index">
                                          3
                                        </span>
                                            <span class="gamepic">
                                          <img src="{{ asset('/web/images/games/mg/BTN_LadiesNite.png')}}">
                                        </span>
                                            <dl>
                                                <dt>淑女派对</dt>
                                                <dd class="star"><i class="iconfont">&#xe659;</i><i class="iconfont">
                                                        &#xe659;</i><i class="iconfont">&#xe659;</i><i class="iconfont">
                                                        &#xe659;</i><i class="iconfont">&#xe659;</i></dd>
                                                <dd class="gogame"><a href="#"  @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?id=LadiesNite','','width=1024,height=768')"
                                                                      @else onclick="return alert('请先登录！')" @endif>进入游戏</a></dd>
                                            </dl>
                                        </li>

                                        <li>
                                        <span class="index">
                                          4
                                        </span>
                                            <span class="gamepic">
                                          <img src="{{ asset('/web/images/games/mg/BTN_LuckyKoi.png')}}">
                                        </span>
                                            <dl>
                                                <dt>幸运的锦鲤</dt>
                                                <dd class="star"><i class="iconfont">&#xe659;</i><i class="iconfont">
                                                        &#xe659;</i><i class="iconfont">&#xe659;</i><i class="iconfont">
                                                        &#xe659;</i><i class="iconfont">&#xe659;</i></dd>
                                                <dd class="gogame"><a href="#"  @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?id=LuckyKoi','','width=1024,height=768')"
                                                                      @else onclick="return alert('请先登录！')" @endif>进入游戏</a></dd>
                                            </dl>
                                        </li>

                                        <li>
                                        <span class="index">
                                          5
                                        </span>
                                            <span class="gamepic">
                                          <img src="{{ asset('/web/images/games/mg/BTN_EuropeanRouletteGold.png')}}">
                                        </span>
                                            <dl>
                                                <dt>欧式黄金轮盘</dt>
                                                <dd class="star"><i class="iconfont">&#xe659;</i><i class="iconfont">
                                                        &#xe659;</i><i class="iconfont">&#xe659;</i><i class="iconfont">
                                                        &#xe659;</i><i class="iconfont">&#xe659;</i></dd>
                                                <dd class="gogame"><a href="#"  @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?id=EuroRouletteGold','','width=1024,height=768')"
                                                                      @else onclick="return alert('请先登录！')" @endif>进入游戏</a></dd>
                                            </dl>
                                        </li>

                                        <li>
                                        <span class="index">
                                          6
                                        </span>
                                            <span class="gamepic">
                                          <img src="{{ asset('/web/images/games/mg/BTN_AsianBeauty.png')}}">
                                        </span>
                                            <dl>
                                                <dt>亚洲风情</dt>
                                                <dd class="star"><i class="iconfont">&#xe659;</i><i class="iconfont">
                                                        &#xe659;</i><i class="iconfont">&#xe659;</i><i class="iconfont">
                                                        &#xe659;</i><i class="iconfont">&#xe659;</i></dd>
                                                <dd class="gogame"><a href="#"  @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?id=AsianBeauty','','width=1024,height=768')"
                                                                      @else onclick="return alert('请先登录！')" @endif>进入游戏</a></dd>
                                            </dl>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--BB--}}
                    <div class="module">
                        <div class="top">
                            <div class="egameTit"></div>
                            <div class="egame_filter_top">
                                <span class="title"><img src="{{ asset('/web/images/pt-pic-bz.png') }}">MG厅</span>
                                <span class="list_wrap active"><a href="javascript:void(0)" class="list ">全部</a></span>
                            </div>
                        </div>
                        <!--MG-->
                        <div class="bodylist">
                            <div class="egame_list mg_game">
                                <ul>

                                </ul>
                            </div>
                            <div class="egame_recommond">
                                {{--<div class="top_qrcode">--}}
                                {{--<div class="qrimg"><img src="{{ asset('/web/images/PT-APP.png') }}"></div>--}}
                                {{--<dl>--}}
                                {{--<dt>PT Android版</dt>--}}
                                {{--<dd>下载客户端，随时随地玩游戏,轻轻松松中大奖</dd>--}}
                                {{--</dl>--}}
                                {{--<a class="pc_download">PC客户端下载</a>--}}
                                {{--</div>--}}
                                <div class="hot_recommond">
                                    <h3><span class="tit">热门推荐</span></h3>

                                    <ul>
                                        <li class="on">
                                            <span class="index">
                                              1
                                            </span>
                                            <span class="gamepic">
                                              <img src="{{ asset('/web/images/games/mg/BTN_BreakAway.png')}}">
                                            </span>
                                            <dl>
                                                <dt>冰上曲棍球</dt>
                                                <dd class="star"><i class="iconfont">&#xe659;</i><i class="iconfont">
                                                        &#xe659;</i><i class="iconfont">&#xe659;</i><i class="iconfont">
                                                        &#xe659;</i><i class="iconfont">&#xe659;</i></dd>
                                                <dd class="gogame"><a href="#" @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?id=Breakaway','','width=1024,height=768')"
                                                                      @else onclick="return alert('请先登录！')" @endif>进入游戏</a></dd>
                                            </dl>
                                        </li>


                                        <li>
                                        <span class="index">
                                          2
                                        </span>
                                            <span class="gamepic">
                                          <img src="{{ asset('/web/images/games/mg/BTN_Carnaval.png')}}">
                                        </span>
                                            <dl>
                                                <dt>狂欢节</dt>
                                                <dd class="star"><i class="iconfont">&#xe659;</i><i class="iconfont">
                                                        &#xe659;</i><i class="iconfont">&#xe659;</i><i class="iconfont">
                                                        &#xe659;</i><i class="iconfont">&#xe659;</i></dd>
                                                <dd class="gogame"><a href="#"
                                                                      @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?id=Carnaval','','width=1024,height=768')"
                                                                      @else onclick="return alert('请先登录！')" @endif>进入游戏</a></dd>
                                            </dl>
                                        </li>

                                        <li>
                                        <span class="index">
                                          3
                                        </span>
                                            <span class="gamepic">
                                          <img src="{{ asset('/web/images/games/mg/BTN_LadiesNite.png')}}">
                                        </span>
                                            <dl>
                                                <dt>淑女派对</dt>
                                                <dd class="star"><i class="iconfont">&#xe659;</i><i class="iconfont">
                                                        &#xe659;</i><i class="iconfont">&#xe659;</i><i class="iconfont">
                                                        &#xe659;</i><i class="iconfont">&#xe659;</i></dd>
                                                <dd class="gogame"><a href="#"  @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?id=LadiesNite','','width=1024,height=768')"
                                                                      @else onclick="return alert('请先登录！')" @endif>进入游戏</a></dd>
                                            </dl>
                                        </li>

                                        <li>
                                        <span class="index">
                                          4
                                        </span>
                                            <span class="gamepic">
                                          <img src="{{ asset('/web/images/games/mg/BTN_LuckyKoi.png')}}">
                                        </span>
                                            <dl>
                                                <dt>幸运的锦鲤</dt>
                                                <dd class="star"><i class="iconfont">&#xe659;</i><i class="iconfont">
                                                        &#xe659;</i><i class="iconfont">&#xe659;</i><i class="iconfont">
                                                        &#xe659;</i><i class="iconfont">&#xe659;</i></dd>
                                                <dd class="gogame"><a href="#"  @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?id=LuckyKoi','','width=1024,height=768')"
                                                                      @else onclick="return alert('请先登录！')" @endif>进入游戏</a></dd>
                                            </dl>
                                        </li>

                                        <li>
                                        <span class="index">
                                          5
                                        </span>
                                            <span class="gamepic">
                                          <img src="{{ asset('/web/images/games/mg/BTN_EuropeanRouletteGold.png')}}">
                                        </span>
                                            <dl>
                                                <dt>欧式黄金轮盘</dt>
                                                <dd class="star"><i class="iconfont">&#xe659;</i><i class="iconfont">
                                                        &#xe659;</i><i class="iconfont">&#xe659;</i><i class="iconfont">
                                                        &#xe659;</i><i class="iconfont">&#xe659;</i></dd>
                                                <dd class="gogame"><a href="#"  @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?id=EuroRouletteGold','','width=1024,height=768')"
                                                                      @else onclick="return alert('请先登录！')" @endif>进入游戏</a></dd>
                                            </dl>
                                        </li>

                                        <li>
                                        <span class="index">
                                          6
                                        </span>
                                            <span class="gamepic">
                                          <img src="{{ asset('/web/images/games/mg/BTN_AsianBeauty.png')}}">
                                        </span>
                                            <dl>
                                                <dt>亚洲风情</dt>
                                                <dd class="star"><i class="iconfont">&#xe659;</i><i class="iconfont">
                                                        &#xe659;</i><i class="iconfont">&#xe659;</i><i class="iconfont">
                                                        &#xe659;</i><i class="iconfont">&#xe659;</i></dd>
                                                <dd class="gogame"><a href="#"  @if($_member) onclick="javascript:window.open('{{ route('mg.playGame') }}?id=AsianBeauty','','width=1024,height=768')"
                                                                      @else onclick="return alert('请先登录！')" @endif>进入游戏</a></dd>
                                            </dl>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--GG--}}
                    {{--<div class="module">--}}
                    {{--<div class="top">--}}
                    {{--<div class="egameTit"></div>--}}
                    {{--<div class="egame_filter_top">--}}
                    {{--<span class="title"><img src="{{ asset('/web/images/pt-pic-bz.png') }}">GG厅</span>--}}
                    {{--<span class="list_wrap active"><a href="javascript:void(0)" class="list ">全部</a></span>--}}
                    {{--<span class="list_wrap"><a href="javascript:void(0)" class="list">最新上线</a></span>--}}
                    {{--<span class="list_wrap">--}}
                    {{--<select class="list">--}}
                    {{--<option>选择游戏类型</option>--}}
                    {{--<option>选择游戏类型</option>--}}
                    {{--</select>--}}
                    {{--</span>--}}
                    {{--<span class="list_wrap">--}}
                    {{--<a href="javascript:void(0)"  class="list">我的收藏 <i class="iconfont love">&#xe634;</i></a>--}}
                    {{--</span>--}}
                    {{--<div class="list_showtype">--}}
                    {{--<a href="javascript:void(0)" class="list_one"><i class="iconfont">&#xe684;</i></a>--}}
                    {{--<a href="javascript:void(0)" class="list_two"><i class="iconfont">&#xe618;</i></a>--}}
                    {{--</div>--}}
                    {{--<div class="search_inp">--}}
                    {{--<input type="text" class="inp" placeholder="请输入游戏名称">--}}
                    {{--<i class="iconfont">&#xe601;</i>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="bodylist">--}}
                    {{--<div class="egame_list">--}}
                    {{--<ul>--}}
                    {{--@foreach($gg_rng_list as $k => $v)--}}
                    {{--<li class="scrollLoading" style="width: 130px;height: 168.44px">--}}
                    {{--<a href="javascript:;"  @if($_member) onclick="javascript:window.open('{{ route('gg.playGame') }}?game_code={{ $v->tcgGameCode }}','','width=1024,height=768')" @else onclick="return alert('请先登录！')"  @endif >--}}
                    {{--<img data-original="http://images.uxgaming.com/TCG_GAME_ICONS/{{ $v->productCode }}/{{ $v->tcgGameCode }}.png" alt=""  class="lazy">--}}
                    {{--<?php--}}
                    {{--$game_name_arr = (explode('_', $v->gameName));--}}
                    {{--?>--}}
                    {{--<p class="collect">{{ isset($game_name_arr[1])?str_limit($game_name_arr[1], 8):str_limit($game_name_arr[0], 8) }}</p>--}}
                    {{--<span class="button">开始游戏</span>--}}
                    {{--</a>--}}
                    {{--</li>--}}
                    {{--@endforeach--}}
                    {{--</ul>--}}
                    {{--</div>--}}
                    {{--<div class="egame_recommond">--}}
                    {{--<div class="top_qrcode">--}}
                    {{--<div class="qrimg"><img src="{{ asset('/web/images/PT-APP.png') }}"></div>--}}
                    {{--<dl>--}}
                    {{--<dt>PT Android版</dt>--}}
                    {{--<dd>下载客户端，随时随地玩游戏,轻轻松松中大奖</dd>--}}
                    {{--</dl>--}}
                    {{--<a class="pc_download">PC客户端下载</a>--}}
                    {{--</div>--}}
                    {{--<div class="hot_recommond">--}}
                    {{--<h3><span class="tit">热门推荐</span></h3>--}}
                    {{--<ul>--}}
                    {{--@foreach($gg_rng_list as $k => $v)--}}
                    {{--@if ($k < 10)--}}
                    {{--<li @if($k == 0) class="on" @endif>--}}
                    {{--<span class="index">--}}
                    {{--{{ $k + 1 }}--}}
                    {{--</span>--}}
                    {{--<span class="gamepic">--}}
                    {{--<img src="http://images.uxgaming.com/TCG_GAME_ICONS/{{ $v->productCode }}/{{ $v->tcgGameCode }}.png">--}}
                    {{--</span>--}}
                    {{--<dl>--}}
                    {{--<?php--}}
                    {{--$game_name_arr = (explode('_', $v->gameName));--}}
                    {{--?>--}}
                    {{--<dt>{{ isset($game_name_arr[1])?str_limit($game_name_arr[1], 8):str_limit($game_name_arr[0], 8) }}</dt>--}}
                    {{--<dd class="star"><i class="iconfont">&#xe659;</i><i class="iconfont">--}}
                    {{--&#xe659;</i><i class="iconfont">&#xe659;</i><i class="iconfont">--}}
                    {{--&#xe659;</i><i class="iconfont">&#xe659;</i></dd>--}}
                    {{--<dd class="gogame"><a href="javascript:;"  @if($_member) onclick="javascript:window.open('{{ route('gg.playGame') }}?game_code={{ $v->tcgGameCode }}','','width=1024,height=768')" @else onclick="return alert('请先登录！')"  @endif >进入游戏</a></dd>--}}
                    {{--</dl>--}}
                    {{--</li>--}}
                    {{--@endif--}}
                    {{--@endforeach--}}
                    {{--</ul>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--png--}}
                    {{--<div class="module">--}}
                    {{--<div class="top">--}}
                    {{--<div class="egameTit"></div>--}}
                    {{--<div class="egame_filter_top">--}}
                    {{--<span class="title"><img src="{{ asset('/web/images/pt-pic-bz.png') }}">PNG厅</span>--}}
                    {{--<span class="list_wrap active"><a href="javascript:void(0)" class="list ">全部</a></span>--}}
                    {{--<span class="list_wrap"><a href="javascript:void(0)" class="list">最新上线</a></span>--}}
                    {{--<span class="list_wrap">--}}
                    {{--<select class="list">--}}
                    {{--<option>选择游戏类型</option>--}}
                    {{--<option>选择游戏类型</option>--}}
                    {{--</select>--}}
                    {{--</span>--}}
                    {{--<span class="list_wrap">--}}
                    {{--<a href="javascript:void(0)"  class="list">我的收藏 <i class="iconfont love">&#xe634;</i></a>--}}
                    {{--</span>--}}
                    {{--<div class="list_showtype">--}}
                    {{--<a href="javascript:void(0)" class="list_one"><i class="iconfont">&#xe684;</i></a>--}}
                    {{--<a href="javascript:void(0)" class="list_two"><i class="iconfont">&#xe618;</i></a>--}}
                    {{--</div>--}}
                    {{--<div class="search_inp">--}}
                    {{--<input type="text" class="inp" placeholder="请输入游戏名称">--}}
                    {{--<i class="iconfont">&#xe601;</i>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="bodylist">--}}
                    {{--<div class="egame_list">--}}
                    {{--<ul>--}}
                    {{--@foreach($png_rng_list as $k => $v)--}}
                    {{--<li class="scrollLoading" style="width: 130px;height: 168.44px">--}}
                    {{--<a href="javascript:;"  @if($_member) onclick="javascript:window.open('{{ route('png.playGame') }}?game_code={{ $v->tcgGameCode }}','','width=1024,height=768')" @else onclick="return alert('请先登录！')"  @endif >--}}
                    {{--<img data-original="http://images.uxgaming.com/TCG_GAME_ICONS/{{ $v->productCode }}/{{ $v->tcgGameCode }}.png" alt=""  class="lazy">--}}
                    {{--<?php--}}
                    {{--$game_name_arr = (explode('_', $v->gameName));--}}
                    {{--?>--}}
                    {{--<p class="collect">{{ isset($game_name_arr[1])?str_limit($game_name_arr[1], 8):str_limit($game_name_arr[0], 8) }}</p>--}}
                    {{--<span class="button">开始游戏</span>--}}
                    {{--</a>--}}
                    {{--</li>--}}
                    {{--@endforeach--}}
                    {{--</ul>--}}
                    {{--</div>--}}
                    {{--<div class="egame_recommond">--}}
                    {{--<div class="top_qrcode">--}}
                    {{--<div class="qrimg"><img src="{{ asset('/web/images/PT-APP.png') }}"></div>--}}
                    {{--<dl>--}}
                    {{--<dt>PT Android版</dt>--}}
                    {{--<dd>下载客户端，随时随地玩游戏,轻轻松松中大奖</dd>--}}
                    {{--</dl>--}}
                    {{--<a class="pc_download">PC客户端下载</a>--}}
                    {{--</div>--}}
                    {{--<div class="hot_recommond">--}}
                    {{--<h3><span class="tit">热门推荐</span></h3>--}}
                    {{--<ul>--}}
                    {{--@foreach($png_rng_list as $k => $v)--}}
                    {{--@if ($k < 10)--}}
                    {{--<li @if($k == 0) class="on" @endif>--}}
                    {{--<span class="index">--}}
                    {{--{{ $k + 1 }}--}}
                    {{--</span>--}}
                    {{--<span class="gamepic">--}}
                    {{--<img src="http://images.uxgaming.com/TCG_GAME_ICONS/{{ $v->productCode }}/{{ $v->tcgGameCode }}.png">--}}
                    {{--</span>--}}
                    {{--<dl>--}}
                    {{--<?php--}}
                    {{--$game_name_arr = (explode('_', $v->gameName));--}}
                    {{--?>--}}
                    {{--<dt>{{ isset($game_name_arr[1])?str_limit($game_name_arr[1], 8):str_limit($game_name_arr[0], 8) }}</dt>--}}
                    {{--<dd class="star"><i class="iconfont">&#xe659;</i><i class="iconfont">--}}
                    {{--&#xe659;</i><i class="iconfont">&#xe659;</i><i class="iconfont">--}}
                    {{--&#xe659;</i><i class="iconfont">&#xe659;</i></dd>--}}
                    {{--<dd class="gogame"><a href="javascript:;"  @if($_member) onclick="javascript:window.open('{{ route('png.playGame') }}?game_code={{ $v->tcgGameCode }}','','width=1024,height=768')" @else onclick="return alert('请先登录！')"  @endif >进入游戏</a></dd>--}}
                    {{--</dl>--}}
                    {{--</li>--}}
                    {{--@endif--}}
                    {{--@endforeach--}}
                    {{--</ul>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--ttg--}}
                    {{--<div class="module">--}}
                    {{--<div class="top">--}}
                    {{--<div class="egameTit"></div>--}}
                    {{--<div class="egame_filter_top">--}}
                    {{--<span class="title"><img src="{{ asset('/web/images/pt-pic-bz.png') }}">TTG厅</span>--}}
                    {{--<span class="list_wrap active"><a href="javascript:void(0)" class="list ">全部</a></span>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="bodylist">--}}
                    {{--<div class="egame_list">--}}
                    {{--<ul>--}}
                    {{--@foreach($ttg_rng_list as $k => $v)--}}
                    {{--<li class="scrollLoading" style="width: 130px;height: 168.44px">--}}
                    {{--<a href="javascript:;"  @if($_member) onclick="javascript:window.open('{{ route('ttg.playGame') }}?game_code={{ $v->tcgGameCode }}','','width=1024,height=768')" @else onclick="return alert('请先登录！')"  @endif >--}}
                    {{--<img data-original="http://images.uxgaming.com/TCG_GAME_ICONS/{{ $v->productCode }}/{{ $v->tcgGameCode }}.png" alt=""  class="lazy">--}}
                    {{--<?php--}}
                    {{--$game_name_arr = (explode('_', $v->gameName));--}}
                    {{--?>--}}
                    {{--<p class="collect">{{ isset($game_name_arr[1])?str_limit($game_name_arr[1], 8):str_limit($game_name_arr[0], 8) }}</p>--}}
                    {{--<span class="button">开始游戏</span>--}}
                    {{--</a>--}}
                    {{--</li>--}}
                    {{--@endforeach--}}
                    {{--</ul>--}}
                    {{--</div>--}}
                    {{--<div class="egame_recommond">--}}
                    {{--<div class="top_qrcode">--}}
                    {{--<div class="qrimg"><img src="{{ asset('/web/images/PT-APP.png') }}"></div>--}}
                    {{--<dl>--}}
                    {{--<dt>PT Android版</dt>--}}
                    {{--<dd>下载客户端，随时随地玩游戏,轻轻松松中大奖</dd>--}}
                    {{--</dl>--}}
                    {{--<a class="pc_download">PC客户端下载</a>--}}
                    {{--</div>--}}
                    {{--<div class="hot_recommond">--}}
                    {{--<h3><span class="tit">热门推荐</span></h3>--}}
                    {{--<ul>--}}
                    {{--@foreach($ttg_rng_list as $k => $v)--}}
                    {{--@if ($k < 10)--}}
                    {{--<li @if($k == 0) class="on" @endif>--}}
                    {{--<span class="index">--}}
                    {{--{{ $k + 1 }}--}}
                    {{--</span>--}}
                    {{--<span class="gamepic">--}}
                    {{--<img src="http://images.uxgaming.com/TCG_GAME_ICONS/{{ $v->productCode }}/{{ $v->tcgGameCode }}.png">--}}
                    {{--</span>--}}
                    {{--<dl>--}}
                    {{--<?php--}}
                    {{--$game_name_arr = (explode('_', $v->gameName));--}}
                    {{--?>--}}
                    {{--<dt>{{ isset($game_name_arr[1])?str_limit($game_name_arr[1], 8):str_limit($game_name_arr[0], 8) }}</dt>--}}
                    {{--<dd class="star"><i class="iconfont">&#xe659;</i><i class="iconfont">--}}
                    {{--&#xe659;</i><i class="iconfont">&#xe659;</i><i class="iconfont">--}}
                    {{--&#xe659;</i><i class="iconfont">&#xe659;</i></dd>--}}
                    {{--<dd class="gogame"><a href="javascript:;"  @if($_member) onclick="javascript:window.open('{{ route('ttg.playGame') }}?game_code={{ $v->tcgGameCode }}','','width=1024,height=768')" @else onclick="return alert('请先登录！')"  @endif >进入游戏</a></dd>--}}
                    {{--</dl>--}}
                    {{--</li>--}}
                    {{--@endif--}}
                    {{--@endforeach--}}
                    {{--</ul>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--sa--}}
                    <div class="module">
                        <div class="top">
                            <div class="egameTit"></div>
                            <div class="egame_filter_top">
                                <span class="title"><img src="{{ asset('/web/images/pt-pic-bz.png') }}">SA厅</span>
                                <span class="list_wrap active"><a href="javascript:void(0)" class="list ">全部</a></span>
                            </div>
                        </div>
                        <div class="bodylist">
                            <div class="egame_list">
                                <ul>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href=" " @if($_member) onclick="javascript:window.open('{{ route('sa.playGame') }}?gametype=EG-SLOT-S007','','width=1024,height=768')" @else onclick="return alert('请先登录！')"  @endif>
                                            <img data-original="{{ asset('/web/images/games/sa/zombieHunter.png')}}" class="lazy">
                                            <p class="collect">丧尸猎人</p >
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href=" " @if($_member) onclick="javascript:window.open('{{ route('sa.playGame') }}?gametype=EG-SLOT-S006','','width=1024,height=768')" @else onclick="return alert('请先登录！')"  @endif>
                                            <img data-original="{{ asset('/web/images/games/sa/volleybeauties.jpg')}}" class="lazy">
                                            <p class="collect">美女沙排</p >
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href=" " @if($_member) onclick="javascript:window.open('{{ route('sa.playGame') }}?gametype=EG-SLOT-S005','','width=1024,height=768')" @else onclick="return alert('请先登录！')"  @endif>
                                            <img data-original="{{ asset('/web/images/games/sa/AngelsDemons.jpg')}}" class="lazy">
                                            <p class="collect">魔鬼天使</p >
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href=" " @if($_member) onclick="javascript:window.open('{{ route('sa.playGame') }}?gametype=EG-SLOT-S004','','width=1024,height=768')" @else onclick="return alert('请先登录！')"  @endif>
                                            <img data-original="{{ asset('/web/images/games/sa/BeckoningGirls.jpg')}}" class="lazy">
                                            <p class="collect">幸运喵星人</p >
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href=" " @if($_member) onclick="javascript:window.open('{{ route('pt.playGame') }}?gametype=EG-SLOT-A008','','width=1024,height=768')" @else onclick="return alert('请先登录！')"  @endif>
                                            <img data-original="{{ asset('/web/images/games/sa/redChamber.jpg')}}" class="lazy">
                                            <p class="collect">红楼春梦</p >
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href=" " @if($_member) onclick="javascript:window.open('{{ route('sa.playGame') }}?gametype=EG-SLOT-A002','','width=1024,height=768')" @else onclick="return alert('请先登录！')"  @endif>
                                            <img data-original="{{ asset('/web/images/games/sa/ThreeStarGod.jpg')}}" class="lazy">
                                            <p class="collect">三星报喜</p >
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href=" " @if($_member) onclick="javascript:window.open('{{ route('sa.playGame') }}?gametype=EG-SLOT-A004','','width=1024,height=768')" @else onclick="return alert('请先登录！')"  @endif>
                                            <img data-original="{{ asset('/web/images/games/sa/DragonTiger.jpg')}}" class="lazy">
                                            <p class="collect">龙虎</p >
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href=" " @if($_member) onclick="javascript:window.open('{{ route('sa.playGame') }}?gametype=EG-SLOT-A018','','width=1024,height=768')" @else onclick="return alert('请先登录！')"  @endif>
                                            <img data-original="{{ asset('/web/images/games/sa/CheungPoTsai.jpg')}}" class="lazy">
                                            <p class="collect">张保仔</p >
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href=" " @if($_member) onclick="javascript:window.open('{{ route('sa.playGame') }}?gametype=EG-SLOT-S007','','width=1024,height=768')" @else onclick="return alert('请先登录！')"  @endif>
                                            <img data-original="{{ asset('/web/images/games/sa/FantasyGoddess.jpg')}}" class="lazy">
                                            <p class="collect">梦幻女神</p >
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href=" " @if($_member) onclick="javascript:window.open('{{ route('sa.playGame') }}?gametype=EG-SLOT-A006','','width=1024,height=768')" @else onclick="return alert('请先登录！')"  @endif>
                                            <img data-original="{{ asset('/web/images/games/sa/JiGong.jpg')}}" class="lazy">
                                            <p class="collect">济公</p >
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href=" " @if($_member) onclick="javascript:window.open('{{ route('sa.playGame') }}?gametype=EG-SLOT-A001','','width=1024,height=768')" @else onclick="return alert('请先登录！')"  @endif>
                                            <img data-original="{{ asset('/web/images/games/sa/NewYearRich.jpg')}}" class="lazy">
                                            <p class="collect">过大年</p >
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href=" " @if($_member) onclick="javascript:window.open('{{ route('sa.playGame') }}?gametype=EG-SLOT-A020','','width=1024,height=768')" @else onclick="return alert('请先登录！')"  @endif>
                                            <img data-original="{{ asset('/web/images/games/sa/goldenchicken.jpg')}}" class="lazy">
                                            <p class="collect">运财金鸡</p >
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href=" " @if($_member) onclick="javascript:window.open('{{ route('sa.playGame') }}?gametype=EG-SLOT-A015','','width=1024,height=768')" @else onclick="return alert('请先登录！')"  @endif>
                                            <img data-original="{{ asset('/web/images/games/sa/FruitPoppers.jpg')}}" class="lazy">
                                            <p class="collect">脆爆水果</p >
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href=" " @if($_member) onclick="javascript:window.open('{{ route('sa.playGame') }}?gametype=EG-SLOT-A017','','width=1024,height=768')" @else onclick="return alert('请先登录！')"  @endif>
                                            <img data-original="{{ asset('/web/images/games/sa/LionDance.jpg')}}" class="lazy">
                                            <p class="collect">南北狮王</p >
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href=" " @if($_member) onclick="javascript:window.open('{{ route('sa.playGame') }}?gametype=EG-SLOT-A003','','width=1024,height=768')" @else onclick="return alert('请先登录！')"  @endif>
                                            <img data-original="{{ asset('/web/images/games/sa/guard.jpg')}}" class="lazy">
                                            <p class="collect">锦衣卫</p >
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href=" " @if($_member) onclick="javascript:window.open('{{ route('sa.playGame') }}?gametype=EG-SLOT-A013','','width=1024,height=768')" @else onclick="return alert('请先登录！')"  @endif>
                                            <img data-original="{{ asset('/web/images/games/sa/Bikini.jpg')}}" class="lazy">
                                            <p class="collect">比基尼狂热</p >
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href=" " @if($_member) onclick="javascript:window.open('{{ route('sa.playGame') }}?gametype=EG-SLOT-A012','','width=1024,height=768')" @else onclick="return alert('请先登录！')"  @endif>
                                            <img data-original="{{ asset('/web/images/games/sa/CreepyCuddlers.jpg')}}" class="lazy">
                                            <p class="collect">趣怪丧尸</p >
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href=" " @if($_member) onclick="javascript:window.open('{{ route('sa.playGame') }}?gametype=EG-SLOT-A009','','width=1024,height=768')" @else onclick="return alert('请先登录！')"  @endif>
                                            <img data-original="{{ asset('/web/images/games/sa/Classmate.jpg')}}" class="lazy">
                                            <p class="collect">同校生</p >
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href=" " @if($_member) onclick="javascript:window.open('{{ route('sa.playGame') }}?gametype=EG-SLOT-S003','','width=1024,height=768')" @else onclick="return alert('请先登录！')"  @endif>
                                            <img data-original="{{ asset('/web/images/games/sa/WongFaiHung.jpg')}}" class="lazy">
                                            <p class="collect">黄飞鸿</p >
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href=" " @if($_member) onclick="javascript:window.open('{{ route('sa.playGame') }}?gametype=EG-SLOT-A016','','width=1024,height=768')" @else onclick="return alert('请先登录！')"  @endif>
                                            <img data-original="{{ asset('/web/images/games/sa/Fish.jpg')}}" class="lazy">
                                            <p class="collect">热带宝藏</p >
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href=" " @if($_member) onclick="javascript:window.open('{{ route('sa.playGame') }}?gametype=EG-SLOT-A010','','width=1024,height=768')" @else onclick="return alert('请先登录！')"  @endif>
                                            <img data-original="{{ asset('/web/images/games/sa/FunnyFarm.jpg')}}" class="lazy">
                                            <p class="collect">欢乐农场</p >
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href=" " @if($_member) onclick="javascript:window.open('{{ route('sa.playGame') }}?gametype=EG-SLOT-A020','','width=1024,height=768')" @else onclick="return alert('请先登录！')"  @endif>
                                            <img data-original="{{ asset('/web/images/games/sa/goldenchicken.jpg')}}" class="lazy">
                                            <p class="collect">运财金鸡</p >
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                    <li class="scrollLoading" style="width: 130px;height: 168.44px">
                                        <a href=" " @if($_member) onclick="javascript:window.open('{{ route('sa.playGame') }}?gametype=EG-SLOT-A015','','width=1024,height=768')" @else onclick="return alert('请先登录！')"  @endif>
                                            <img data-original="{{ asset('/web/images/games/sa/FruitPoppers.jpg')}}" class="lazy">
                                            <p class="collect">脆爆水果</p >
                                            <span class="button">开始游戏</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="egame_recommond">
                                {{--<div class="top_qrcode">--}}
                                {{--<div class="qrimg"><img src="{{ asset('/web/images/PT-APP.png') }}"></div>--}}
                                {{--<dl>--}}
                                {{--<dt>PT Android版</dt>--}}
                                {{--<dd>下载客户端，随时随地玩游戏,轻轻松松中大奖</dd>--}}
                                {{--</dl>--}}
                                {{--<a class="pc_download">PC客户端下载</a>--}}
                                {{--</div>--}}
                                <div class="hot_recommond">
                                    <h3><span class="tit">热门推荐</span></h3>
                                    <ul>
                                        @foreach($ttg_rng_list as $k => $v)
                                            @if ($k < 10)
                                                <li @if($k == 0) class="on" @endif>
                                            <span class="index">
                                              {{ $k + 1 }}
                                            </span>
                                                    <span class="gamepic">
                                              <img src="http://images.uxgaming.com/TCG_GAME_ICONS/{{ $v->productCode }}/{{ $v->tcgGameCode }}.png">
                                            </span>
                                                    <dl>
                                                        <?php
                                                        $game_name_arr = (explode('_', $v->gameName));
                                                        ?>
                                                        <dt>{{ isset($game_name_arr[1])?str_limit($game_name_arr[1], 8):str_limit($game_name_arr[0], 8) }}</dt>
                                                        <dd class="star"><i class="iconfont">&#xe659;</i><i class="iconfont">
                                                                &#xe659;</i><i class="iconfont">&#xe659;</i><i class="iconfont">
                                                                &#xe659;</i><i class="iconfont">&#xe659;</i></dd>
                                                        <dd class="gogame"><a href="javascript:;"  @if($_member) onclick="javascript:window.open('{{ route('ttg.playGame') }}?game_code={{ $v->tcgGameCode }}','','width=1024,height=768')" @else onclick="return alert('请先登录！')"  @endif >进入游戏</a></dd>
                                                    </dl>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <div class="notice_layer">
        <h3>公告详情 <span class="close"></span></h3>
        <div class="notice_con">
            @foreach($_system_notices as $v)
                <div class="module">
                    <h4>{{ $v->title }}</h4>
                    <p>✿{{ $v->content }}</p>
                </div>
            @endforeach
        </div>
    </div>
    <script>
        (function($){
            $(function(){
                $('.live-ul li').on('mouseenter',function(){
                    $(this).addClass('on').siblings('li').removeClass('on');
                });
                $('.egameslide').on('click','.disabled',function(){
                    layer.msg('暂未开通，敬请期待！',{icon:6});
                    return false;
                });
                jQuery(".egameslide").slide({trigger:"click",mainCell:".bd"});

                $("img.lazy").lazyload({
                    placeholder : "{{ asset('/web/images/egame-loading.gif') }}",
                    effect: "fadeIn",
                    skip_invisible : false  //解决滚动才显示的问题
                });

                //公告
                $('#mar0').on('click',function(){
                    var notice_index=layer.open({
                        type: 1,
                        title: false,
                        closeBtn: 0,
                        area: ['680px'],
                        skin: 'layui-layer-nobg', //没有背景色
                        shadeClose: true,
                        content: $('.notice_layer')
                    });

                    $('.notice_layer').on('click','.close',function(){
                        layer.close(notice_index)
                    })
                })


            });






        })(jQuery)
    </script>
@endsection