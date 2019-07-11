@extends('wap.layouts.main')
@section('content')
    @include('wap.layouts.header')
    <div class="m_container">
        <div class="m_body">
            <div class="container-fluid gm_main">
                {{--<div class="head">--}}
                {{--<a class="f_l" href="javascript:history.go(-1)"><img src="{{ asset('/wap/images/user_back.png') }}" alt=""></a>--}}
                {{--<span>支付宝充值</span>--}}
                {{--<a class="f_r" href="javascript:history.go(-1)" style="visibility: hidden"><img src="{{ asset('/wap/images/user_back.png') }}" alt=""></a>--}}
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
                    支付宝转账
                </div>
                <div class="m_userCenter-line"></div>
                <div class="userInfo wrap" style="padding: 10px;">
                    <p class="text-center" style="margin-bottom: 10px;">二维码扫一扫，支付宝快捷支付，100%安全！</p>
                    <table class="text-center" width="100%" border="0" cellpadding="0" cellspacing="1">
                        <tbody>
                        <tr>
                            <td style="width: 35%">收款支付宝账号</td>
                            <td>
                                <span id="name" class="STYLE2">{{ $_system_config->alipay_account }}</span>
                                <span class="btn" data-clipboard-target="#name" style="color: #e4393c">复制</span>
                            </td>
                        </tr>
                        <tr>
                            <td>收款支付宝昵称</td>
                            <td>{{ $_system_config->alipay_nickname }}</td>
                        </tr>
                        <tr>
                            <td>支付宝收款二维码（手机截屏后进行扫码）</td>
                            <td>
                                <img src="{{ $_system_config->alipay_qrcode }}" width="200" height="200"
                                     style="margin-left: 0px;margin-top: 0px"/>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <p style="margin: 10px 0">温馨提示</p>
                    <div style="border: 1px solid #ccc;padding: 10px;">
                        <p><strong>温馨提示：</strong></p>
                        <p>一、在金额转出之后请务必填写该页下方的汇款信息表格，以便财务系统能够及时的为您确认并添加金额到您的会员帐户中。</p>
                        <p>二、本公司最低存款金额为100元，公司财务系统将对银行存款的会员按实际存款金额实行返利派送。</p>
                        <p>三、跨行转帐请您使用跨行快汇。</p>
                    </div>
                    <p style="margin: 10px 0;">填写汇款单</p>
                    <form id="form1" name="form1" action="{{ route('wap.post_ali_pay') }}" method="post">
                        <table width="100%" border="0" cellpadding="0" cellspacing="1" class="mt10">
                            <tr>
                                <td align="right">用户账号：</td>
                                <td class="c_blue">{{ $_member->name }}</td>
                            </tr>
                            <tr>
                                <td align="right">存款金额：</td>
                                <td><input name="money" type="number" class="input_150" id="v_amount" maxlength="10"/>
                                </td>
                            </tr>
                            <tr id="tr_v">
                                <td align="right">支付宝昵称：</td>
                                <td><input name="account" type="text" class="input_150" id="v_Name" maxlength="20"/>
                                </td>
                            </tr>
                            <tr>
                                <td align="right">汇款日期：</td>
                                <td><?php $h_now = date('H');$i_now = date('i'); $s_now = date('s');?>
                                    <input name="paytime" type="text" id="cn_date" class="input_150 laydate-icon"
                                           maxlength="10" readonly="readonly" value="<?=date("Y-m-d")?>"
                                           onclick="laydate({format: 'YYYY-MM-DD', isclear: false, max: laydate.now()});"
                                           style="margin-bottom: 5px"/>
                                    <div>
                                        <select name="date_h" id="s_h" style="width: 50px">
                                            @foreach(range(00, 24) as $v)
                                                <option @if($v < 10) value="0{{ $v }}" @else value="{{ $v }}"
                                                        @endif @if($v == $h_now) selected @endif>@if($v < 10)
                                                        0{{ $v }} @else {{ $v }} @endif</option>
                                            @endforeach
                                        </select> 时
                                        <select name="date_i" id="s_i" style="width: 50px">
                                            @foreach(range(00, 59) as $v)
                                                <option @if($v < 10) value="0{{ $v }}" @else value="{{ $v }}"
                                                        @endif @if($v == $i_now) selected @endif>@if($v < 10)
                                                        0{{ $v }} @else {{ $v }} @endif</option>
                                            @endforeach
                                        </select> 分
                                        <select name="date_s" id="s_s" style="width: 50px">
                                            @foreach(range(00, 59) as $v)
                                                <option @if($v < 10) value="0{{ $v }}" @else value="{{ $v }}"
                                                        @endif @if($v == $s_now) selected @endif>@if($v < 10)
                                                        0{{ $v }} @else {{ $v }} @endif</option>
                                            @endforeach
                                        </select> 秒
                                    </div>
                                </td>
                            </tr>
                            <tr style="display:none;">
                                <td align="right">汇款方式：</td>
                                <td>
                                    <select id="InType" name="InType" onchange="showType();">
                                        <option value="支付宝手机扫一扫">支付宝手机扫一扫</option>
                                    </select>
                                    <div>
                                        <input id="v_type" name="v_type" type="text" class="input_150" value="请输入其它汇款方式"
                                               maxlength="20" style="display: none; margin-top: 5px"/>
                                        <input type="hidden" id="IntoType" name="IntoType" value=""/>
                                    </div>
                                </td>
                            </tr>
                            <tr style="display: none">
                                <td align="right">汇款地点：</td>
                                <td><input name="v_site" type="text" class="input_150" value="无" id="v_site"
                                           maxlength="50"/></td>
                            </tr>
                            <input type="hidden" name="IntoBank" value="支付宝支付"/>
                            <input type="hidden" name="InType" value="支付宝支付"/>
                            <input type="hidden" name="v_site" value=""/>
                        </table>
                        <button type="button" class="submit_btn ajax-submit-btn" id="SubTran" style="width: 100%">提交信息
                        </button>
                    </form>

                    <!--        </div>-->
                </div>
            </div>
        </div>
    </div>
@endsection
@section('after.js')
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