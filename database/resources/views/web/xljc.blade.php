@extends('web.layouts.main')
@section('content')
<link type="text/css" rel="stylesheet" href="{{ asset('/web/css/xianlu/reset.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('/web/css/xianlu/style.css') }}">
<script type="text/javascript" src="{{ asset('/web/js/jquery.SuperSlide.2.1.1.js') }}"></script>


<div id="main" style="margin-top: 30px;">
    <div class="section">
        <div class="wrap">
            <div class="inner">
                <h2>
                    <img src="{{ asset('/web/images/xianlu/icon01.png') }}" alt="">
                    <span>澳门银河集团</span>
                    <img src="{{ asset('/web/images/xianlu/icon02.png') }}" alt="">
                </h2>
                <div class="subBox clearfix">
                    <div class="lBox">
                        <ul class="ulLink clearfix">
                            @foreach($xljc as $k => $item)
                                @if($k < 6)
                                    <?php
                                    $uri = '';
                                        if ($item->url)
                                            {

                                                $arr = explode('.', $item->url);
                                                if (count($arr) == 3 )
                                                {
                                                    $uri = $arr[1].$arr[2];
                                                }
                                            }


                                    ?>
                                <li><a href="http://{{ $item->url }}?n=true" target="_blank">{{ $item->title }}<span>{{ $uri }}</span></a></li>
                                @endif
                             @endforeach
                            {{--<li><a href="http://www.11005144.com/" target="_blank">澳门银河集团①站<span>11005144.com</span></a></li>--}}
                            {{--<li><a href="https://www.55005144.com:5144/" target="_blank">澳门银河集团②站<span>55005144.com</span></a></li>--}}
                            {{--<li><a href="http://www.11225144.com:8888/" target="_blank">澳门银河集团③站<span>11225144.com</span></a></li>--}}
                            {{--<li><a href="http://www.11335144.com/" target="_blank">澳门银河集团④站<span>11335144.com</span></a></li>--}}
                            {{--<li><a href="http://www.11445144.com:8888/" target="_blank">澳门银河集团⑤站<span>11445144.com</span></a></li>--}}
                            {{--<li><a href="http://www.11555144.com:8888/" target="_blank">澳门银河集团⑥站<span>11555144.com</span></a></li>--}}
                        </ul>
                        <ul class="linkList clearfix">
                            @foreach($xljc as $k => $item)

                                <?php
                                $uri = '';
                                if ($item->url)
                                {

                                    $arr = explode('.', $item->url);
                                    if (count($arr) == 3 )
                                    {
                                        $uri = $arr[1].$arr[2];
                                    }
                                }


                                ?>
                                @if($item->mark == 'aomen')
                                <li class="li01">
                                    <a href="http://{{ $item->url }}?n=true" target="_blank">
                                        <p>{{ $item->title }}<span>{{ $uri }}</span></p>
                                    </a>
                                </li>
                                @endif
                                    @if($item->mark == 'dalu')
                            <li class="li02">
                                <a href="http://{{ $item->url }}?n=true" target="_blank">
                                    <p>{{ $item->title }}<span>{{ $uri }}</span></p>
                                </a>
                            </li>
                                    @endif
                                    @if($item->mark == 'hk')
                            <li class="li03">
                                <a href="http://{{ $item->url }}?n=true" target="_blank">
                                    <p>{{ $item->title }}<span>{{ $uri }}</span></p>
                                </a>
                            </li>
                                    @endif
                                    @if($item->mark == 'ouzhou')
                            <li class="li04">
                                <a href="http://{{ $item->url }}?n=true" target="_blank">
                                    <p>{{ $item->title }}<span>{{ $uri }}</span></p>
                                </a>
                            </li>
                                    @endif
                                    @if($item->mark == 'usa')
                            <li class="li05">
                                <a href="http://{{ $item->url }}?n=true" target="_blank">
                                    <p>{{ $item->title }}<span>{{ $uri }}</span></p>
                                </a>
                            </li>
                                    @endif
                                    @if($item->mark == 'adly')
                            <li class="li06">
                                <a href="http://{{ $item->url }}?n=true" target="_blank">
                                    <p>{{ $item->title }}<span>{{ $uri }}</span></p>
                                </a>
                            </li>
                                    @endif
                                @endforeach
                        </ul>
                    </div>
                    <div class="rBox">
                        <div class="info clearfix">
                            <p class="price">
                                <a href="http://www.5144s.com/Register" target="_blank"><span id="i1">8,879,380.91</span></a>
                            </p>
                            <div class="wininfo">
                                <div class="title"><span>客户ID</span><span class="cspan">金额</span><span>游戏名称</span></div>
                                <div class="inbd">
                                    <div class="tempWrap">
                                        <div class="tempWrap">
                                            <ul>
                                                <li class="clone"><span>yy***17</span><span class="num">8790</span><span>奇幻花园</span>
                                                </li>
                                                <li><span>db***4</span><span class="num">8280</span><span>宝石联机</span></li>
                                                <li><span>chia***i</span><span class="num">880</span><span>钻石列车</span>
                                                </li>
                                                <li><span>lid***78</span><span class="num">1216</span><span>足球拉霸</span>
                                                </li>
                                                <li><span>a6***15</span><span class="num">8100</span><span>蒸气炸弹</span>
                                                </li>
                                                <li><span>zhi***2</span><span class="num">11208</span><span>战火佳人</span>
                                                </li>
                                                <li><span>di***un</span><span class="num">9014</span><span>月光宝盒</span>
                                                </li>
                                                <li><span>hu1***5</span><span class="num">7023</span><span>玉蒲团</span></li>
                                                <li><span>am***314</span><span class="num">992</span><span>鱼虾蟹</span></li>
                                                <li><span>ni***29</span><span class="num">20801</span><span>夜市人生</span>
                                                </li>
                                                <li><span>lia***88</span><span class="num">238539</span><span>幸运财神</span>
                                                </li>
                                                <li><span>jun***g5</span><span class="num">241416</span><span>星际大战</span>
                                                </li>
                                                <li><span>zgy5***3</span><span class="num">17042</span><span>喜福牛年</span>
                                                </li>
                                                <li><span>qiu***10</span><span class="num">11237</span><span>喜福猴年</span>
                                                </li>
                                                <li><span>yl8***6</span><span class="num">90210</span><span>西游记</span>
                                                </li>
                                                <li><span>lds***25</span><span class="num">12085</span><span>王牌5PK</span>
                                                </li>
                                                <li><span>ab1***32</span><span class="num">2186</span><span>外星争霸</span>
                                                </li>
                                                <li><span>jj1***27</span><span class="num">8427</span><span>外星战记</span>
                                                </li>
                                                <li><span>Zhw***uf</span><span class="num">30063</span><span>筒子拉霸</span>
                                                </li>
                                                <li><span>fe***22</span><span class="num">13541</span><span>天山侠侣传</span>
                                                </li>
                                                <li><span>ba***ei</span><span class="num">21341</span><span>特务危机</span>
                                                </li>
                                                <li><span>li***93</span><span class="num">2790</span><span>糖果派对</span>
                                                </li>
                                                <li><span>qq1***11</span><span class="num">1201</span><span>水果乐园</span>
                                                </li>
                                                <li><span>zdy***46</span><span class="num">15124</span><span>水果拉霸</span>
                                                </li>
                                                <li><span>Qim***08</span><span class="num">3964</span><span>尸乐园</span>
                                                </li>
                                                <li><span>ya***n00</span><span class="num">17183</span><span>圣兽传说</span>
                                                </li>
                                                <li><span>wan***91</span><span class="num">23711</span><span>圣诞派对</span>
                                                </li>
                                                <li><span>vv***27</span><span class="num">1149</span><span>神舟27</span>
                                                </li>
                                                <li><span>xio***34</span><span class="num">9059</span><span>沙滩排球</span>
                                                </li>
                                                <li><span>cp1***79</span><span class="num">25622</span><span>三国拉霸</span>
                                                </li>
                                                <li><span>y***99</span><span class="num">12370</span><span>三国</span></li>
                                                <li><span>zds***5</span><span class="num">12345</span><span>热带风情</span>
                                                </li>
                                                <li><span>yy***17</span><span class="num">8790</span><span>奇幻花园</span>
                                                </li>
                                                <li class="clone"><span>db***4</span><span class="num">8280</span><span>宝石联机</span>
                                                </li>
                                                <li class="clone"><span>chia***i</span><span class="num">880</span><span>钻石列车</span>
                                                </li>
                                                <li class="clone"><span>lid***78</span><span class="num">1216</span><span>足球拉霸</span>
                                                </li>
                                                <li class="clone"><span>a6***15</span><span class="num">8100</span><span>蒸气炸弹</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="linkBox">
                            <ul class="linkList clearfix">
                                <li class="li01"><a href="{{ route('web.register_one') }}" target="_blank"><p>免费开户<span>register</span></p></a></li>
                                <li class="li02"><a href="{{ route('web.index') }}/m" target="_blank"><p>手机投注<span>betting</span></p></a></li>
                                <li class="li03"><a href="{{ $_system_config->service_link }} }}" target="_blank"><p>代理咨询<span>help</span></p></a></li>
                                <li class="li04"><a href="{{ route('web.activityList') }}" target="_blank"><p>优惠申请<span>payment</span></p></a></li>
                                <li class="li05"><a href="javascript:;" class="daili_apply"><p>代理加盟<span>join agent</span></p></a></li>
                                <li class="li06"><a href="{{ $_system_config->service_link }} }}" target="_blank"><p>在线客服<span>onlline service</span></p></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrap">
        <div class="section04">
            <h2 class="clearfix">
                <span class="ttl">推荐浏览器</span>
                <span class="txt01">由于360恶意提示风险网站，严重影响游戏体验，推荐使用以下浏览器进行游戏</span>
                <span class="txt02">THE BROWSER</span>
            </h2>
            <ul class="ulLink clearfix">
                <li>
                    <a target="_blank" href="https://www.ub66.com/">
                        <img src="{{ asset('/web/images/xianlu/img10.png') }}" alt=""><span>寰宇浏览器 </span>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="http://www.google.cn/chrome/browser/desktop/index.html">
                        <img src="{{ asset('/web/images/xianlu/img11.png') }}" alt=""><span>谷歌浏览器 </span>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="http://www.maxthon.cn/">
                        <img src="{{ asset('/web/images/xianlu/img12.png') }}" alt=""><span>遨游浏览器 </span>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="https://liulanqi.baidu.com/">
                        <img src="{{ asset('/web/images/xianlu/img13.png') }}" alt=""><span>百度浏览器 </span>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="http://www.firefox.com.cn/">
                        <img src="{{ asset('/web/images/xianlu/img14.png') }}" alt=""><span>火狐浏览器 </span>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="http://ie.sogou.com/">
                        <img src="{{ asset('/web/images/xianlu/img15.png') }}" alt=""><span>搜狗浏览器 </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<script type="text/javascript">
    jQuery(".wininfo").slide({
        mainCell: ".inbd ul",
        autoPlay: true,
        effect: "topMarquee",
        vis: 4,
        interTime: 70,
        trigger: "click"
    });
    function parseFormatNum(number, n) {
        if (n != 0) {
            n = (n > 0 && n <= 20) ? n : 2;
        }
        number = parseFloat((number + "").replace(/[^\d\.-]/g, "")).toFixed(n) + "";
        var sub_val = number.split(".")[0].split("").reverse();
        var sub_xs = number.split(".")[1];

        var show_html = "";
        for (i = 0; i < sub_val.length; i++) {
            show_html += sub_val[i] + ((i + 1) % 3 == 0 && (i + 1) != sub_val.length ? "," : "");
        }

        if (n == 0) {
            return show_html.split("").reverse().join("");
        } else {
            return show_html.split("").reverse().join("") + "." + sub_xs;
        }
    }

    var num = 8202030 + Math.random() * 1000;
    function ranNum() {
        var addNum = 1000 + Math.random() * 1100;
        num = num + addNum;
        $('#i1').text(parseFormatNum(num, 2));
    }
    $(function () {
        $('#i1').text(parseFormatNum(num, 2));
        setInterval(ranNum, 600);
    })
</script>
@endsection