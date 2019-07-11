<div id="u_nav" style="display: none">
    <ul class="u_bar">
        <li style="margin-bottom: 6px">
            <span>
                <img src="{{ asset('/wap/images/aside_usere.png') }}" alt="">账号：{{ $_member->name }}
                <br>
                <img src="{{ asset('/wap/images/aside_money.png') }}" alt="">余额：<em id="money">{{ $_member->money }} 元</em>
            </span>
            <em class="level">
                <a href="/member/activities.php">
                    <b>一星</b>
                    10%流水返水
                </a>
            </em>
        </li>
        <li style="margin-bottom: 6px">
            <a href="{{ route('wap.index') }}"><img src="{{ asset('/wap/images/aside_1.png') }}" alt="">首页</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="{{ route('wap.transfer') }}"><img src="{{ asset('/wap/images/aside_2.png') }}" alt="">额度转换</a> <i class="icon-angle-right"></i></li>
        <li><a href="{{ route('wap.recharge') }}"><img src="{{ asset('/wap/images/aside_3.png') }}" alt="">在线充值</a> <i class="icon-angle-right"></i></li>
        <li style="margin-bottom: 6px"><a href="{{ route('wap.drawing') }}"><img src="{{ asset('/wap/images/aside_4.png') }}" alt="">在线提款</a> <i class="icon-angle-right"></i></li>
        <li><a href="{{ route('wap.recharge_record') }}"><img src="{{ asset('/wap/images/aside_5.png') }}" alt="">充值记录</a> <i class="icon-angle-right"></i></li>
        <li><a href="{{ route('wap.drawing_record') }}"><img src="{{ asset('/wap/images/aside_6.png') }}" alt="">提款记录</a> <i class="icon-angle-right"></i></li>
        <li><a href="{{ route('wap.transfer_record') }}"><img src="{{ asset('/wap/images/aside_7.png') }}" alt="">额度转换记录</a> <i class="icon-angle-right"></i></li>
        <li style="margin-bottom: 6px"><a href="{{ route('wap.game_record') }}"><img src="{{ asset('/wap/images/aside_12.png') }}" alt="">投注记录</a> <i class="icon-angle-right"></i></li>

        <li><a href="{{ route('wap.userinfo') }}"><img src="{{ asset('/wap/images/aside_8.png') }}" alt="">会员资料</a> <i class="icon-angle-right"></i></li>
        <li><a href="{{ route('wap.agent') }}"><img src="{{ asset('/wap/images/aside_13.png') }}" alt="">代理中心</a> <i class="icon-angle-right"></i></li>
        <li style="margin-bottom: 6px"><a href="{{ route('wap.reset_password') }}"><img src="{{ asset('/wap/images/aside_9.png') }}" alt="">修改密码</a> <i class="icon-angle-right"></i></li>
        <li><a href="javascript:;" target="_blank"><img src="{{ asset('/wap/images/aside_10.png') }}" alt="">在线客服</a> <i class="icon-angle-right"></i></li>
        <li><a href="javascript:;" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><img src="{{ asset('/wap/images/aside_11.png') }}" alt="">安全退出</a> <i class="icon-angle-right"></i>
            <form id="logout-form" action="{{ route('wap.logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
    </ul>
</div>