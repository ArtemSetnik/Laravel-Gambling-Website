@extends('wap.layouts.main')
@section('content')
    @include('wap.layouts.header')
    <div class="m_container">
        <div class="m_body">
            <div class="container-fluid gm_main">
                {{--<div class="head">--}}
                    {{--<a class="f_l" href="javascript:history.go(-1)"><img src="{{ asset('/wap/images/user_back.png') }}"--}}
                                                                         {{--alt=""></a>--}}
                    {{--<span>绑定银行卡信息</span>--}}
                    {{--<a class="f_r" href="javascript:history.go(-1)" style="visibility: hidden"><img--}}
                                {{--src="{{ asset('/wap/images/user_back.png') }}" alt=""></a>--}}
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
                    绑定银行卡
                </div>
                <div class="m_userCenter-line"></div>
                <div class="userInfo setCard">
                    <form action="{{ route('wap.post_bind_bank') }}" method="post" name="form1">
                        <dl>
                            <dt>收款人信息</dt>
                            <dd>
                                <div class="pull-left">
                                    会员账户
                                </div>
                                <div class="pull-right">
                                    {{ $_member->name }}
                                </div>
                            </dd>
                            <dd>
                                <div class="pull-left">收款人姓名</div>
                                <div class="pull-right">{{ $_member->real_name }}</div>
                            </dd>
                        </dl>
                        <dl class="set_card">
                            <dt>
                                设置银行卡信息 <br>
                                <span><em>*</em>设置后将无法修改信息，请核实后填写</span>
                            </dt>
                            <dd>
                                <div class="pull-left">开户名</div>
                                <input id="bank_username" class="pull-left" type="text" placeholder="开户人名字" name="bank_username">
                            </dd>
                            <dd>
                                <div class="pull-left">
                                    收款银行
                                </div>
                                <select class="select" name="bank_name">
                                    <option value="">--请选择--</option>
                                    @foreach(\App\Models\Base::$BANK_TYPE as $v)
                                        <option value="{{ $v }}"
                                                @if($_member->bank_name == $v) selected @endif>{{ $v }}</option>
                                    @endforeach
                                </select>
                            </dd>
                            <dd>
                                <div class="pull-left">银行账号</div>
                                <input id="pay_num" class="pull-left" type="number" placeholder="银行账号" name="bank_card">
                            </dd>
                            {{--<dd>--}}
                                {{--<div class="pull-left">开户行地址</div>--}}
                                {{--<input id="pay_address" class="pull-left" type="text" placeholder="开户行地址"--}}
                                       {{--name="bank_address">--}}
                            {{--</dd>--}}
                            <dd>
                                <div class="pull-left">开户行网点</div>
                                <input id="pay_address" class="pull-left" type="text" placeholder="开户行网点"
                                       name="bank_branch_name">
                            </dd>
                            @if($_system_config->is_sms_on == 0)
                            <dd>
                                <div class="pull-left">手机号</div>
                                <input id="v_phone" class="pull-left m_phone" type="text" placeholder="手机号"
                                       name="phone">
                                <a href="javascript:;" class="sendMsg">发送验证码</a>
                            </dd>
                            <dd>
                                <div class="pull-left">验证码</div>
                                <input class="pull-left" type="text" placeholder="验证码" name="v_code">
                            </dd>
                            @endif
                            <dd>
                                <input type="button" value="确定" class="submit_btn ajax-submit-btn">
                            </dd>
                        </dl>
                    </form>
                    <div style="padding: 20px">
                        <span class="c_blue">注意事项：</span><br>
                        1、银行账户持有人姓名必须与注册时输入的姓名一致，否则无法申请提款。<br>
                        2、每位客户只可以使用一张银行卡进行提款，如需要更换银行卡请与客服人员联系；否则提款将被拒绝。<br>
                        3、为保障客户资金安全，{{ $_system_config->site_name }}有可能需要用户提供电话单，银行对账单或其它资料验证，以确保客户资金不会被冒领。
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var v_phone_url = "{{ route('sendSms') }}";
        var commomModule = (function ($) {

            //验证码倒计时
            var codeCountDown = function ($me, time) {
                if (!$me.hasClass('active')) {
                    $me.time = time || 60;
                    $me.addClass('active');
                    $me.html('重新获取(' + $me.time + '秒)');
                    $me.timer = setInterval(function () {
                        $me.time--;
                        $me.html('重新获取(' + $me.time + '秒)');
                        if ($me.time == 0) {
                            clearInterval($me.timer);
                            $me.html('重新发送验证码').removeClass('active');
                        }
                    }, 1000);
                } else {
                    return false;
                }
            };

            return {
                // scrollbarWidth: scrollbarWidth,$(this),60
                codeCountDown: codeCountDown
            }
        })(jQuery);

        (function($){
            $(function(){
                $('.sendMsg').on('click',function(){
                    var btn = $(this);
                    var phone = $('#v_phone').val();
                    var myreg = /^1[34578]\d{9}$/;
                    if(!myreg.test(phone))
                    {
                        layer.open({
                            content: '请输入有效的手机号码',
                            //time: 1.5,
                            style: 'color: #333; background-color: #fff; width: auto'
                        });
                        return false;
                    }

                    $.ajax({
                        type: 'get',
                        url: v_phone_url,
                        data: {phone:phone},
                        dataType: "json",
                        success: function(data){
                            //layer.close(detailLoad);
                            btn.attr('disabled', false);

                            var html = '';
                            var obj = JSON.parse (data.status.msg);

                            for ( var p in obj )
                            {
                                if (typeof (obj[p]) == 'string')
                                {
                                    html+= '<p><b>'+ obj[p] + '</b></p>';
                                } else if(obj[p] instanceof Array)
                                {
                                    for (var i=0;i<obj[p].length;i++)
                                    {
                                        html+= '<p><b>'+ obj[p][i] + '</b></p>';
                                    }

                                }
                            }
                            //
                            if (data.status.errorCode == 0)
                            {
                                commomModule.codeCountDown(btn,60);
                                btn.attr('disabled', true);
                            }
                            layer.open({
                                content: html,
                                //time: 1.5,
                                style: 'color: #333; background-color: #fff; width: auto'
                            });

                        }
                    });
                });
            })
        })(jQuery)
    </script>
@endsection