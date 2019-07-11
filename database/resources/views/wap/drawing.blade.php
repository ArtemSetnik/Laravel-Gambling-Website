@extends('wap.layouts.main')
@section('content')
    @include('wap.layouts.header')
    <div class="m_container">
        <div class="m_body">
            <div class="container-fluid gm_main">
                {{--<div class="head">--}}
                    {{--<a class="f_l" href="javascript:history.go(-1)"><img src="{{ asset('/wap/images/user_back.png') }}"--}}
                                                                         {{--alt=""></a>--}}
                    {{--<span>{{__('mb.Online_Withdraw')}}</span>--}}
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
                    {{ __('mb.Online_Withdraw') }}
                </div>
                <div class="m_userCenter-line"></div>
                <div class="userInfo">
                    <form action="{{ route('wap.post_drawing') }}" method="post" name="form1">
                        <dl>
                            <dt>{{ __('mb.Account_Detail') }}</dt>
                            <dd>
                                <div class="pull-left">
                                    {{ __('mb.Username') }}
                                </div>
                                <div class="pull-right">
                                    {{ $_member->name }}
                                </div>
                            </dd>
                            <dd>
                                <div class="pull-left">{{ __('mb.Withdraw_Limit') }}</div>
                                <div class="pull-right">{{ __('mb.RM') }}&nbsp;&nbsp;<strong id="my_money">{{ $_member->money }}</strong></div>
                            </dd>
                            <dd>
                                <div class="pull-left">{{ __('mb.RM') }}</div>
                                <div class="pull-right">{{ $_member->real_name }}</div>
                            </dd>
                            <dd>
                                <div class="pull-left">{{ __('mb.Payee_Bank') }}</div>
                                <div class="pull-right">{{ $_member->bank_name }}</div>
                            </dd>
                            <dd>
                                <div class="pull-left">{{ __('mb.Payee_Account') }}</div>
                                <div class="pull-right">{{ $_member->bank_card }}</div>
                            </dd>
                            <dd>
                                <div class="pull-left">{{ __('mb.Bank_Area') }}</div>
                                <div class="pull-right">{{ $_member->bank_branch_name }}</div>
                            </dd>
                        </dl>
                        <dl class="set_card">
                            <dt>{{ __('mb.Withdraw_Submit') }}</dt>
                            <dd>
                                <div class="pull-left" style="width:150px;">
                                    {{ __('mb.Withdraw_Amount') }}
                                </div>
                                <input class="pull-left" type="number" placeholder="{{ __('mb.Input_Amount') }}" name="money" id="pay_value"
                                       maxlength="10">

                            </dd>
                            <dd>
                                <div class="pull-left" style="width:150px;">
                                    {{ __('mb.Withdraw_Pin') }}
                                </div>
                                <input class="pull-left" type="password" placeholder="{{ __('mb.Input_Withdraw_Pin') }}" name="qk_pwd" id="qk_pwd"
                                       maxlength="6">
                            </dd>
                            <dd>
                                <div class="pull-left">
                                    {{ __('mb.Withdraw_Minimun') }}
                                </div>
                                &nbsp;&nbsp;&nbsp;5
                            </dd>
                            <dd>
                                <div class="pull-left">
                                    {{ __('mb.Withdraw_Maximum') }}
                                </div>
                                &nbsp;&nbsp;&nbsp;100000
                            </dd>
                            <dd>
                                <input type="button" value="{{ __('mb.Submit') }}" class="submit_btn ajax-submit-btn">
                            </dd>
                        </dl>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        @if (!Auth::guard('member')->guest())
        $(function () {
            $.ajax({
                type:'post',
                url : "{{route('member.api.wallet_balance')}}",
                dataType : 'json',
                success : function (data) {
                    //console.log(data);
                    if(data.statusCode == '01'){
                        var all = Number($('#my_money').text()) + Number(data.data);
                        $('#my_money').text('');
                        $('#my_money').text(all.toFixed(2));
                    }
                }
            })
        })
        @endif
    </script>
    {{--<script>--}}
        {{--(function($){--}}
            {{--$(function(){--}}
                {{--var css = 'color: #333; background-color: #fff; width: auto';--}}
                {{--var html = '首次充值需20倍流水，否则需扣除提款金额60%的手续费,非首次需1倍流水，否则需扣除提款金额20%的手续费'--}}
                {{--layer.open({--}}
                    {{--content: html,--}}
                    {{--//time: 1.5,--}}
                    {{--style: css--}}
                {{--});--}}
            {{--})--}}
        {{--})(jQuery)--}}
    {{--</script>--}}

@endsection