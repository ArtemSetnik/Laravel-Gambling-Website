@extends('web.layouts.main')
@section('content')
    <link rel="stylesheet" href="{{ asset('/web/css/game.css') }}">
    <div class="notice-row" style="top: 49px;">
        <div class="noticeBox">
            <div class="w">
                <div class="title">
                   {{__('ft.Announcement')}} ：
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
    <div id="banner"></div>

    <div id="content">
        <div class="wrapper">
            <section id="lobby" ng-controller="LobbiesCtrl" class="ng-scope">
                <ul class="game-list" ng-init="show='mg'">
                    @if(in_array('PP', $_api_list))
                        <li class="active" game-box="pp" onclick="getGameList('pp')" ng-click="show='pp'" ng-class="{'active': show=='pp'}" data-id="pp">
                            <p>PP{{__('ft.electronic')}}<span>PRAGAMTIC PLAY</span></p>
                        </li>
                    @endif
                    @if(in_array('CQ9', $_api_list))
                        <li game-box="cq9" onclick="getGameList('cq9')" ng-click="show='cq9'" ng-class="{'active': show=='cq9'}" data-id="cq9">
                            <p>CQ9{{__('ft.electronic')}}<span>CQ9 PLAY</span></p>
                        </li>
                    @endif
                    @if(in_array('MW', $_api_list))
                        <li game-box="mw" onclick="getGameList('mw')" ng-click="show='mw'" ng-class="{'active': show=='mw'}" data-id="mw">
                            <p>MW{{__('ft.electronic')}}<span>MW GAMING</span></p>
                        </li>
                    @endif
                    @if(in_array('SG', $_api_list))
                        <li game-box="sg" onclick="getGameList('sg')" ng-click="show='sg'" ng-class="{'active': show=='sg'}" data-id="sg">
                            <p>SG{{__('ft.electronic')}}<span>SPADEGAMING</span></p>
                        </li>
                    @endif
                    @if(in_array('JDB', $_api_list))
                        <li game-box="jdb" onclick="getGameList('jdb')" ng-click="show='jdb'" ng-class="{'active': show=='jdb'}" data-id="jdb">
                            <p>JDB{{__('ft.electronic')}}<span>JDB PLAY</span></p>
                        </li>
                    @endif
                    @if(in_array('FG', $_api_list))
                        <li game-box="fg" onclick="getGameList('fg')" ng-click="show='fg'" ng-class="{'active': show=='fg'}" data-id="fg">
                            <p>FG{{__('ft.electronic')}}<span>FG PLAY</span></p>
                        </li>
                    @endif
                    @if(in_array('SA', $_api_list))
                        <li game-box="sa" onclick="getGameList('sa')" ng-click="show='sa'" ng-class="{'active': show=='sa'}" data-id="sa">
                            <p>SA{{__('ft.electronic')}}<span>SA PLAY</span></p>
                        </li>
                    @endif
                    @if(in_array('PT', $_api_list))
                        <li game-box="pt" onclick="getGameList('pt')" ng-click="show='pt'" ng-class="{'active': show=='pt'}" data-id="pt">
                            <p>PT{{__('ft.electronic')}}<span>PLAYTECH</span></p>
                        </li>
                    @endif
                    @if(in_array('MG', $_api_list))
                    <li game-box="mg" onclick="getGameList('mg')" ng-click="show='mg'" ng-class="{'active': show=='mg'}" data-id="mg">
                        <p>MG{{__('ft.electronic')}}<span>MICROGAMING</span></p>
                    </li>
                    @endif

                    @if(in_array('AG', $_api_list))
                    <li game-box="ag" onclick="getGameList('ag')" ng-click="show='ag'" ng-class="{'active': show=='ag'}" data-id="ag">
                        <p>AG{{__('ft.electronic')}}<span>ASIAGAMING</span></p>
                    </li>
                    @endif
                    @if(in_array('GPI', $_api_list))
                    <li game-box="gpi" onclick="getGameList('gpi')" ng-click="show='gpi'" ng-class="{'active': show=='gpi'}" data-id="gpi">
                        <p>GPI{{__('ft.electronic')}}<span>GAMEPLAY</span></p>
                    </li>
                    @endif
                    @if(in_array('BBIN', $_api_list))
                    <li game-box="bbin" onclick="getGameList('bbin')" ng-click="show='bbin'" ng-class="{'active': show=='bbin'}" data-id="bbin">
                        <p>BBIN{{__('ft.electronic')}}<span>BBIN GAMING</span></p>
                    </li>
                    @endif
                    @if(in_array('QT', $_api_list))
                    <li game-box="qt" onclick="getGameList('qt')" ng-click="show='qt'" ng-class="{'active': show=='qt'}" data-id="qt">
                        <p>QT{{__('ft.electronic')}}<span>QTech PLAY</span></p>
                    </li>
                    @endif
                    @if(in_array('SW', $_api_list))
                        <li game-box="sw" onclick="getGameList('sw')">
                            <p>SW{{__('ft.electronic')}}<span>sw PLAY</span></p>
                        </li>
                    @endif
                    @if(in_array('BNG', $_api_list))
                            <li game-box="bng" onclick="getGameList('bng')">
                                <p>BNG{{__('ft.electronic')}}<span>bng PLAY</span></p>
                            </li>
                    @endif
                        @if(in_array('DT', $_api_list))
                            <li game-box="dt" onclick="getGameList('dt')">
                                <p>DT{{__('ft.electronic')}}<span>DT PLAY</span></p>
                            </li>
                        @endif
                        @if(in_array('PG', $_api_list))
                            <li game-box="pg" onclick="getGameList('pg')">
                                <p>PG{{__('ft.electronic')}}<span>PG PLAY</span></p>
                            </li>
                        @endif
                        @if(in_array('GTI', $_api_list))
                            <li game-box="gti" onclick="getGameList('gti')">
                                <p>GTI{{__('ft.electronic')}}<span>GTI PLAY</span></p>
                            </li>
                        @endif
                        @if(in_array('PNG', $_api_list))
                            <li game-box="png" onclick="getGameList('png')">
                                <p>PNG{{__('ft.electronic')}}<span>PNG PLAY</span></p>
                            </li>
                        @endif
                </ul>
                <iframe id="gameFrame" name="gameFrame" src="{{route('ng.playGame')}}?plat_type=PP&game_type=2"></iframe>
            </section>
        </div>
    </div>



@endsection
@section('after.js')
    <script type="text/javascript">
        $(document).ready(function () {
            $('ul li').click(function () {
                $(this).siblings().removeClass('active');
                $(this).addClass('active');

            })
        })

        function getGameList(plat_type) {
            var url = "{{route('ng.playGame')}}?plat_type=" + plat_type + "&game_type=2";
            $("#gameFrame").attr("src", url);//
        }

    </script>
@endsection
