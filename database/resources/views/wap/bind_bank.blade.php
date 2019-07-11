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
                    <a class="pull-left" href="javascript:history.go(-1);">&nbsp;{{ __('mb.Back') }}</a>
                   {{ __('mb.Binding_Bank_Info') }} 
                </div>
                <div class="m_userCenter-line"></div>
                <div class="userInfo setCard">
                    <form action="{{ route('wap.post_bind_bank') }}" method="post" name="form1">
                        <dl>
                            <dt>{{ __('mb.User_Account_Info') }}</dt>
                            <dd>
                                <div class="pull-left">
                                    {{ __('mb.Member_Account') }}
                                </div>
                                <div class="pull-right">
                                    {{ $_member->name }}
                                </div>
                            </dd>
                            <dd>
                                <div class="pull-left">{{ __('mb.Payee_Name') }}</div>
                                <div class="pull-right">{{ $_member->real_name }}</div>
                            </dd>
                        </dl>
                        <dl class="set_card">
                            <dt>
                                {{ __('mb.Set_Bank_Account_Infomation') }} <br>
                                <span><em>*</em>{{ __('mb.Not_able_to_change_after_Fill') }}</span>
                            </dt>
                            <dd>
                                <div class="pull-left">{{ __('mb.Account_Name') }}</div>
                                <input id="bank_username" class="pull-left" type="text" placeholder="{{ __('mb.User_Name') }}" name="bank_username">
                            </dd>
                            <dd>
                                <div class="pull-left">
                                   {{ __('mb.Bank_Name') }} 
                                </div>
                                <select class="select" name="bank_name">
                                    <option value="">--{{ __('mb.Please_Choose') }}--</option>
                                    @foreach(\App\Models\Base::$BANK_TYPE as $v)
                                        <option value="{{ $v }}"
                                                @if($_member->bank_name == $v) selected @endif>{{ $v }}</option>
                                    @endforeach
                                </select>
                            </dd>
                            <dd>
                                <div class="pull-left">{{ __('mb.Bank_Account') }}</div>
                                <input id="pay_num" class="pull-left" type="number" placeholder="{{ __('mb.Bank_Account') }}" name="bank_card">
                            </dd>
                            {{--<dd>--}}
                                {{--<div class="pull-left">开户行地址</div>--}}
                                {{--<input id="pay_address" class="pull-left" type="text" placeholder="开户行地址"--}}
                                       {{--name="bank_address">--}}
                            {{--</dd>--}}
                            <dd>
                                <div class="pull-left">{{ __('mb.Bank_Area') }}</div>
                                <input id="pay_address" class="pull-left" type="text" placeholder="{{ __('mb.Bank_Area') }}"
                                       name="bank_branch_name">
                            </dd>
                            @if($_system_config->is_sms_on == 0)
                            <dd>
                                <div class="pull-left">{{ __('mb.phone_number') }}</div>
                                <input id="v_phone" class="pull-left m_phone" type="text" placeholder="{{ __('mb.phone_number') }}"
                                       name="phone">
                                <a href="javascript:;" class="sendMsg">{{ __('mb.Send_the_verification_code') }}</a>
                            </dd>
                            <dd>
                                <div class="pull-left">{{ __('mb.verification_code') }}</div>
                                <input class="pull-left" type="text" placeholder="{{ __('mb.verification_code') }}" name="v_code">
                            </dd>
                            @endif
                            <dd>
                                <input type="button" value="确定" class="submit_btn ajax-submit-btn">
                            </dd>
                        </dl>
                    </form>
                    <div style="padding: 20px">
                        <span class="c_blue">{{ __('mb.Remarks') }}：</span><br>
                        {{ __('mb.1_The_name_of_the_bank_account_holder_must_be_the_same_as_the_name') }}<br>
                        {{ __('mb.2_Each_customer_can_only_use_one_bank_card_to_withdraw_funds') }}<br>
                        {{ __('mb.3_To_protect_the_safety_of_client_funds') }} {{ $_system_config->site_name }}{{ __('mb.It_may_be_necessary_for_the_user_to_provide_a_phone_bill') }}
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