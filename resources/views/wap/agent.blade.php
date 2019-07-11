@extends('wap.layouts.main')
@section('content')
    @include('wap.layouts.header')
    <div class="m_container">
        <div class="m_body">
            <div class="container-fluid gm_main">
                {{--<div class="head">--}}
                    {{--<a class="f_l" href="#u_nav"><img src="{{ asset('/wap/images/user_menu.png') }}" alt=""></a>--}}
                    {{--<span>代理中心</span>--}}
                    {{--<a class="f_r" href="#type"><img src="{{ asset('/wap/images/user_game.png') }}" alt=""></a>--}}
                {{--</div>--}}
                {{--@include('wap.layouts.aside')--}}
                {{--<div id="type" style="display: none">--}}
                    {{--<ul class="g_type">--}}
                        {{--<li>--}}
                            {{--@include('wap.layouts.aside_game_list')--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
                <div class="m_member-title clear textCenter">
                    <a class="pull-left" href="javascript:history.go(-1);">&nbsp;返回</a>
                    代理中心
                </div>
                <div class="m_userCenter-line"></div>
                <div class="userInfo dy_center" style="padding-top: 0;">
                    <dl style="margin-top: 10px" class="dy_center_info">
                        <dt>
                            会员账户
                        </dt>
                        <dd>
                            <div class="pull-left">
                                推广域名
                            </div>
                            <div class="pull-right">
                                @if ($_member->is_daili == 1)
                                    <span id="url">
                                        @if($_member->agent_uri)
                                            {{ $_member->agent_uri }}
                                        @else
                                            {{ route('web.register_one').'?i='.$_member->invite_code }}
                                        @endif
                                    </span>
                                    <span class="btn" data-clipboard-target="#url"
                                          style="color: #e4393c;padding-right: 0">复制</span>
                                @else
                                    <?php
                                    $apply = '';
                                    if (count($_member->daili_apply) > 0)
                                        $apply = $_member->daili_apply()->orderBy('created_at', 'desc')->first();
                                    ?>
                                    @if ($apply && $apply->status == 0)
                                        <span style="color: red;">您的代理资格审批中</span>
                                    @elseif($apply && $apply->status == 2)
                                        <span style="color: red;">申请失败</span>
                                        <a href="{{ route('wap.agent_apply') }}" class="submit_btn text-center">重新申请</a>
                                    @elseif($apply && $apply->status == 1)
                                        <span id="url">
                                            @if($_member->agent_uri)
                                                {{ $_member->agent_uri }}
                                            @else
                                                {{ route('web.register_one').'?i='.$_member->invite_code }}
                                            @endif</span>
                                        <span class="btn" data-clipboard-target="#url"
                                              style="color: #e4393c;padding-right: 0">复制</span>
                                    @else
                                        <span style="color: red;">您还不是代理</span>
                                        <a href="{{ route('wap.agent_apply') }}" class="submit_btn text-center">立即申请</a>
                                    @endif
                                @endif
                            </div>
                        </dd>
                        <dd>
                            <div class="pull-left">
                                真实姓名
                            </div>
                            <div class="pull-right">
                                {{ $_member->real_name }}
                            </div>
                        </dd>
                        <dd>
                            <div class="pull-left">
                                QQ
                            </div>
                            <div class="pull-right">
                                {{ $_member->qq }}
                            </div>
                        </dd>
                        <dd>
                            <div class="pull-left">手机号码</div>
                            <div class="pull-right">
                                @if ($_member->phone)
                                    {{ $_member->phone }}
                                @else
                                    <a href="{{ route('wap.set_phone') }}" class="c_blue">未设置</a>
                                @endif
                            </div>
                        </dd>
                        <dd>
                            <div class="pull-left">银行账户</div>
                            <div class="pull-right">
                                @if ($_member->bank_card)
                                    {{ $_member->bank_card }}
                                @else
                                    <a href="{{ route('wap.bind_bank') }}" class="c_blue">未设置</a>
                                @endif
                            </div>
                        </dd>
                    </dl>
                    <dl style="margin-top: 10px">
                        <dd>
                            <a href="{{ route('wap.daili_money_log') }}" class="clear">
                                <div class="pull-left">
                                    佣金发放记录
                                </div>
                                <i class="icon-angle-right"></i>
                            </a>
                        </dd>
                    </dl>
                    <dl style="margin-top: 10px">
                        <dd>
                            <a href="{{ route('wap.member_offline_sy') }}" class="clear">
                                <div class="pull-left">
                                    会员输赢报表
                                </div>
                                <i class="icon-angle-right"></i>
                            </a>
                        </dd>
                    </dl>
                    <dl style="margin-top: 10px">
                        <dd>
                            <a href="{{ route('wap.member_offline') }}" class="clear">
                                <div class="pull-left">
                                    下线会员
                                </div>
                                <i class="icon-angle-right"></i>
                            </a>
                        </dd>
                    </dl>
                    <dl>
                        <dd>
                            <a href="{{ route('wap.member_offline_recharge') }}" class="clear">
                                <div class="pull-left">
                                    下线会员存款记录
                                </div>
                                <i class="icon-angle-right"></i>
                            </a>
                        </dd>
                    </dl>
                    <dl>
                        <dd>
                            <a href="{{ route('wap.member_offline_drawing') }}" class="clear">
                                <div class="pull-left">
                                    下线会员提款记录
                                </div>
                                <i class="icon-angle-right"></i>
                            </a>
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('/wap/js/laydate.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/wap/js/clipboard.min.js') }}"></script>
    <script>
        var clipboard = new Clipboard('.btn');

        clipboard.on('success', function (e) {
            console.info('Action:', e.action);
            console.info('Text:', e.text);
            console.info('Trigger:', e.trigger);

            e.clearSelection();
        });

        clipboard.on('error', function (e) {
            console.error('Action:', e.action);
            console.error('Trigger:', e.trigger);
        });
    </script>
@endsection