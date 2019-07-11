@extends('web.layouts.main')
@section('content')
    <link rel="stylesheet" href="{{ asset('/web/css/dianzi.css') }}">
    <div id="banner"></div>
    <div class="egame-container" style="background-color:#241d17">
        <div class="slot-wp">
            <!--menu-->
            <ul id="j-gameMenu" class="tab-menu-slot bs1">
                @if(in_array('KG', $_api_list))
                    <li @if('KG' == $api_name) class="active" @endif>
                        <a href="{{ route('web.eGame') }}?api_name=CQ9">
                            <i class="cq-ico"></i>
                            <span>传奇电子</span>
                            <b class="b1"></b>
                            <b class="hot ico"></b>
                        </a>
                    </li>
                @endif
                @if(in_array('PT', $_api_list))
                    <li @if('PT' == $api_name) class="active" @endif>
                        <a href="{{ route('web.eGame') }}?api_name=PT">
                            <i class="pt-ico"></i>
                            <span>PT厅</span>
                            <b class="b1"></b>
                            <b class="hot ico"></b>
                        </a>
                    </li>
                @endif
                @if(in_array('MG', $_api_list))
                    <li @if('MG' == $api_name) class="active" @endif>
                        <a href="{{ route('web.eGame') }}?api_name=MG">
                            <i class="mg-ico"></i>
                            <span>MG厅</span>
                            <b class="b1"></b>
                            <b class="ico"></b>
                        </a>
                    </li>
                @endif
                @if(in_array('DT', $_api_list))
                    <li @if('DT' == $api_name) class="active" @endif>
                        <a href="{{ route('web.eGame') }}?api_name=DT">
                            <i class="dt-ico"></i>
                            <span>DT厅</span>
                            <b class="b1"></b>
                            <b class="new ico"></b>
                        </a>
                    </li>
                @endif
                @if(in_array('TTG', $_api_list))
                    <li @if('TTG' == $api_name) class="active" @endif>
                        <a href="{{ route('web.eGame') }}?api_name=TTG">
                            <i class="ttg-ico"></i>
                            <span>TTG厅</span>
                            <b class="b1"></b>
                            <b class=" ico"></b>
                        </a>
                    </li>
                @endif
                @if(in_array('PNG', $_api_list))
                    <li @if('PNG' == $api_name) class="active" @endif>
                        <a href="{{ route('web.eGame') }}?api_name=PNG">
                            <i class="png-ico"></i>
                            <span>PNG厅</span>
                            <b class="b1"></b>
                            <b class=" ico"></b>
                        </a>
                    </li>
                @endif
                @if(in_array('BBIN', $_api_list))
                    <li @if('BBIN' == $api_name) class="active" @endif>
                        <a href="{{ route('web.eGame') }}?api_name=BBIN">
                            <i class="bbin-ico"></i>
                            <span>BBIN厅</span>
                            <b class="b1"></b>
                            <b class=" ico"></b>
                        </a>
                    </li>
                @endif
                @if(in_array('GG', $_api_list))
                    <li @if('GG' == $api_name) class="active" @endif>
                        <a href="{{ route('web.eGame') }}?api_name=GG">
                            <i class="gg-ico"></i>
                            <span>GG厅</span>
                            <b class="b1"></b>
                            <b class=" ico"></b>
                        </a>
                    </li>
                @endif
                {{--@if(in_array('MW', $_api_list))--}}
                {{--<li @if('MW' == $api_name) class="active" @endif>--}}
                {{--<a href="">--}}
                {{--<i class="ttg-ico"></i>--}}
                {{--<span>MW大满贯</span>--}}
                {{--<b class="b1"></b>--}}
                {{--<b class=" ico"></b>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--@endif--}}
                @if(in_array('SA', $_api_list))
                    <li @if('SA' == $api_name) class="active" @endif>
                        <a href="{{ route('web.eGame') }}?api_name=SA">
                            <i class="nt-ico"></i>
                            <span>SA厅</span>
                            <b class="b1"></b>
                            <b class=" ico"></b>
                        </a>
                    </li>
                @endif
                @if(in_array('AG', $_api_list))
                    <li @if('AG' == $api_name) class="active" @endif>
                        <a href="javascript:;"
                           @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?api_code=AG&gametype=8','','width=1024,height=768')"
                           @else onclick="return layer.msg('请先登录!',{icon:6})" @endif>
                            <i class="ag-ico"></i>
                            <span>AG电子</span>
                            <b class="b1"></b>
                            <b class="new ico"></b>
                        </a>
                    </li>
                @endif
            </ul>
            <!--contentBox-->
            <div class="search-info bs1">
                <!--搜索框-->
                <div class="search-hd" id="j-searchForm">
                    <form action="" method="GET">
                        <i></i>
                        <span>搜索游戏</span>
                        <div class="ipt-group mt15">
                            <input type="hidden" name="api_name" value="PT">
                            <input type="text" class="ipt j-ipt" placeholder="请输入游戏名称" name="name" value="" required="">
                            <div class="select-list j-select"></div>
                        </div>
                        <button class="btn-search j-btnSearch mt15">搜索</button>
                    </form>
                </div>

                <!--搜索类型-->
                <div class="search-filter">

                    <form id="j-filter" class="form">
                        <dl class="search-row">
                            <dt>
                                全部平台：
                            </dt>
                            <dd>
                                {{--@if(in_array('KG', $_api_list))--}}
                                    {{--<a href="javascript:;"--}}
                                       {{--@if($_member) onclick="javascript:window.open('{{ route('kg.playGame') }}','','width=1024,height=768')"--}}
                                       {{--@else onclick="return layer.msg('请先登录!',{icon:6})" @endif>传奇</a>--}}
                                {{--@endif--}}
                                @if(in_array('PT', $_api_list))
                                    <a href="{{ route('web.eGame') }}?api_name=PT"
                                       @if('PT' == $api_name) class="active" @endif>PT</a>
                                @endif
                                @if(in_array('MG', $_api_list))
                                    <a href="{{ route('web.eGame') }}?api_name=MG"
                                       @if('MG' == $api_name) class="active" @endif>MG</a>
                                @endif
                                @if(in_array('BBIN', $_api_list))
                                    <a href="{{ route('web.eGame') }}?api_name=BBIN"
                                       @if('BBIN' == $api_name) class="active" @endif>BBIN</a>
                                @endif
                                @if(in_array('SA', $_api_list))
                                    <a href="{{ route('web.eGame') }}?api_name=SA"
                                       @if('SA' == $api_name) class="active" @endif>SA</a>
                                @endif
                                @if(in_array('DT', $_api_list))
                                    <a href="{{ route('web.eGame') }}?api_name=DT"
                                       @if('DT' == $api_name) class="active" @endif>DT</a>
                                @endif
                                @if(in_array('TTG', $_api_list))
                                    <a href="{{ route('web.eGame') }}?api_name=TTG"
                                       @if('TTG' == $api_name) class="active" @endif>TTG</a>
                                @endif
                                @if(in_array('PNG', $_api_list))
                                    <a href="{{ route('web.eGame') }}?api_name=PNG"
                                       @if('PNG' == $api_name) class="active" @endif>PNG</a>
                                @endif
                                @if(in_array('GG', $_api_list))
                                    <a href="{{ route('web.eGame') }}?api_name=GG"
                                       @if('GG' == $api_name) class="active" @endif>GG</a>
                                @endif
                                @if(in_array('CQ9', $_api_list))
                                    <a href="{{ route('web.eGame') }}?api_name=CQ9"
                                       @if('CQ9' == $api_name) class="active" @endif>CQ9</a>
                                @endif
                                {{--@if(in_array('MW', $_api_list))--}}
                                {{--<a href="" @if('MW' == $api_name) class="active" @endif>MW</a>--}}
                                {{--@endif--}}
                                {{--@if(in_array('PNG', $_api_list))--}}
                                {{--<a href="" @if('PNG' == $api_name) class="active" @endif>PNG</a>--}}
                                {{--@endif--}}
                                @if(in_array('AG', $_api_list))
                                    <a href="javascript:;"
                                       @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?api_code=AG&gametype=8','','width=1024,height=768')"
                                       @else onclick="return layer.msg('请先登录!',{icon:6})" @endif>AG</a>
                                @endif
                            </dd>
                        </dl>
                        <div id="j-type-pt">
                            <dl class="search-row j-line-pt">
                            </dl>
                            <dl class="search-row j-line-pt">
                            </dl>
                        </div>

                        <div id="j-type-MWG" style="display: none;"></div>
                    </form>
                    <!--dt奖池-->
                    <div class="jiangchi jackpot-box">
                        <!--<h3>当前累计奖池</h3> -->
                        {{--<span class="num-item">￥</span>--}}
                        <div class="jackpot" id="j-jackpotCount" style="margin-top:25px;">
                            <!--<span class="num-item">1</span>-->
                            <!--<span class="num-item">,</span>-->
                            <!--<span class="num-item">2</span>-->
                            <!--<span class="num-item">1</span>-->
                            <!--<span class="num-item">4</span>-->
                            <!--<span class="num-item">,</span>-->
                            <!--<span class="num-item">5</span>-->
                            <!--<span class="num-item">7</span>-->
                            <!--<span class="num-item">2</span>-->
                            <!--<span class="num-item">.</span>-->
                            <!--<span class="num-item">0</span>-->
                            <!--<span class="num-item">6</span>-->
                        </div>
                    </div>
                </div>


                <!--游戏列表-->
                {{--pt--}}
                @if(in_array('PT', $_api_list) && 'PT' == $api_name)
                    <div class="game-list-wrrapper">
                        <div class="game-list clearfix">
                            @foreach($game_list as $item)
                                @if($item->productCode == 'PT')
                                    <div class="game-info box a-fadeinT MGS">
                                        <div class="pic ">
                                            <img data-original="{{ $item->img }}"
                                                 class="lazy"
                                                 src="{{ asset('/web/images/egame-loading.gif') }}"
                                                 style="display: inline;width: 128px;height: 128px;">
                                        </div>
                                        <h4 class="name">{{ $item->name }}</h4>
                                        <p class="ame-brief">
                                            <span class="comment">★★★★★<b class="b1"></b></span>
                                            
                                        </p>
                                        <div class="btn-wp tc">
                                            <a href="javascript:;" class="btn-play" style="background-color:#b48c68"
                                               @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?api_code=PT&gametype={{ $item->tcgGameCode }}','','width=1024,height=768')"
                                               @else onclick="return alert('请先登录！')" @endif>进入游戏</a>

                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endif

                {{--MG--}}
                @if(in_array('MG', $_api_list) && 'MG' == $api_name)
                    <div class="game-list-wrrapper">
                        <div class="game-list clearfix">
                            @foreach($game_list as $item)
                                @if($item->api_name == 'MG' && $item->client_type == 1)
                                    <div class="game-info box a-fadeinT MGS">
                                        <div class="pic ">
                                            <?php $img_path = $item->img_path;?>
                                            <img data-original="{{ asset("/web/images/games/mg/$img_path")}}"
                                                 class="lazy"
                                                 src="{{ asset('/web/images/egame-loading.gif') }}"
                                                 style="display: inline;width: 128px;height: 128px;">
                                        </div>
                                        <h4 class="name">{{ $item->name }}</h4>
                                        <p class="ame-brief">
                                            <span class="comment">★★★★★<b class="b1"></b></span>
                                            
                                        </p>
                                        <div class="btn-wp tc">
                                            <a href="javascript:;" class="btn-play" style="background-color:#b48c68"
                                               @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?api_code=MG&gametype={{ $item->game_id }}','','width=1024,height=768')"
                                               @else onclick="return alert('请先登录！')" @endif>进入游戏</a>

                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endif

                {{--BBIN--}}
                @if(in_array('BBIN', $_api_list) && 'BBIN' == $api_name)
                    <div class="game-list-wrrapper">
                        <div class="game-list clearfix">
                            @foreach($game_list as $item)
                                @if($item->api_name == 'BBIN' && $item->client_type == 1)
                                    <div class="game-info box a-fadeinT MGS">
                                        <div class="pic ">
                                            <?php $img_path = $item->img_path;?>
                                            <img data-original="{{ asset("/web/images/games/bbin/$img_path")}}"
                                                 class="lazy"
                                                 src="{{ asset('/web/images/egame-loading.gif') }}"
                                                 style="display: inline;width: auto;height: auto;">
                                        </div>
                                        <h4 class="name">{{ $item->name }}</h4>
                                        <p class="ame-brief">
                                            <span class="comment">★★★★★<b class="b1"></b></span>
                                            
                                        </p>
                                        <div class="btn-wp tc">
                                            <a href="javascript:;" class="btn-play" style="background-color:#b48c68"
                                               @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?api_code=BBIN&gametype={{ $item->game_id }}','','width=1024,height=768')"
                                               @else onclick="return alert('请先登录！')" @endif>进入游戏</a>

                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endif

                {{--SA--}}
                @if(in_array('SA', $_api_list) && 'SA' == $api_name)
                    <div class="game-list-wrrapper">
                        <div class="game-list clearfix">
                            @foreach($game_list as $item)
                                @if($item->api_name == 'SA' && $item->client_type == 1)
                                    <div class="game-info box a-fadeinT MGS">
                                        <div class="pic ">
                                            <?php $img_path = $item->img_path;?>
                                            <img data-original="{{ asset("/web/images/games/sa/$img_path")}}"
                                                 class="lazy"
                                                 src="{{ asset('/web/images/egame-loading.gif') }}"
                                                 style="display: inline;">
                                        </div>
                                        <h4 class="name">{{ $item->name }}</h4>
                                        <p class="ame-brief">
                                            <span class="comment">★★★★★<b class="b1"></b></span>
                                            
                                        </p>
                                        <div class="btn-wp tc">
                                            <a href="javascript:;" class="btn-play" style="background-color:#b48c68"
                                               @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?api_code=SA&gametype={{ $item->game_id }}','','width=1024,height=768')"
                                               @else onclick="return alert('请先登录！')" @endif>进入游戏</a>

                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endif

                {{--DT--}}
                @if(in_array('DT', $_api_list) && 'DT' == $api_name)
                    <div class="game-list-wrrapper">
                        <div class="game-list clearfix">
                            @foreach($game_list as $item)
                                @if($item->api_name == 'DT' && $item->client_type == 1)
                                    <div class="game-info box a-fadeinT MGS">
                                        <div class="pic ">
                                            <?php $img_path = $item->img_path;?>
                                            <img data-original="{{ asset("/web/images/games/dt/$img_path")}}"
                                                 class="lazy"
                                                 src="{{ asset('/web/images/egame-loading.gif') }}"
                                                 style="display: inline;">
                                        </div>
                                        <h4 class="name">{{ $item->name }}</h4>
                                        <p class="ame-brief">
                                            <span class="comment">★★★★★<b class="b1"></b></span>
                                            
                                        </p>
                                        <div class="btn-wp tc">
                                            <a href="javascript:;" class="btn-play" style="background-color:#b48c68">进入游戏</a>

                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endif

                {{--TTG--}}
                @if(in_array('TTG', $_api_list) && 'TTG' == $api_name)
                    <div class="game-list-wrrapper">
                        <div class="game-list clearfix">
                            @foreach($game_list as $item)
                                @if($item->productCode == 'TTG')
                                    <div class="game-info box a-fadeinT MGS">
                                        <div class="pic ">
                                            <img data-original="{{ $item->img }}"
                                                 class="lazy"
                                                 src="{{ asset('/web/images/egame-loading.gif') }}"
                                                 style="display: inline;width: 128px;height: 128px;">
                                        </div>
                                        <h4 class="name">{{ $item->name }}</h4>
                                        <p class="ame-brief">
                                            <span class="comment">★★★★★<b class="b1"></b></span>
                                            
                                        </p>
                                        <div class="btn-wp tc">
                                            <a href="javascript:;" class="btn-play" style="background-color:#b48c68"
                                               @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?api_code=TTG&gametype={{ $item->tcgGameCode }}','','width=1024,height=768')"
                                               @else onclick="return alert('请先登录！')" @endif>进入游戏</a>

                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endif

                {{--PNG--}}
                @if(in_array('PNG', $_api_list) && 'PNG' == $api_name)
                    <div class="game-list-wrrapper">
                        <div class="game-list clearfix">
                            @foreach($game_list as $item)
                                @if($item->productCode == 'PNG')
                                    <div class="game-info box a-fadeinT MGS">
                                        <div class="pic ">
                                            <img data-original="{{ $item->img }}"
                                                 class="lazy"
                                                 src="{{ asset('/web/images/egame-loading.gif') }}"
                                                 style="display: inline;width: 128px;height: 128px;">
                                        </div>
                                        <h4 class="name">{{ $item->name }}</h4>
                                        <p class="ame-brief">
                                            <span class="comment">★★★★★<b class="b1"></b></span>
                                            
                                        </p>
                                        <div class="btn-wp tc">
                                            <a href="javascript:;" class="btn-play" style="background-color:#b48c68"
                                               @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?api_code=PNG&gametype={{ $item->tcgGameCode }}','','width=1024,height=768')"
                                               @else onclick="return alert('请先登录！')" @endif>进入游戏</a>

                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endif

                {{--GG--}}
                @if(in_array('GG', $_api_list) && 'GG' == $api_name)
                    <div class="game-list-wrrapper">
                        <div class="game-list clearfix">
                            @foreach($game_list as $item)
                                @if($item->productCode == 'GG')
                                    <div class="game-info box a-fadeinT MGS">
                                        <div class="pic ">
                                            <img data-original="{{ $item->img }}"
                                                 class="lazy"
                                                 src="{{ asset('/web/images/egame-loading.gif') }}"
                                                 style="display: inline;width: 128px;height: 128px;">
                                        </div>
                                        <h4 class="name">{{ $item->name }}</h4>
                                        <p class="ame-brief">
                                            <span class="comment">★★★★★<b class="b1"></b></span>
                                            
                                        </p>
                                        <div class="btn-wp tc">
                                            <a href="javascript:;" class="btn-play" style="background-color:#b48c68"
                                               @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?api_code=GG&gametype={{ $item->tcgGameCode }}','','width=1024,height=768')"
                                               @else onclick="return alert('请先登录！')" @endif>进入游戏</a>

                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endif

                {{--GG--}}
                @if(in_array('CQ9', $_api_list) && 'CQ9' == $api_name)
                    <div class="game-list-wrrapper">
                        <div class="game-list clearfix">
                            @foreach($game_list as $item)
                                @if($item->productCode == 'CQ9')
                                    <div class="game-info box a-fadeinT MGS">
                                        <div class="pic ">
                                            <img data-original="{{ $item->img }}"
                                                 class="lazy"
                                                 src="{{ asset('/web/images/egame-loading.gif') }}"
                                                 style="display: inline;width: 128px;height: 128px;">
                                        </div>
                                        <h4 class="name">{{ $item->name }}</h4>
                                        <p class="ame-brief">
                                            <span class="comment">★★★★★<b class="b1"></b></span>
                                            
                                        </p>
                                        <div class="btn-wp tc">
                                            <a href="javascript:;" class="btn-play" style="background-color:#b48c68"
                                               @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?api_code=CQ9&gametype={{ $item->tcgGameCode }}','','width=1024,height=768')"
                                               @else onclick="return alert('请先登录！')" @endif>进入游戏</a>

                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>




    <script>
        (function ($) {
            $(function () {
                function getNum(min, max) {
                    return Math.floor(Math.random() * (max - min)) + min;
                }

                //制保留2位小数，如：2，会在2后面补上00.即2.00
                function toDecimal2(x) {
                    var f = parseFloat(x);
                    if (isNaN(f)) {
                        return false;
                    }
                    var f = Math.round(x * 100) / 100;
                    var s = f.toString();
                    var rs = s.indexOf('.');
                    if (rs < 0) {
                        rs = s.length;
                        s += '.';
                    }
                    while (s.length <= rs + 2) {
                        s += '0';
                    }
                    return s;
                }

                $("img.lazy").lazyload({
                    placeholder: "{{ asset('/web/images/egame-loading.gif') }}",
                    effect: "fadeIn",
                    skip_invisible: false  //解决滚动才显示的问题
                });
                var jj = getNum(100000000, 200000000);
                var $j_jackpotCount = $('#j-jackpotCount');

                function jj_count() {
                    //
                    jj += 1;
                    jj = jj / 100;
                    var jj_str = jj.toString();
                    jj_str = toDecimal2(jj_str);
                    var str1 = jj_str.substring(0, 1);
                    str1 += ',';
                    var str2 = jj_str.substring(1, 4);
                    str2 += ',';
                    var str3 = jj_str.substring(4);
                    jj_str = str1 + str2 + str3;
                    jj_str = jj_str.split('');
                    jj *= 100;
                    $j_jackpotCount.html('');
                    $.each(jj_str, function (index, value) {
                        $j_jackpotCount.append('<span class="num-item">' + value + '</span>');
                    });
                }

                setInterval(jj_count, 500);


            });


        })(jQuery)
    </script>


@endsection