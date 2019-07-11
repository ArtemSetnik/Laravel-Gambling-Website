<!--登录模态框-->
<div id="login" class="modal modal-login">
    <div class="modal-content">
        <form method="POST" action="{{ route('member.login.post') }}">
            <a href="" class="close bg-icon"></a>
            <div class="modal-login_form">
                <h2>用户登录</h2>
                <div class="modal-login_line">
                    <input class="username" type="text" placeholder="请输入用户名" required name="name">
                </div>
                <div class="modal-login_line">
                    <input class="psw" type="password" placeholder="请输入密码" required name="password">
                </div>
                <div class="modal-login_line code">
                    <input type="text" placeholder="请输入验证码" required name="code">
                    <img src="" alt="" width="100">
                </div>
                <div class="modal-login_line">
                    <button class="modal-login_submit ajax-submit-btn" type="button">登录</button>
                </div>
                <div class="modal-login_link clear">
                    <p class="pullRight">
                        还没有账号？
                        <a href="{{ route('web.register_one') }}">点击注册</a>
                    </p>
                </div>
            </div>
        </form>
    </div>
</div>
<!--半透明遮罩层-->
<div class="backdrop"></div>


<div class="header">
    <div class="header_hd">
        <div class="container clear">
            <div class="pullLeft">
                <span class="orange">摩通博彩网络,在博彩业内有着良好的口碑！</span>
                <span>请认准官方网站：<em class="red">www.motoogame.com</em> 其他均是假冒,请不要上当！</span>
            </div>
            <div class="pullRight fr">
                <strong>服务项目：</strong>
                <a href="javascript:;">源码出售</a>
                <a href="javascript:;">API接口</a>
                <a href="javascript:;">网站订制</a>
                <a href="javascript:;">24小时售后</a>
                <img src="{{ asset('/web/images/logo.png') }}" alt="">
            </div>
        </div>
    </div>
    <div class="header_bd">
        <div class="container clear">
            <div class="pullLeft">
                您好，欢迎您加入腾博会
                <span class="bg-icon bg-icon-tel"></span>
                客服电话：<em></em> 或 <em></em>
            </div>
            <div class="pullRight">
                @if (Auth::guard('member')->guest())
                    <a href="javascript:;" class="forget_psw">
                    <span class="bg-icon bg-icon-psw"></span>
                    忘记密码
                    </a>
                    @else
                    <span>{{ $_member->name }}</span>
                    <a style="color: #ffffff" href="{{ route('member.logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        安全退出
                    </a>

                    <form id="logout-form" action="{{ route('member.logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                @endif

                <a href="javascript:;" class="forget_psw">
                    <span class="bg-icon bg-icon-psw"></span>
                    新手引导
                </a>
            </div>
        </div>
    </div>
    <div class="nav">
        <div class="container clear">
            <div class="pullLeft">
                <img src="{{ asset('/web/images/logo1.png') }}" alt="">
            </div>
            <ul class="clear pullLeft">
                <li><a @if($web_route == 'web.index') class="active" @endif href="{{ route('web.index') }}"><i class="iconfont">&#xe683;</i>首 页</a></li>
                <li><a @if($web_route == 'web.liveCasino') class="active" @endif href="{{ route('web.liveCasino') }}">真人娱乐</a></li>
                <li><a href="javascript:;">棋牌游戏</a></li>
                <li><a href="javascript:;">点子游艺</a></li>
                <li><a href="javascript:;">彩票游戏</a></li>
                <li><a href="javascript:;">体育赛事</a></li>
                <li><a @if($web_route == 'web.activityList') class="active" @endif href="{{ route('web.activityList') }}">优惠活动</a></li>
            </ul>
            <div class="pullRight">
                @if (Auth::guard('member')->guest())
                    <a href="javascript:;" class="header_login">登录</a>
                    <a href="{{ route('web.register_one') }}" class="header_register">免费开户</a>
                 @else
                    <a href="{{ route('member.member_center') }}" class="header_register">个人中心</a>
                @endif
            </div>
        </div>
    </div>
</div>