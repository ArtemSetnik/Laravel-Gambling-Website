@extends('web.layouts.main')
@section('content')
    {{--<link rel="stylesheet" href="{{ asset('/web/css/caipiao.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('/web/css/lottery.css') }}">
    <div id="banner" style="display: none;"></div>
    <div class="notice-row" style="top: -306px;display:none;">
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

    <div id="content">
        <div class="wrapper">
            <section id="lobby" ng-controller="LobbiesCtrl" class="ng-scope">
                <ul class="game-list">
                    <!-- @if(in_array('NG', $_api_list))
                        <li game-box="ng"
                            @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=NG&game_type=3','','width=1024,height=768')"
                            @else
                            onclick="return layer.msg('请先登录!',{icon:6})" @endif
                        >
                            <div class="pic"></div>
                            <div class="info">
                                <span class="title">NG信用彩票</span>
                                最火爆彩票投注平台，口碑最好，用户好评率最高的平台
                            </div>
                        </li>
                    @endif
                        @if(in_array('NG', $_api_list))
                            <li game-box="ng2"
                                @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=NG&game_type=3&lott_type=1','','width=1024,height=768')"
                                @else
                                onclick="return layer.msg('请先登录!',{icon:6})" @endif
                            >
                                <div class="pic"></div>
                                <div class="info">
                                    <span class="title">NG传统彩票</span>
                                    最火爆彩票投注平台，口碑最好，用户好评率最高的平台
                                </div>
                            </li>
                        @endif
                    @if(in_array('IG', $_api_list))
                    <li game-box="ig"
                        @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=IG&game_type=3','','width=1024,height=768')"
                        @else
                        onclick="return layer.msg('请先登录!',{icon:6})" @endif
                    >
                        <div class="pic"></div>
                        <div class="info">
                            <span class="title">IG彩票</span>亚洲最大最流行的彩票平台之一
                        </div>
                    </li>
                    @endif
                        @if(in_array('IG', $_api_list))
                            <li game-box="ig6"
                                @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=IG&game_type=3&game_code=imlotto10059','','width=1024,height=768')"
                                @else
                                onclick="return layer.msg('请先登录!',{icon:6})" @endif
                            >
                                <div class="pic"></div>
                                <div class="info">
                                    <span class="title">IG六合彩</span>亚洲最大最流行的彩票平台之一
                                </div>
                            </li>
                        @endif
                    @if(in_array('EG', $_api_list))
                    <li game-box="eg"
                        @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=EG&game_type=3','','width=1024,height=768')"
                        @else
                        onclick="return layer.msg('请先登录!',{icon:6})" @endif
                    >
                        <div class="pic"></div>
                        <div class="info"><span class="title">EG彩票</span>提供丰富的游戏玩法</div>
                    </li>
                    @endif
                    @if(in_array('VR', $_api_list))
                    <li game-box="vr"
                        @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=VR&game_type=3','','width=1024,height=768')"
                        @else
                        onclick="return layer.msg('请先登录!',{icon:6})" @endif
                    >
                        <div class="pic"></div>
                        <div class="info"><span class="title">VR彩票</span>即时开奖，即时投注，分分都刺激</div>
                    </li>
                    @endif
                    @if(in_array('BG', $_api_list))
                    <li game-box="bg"
                        @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=BG&game_type=3','','width=1024,height=768')"
                        @else
                        onclick="return layer.msg('请先登录!',{icon:6})" @endif
                    >
                        <div class="pic"></div>
                        <div class="info"><span class="title">BG{{ __('ft.lottery_ticket') }}</span>{{ __('ft.One_of_the_top_ranking_lottery_platforms') }}</div>
                    </li>
                    @endif
                    @if(in_array('BBIN', $_api_list))
                    <li game-box="bb"
                        @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=BBIN&game_type=3','','width=1024,height=768')"
                        @else
                        onclick="return layer.msg('请先登录!',{icon:6})" @endif
                    >
                        <div class="pic"></div>
                        <div class="info"><span class="title">BBIN{{ __('ft.lottery_ticket') }}</span>{{ __('ft.One_of_the_largest_and_most_popular_lottery') }}</div>
                    </li>
                    @endif
                    <li game-box="more">
                        <div class="pic"></div>
                        <div class="info"><span class="title">{{ __('ft.Stay_tuned') }}</span>COMING SOON</div>
                    </li> -->
                    @if(in_array('HC', $_api_list))
                        <li game-box="hc"
                            @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=HC&game_type=5','','width=1024,height=768')"
                            @else onclick="return layer.msg('请先登录！',{icon:6})" @endif
                        >
                        <div class="pic"></div>
                        <div class="info"><span class="title">{{ __('ft.Dynasty_e_sports') }}</span>HC SPORTS</div>


                        </li>
                    @endif
                     @if(in_array('ESB', $_api_list))
                        <li game-box="esb" 
                            @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=ESB&game_type=5','','width=1024,height=768')"
                            @else onclick="return layer.msg('请先登录！',{icon:6})" @endif
                        >
                        <div class="pic"></div>
                        <div class="info"><span class="title">ESB{{ __('ft.Gaming') }}</span>ESB {{ __('ft.Gaming') }}</div>
                            
                        </li> 
                   @endif

                </ul>
            </section>
        </div>
    </div>
@endsection