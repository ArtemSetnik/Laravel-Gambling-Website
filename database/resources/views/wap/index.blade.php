@extends('wap.layouts.main')
@section('after.css')

<link type="text/css" rel="stylesheet" href="{{ asset('/wap/css/main.css') }}">
@endsection
@section('content')

@include('wap.layouts.header')
<style>
.m_header{
  z-index:100;
}
.m_wrapper .m_box.m_box-half{
 float: left;
 width: 25%;
 margin-bottom: 18px;
}
.m_wrapper .m_box .m_box-link{
 position: relative;
 display: block;
 color: #FFF;
 font-size: 13px;
 text-align: center;
 text-decoration: none;
}
.m_wrapper .m_box img{
 display: block;
 margin: 0 auto;
 width:49px;
}
.m_wrapper .m_box .m_box-name_new{
 margin-top: 5px;
 display:block;
 
}
.m_wrapper .m_box .m_box-link{
 background-color:#1b1d1b;
 border:0
}
.m_notice{
  margin-top:0
}
.category-wrap-placeholder_3S0wB {
    height: 38px;
}
.category-wrap_d3wny {
    position: relative;
    height: 38px;
    background-color: #111;
    box-sizing: border-box;
    border-top: solid 1px #2B2825;
    border-bottom: solid 1px #2B2825;
    /*padding-right: 36px;*/
}
.category-wrap-placeholder_3S0wB.fixed_24GUJ .category-wrap_d3wny {
    position: fixed;
    top: 46px;
    left: 0;
    z-index: 1000;
    width: 100%;
}
.category-wrap_d3wny .category-outer-inner_17KJ5 {
    width: 100%;
    height: 36px;
    overflow-x: scroll;
    -webkit-overflow-scrolling: touch;
}
.category-wrap_d3wny .category-name_2VWaa {
    position: relative;
    color: #FFF;
    float: left;
    width: 20%;
    /*height: 36px;*/
    line-height: 36px;
    font-size: 13px;
    text-align: center;
    user-select: none;
    -webkit-user-select: none;
    box-sizing: border-box;
    padding: 0 10px;
}
.category-wrap_d3wny .category-name_2VWaa.current_2-Ch8 {
    color: #C72620;
}
.category-wrap_d3wny .category-toggle-icon_2RR3B {
    position: absolute;
    top: 0;
    right: 0;
    width: 16px;
    height: 16px;
    background-color: #1B1D1B;
    padding: 10px;
}
.fixed_24GUJ .category-wrap_d3wny .category-name_2VWaa{
    line-height:36px;
}
.category-wrap_d3wny .category-name_2VWaa a{
    color:#fff;
}
.category-wrap_d3wny .category-name_2VWaa a.active{
    color:#C72620;
}
.m_wrapper .m_box{
    padding:0;
}
.m_category{
    margin-bottom:18px;
}
</style>
<div class="m_container">
    <div class="m_body">
        <div class="m_banner">
            <div id="slide" class="container-fluid slide">
                <ul class="bd">
                    {{--@foreach($banners as $item)--}}
                    {{--<li><a href="#"><img class="carousel-inner" src="{{ $item->path }}"></a>--}}
                    {{--</li>--}}
                    {{--@endforeach--}}
                    <li><a href="#"><img class="carousel-inner" src="{{ asset('/wap/images/m_banner2.jpg') }}"></a>
                    </li>
                    <li><a href="#"><img class="carousel-inner" src="{{ asset('/wap/images/m_banner3.jpg') }}"></a>
                    </li>
                    <li><a href="#"><img class="carousel-inner" src="{{ asset('/wap/images/m_banner4.jpg') }}"></a>
                    </li>
                </ul>
                <ul class="hd"></ul>
            </div>
        </div>

        <div class="m_notice">
			<span class="notice_logo"></span>
			
            <div>
				<div class="pull-left notice_title" style="padding-right:5px;">
					{{ __('mb.system_notification') }}:
				</div>
				<div class="pull-left notice_content">
					<marquee id="mar0" behavior="scroll" direction="left" scrollamount="4">
						@foreach($_system_notices as $v)
						<div class="module" style="display: inline;word-break: keep-all;white-space: nowrap;">
							<span>~{{ $v->title }}~</span>
							<span>{{ $v->content }}</span>
						</div>
						@endforeach
					</marquee>
				</div>
				
			</div>
        </div>
        <div style="padding: 10px;">
            <a target="_blank" href="{{route('wap.red')}}">
                <img style="border-radius: 8px" src="{{asset('wap/images/hongbao/qiang.jpg')}}">
            </a>
        </div>
        <div class="category-wrap-placeholder_3S0wB">
            <div class="category-wrap_d3wny"><div class="category-outer-inner_17KJ5">
             <div class="category-inner_ZydHv " style="width: 100%; height: 36px;">
				 <div class="category-name_2VWaa category-name-lottery_J-CBk "><a href="javascript:void(0)">{{ __('mb.Hot_Game') }}</a></div>
                 <div class="category-name_2VWaa category-name-casino_3hsqT current_2-Ch8"><a href="javascript:void(0)">{{ __('mb.video_live') }}</a></div>
                 <div class="category-name_2VWaa category-name-live_cYRVv "><a href="javascript:void(0)">{{ __('mb.electronic') }}</a></div>
                 <div class="category-name_2VWaa category-name-card_3g1gp "><a href="javascript:void(0)">{{ __('mb.lottery_ticket') }}</a></div>
                 <div class="category-name_2VWaa category-name-ball_1w8UO "><a href="javascript:void(0)">{{ __('mb.physical_education') }}</a></div>
                 
            </div></div><!--<span class="category-toggle-icon_2RR3B">
             <img class="ga-switch-card" src="/wap/images/100percent/btn_switch_cards_aio3.png" alt=""></span>--></div></div>


                {{--棋牌--}}
                <div class="m_wrapper clear">
                    <div class="m_category" id="kycard">
                        {{ __('mb.Hot_Game') }}
                    </div>
                    @if(in_array('MT', $_api_list))
                    <div class="m_box m_box-half">
                        <a class="m_box-link"  href="http://www.gentingclub88.asia/m/v918">
                            <img src="{{ asset('/wap/images/100percent/btn_icon_mtcard_n.png') }}" alt="">
                            <span class="m_box-name_new">
                              {{ __('mb.beautiful_chess') }}
                          </span>
                      </a>
                  </div>
                  @endif
                  @if(in_array('FG', $_api_list))
                  <div class="m_box m_box-half">
                    <a class="m_box-link" onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=FG&game_type=7&devices=1','','width=1024,height=768')">
                        {{--<img class="m_isComing" src="{{ asset('/wap/images/m_isComing.png') }}" alt="">--}}
                        <img src="{{ asset('/wap/images/100percent/btn_icon_fgcard_n.png') }}" alt="">
                        <span class="m_box-name_new">
                            FG {{ __('mb.Hot_Game') }}
                        </span>
                    </a>
                </div>
                @endif
                @if(in_array('AP', $_api_list))
                <div class="m_box m_box-half">
                    <a class="m_box-link" onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=ap&game_type=7&devices=1','','width=1024,height=768')">
                        {{--<img class="m_isComing" src="{{ asset('/wap/images/m_isComing.png') }}" alt="">--}}
                        <img src="{{ asset('/wap/images/100percent/ap.png') }}" alt="">
                        <span class="m_box-name_new">
                            AP {{ __('mb.Hot_Game') }}
                        </span>
                    </a>
                </div>
                @endif
                @if(in_array('VG', $_api_list))
                <div class="m_box m_box-half">
                    <a class="m_box-link" href="http://www.gentingclub88.asia/m/recharge">
                        {{--<img class="m_isComing" src="{{ asset('/wap/images/m_isComing.png') }}" alt="">--}}
                        <img src="{{ asset('/wap/images/100percent/btn_icon_vgcard_n.png') }}" alt="">
                        <span class="m_box-name_new">
                            VG {{ __('mb.Hot_Game') }}
                        </span>
                    </a>
                </div>
                @endif
                @if(in_array('LEG', $_api_list))
                <div class="m_box m_box-half">
                    <a class="m_box-link" onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=LEG&game_type=7&devices=1','','width=1024,height=768')">
                        {{--<img class="m_isComing" src="{{ asset('/wap/images/m_isComing.png') }}" alt="">--}}
                        <img src="{{ asset('/wap/images/100percent/btn_icon_legcard_n.png') }}" alt="">
                        <span class="m_box-name_new">
                            {{ __('mb.le_tour') }} {{ __('mb.Hot_Game') }}
                        </span>
                    </a>
                </div>
                @endif
                
                @if(in_array('KY', $_api_list))
                <div class="m_box m_box-half">
                    <a class="m_box-link" onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=KY&game_type=7&devices=1','','width=1024,height=768')">
                        <img src="{{ asset('/wap/images/100percent/btn_icon_kycard_n.png') }}" alt="">
                        <span class="m_box-name_new">
                          {{ __('mb.kaiyuan') }} {{ __('mb.Hot_Game') }}
                      </span>
                  </a>
                </div>
                @endif

                {{--@if(in_array('LEG', $_api_list))
                <div class="m_box m_box-half">
                    <a class="m_box-link" onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=LEG&game_type=7&devices=1','','width=1024,height=768')">
                        --}}{{--<img class="m_isComing" src="{{ asset('/wap/images/m_isComing.png') }}" alt="">--}}{{--
                        <img src="{{ asset('/wap/images/100percent/btn_icon_legcard_n.png') }}" alt="">
                        <span class="m_box-name_new">
                            LEG {{ __('mb.Hot_Game') }}
                        </span>
                    </a>
                </div>
                @endif--}}

                </div>



             {{--视讯--}}
             <div class="m_wrapper clear">
                <div class="m_category" id="live">
                    {{ __('mb.video_live') }}
                </div>
                @if(in_array('AG', $_api_list))
                <div class="m_box m_box-half">
                    <a class="m_box-link"
                    @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=AG&game_type=1&devices=1','','width=1024,height=768')"
                    @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                    >
                    <img src="{{ asset('/wap/images/100percent/btn_icon_aglive_n.png') }}" alt="">
                    <span class="m_box-name_new">
                        AG {{ __('mb.video_live') }}
                    </span>
                </a>
            </div>
            @endif
            @if(in_array('BBIN', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link"
                @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=BBIN&game_type=1&devices=1','','width=1024,height=768')"
                @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                >
                <img src="{{ asset('/wap/images/100percent/btn_icon_live_n.png') }}" alt="">
                <span class="m_box-name_new">
                    BB {{ __('mb.video_live') }}
                </span>
            </a>
        </div>
        @endif
        @if(in_array('BG', $_api_list))
        <div class="m_box m_box-half">
            <a class="m_box-link"
            @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=BG&game_type=1&devices=1','','width=1024,height=768')"
            @else onclick="location.href = '{{ route('wap.login') }}'" @endif
            >
            <img src="{{ asset('/wap/images/100percent/btn_icon_bglive_n.png') }}" alt="">
            <span class="m_box-name_new">
                BG {{ __('mb.video_live') }}
            </span>
        </a>
    </div>
    @endif
    @if(in_array('SUNBET', $_api_list))
    <div class="m_box m_box-half">
        <a class="m_box-link"
        @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=SUNBET&game_type=1&devices=1','','width=1024,height=768')"
        @else onclick="location.href = '{{ route('wap.login') }}'" @endif
        >
        <img src="{{ asset('/wap/images/100percent/btn_icon_sblive_n.png') }}" alt="">
        <span class="m_box-name_new">
            {{ __('mb.shenbo') }} {{ __('mb.video_live') }}
        </span>
    </a>
</div>
@endif
@if(in_array('ALLBET', $_api_list))
<div class="m_box m_box-half">
    <a class="m_box-link"
    @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=ALLBET&game_type=1&devices=1','','width=1024,height=768')"
    @else onclick="location.href = '{{ route('wap.login') }}'" @endif
    >
    <img src="{{ asset('/wap/images/100percent/btn_icon_ablive_n.png') }}" alt="">
    <span class="m_box-name_new">
        {{ __('mb.obo') }} {{ __('mb.video_live') }}
    </span>
</a>
</div>
@endif
@if(in_array('LEBO', $_api_list))
<div class="m_box m_box-half">
    <a class="m_box-link"
    @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=LEBO&game_type=1&devices=1','','width=1024,height=768')"
    @else onclick="location.href = '{{ route('wap.login') }}'" @endif
    >
    <img src="{{ asset('/wap/images/100percent/btn_icon_evolive_n.png') }}" alt="">
    <span class="m_box-name_new">
        LEBO {{ __('mb.video_live') }}
    </span>
</a>
</div>
@endif
@if(in_array('SA', $_api_list))
<div class="m_box m_box-half">
    <a class="m_box-link"
    @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=SA&game_type=1&devices=1','','width=1024,height=768')"
    @else onclick="location.href = '{{ route('wap.login') }}'" @endif
    >
    <img src="{{ asset('/wap/images/100percent/btn_icon_salive_n.png') }}" alt="">
    <span class="m_box-name_new">
        SA {{ __('mb.video_live') }}
    </span>
</a>
</div>
@endif
@if(in_array('GD', $_api_list))
<div class="m_box m_box-half">
    <a class="m_box-link"
    @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=GD&game_type=1&devices=1','','width=1024,height=768')"
    @else onclick="location.href = '{{ route('wap.login') }}'" @endif
    >
    <img src="{{ asset('/wap/images/100percent/btn_icon_gdlive_n.png') }}" alt="">
    <span class="m_box-name_new">
        GD {{ __('mb.video_live') }}
    </span>
</a>
</div>
@endif
@if(in_array('OG', $_api_list))
<div class="m_box m_box-half">
    <a class="m_box-link"
    @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=OG&game_type=1&devices=1','','width=1024,height=768')"
    @else onclick="location.href = '{{ route('wap.login') }}'" @endif
    >
    <img src="{{ asset('/wap/images/100percent/btn_icon_oglive_n.png') }}" alt="">
    <span class="m_box-name_new">
        OG {{ __('mb.video_live') }}
    </span>
</a>
</div>
@endif
@if(in_array('DG', $_api_list))
<div class="m_box m_box-half">
    <a class="m_box-link"
    @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=DG&game_type=1&devices=1','','width=1024,height=768')"
    @else onclick="location.href = '{{ route('wap.login') }}'" @endif
    >
    <img src="{{ asset('/wap/images/100percent/btn_icon_dglive_n.png') }}" alt="">
    <span class="m_box-name_new">
        DG {{ __('mb.video_live') }}
    </span>
</a>
</div>
@endif
@if(in_array('MG', $_api_list))
<div class="m_box m_box-half">
    <a class="m_box-link"
    @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=MG&game_type=1&devices=1','','width=1024,height=768')"
    @else onclick="location.href = '{{ route('wap.login') }}'" @endif
    >
    <img src="{{ asset('/wap/images/100percent/btn_icon_mglive_n.png') }}" alt="">
    <span class="m_box-name_new">
        MG {{ __('mb.video_live') }}
    </span>
</a>
</div>
@endif
@if(in_array('PT', $_api_list))
<div class="m_box m_box-half">
    <a class="m_box-link"
    @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=PT&game_type=1&devices=1','','width=1024,height=768')"
    @else onclick="location.href = '{{ route('wap.login') }}'" @endif
    >
    <img src="{{ asset('/wap/images/100percent/btn_icon_ptlive_n.png') }}" alt="">
    <span class="m_box-name_new">
        PT {{ __('mb.video_live') }}
    </span>
</a>
</div>
@endif
@if(in_array('GPI', $_api_list))
<div class="m_box m_box-half">
    <a class="m_box-link"
    @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=LEBO&game_type=1&devices=1','','width=1024,height=768')"
    @else onclick="location.href = '{{ route('wap.login') }}'" @endif
    >
    <img src="{{ asset('/wap/images/100percent/btn_icon_gpilive_n.png') }}" alt="">
    <span class="m_box-name_new">
        GPI {{ __('mb.video_live') }}
    </span>
</a>
</div>
@endif
{{--电子--}}
<div class="m_wrapper clear">
    <div class="m_category" id="casino">
        {{ __('mb.electronic_entertainment') }} 
    </div>
    <div class="m_box m_box-half">
        <a class="m_box-link" href="{{route('wap.index_py')}}">
            <img src="{{ asset('/wap/images/100percent/btn_icon_fisharea_n.png') }}" alt="">
            <span class="m_box-name_new">
                {{ __('mb.electronic') }}
            </span>
        </a>
    </div>
    @if(in_array('PP', $_api_list))
    <div class="m_box m_box-half">
        <a class="m_box-link" onclick="window.open('{{ route('ng.playGame') }}?plat_type=PP&game_type=2&devices=1','','width=1024,height=768')">
            <img src="{{ asset('/wap/images/100percent/btn_icon_ppcasino_n.png') }}" alt="">
            <span class="m_box-name_new">
                {{ __('mb.electronic') }} PP 
            </span>
        </a>
    </div>
    @endif
    @if(in_array('SG', $_api_list))
    <div class="m_box m_box-half">
        <a class="m_box-link" onclick="window.open('{{ route('ng.playGame') }}?plat_type=SG&game_type=2&devices=1','','width=1024,height=768')">
            <img src="{{ asset('/wap/images/100percent/btn_icon_sgcasino_n.png') }}" alt="">
            <span class="m_box-name_new">
                SG {{ __('mb.electronic') }}
            </span>
        </a>
    </div>
    @endif

    @if(in_array('MW', $_api_list))
    <div class="m_box m_box-half">
        <a class="m_box-link" onclick="window.open('{{ route('ng.playGame') }}?plat_type=MW&game_type=2&devices=1','','width=1024,height=768')">
            <img src="{{ asset('/wap/images/100percent/btn_icon_mwcasino_n.png') }}" alt="">
            <span class="m_box-name_new">
                MW {{ __('mb.electronic') }}
            </span>
        </a>
    </div>
    @endif
    @if(in_array('CQ9', $_api_list))
    <div class="m_box m_box-half">
        <a class="m_box-link" onclick="window.open('{{ route('ng.playGame') }}?plat_type=CQ9&game_type=2&devices=1','','width=1024,height=768')">
            <img src="{{ asset('/wap/images/100percent/btn_icon_cq9casino_n.png') }}" alt="">
            <span class="m_box-name_new">
                CQ9 {{ __('mb.electronic') }}
            </span>
        </a>
    </div>
    @endif
    @if(in_array('SA', $_api_list))
    <div class="m_box m_box-half">
        <a class="m_box-link" onclick="window.open('{{ route('ng.playGame') }}?plat_type=SA&game_type=2&devices=1','','width=1024,height=768')">
            <img src="{{ asset('/wap/images/100percent/btn_icon_sacasino_n.png') }}" alt="">
            <span class="m_box-name_new">
                SA {{ __('mb.electronic') }}
            </span>
        </a>
    </div>
    @endif
    @if(in_array('JDB', $_api_list))
    <div class="m_box m_box-half">
        <a class="m_box-link" onclick="window.open('{{ route('ng.playGame') }}?plat_type=JDB&game_type=2&devices=1','','width=1024,height=768')">
            <img src="{{ asset('/wap/images/100percent/btn_icon_jdbcasino_n.png') }}" alt="">
            <span class="m_box-name_new">
                JDB {{ __('mb.electronic') }}
            </span>
        </a>
    </div>
    @endif
    @if(in_array('FG', $_api_list))
    <div class="m_box m_box-half">
        <a class="m_box-link" onclick="window.open('{{ route('ng.playGame') }}?plat_type=FG&game_type=2&devices=1','','width=1024,height=768')">
            <img src="{{ asset('/wap/images/100percent/btn_icon_fgcasino_n.png') }}" alt="">
            <span class="m_box-name_new">
                FG {{ __('mb.electronic') }}
            </span>
        </a>
    </div>
    @endif
    @if(in_array('SW', $_api_list))
    <div class="m_box m_box-half">
        <a class="m_box-link" onclick="window.open('{{ route('ng.playGame') }}?plat_type=SW&game_type=2&devices=1','','width=1024,height=768')">
            <img src="{{ asset('/wap/images/100percent/btn_icon_swcasino_n.png') }}" alt="">
            <span class="m_box-name_new">
                SW {{ __('mb.electronic') }}
            </span>
        </a>
    </div>
    @endif
    @if(in_array('BNG', $_api_list))
    <div class="m_box m_box-half">
        <a class="m_box-link" onclick="window.open('{{ route('ng.playGame') }}?plat_type=BNG&game_type=2&devices=1','','width=1024,height=768')">
            <img src="{{ asset('/wap/images/100percent/btn_icon_bngcasino_n.png') }}" alt="">
            <span class="m_box-name_new">
                BNG {{ __('mb.electronic') }}
            </span>
        </a>
    </div>
    @endif
    @if(in_array('MG', $_api_list))
    <div class="m_box m_box-half">
        <a class="m_box-link" onclick="window.open('{{ route('ng.playGame') }}?plat_type=MG&game_type=2&devices=1','','width=1024,height=768')">
            <img src="{{ asset('/wap/images/100percent/btn_icon_mgcasino_n.png') }}" alt="">
            <span class="m_box-name_new">
                MG {{ __('mb.electronic') }}
            </span>
        </a>
    </div>
    @endif
    @if(in_array('PT', $_api_list))
    <div class="m_box m_box-half">
        <a class="m_box-link" onclick="window.open('{{ route('ng.playGame') }}?plat_type=PT&game_type=2&devices=1','','width=1024,height=768')">
            <img src="{{ asset('/wap/images/100percent/btn_icon_ptcasino_n.png') }}" alt="">
            <span class="m_box-name_new">
                PT {{ __('mb.electronic') }}
            </span>
        </a>
    </div>
    @endif
    @if(in_array('AG', $_api_list))
    <div class="m_box m_box-half">
        <a class="m_box-link" onclick="window.open('{{ route('ng.playGame') }}?plat_type=AG&game_type=2&devices=1','','width=1024,height=768')">
            <img src="{{ asset('/wap/images/100percent/btn_icon_agslotcasino_n.png') }}" alt="">
            <span class="m_box-name_new">
                AG {{ __('mb.electronic') }}
            </span>
        </a>
    </div>
    @endif
    @if(in_array('GPI', $_api_list))
    <div class="m_box m_box-half">
        <a class="m_box-link" onclick="window.open('{{ route('ng.playGame') }}?plat_type=GPI&game_type=2&devices=1','','width=1024,height=768')">
            <img src="{{ asset('/wap/images/100percent/btn_icon_gpicasino_n.png') }}" alt="">
            <span class="m_box-name_new">
                GPI {{ __('mb.electronic') }}
            </span>
        </a>
    </div>
    @endif
    @if(in_array('BBIN', $_api_list))
    <div class="m_box m_box-half">
        <a class="m_box-link" onclick="window.open('{{ route('ng.playGame') }}?plat_type=BBIN&game_type=2&devices=1','','width=1024,height=768')">
            {{--<img class="m_isComing" src="{{ asset('/wap/images/m_isComing.png') }}" alt="">--}}
            <img src="{{ asset('/wap/images/100percent/btn_icon_game_n.png') }}" alt="">
            <span class="m_box-name_new">
                BB {{ __('mb.electronic') }}
            </span>
        </a>
    </div>
    @endif
    @if(in_array('QT', $_api_list))
    <div class="m_box m_box-half">
        <a class="m_box-link" onclick="window.open('{{ route('ng.playGame') }}?plat_type=QT&game_type=2&devices=1','','width=1024,height=768')">
            <img src="{{ asset('/wap/images/100percent/btn_icon_qtcasino_n.png') }}" alt="">
            <span class="m_box-name_new">
                QT {{ __('mb.electronic_entertainment') }}
            </span>
        </a>
    </div>
    @endif
    @if(in_array('DT', $_api_list))
    <div class="m_box m_box-half">
        <a class="m_box-link" onclick="window.open('{{ route('ng.playGame') }}?plat_type=DT&game_type=2&devices=1','','width=1024,height=768')">
            <img src="{{ asset('/wap/images/100percent/dt.png') }}" alt="">
            <span class="m_box-name_new">
                DT {{ __('mb.electronic_entertainment') }}
            </span>
        </a>
    </div>
    @endif
    @if(in_array('PG', $_api_list))
    <div class="m_box m_box-half">
        <a class="m_box-link" onclick="window.open('{{ route('ng.playGame') }}?plat_type=PG&game_type=2&devices=1','','width=1024,height=768')">
            <img src="{{ asset('/wap/images/100percent/pg.png') }}" alt="">
            <span class="m_box-name_new">
                PG {{ __('mb.electronic_entertainment') }}
            </span>
        </a>
    </div>
    @endif
    @if(in_array('GTI', $_api_list))
    <div class="m_box m_box-half">
        <a class="m_box-link" onclick="window.open('{{ route('ng.playGame') }}?plat_type=GTI&game_type=2&devices=1','','width=1024,height=768')">
            <img src="{{ asset('/wap/images/100percent/gti.png') }}" alt="">
            <span class="m_box-name_new">
                GTI {{ __('mb.electronic_entertainment') }}
            </span>
        </a>
    </div>
    @endif
    @if(in_array('PNG', $_api_list))
    <div class="m_box m_box-half">
        <a class="m_box-link" onclick="window.open('{{ route('ng.playGame') }}?plat_type=PNG&game_type=2&devices=1','','width=1024,height=768')">
            <img src="{{ asset('/wap/images/100percent/png.png') }}" alt="">
            <span class="m_box-name_new">
                PNG {{ __('mb.electronic_entertainment') }}
            </span>
        </a>
    </div>
    @endif
</div>
{{--彩票--}}
<div class="m_wrapper clear">
    <div class="m_category" id="lotter">
        {{ __('mb.lottery_game') }}
    </div>
    <!-- @if(in_array('NG', $_api_list))
    <div class="m_box m_box-half">
        <a class="m_box-link"
        @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=NG&game_type=3&devices=1&lott_type=1','','width=1024,height=768')"
        @else onclick="location.href = '{{ route('wap.login') }}'" @endif
        >
        <img src="{{ asset('/wap/images/100percent/btn_icon_nglottery_n.png') }}" alt="">
        <span class="m_box-name_new">
            NG {{ __('mb.traditional_color') }}
        </span>
    </a>
</div>
@endif
@if(in_array('NG', $_api_list))
<div class="m_box m_box-half">
    <a class="m_box-link"
    @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=NG&game_type=3&devices=1','','width=1024,height=768')"
    @else onclick="location.href = '{{ route('wap.login') }}'" @endif
    >
    <img src="{{ asset('/wap/images/100percent/btn_icon_nglottery_n.png') }}" alt="">
    <span class="m_box-name_new">
        NG {{ __('mb.credit_color') }}
    </span>
</a>
</div>
@endif
@if(in_array('BBIN', $_api_list))
<div class="m_box m_box-half">
    <a class="m_box-link"
    @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=BBIN&game_type=3&devices=1','','width=1024,height=768')"
    @else onclick="location.href = '{{ route('wap.login') }}'" @endif
    >
    {{--<img class="m_isComing" src="{{ asset('/wap/images/m_isComing.png') }}" alt="">--}}
    <img src="{{ asset('/wap/images/100percent/btn_icon_lottery_n.png') }}" alt="">
    <span class="m_box-name_new">
        BB {{ __('mb.lottery_ticket') }}
    </span>
</a>
</div>
@endif
@if(in_array('BG', $_api_list))
<div class="m_box m_box-half">
    <a class="m_box-link"
    @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=BG&game_type=3&devices=1','','width=1024,height=768')"
    @else onclick="location.href = '{{ route('wap.login') }}'" @endif
    >
    {{--<img class="m_isComing" src="{{ asset('/wap/images/m_isComing.png') }}" alt="">--}}
    <img src="{{ asset('/wap/images/100percent/btn_icon_bglottery_n.png') }}" alt="">
    <span class="m_box-name_new">
        BG {{ __('mb.lottery_ticket') }}
    </span>
</a>
</div>
@endif
@if(in_array('VR', $_api_list))
<div class="m_box m_box-half">
    <a class="m_box-link"
    @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=VR&game_type=3&devices=1','','width=1024,height=768')"
    @else onclick="location.href = '{{ route('wap.login') }}'" @endif
    >
    <img src="{{ asset('/wap/images/100percent/btn_icon_vrlottery_n.png') }}" alt="">
    <span class="m_box-name_new">
        VR {{ __('mb.credit_color') }}
    </span>
</a>
</div>
@endif
@if(in_array('EG', $_api_list))
<div class="m_box m_box-half">
    <a class="m_box-link"
    @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=EG&game_type=3&devices=1','','width=1024,height=768')"
    @else onclick="location.href = '{{ route('wap.login') }}'" @endif
    >
    <img src="{{ asset('/wap/images/100percent/btn_icon_eglottery_n.png') }}" alt="">
    <span class="m_box-name_new">
        EG {{ __('mb.credit_color') }}
    </span>
</a>
</div>
@endif
@if(in_array('IG', $_api_list))
<div class="m_box m_box-half">
    <a class="m_box-link"
    @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=IG&game_type=3&devices=1','','width=1024,height=768')"
    @else onclick="location.href = '{{ route('wap.login') }}'" @endif
    >
    <img src="{{ asset('/wap/images/100percent/btn_icon_iglottery_n.png') }}" alt="">
    <span class="m_box-name_new">
        IG {{ __('mb.credit_color') }}
    </span>
</a>
</div>
@endif
@if(in_array('IG', $_api_list))
<div class="m_box m_box-half">
    <a class="m_box-link"
    @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=IG&game_type=3&devices=1&game_code=imlotto10059','','width=1024,height=768')"
    @else onclick="location.href = '{{ route('wap.login') }}'" @endif
    >
    <img src="{{ asset('/wap/images/100percent/btn_icon_iglottery_n.png') }}" alt="">
    <span class="m_box-name_new">
        IG {{ __('mb.mark_six') }}
    </span>
</a>
</div>
@endif -->
@if(in_array('ESB', $_api_list))
<div class="m_box m_box-half">
    <a class="m_box-link"
    @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=ESB&game_type=5&devices=1','','width=1024,height=768')"
    @else onclick="location.href = '{{ route('wap.login') }}'" @endif
    >
    <img src="{{ asset('/wap/images/100percent/btn_icon_esbball_n.png') }}" alt="">
    <span class="m_box-name_new">
        ESB {{ __('mb.gaming') }}
    </span>
</a>
</div>
@endif
@if(in_array('HC', $_api_list))
<div class="m_box m_box-half">
    <a class="m_box-link"
    @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=HC&game_type=5&devices=1','','width=1024,height=768')"
    @else onclick="location.href = '{{ route('wap.login') }}'" @endif
    >
    <img src="{{ asset('/wap/images/100percent/btn_icon_hcball_n.png') }}" alt="">
    <span class="m_box-name_new">
        {{ __('mb.dynasty_esports') }}
    </span>
</a>
</div>
@endif
</div>

{{--体育--}}
<div class="m_wrapper clear">
    <div class="m_category" id="ball">
        {{ __('mb.sports_event') }}
    </div>
    @if(in_array('GJ', $_api_list))
    <div class="m_box m_box-half">
        <a class="m_box-link"
        @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=GJ&game_type=4&devices=1','','width=1024,height=768')"
        @else onclick="location.href = '{{ route('wap.login') }}'" @endif
        >
        {{--<img class="m_isComing" src="{{ asset('/wap/images/m_isComing.png') }}" alt="">--}}
        <img src="{{ asset('/wap/images/100percent/btn_icon_gjball_n.png') }}" alt="">
        <span class="m_box-name_new">
            {{ __('mb.crown_sports') }}
        </span>
    </a>
</div>
@endif
@if(in_array('SS', $_api_list))
<div class="m_box m_box-half">
    <a class="m_box-link"
    @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=SS&game_type=4&devices=1','','width=1024,height=768')"
    @else onclick="location.href = '{{ route('wap.login') }}'" @endif
    >
    <img src="{{ asset('/wap/images/100percent/btn_icon_ssball_n.png') }}" alt="">
    <span class="m_box-name_new">
        {{ __('mb.sansheng_sports') }}
    </span>
</a>
</div>
@endif
@if(in_array('BBIN', $_api_list))
<div class="m_box m_box-half">
    <a class="m_box-link"
    @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=BBIN&game_type=4&devices=1','','width=1024,height=768')"
    @else onclick="location.href = '{{ route('wap.login') }}'" @endif
    >
    {{--<img class="m_isComing" src="{{ asset('/wap/images/m_isComing.png') }}" alt="">--}}
    <img src="{{ asset('/wap/images/100percent/btn_icon_ball_n.png') }}" alt="">
    <span class="m_box-name_new">
        BB {{ __('mb.physical_education') }}
    </span>
</a>
</div>
@endif
@if(in_array('IBC', $_api_list))
<div class="m_box m_box-half">
    <a class="m_box-link"
    @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=IBC&game_type=4&devices=1','','width=1024,height=768')"
    @else onclick="location.href = '{{ route('wap.login') }}'" @endif
    >
    {{--<img class="m_isComing" src="{{ asset('/wap/images/m_isComing.png') }}" alt="">--}}
    <img src="{{ asset('/wap/images/100percent/btn_icon_ibcball_n.png') }}" alt="">
    <span class="m_box-name_new">
        {{ __('mb.sabah_sports') }}
    </span>
</a>
</div>
@endif
@if(in_array('AG', $_api_list))
<div class="m_box m_box-half">
    <a class="m_box-link"
    @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=AG&game_type=4&devices=1','','width=1024,height=768')"
    @else onclick="location.href = '{{ route('wap.login') }}'" @endif
    >
    <img src="{{ asset('/wap/images/100percent/btn_icon_agball_n.png') }}" alt="">
    <span class="m_box-name_new">
        AG {{ __('mb.physical_education') }}
    </span>
</a>
</div>
@endif
@if(in_array('NEWBB', $_api_list))
<div class="m_box m_box-half">
    <a class="m_box-link"
    @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=NEWBB&game_type=4&devices=1','','width=1024,height=768')"
    @else onclick="location.href = '{{ route('wap.login') }}'" @endif
    >
    <img src="{{ asset('/wap/images/100percent/btn_icon_bcsport_n.png') }}" alt="">
    <span class="m_box-name_new">
        NEWBB {{ __('mb.physical_education') }}
    </span>
</a>
</div>
@endif


@if(in_array('AVIA', $_api_list))
<div class="m_box m_box-half">
    <a class="m_box-link"
    @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=AVIA&game_type=5&devices=1','','width=1024,height=768')"
    @else onclick="location.href = '{{ route('wap.login') }}'" @endif
    >
    <img src="{{ asset('/wap/images/100percent/btn_icon_aviaball_n.png') }}" alt="">
    <span class="m_box-name_new">
        {{ __('mb.pan_asian_esports') }}
    </span>
</a>
</div>
@endif
{{--@if(in_array('NEWBB', $_api_list))
<div class="m_box m_box-half">
    <a class="m_box-link" href="{{ route('ng.playGame') }}?plat_type=NEWBB&game_type=5&devices=1">
        <img src="{{ asset('/wap/images/100percent/btn_icon_bcsport_n.png') }}" alt="">
        <span class="m_box-name_new">
            NEWBB {{ __('mb.gaming') }}
        </span>
    </a>
</div>
@endif--}}
</div>


{{--优惠--}}
<div class="m_wrapper clear">
    <div class="m_category">
        {{ __('mb.promotions') }}
    </div>
    <div class="m_box m_box-full">
        <a class="m_box-link" href="{{ route('wap.activity_list') }}">
            <img src="{{ asset('/wap/images/m_box-act2.png') }}" alt="" style="width:100%">
            <span class="m_box-name_new">
                {{ __('mb.promotions') }}
            </span>
        </a>
    </div>
</div>
</div>
</div>

<script>
    (function ($) {
        $(function () {
            $('.disabled').on('click', function () {
                alert('暂未开放，敬请期待！');
            });
        })
        $(window).scroll(
           function() {
               var scrollTop = $(this).scrollTop();
               var scrollHeight = $(document).height();
               var windowHeight = $(this).height();
               if(scrollTop>=170){
                 $(".category-wrap-placeholder_3S0wB").addClass("fixed_24GUJ")
             }else{
                 $(".category-wrap-placeholder_3S0wB").removeClass("fixed_24GUJ")
             }
             var liveTop=$("#live").offset().top;
             var casinoTop=$("#casino").offset().top;
             var lotterTop=$("#lotter").offset().top;
             var ballTop=$("#ball").offset().top;
             var kycardTop=$("#kycard").offset().top;
             scrollTop=scrollTop+180;
             console.log(kycardTop);
             console.log(scrollTop);
             if(scrollTop>=liveTop&&scrollTop<casinoTop){
                 $('.category-name_2VWaa').eq(0).find('a').addClass("active").parent().siblings().find('a').removeClass('active') 
             }else if(scrollTop>=casinoTop&&scrollTop<lotterTop){
                 $('.category-name_2VWaa').eq(1).find('a').addClass("active").parent().siblings().find('a').removeClass('active') 
             }else if(scrollTop>=lotterTop&&scrollTop<ballTop){
                 $('.category-name_2VWaa').eq(2).find('a').addClass("active").parent().siblings().find('a').removeClass('active') 
             }else if(scrollTop>=ballTop&&scrollTop<kycardTop){
                 $('.category-name_2VWaa').eq(3).find('a').addClass("active").parent().siblings().find('a').removeClass('active') 
             }else if(scrollTop>=kycardTop){
                 $('.category-name_2VWaa').eq(4).find('a').addClass("active").parent().siblings().find('a').removeClass('active') 
             }
         }
         );
        $(".category-name_2VWaa a").click(function(){
            var scrollTop=$(window).scrollTop()
            var index=$(this).parent().index();
            console.log(index);
            switch(index){
              case 0:
              scrollTop=$("#live").offset().top;
              break;
              case 1:
              scrollTop=$("#casino").offset().top;
              break;
              case 2:
              scrollTop=$("#lotter").offset().top;
              break;
              case 3:
              scrollTop=$("#ball").offset().top;
              break;
              case 4:
              scrollTop=$("#kycard").offset().top;
              break;
          }
          console.log(scrollTop)
          document.body.scrollTop =scrollTop-80;
          $(this).addClass("active").parent().siblings().find('a').removeClass('active')
      })
    })(jQuery)
    
</script>

@endsection