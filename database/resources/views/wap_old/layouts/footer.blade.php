<div class="m_footer">
    <div class="m_container">
        <ul class="clear">
            <li @if(in_array($_wap_router, ['wap.index','wap.init'])) class="active" @endif>
                <a href="{{ route('wap.index') }}">
                    <i class="m_footer-icon m_footer-icon-home"></i>
                    <p class="m_footer-link-text">首页</p>
                </a>
            </li>
            <li>
                <a href="{{ $_system_config->service_link }}">
                    <i class="m_footer-icon m_footer-icon-service"></i>
                    <p class="m_footer-link-text">在线客服</p>
                </a>
            </li>
            <li @if($_wap_router=='wap.activity_list') class="active" @endif>
                <a href="{{ route('wap.activity_list') }}">
                    <i class="m_footer-icon m_footer-icon-promotion"></i>
                    <p class="m_footer-link-text">优惠活动</p>
                </a>
            </li>
            <li @if(in_array($_wap_router, ['wap.login','wap.nav'])) class="active" @endif>
                @if (Auth::guard('member')->guest())
                    <a href="{{ route('wap.login') }}">
                        <i class="m_footer-icon m_footer-icon-about"></i>
                        <p class="m_footer-link-text">登入</p>
                    </a>
                @else
                    <a href="{{ route('wap.nav') }}">
                        <i class="m_footer-icon m_footer-icon-about"></i>
                        <p class="m_footer-link-text">个人中心</p>
                    </a>
                @endif
            </li>
        </ul>
    </div>
</div>