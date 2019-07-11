@extends('web.layouts.main')
@section('content')
    <link rel="stylesheet" href="{{ asset('/web/css/catchFish.css') }}">
    <div class="fish">
        <div class="fish-game">
            <div id="logo"></div>
            <div class="notice-row" style="top: -186px;">
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
            <ul id="game-list">
                @if(in_array('AG', $_api_list))
                    <li @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=AG&game_type=6','','width=1024,height=768')"
                        @else onclick="return layer.msg('请先登录!',{icon:6})" @endif>
                        <div>
                            <img src="{{ asset('/web/images/catchFish/ag.png') }}">
                            <div class="game-text">AG {{ __('ft.Fishing_king') }}</div>
                        </div>
                    </li>
                @endif
                @if(in_array('BBIN', $_api_list))
                    <li @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=BBIN&game_type=6','','width=1024,height=768')"
                        @else onclick="return layer.msg('请先登录!',{icon:6})" @endif>
                        <div>
                            <img src="{{ asset('/web/images/catchFish/bb.png') }}">
                            <div class="game-text">BB {{ __('ft.Fishing_man') }}</div>
                        </div>
                    </li>
                @endif
                @if(in_array('BBIN', $_api_list))
                    <li @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=BBIN&game_type=6&game_code=38001','','width=1024,height=768')"
                        @else onclick="return layer.msg('请先登录!',{icon:6})" @endif>
                        <div>
                            <img src="{{ asset('/web/images/catchFish/bb2.png') }}">
                            <div class="game-text">BB {{ __('ft.Fishing_master') }}</div>
                        </div>
                    </li>
                @endif
                @if(in_array('MW', $_api_list))
                    <li @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=MW&game_type=6','','width=1024,height=768')"
                        @else onclick="return layer.msg('请先登录!',{icon:6})" @endif>
                        <div>
                            <img src="{{ asset('/web/images/catchFish/mw.png') }}">
                            <div class="game-text">MW {{ __('ft.Thousand_cannon_fishing') }}</div>
                        </div>
                    </li>
                @endif
                @if(in_array('SA', $_api_list))
                    <li @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=SA&game_type=6','','width=1024,height=768')"
                        @else onclick="return layer.msg('请先登录!',{icon:6})" @endif>
                        <div>
                            <img src="{{ asset('/web/images/catchFish/sa.png') }}">
                            <div class="game-text">SA {{ __('ft.Fish_is_endless') }}</div>
                        </div>
                    </li>
                @endif
                @if(in_array('CQ9', $_api_list))
                    <li @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=CQ9&game_type=6','','width=1024,height=768')"
                        @else onclick="return layer.msg('请先登录!',{icon:6})" @endif>
                        <div>
                            <img src="{{ asset('/web/images/catchFish/cq9.png') }}">
                            <div class="game-text">CQ9 {{ __('ft.Huangjin_Fishing_Ground') }}</div>
                        </div>
                    </li>
                @endif
                @if(in_array('JDB', $_api_list))
                    <li @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=JDB&game_type=6&game_code=7_7003','','width=1024,height=768')"
                        @else onclick="return layer.msg('请先登录!',{icon:6})" @endif>
                        <div>
                            <img src="{{ asset('/web/images/catchFish/jdb.png') }}">
                            <div class="game-text">JDB {{ __('ft.God_of_wealth_fishing') }}</div>
                        </div>
                    </li>
                @endif
                @if(in_array('FG', $_api_list))
                    <li @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=FG&game_type=6','','width=1024,height=768')"
                        @else onclick="return layer.msg('请先登录!',{icon:6})" @endif>
                        <div>
                            <img src="{{ asset('/web/images/catchFish/fg.png') }}">
                            <div class="game-text">FG {{ __('ft.Joy_fishing') }}</div>
                        </div>
                    </li>
                @endif
                @if(in_array('JDB', $_api_list))
                    <li @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=JDB&game_type=6&game_code=7_7001','','width=1024,height=768')"
                        @else onclick="return layer.msg('请先登录!',{icon:6})" @endif>
                        <div>
                            <img src="{{ asset('/web/images/catchFish/jdblw.png') }}">
                            <div class="game-text">JDB {{ __('ft.Dragon_King_Fishing') }}</div>
                        </div>
                    </li>
                @endif
                @if(in_array('JDB', $_api_list))
                    <li @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=JDB&game_type=6&game_code=7_7002','','width=1024,height=768')"
                        @else onclick="return layer.msg('请先登录!',{icon:6})" @endif>
                        <div>
                            <img src="{{ asset('/web/images/catchFish/jdblw2.png') }}">
                            <div class="game-text">JDB {{ __('ft.Dragon_King_Fishing') }}2</div>
                        </div>
                    </li>
                @endif
                @if(in_array('FG', $_api_list))
                    <li @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=FG&game_type=6&game_code=fish_mm','','width=1024,height=768')"
                        @else onclick="return layer.msg('请先登录!',{icon:6})" @endif>
                        <div>
                            <img src="{{ asset('/web/images/catchFish/fgmr.png') }}">
                            <div class="game-text">FG {{ __('ft.Beauty_fishing') }}</div>
                        </div>
                    </li>
                @endif
                @if(in_array('FG', $_api_list))
                    <li @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=FG&game_type=6&game_code=fish_3D','','width=1024,height=768')"
                        @else onclick="return layer.msg('请先登录!',{icon:6})" @endif>
                        <div>
                            <img src="{{ asset('/web/images/catchFish/fgjnh.png') }}">
                            <div class="game-text">FG {{ __('ft.Fishing_carnival') }}</div>
                        </div>
                    </li>
                @endif
                @if(in_array('FG', $_api_list))
                    <li @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=FG&game_type=6&game_code=fish_tt','','width=1024,height=768')"
                        @else onclick="return layer.msg('请先登录!',{icon:6})" @endif>
                        <div>
                            <img src="{{ asset('/web/images/catchFish/fgtt.png') }}">
                            <div class="game-text">FG {{ __('ft.Fishing_every_day') }}</div>
                        </div>
                    </li>
                @endif
                @if(in_array('FG', $_api_list))
                    <li @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=FG&game_type=6&game_code=fish_bn','','width=1024,height=768')"
                        @else onclick="return layer.msg('请先登录!',{icon:6})" @endif>
                        <div>
                            <img src="{{ asset('/web/images/catchFish/fgbn.png') }}">
                            <div class="game-text">FG {{ __('ft.Bird_catcher') }}</div>
                        </div>
                    </li>
                @endif
                @if(in_array('FG', $_api_list))
                    <li @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=FG&game_type=6&game_code=fish_zj','','width=1024,height=768')"
                        @else onclick="return layer.msg('请先登录!',{icon:6})" @endif>
                        <div>
                            <img src="{{ asset('/web/images/catchFish/fglt.png') }}">
                            <div class="game-text">FG {{ __('ft.Thunder_Warrior') }}</div>
                        </div>
                    </li>
                @endif
                {{--@if(in_array('CQ9', $_api_list))
                    <li @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=CQ9&game_type=6&game_code=AD01','','width=1024,height=768')"
                        @else onclick="return layer.msg('请先登录!',{icon:6})" @endif>
                        <div>
                            <img src="{{ asset('/web/images/catchFish/cq9byql.png') }}">
                            <div class="game-text">CQ9 {{ __('ft.Fishing') }}喽</div>
                        </div>
                    </li>
                @endif--}}
                @if(in_array('MT', $_api_list))
                    <li @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=MT&game_type=6&game_code=PTG0011','','width=1024,height=768')"
                        @else onclick="return layer.msg('请先登录!',{icon:6})" @endif>
                        <div>
                            <img src="{{ asset('/web/images/catchFish/mtlk.png') }}">
                            <div class="game-text">MT {{ __('ft.Li_Wei_fishing') }}</div>
                        </div>
                    </li>
                @endif
                @if(in_array('MT', $_api_list))
                    <li @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=MT&game_type=6&game_code=PTG0045','','width=1024,height=768')"
                        @else onclick="return layer.msg('请先登录!',{icon:6})" @endif>
                        <div>
                            <img src="{{ asset('/web/images/catchFish/mtjc.png') }}">
                            <div class="game-text">MT {{ __('ft.Golden_carp_fishing') }}</div>
                        </div>
                    </li>
                @endif
                    @if(in_array('PT', $_api_list))
                        <li @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=PT&game_type=6&game_code=cashfi','','width=1024,height=768')"
                            @else onclick="return layer.msg('请先登录!',{icon:6})" @endif>
                            <div>
                                <img src="{{ asset('/web/images/catchFish/ptdyj.png') }}">
                                <div class="game-text">PT {{ __('ft.Deep_sea_big_winner') }}</div>
                            </div>
                        </li>
                    @endif
                    @if(in_array('SW', $_api_list))
                        <li @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=SW&game_type=6','','width=1024,height=768')"
                            @else onclick="return layer.msg('请先登录!',{icon:6})" @endif>
                            <div>
                                <img src="{{ asset('/web/images/catchFish/sw.png') }}">
                                <div class="game-text">SW {{ __('ft.Fishing_blessing') }}</div>
                            </div>
                        </li>
                    @endif
                    @if(in_array('SW', $_api_list))
                        <li @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=SW&game_type=6&game_code=sw_fuqsg','','width=1024,height=768')"
                            @else onclick="return layer.msg('请先登录!',{icon:6})" @endif>
                            <div>
                                <img src="{{ asset('/web/images/catchFish/swfqsg.png') }}">
                                <div class="game-text">SW {{ __('ft.Blessed_fruit') }}</div>
                            </div>
                        </li>
                    @endif
            </ul>
        </div>
    </div>


@endsection