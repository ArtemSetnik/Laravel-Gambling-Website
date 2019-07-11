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
				box-sizing: border-box;
				width: 85px;
				height: 82px;
				margin-top: 15px;
				padding: 0 3px;
				text-align: center;
				text-decoration: none;
				position: relative;
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
			overflow: hidden;
			margin: 0 auto;
			white-space: nowrap;
			text-overflow: ellipsis;
			color: #FFF;
			line-height: 22px;
			font-size:12px
			
		}
		.m_wrapper .m_box .m_box-link{
			background-color:#1b1d1b;
			border:0
		}
		.m_notice{
		    margin-top:0
		}
		.m_wrapper{
			    width: 255px;
				margin: 0 auto;
				margin-bottom: 70px;
		}
		.m_wrapper .m_box{
	padding:0;
}
.search-box_qAdH2 {
    box-sizing: border-box;
    width: 100%;
    padding-top: 18px;
    text-align: center;
}
.search-box_qAdH2 .search-input_2eKla {
    position: relative;
    margin: 0 auto;
    border-radius: 5px;
    padding: 4px;
    background: #FFF;
    width: 94%;
    max-width: 471px;
}
.search-box_qAdH2 input {
    border: 0;
    box-sizing: border-box;
    padding: 0 30px 0 14px;
    background: none;
    width: 100%;
    text-align: left;
    outline: none;
    color: #9C9C9C;
}
.search-box_qAdH2 span {
    position: absolute;
    top: 6px;
    left: 8px;
    font-size: 12px;
    letter-spacing: 1px;
    color: #9C9C9C;
    text-align: center;
}
.search-box_qAdH2 span img {
    display: inline-block;
    margin-right: 9px;
    width: 15px;
    vertical-align: sub;
}
.search-box_qAdH2 .search-clear_2bmIg {
    position: absolute;
    top: 10%;
    right: 10px;
    opacity: 0;
}
.search-box_qAdH2 .search-clear_2bmIg img {
    width: 18px;
    background-size: 100%;
}
@media screen and (min-width: 375px) and (orientation: portrait){
.m_wrapper {
    width: 340px;
}
}
	</style>
    <div class="m_container">
        <div class="m_body">
            

            
            
           
             
                 
            {{--捕鱼--}}
      <div class="m_wrapper clear">
                <div class="search-box_qAdH2"><div class="search-input_2eKla"><input type="text" value="" id="filter"><span><img role="presentation" src="{{ asset('/wap/images/100percent/icon_search.png') }}"><!-- react-text: 2790 -->搜寻<!-- /react-text --></span><div class="search-clear_2bmIg"><img role="presentation" src="{{ asset('/wap/images/100percent/btn_searchbar_close.png') }}"></div></div></div>
                @if(in_array('AG', $_api_list))
                    <div class="m_box m_box-half">
                        <a class="m_box-link"
                           @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=AG&game_type=6&device=1','','width=1024,height=768')"
                           @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                        >
                            {{--<img class="m_isComing" src="{{ asset('/wap/images/m_isComing.png') }}" alt="">--}}
                            <img src="{{ asset('/web/images/catchFish/ag.png') }}" alt="">
                          <span class="m_box-name_new">
                            AG捕鱼王
                          </span>
                        </a>
                    </div>

                @endif
                @if(in_array('BBIN', $_api_list))
                    <div class="m_box m_box-half">
                        <a class="m_box-link"
                           @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=BBIN&game_type=6&device=1','','width=1024,height=768')"
                           @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                        >
                            {{--<img class="m_isComing" src="{{ asset('/wap/images/m_isComing.png') }}" alt="">--}}
                            <img src="{{ asset('/web/images/catchFish/bb.png') }}" alt="">
                            <span class="m_box-name_new">
                            BB捕鱼达人
                          </span>
                        </a>
                    </div>
                @endif
                @if(in_array('BBIN', $_api_list))
                    <div class="m_box m_box-half">
                        <a class="m_box-link"
                           @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=BBIN&game_type=6&devices=1&game_code=38001','','width=1024,height=768')"
                           @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                        >
                            {{--<img class="m_isComing" src="{{ asset('/wap/images/m_isComing.png') }}" alt="">--}}
                            <img src="{{ asset('/web/images/catchFish/bb2.png') }}" alt="">
                            <span class="m_box-name_new">
                            BB捕鱼大师
                          </span>
                        </a>
                    </div>
                @endif
                @if(in_array('MW', $_api_list))
                    <div class="m_box m_box-half">
                        <a class="m_box-link"
                           @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=MW&game_type=6&devices=1','','width=1024,height=768')"
                           @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                        >
                            {{--<img class="m_isComing" src="{{ asset('/wap/images/m_isComing.png') }}" alt="">--}}
                            <img src="{{ asset('/web/images/catchFish/mw.png') }}" alt="">
                            <span class="m_box-name_new">
                            MW千炮捕鱼
                          </span>
                        </a>
                    </div>
                @endif
                @if(in_array('SA', $_api_list))
                    <div class="m_box m_box-half">
                        <a class="m_box-link"
                           @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=SA&game_type=6&devices=1','','width=1024,height=768')"
                           @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                        >
                            {{--<img class="m_isComing" src="{{ asset('/wap/images/m_isComing.png') }}" alt="">--}}
                            <img src="{{ asset('/web/images/catchFish/sa.png') }}" alt="">
                            <span class="m_box-name_new">
                            SA鱼乐无穷
                          </span>
                        </a>
                    </div>
                @endif
                @if(in_array('CQ9', $_api_list))
                    <div class="m_box m_box-half">
                        <a class="m_box-link"
                           @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=CQ9&game_type=6&devices=1','','width=1024,height=768')"
                           @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                        >
                            {{--<img class="m_isComing" src="{{ asset('/wap/images/m_isComing.png') }}" alt="">--}}
                            <img src="{{ asset('/web/images/catchFish/cq9.png') }}" alt="">
                            <span class="m_box-name_new">
                            CQ9皇金渔场
                          </span>
                        </a>
                    </div>
                @endif
                @if(in_array('JDB', $_api_list))
                    <div class="m_box m_box-half">
                        <a class="m_box-link"
                           @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=JDB&game_type=6&devices=1&game_code=7_7003','','width=1024,height=768')"
                           @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                        >
                            {{--<img class="m_isComing" src="{{ asset('/wap/images/m_isComing.png') }}" alt="">--}}
                            <img src="{{ asset('/web/images/catchFish/jdb.png') }}" alt="">
                            <span class="m_box-name_new">
                            JDB财神捕鱼
                          </span>
                        </a>
                    </div>
                @endif
                @if(in_array('FG', $_api_list))
                    <div class="m_box m_box-half">
                        <a class="m_box-link"
                           @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=FG&game_type=6&devices=1','','width=1024,height=768')"
                           @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                        >
                            {{--<img class="m_isComing" src="{{ asset('/wap/images/m_isComing.png') }}" alt="">--}}
                            <img src="{{ asset('/web/images/catchFish/fg.png') }}" alt="">
                            <span class="m_box-name_new">
                            FG欢乐捕鱼
                          </span>
                        </a>
                    </div>
                @endif
                @if(in_array('JDB', $_api_list))
                    <div class="m_box m_box-half">
                        <a class="m_box-link"
                           @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=JDB&game_type=6&devices=1&game_code=7_7001','','width=1024,height=768')"
                           @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                        >
                            {{--<img class="m_isComing" src="{{ asset('/wap/images/m_isComing.png') }}" alt="">--}}
                            <img src="{{ asset('/web/images/catchFish/jdblw.png') }}" alt="">
                            <span class="m_box-name_new">
                            JDB龙王捕鱼
                          </span>
                        </a>
                    </div>
                @endif
                @if(in_array('JDB', $_api_list))
                    <div class="m_box m_box-half">
                        <a class="m_box-link"
                           @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=JDB&game_type=6&devices=1&game_code=7_7002','','width=1024,height=768')"
                           @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                        >
                            {{--<img class="m_isComing" src="{{ asset('/wap/images/m_isComing.png') }}" alt="">--}}
                            <img src="{{ asset('/web/images/catchFish/jdblw2.png') }}" alt="">
                            <span class="m_box-name_new">
                            JDB龙王捕鱼2
                          </span>
                        </a>
                    </div>
                @endif
                @if(in_array('FG', $_api_list))
                    <div class="m_box m_box-half">
                        <a class="m_box-link"
                           @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=FG&game_type=6&devices=1&game_code=fish_mm','','width=1024,height=768')"
                           @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                        >
                            {{--<img class="m_isComing" src="{{ asset('/wap/images/m_isComing.png') }}" alt="">--}}
                            <img src="{{ asset('/web/images/catchFish/fgmr.png') }}" alt="">
                            <span class="m_box-name_new">
                            FG美人捕鱼
                          </span>
                        </a>
                    </div>
                @endif
                @if(in_array('FG', $_api_list))
                    <div class="m_box m_box-half">
                        <a class="m_box-link"
                           @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=FG&game_type=6&devices=1&game_code=fish_3D','','width=1024,height=768')"
                           @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                        >
                            {{--<img class="m_isComing" src="{{ asset('/wap/images/m_isComing.png') }}" alt="">--}}
                            <img src="{{ asset('/web/images/catchFish/fgjnh.png') }}" alt="">
                            <span class="m_box-name_new">
                            FG捕鱼嘉年华
                          </span>
                        </a>
                    </div>
                @endif
                @if(in_array('FG', $_api_list))
                    <div class="m_box m_box-half">
                        <a class="m_box-link"
                           @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=FG&game_type=6&devices=1&game_code=fish_tt','','width=1024,height=768')"
                           @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                        >
                            {{--<img class="m_isComing" src="{{ asset('/wap/images/m_isComing.png') }}" alt="">--}}
                            <img src="{{ asset('/web/images/catchFish/fgtt.png') }}" alt="">
                            <span class="m_box-name_new">
                            FG天天捕鱼
                          </span>
                        </a>
                    </div>
                @endif
                @if(in_array('FG', $_api_list))
                    <div class="m_box m_box-half">
                        <a class="m_box-link"
                           @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=FG&game_type=6&devices=1&game_code=fish_bn','','width=1024,height=768')"
                           @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                        >
                            {{--<img class="m_isComing" src="{{ asset('/wap/images/m_isComing.png') }}" alt="">--}}
                            <img src="{{ asset('/web/images/catchFish/fgbn.png') }}" alt="">
                            <span class="m_box-name_new">
                            FG捕鸟达人
                          </span>
                        </a>
                    </div>
                @endif
                @if(in_array('FG', $_api_list))
                    <div class="m_box m_box-half">
                        <a class="m_box-link"
                           @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=FG&game_type=6&devices=1&game_code=fish_zj','','width=1024,height=768')"
                           @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                        >
                            {{--<img class="m_isComing" src="{{ asset('/wap/images/m_isComing.png') }}" alt="">--}}
                            <img src="{{ asset('/web/images/catchFish/fglt.png') }}" alt="">
                            <span class="m_box-name_new">
                            FG雷霆战警
                          </span>
                        </a>
                    </div>
                @endif
                {{--@if(in_array('CQ9', $_api_list))
                    <div class="m_box m_box-half">
                        <a class="m_box-link"
                           @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=CQ9&game_type=6&devices=1&game_code=AD01','','width=1024,height=768')"
                           @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                        >
                            --}}{{--<img class="m_isComing" src="{{ asset('/wap/images/m_isComing.png') }}" alt="">--}}{{--
                            <img src="{{ asset('/web/images/catchFish/cq9byql.png') }}" alt="">
                            <span class="m_box-name_new">
                            CQ9捕鱼去喽
                          </span>
                        </a>
                    </div>
                @endif--}}
                @if(in_array('MT', $_api_list))
                    <div class="m_box m_box-half">
                        <a class="m_box-link"
                           @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=MT&game_type=6&devices=1&game_code=PTG0011','','width=1024,height=768')"
                           @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                        >
                            {{--<img class="m_isComing" src="{{ asset('/wap/images/m_isComing.png') }}" alt="">--}}
                            <img src="{{ asset('/web/images/catchFish/mtlk.png') }}" alt="">
                            <span class="m_box-name_new">
                            MT李逵捕鱼
                          </span>
                        </a>
                    </div>
                @endif
                @if(in_array('MT', $_api_list))
                    <div class="m_box m_box-half">
                        <a class="m_box-link"
                           @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=MT&game_type=6&devices=1&game_code=PTG0045','','width=1024,height=768')"
                           @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                        >
                            {{--<img class="m_isComing" src="{{ asset('/wap/images/m_isComing.png') }}" alt="">--}}
                            <img src="{{ asset('/web/images/catchFish/mtjc.png') }}" alt="">
                            <span class="m_box-name_new">
                            MT金蟾捕鱼
                          </span>
                        </a>
                    </div>
                @endif
          @if(in_array('SW', $_api_list))
              <div class="m_box m_box-half">
                  <a class="m_box-link"
                     @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=SW&game_type=6&devices=1','','width=1024,height=768')"
                     @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                  >
                      {{--<img class="m_isComing" src="{{ asset('/wap/images/m_isComing.png') }}" alt="">--}}
                      <img src="{{ asset('/web/images/catchFish/sw.png') }}" alt="">
                      <span class="m_box-name_new">
                            SW捕鱼多福
                          </span>
                  </a>
              </div>
          @endif
          @if(in_array('SW', $_api_list))
              <div class="m_box m_box-half">
                  <a class="m_box-link"
                     @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=SW&game_type=6&devices=1&game_code=sw_fuqsg','','width=1024,height=768')"
                     @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                  >
                      {{--<img class="m_isComing" src="{{ asset('/wap/images/m_isComing.png') }}" alt="">--}}
                      <img src="{{ asset('/web/images/catchFish/swfqsg.png') }}" alt="">
                      <span class="m_box-name_new">
                            SW福气水果
                          </span>
                  </a>
              </div>
          @endif
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
			var texts=['AG捕鱼王','BB捕鱼达人','BB捕鱼大师','MW千炮捕鱼','SA鱼乐无穷','CQ9皇金渔场','JDB财神捕鱼','FG欢乐捕鱼','JDB龙王捕鱼','JDB龙王捕鱼2','FG捕鱼嘉年华','FG捕鸟达人','FG雷霆战警','CQ9捕鱼去喽','MT李逵捕鱼','MT金蟾捕鱼','PT深海大赢家','SW捕鱼多福'];
			$("#filter").focus(function(){
				$(this).siblings("span").hide();
			})
			$("#filter").blur(function(){
				$(this).siblings("span").show();
			})
			$("#filter").bind('input propertychange',function(){
				var val=$(this).val();
				if(val.length>0){
					$('.search-clear_2bmIg').css('opacity',1);
                       for(var i=0;i<texts.length;i++){
						   var sear=new RegExp(val);
						   if(sear.test(texts[i])){
							  $(".m_box").eq(i).show();
						   }else{
							  $(".m_box").eq(i).hide(); 
						   }
					   }
					   
				}else{
					$('.search-clear_2bmIg').css('opacity',0);
					$(".m_box").show();
				}
			})	
			$(".search-clear_2bmIg").click(function(){
				$("#filter").val(null);
				$('.search-clear_2bmIg').css('opacity',0);
			})
			
        })(jQuery)
		
    </script>

@endsection