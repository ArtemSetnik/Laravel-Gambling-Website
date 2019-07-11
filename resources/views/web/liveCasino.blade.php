@extends('web.layouts.main')
@section('content')
    <link rel="stylesheet" href="{{ asset('/web/css/livecasion.css') }}">
    <div style="background: #1b191a;">
        <div id="banner"></div>
        <div class="notice-row" style="top: -131px;">
            <div class="noticeBox">
                <div class="w">
                    <div class="title">
                       {{ __('ft.Latest_Announcement') }} ：
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
                <section id="lobby" ng-controller="LobbiesCtrl" class="ng-scope">
                    <ul class="game-list">
                        @if(in_array('AG', $_api_list))
                        <li game-box="ag"
                            @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=AG&game_type=1','','width=1024,height=768')"
                            @else onclick="return layer.msg('请先登录!',{icon:6})" @endif>
                        ><span>AG {{ __('ft.Video') }}</span></li>
                        @endif
                        @if(in_array('BBIN', $_api_list))
                        <li game-box="bb"
                            @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=BBIN&game_type=1','','width=1024,height=768')"
                            @else onclick="return layer.msg('请先登录!',{icon:6})" @endif
                                ><span>BBIN {{ __('ft.Video') }}</span></li>
                        @endif
                        @if(in_array('BG', $_api_list))
                        <li game-box="bg"
                            @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=BG&game_type=1','','width=1024,height=768')"
                            @else onclick="return layer.msg('请先登录!',{icon:6})" @endif
                        ><span>BG {{ __('ft.Video') }}</span></li>
                        @endif
                        @if(in_array('SUNBET', $_api_list))
                        <li game-box="sb"
                            @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=SUNBET&game_type=1','','width=1024,height=768')"
                            @else onclick="return layer.msg('请先登录!',{icon:6})" @endif
                        ><span>{{ __('ft.Shenbo_video') }}</span></li>
                        @endif
                        @if(in_array('ALLBET', $_api_list))
                        <li game-box="ab" class="no-margin"
                            @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=ALLBET&game_type=1','','width=1024,height=768')"
                            @else onclick="return layer.msg('请先登录!',{icon:6})" @endif
                        ><span>{{ __('ft.Obo_video') }}</span></li>
                        @endif
                        @if(in_array('LEBO', $_api_list))
                            <li game-box="ab"
                                @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=LEBO&game_type=1','','width=1024,height=768')"
                                @else onclick="return layer.msg('请先登录!',{icon:6})" @endif
                            ><span>LEBO {{ __('ft.Video') }}</span></li>
                        @endif
                        @if(in_array('SA', $_api_list))
                            <li game-box="sa"
                                @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=SA&game_type=1','','width=1024,height=768')"
                                @else onclick="return layer.msg('请先登录!',{icon:6})" @endif
                            ><span>SA {{ __('ft.Video') }}</span></li>
                        @endif
                            @if(in_array('GD', $_api_list))
                            <li game-box="gd"
                                @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=GD&game_type=1','','width=1024,height=768')"
                                @else onclick="return layer.msg('请先登录!',{icon:6})" @endif
                            ><span>GD {{ __('ft.Video') }}</span></li>
                            @endif
                            @if(in_array('OG', $_api_list))
                            <li game-box="og" class="no-margin"
                                @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=OG&game_type=1','','width=1024,height=768')"
                                @else onclick="return layer.msg('请先登录!',{icon:6})" @endif
                            ><span>OG {{ __('ft.Video') }}</span></li>
                            @endif
                            @if(in_array('DG', $_api_list))
                            <li game-box="dg"
                                @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=DG&game_type=1','','width=1024,height=768')"
                                @else onclick="return layer.msg('请先登录!',{icon:6})" @endif
                            ><span>DG {{ __('ft.Video') }}</span></li>
                            @endif
                            @if(in_array('MG', $_api_list))
                        <li game-box="mg"
                            @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=MG&game_type=1','','width=1024,height=768')"
                            @else onclick="return layer.msg('请先登录!',{icon:6})" @endif
                        ><span>MG {{ __('ft.Video') }}</span></li>
                            @endif
                            @if(in_array('PT', $_api_list))
                            <li game-box="pt"
                                @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=PT&game_type=1','','width=1024,height=768')"
                                @else onclick="return layer.msg('请先登录!',{icon:6})" @endif
                            ><span>PT {{ __('ft.Video') }}</span></li>
                            @endif
                            @if(in_array('GPI', $_api_list))
                        <li game-box="gpi" class="no-margin"
                            @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=GPI&game_type=1','','width=1024,height=768')"
                            @else onclick="return layer.msg('请先登录!',{icon:6})" @endif
                        ><span>GPI {{ __('ft.Video') }}</span></li>
                            @endif
                    </ul>
                </section>
        </div>

    </div>
@endsection