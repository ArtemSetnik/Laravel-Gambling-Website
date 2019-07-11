@extends('member.layouts.main')
@section('content')
    <div id="layout-main-area">
        <div id="main-menu">
            <div class="menu-area">
                <ul class="list-group">
                    @if($_system_config->is_wechat_on == 0)
                    <li class="list-group-item payment weixin @if($web_route == 'member.finance_center') active @endif">
                        <a href="{{ route('member.finance_center') }}">微信支付</a>
                    </li>
                    @endif
                    @if($_system_config->is_alipay_on == 0)
                    <li class="list-group-item payment alipay @if($web_route == 'member.ali_pay') active @endif">
                        <a href="{{ route('member.ali_pay') }}">支付宝</a>
                    </li>
                    @endif
                    @if($_system_config->is_qq_on == 0)
                    <li class="list-group-item payment qqpay @if($web_route == 'member.qq_pay') active @endif">
                        <a href="{{ route('member.qq_pay') }}">QQ钱包</a>
                    </li>
                    @endif
                    @if($_system_config->is_bankpay_on == 0)
                    <li class="list-group-item payment epay @if($web_route == 'member.bank_pay') active @endif">
                        <a href="{{ route('member.bank_pay') }}">银联付款</a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>

        <div id="main-container">

            <div class="module-main" style="height: 630px; overflow: auto;margin-top:20px">
                <div class="info-container">
                    <div class="info" style="color:#333;">
                        请在左侧选择对应付款方式，推荐使用微信或支付宝付款，审核快，秒到账
                    </div>
                </div>
                <form action="{{ route('member.post_bank_pay') }}" method="post" class="form-horizontal">
                    <div class="form-group">
                        <label class="col-xs-2 control-label">收款银行卡：</label>
                        <div class="col-xs-10">
                            @foreach($bank_card_list as $item)
                                <ul>
                                    <li>银行名称：{{ \App\Models\Base::$BANK_TYPE[$item->bank_id] }}</li>
                                    <li>银行卡号：{{ $item->card_no }}</li>
                                    <li>银行户名：{{ $item->username }}</li>
                                    <li>开 户 地：{{ $item->bank_address }}</li>
                                </ul>
                            @endforeach

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-2 control-label">用户账号：</label>
                        <div class="col-xs-10">
                            <input type="text" class="form-control" value="{{ $_member->name }}" disabled="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-2 control-label">汇款金额：</label>
                        <div class="col-xs-10">
                            <input type="number" class="form-control" name="money">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-2 control-label">付款银行：</label>
                        <div class="col-xs-10">
                            <select class="form-control" name="payment_desc">
                                <option value="中国工商银行">中国工商银行</option>
                                <option value="中国建设银行">中国建设银行</option>
                                <option value="中国农业银行">中国农业银行</option>
                                <option value="中国银行">中国银行</option>
                                <option value="中国交通银行">中国交通银行</option>
                                <option value="招商银行">招商银行</option>
                                <option value="广发银行">广发银行</option>
                                <option value="平安银行">平安银行</option>
                                <option value="浦发银行">浦发银行</option>
                                <option value="民生银行">民生银行</option>
                                <option value="中国邮政储蓄银行">中国邮政储蓄银行</option>
                                <option value="华夏银行">华夏银行</option>
                                <option value="深圳发展银行">深圳发展银行</option>
                                <option value="中信银行">中信银行</option>
                                <option value="兴业银行">兴业银行</option>
                                <option value="光大银行">光大银行</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-2 control-label">付款户名：</label>
                        <div class="col-xs-10">
                            <input type="text" class="form-control" name="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-2 control-label">付款账号：</label>
                        <div class="col-xs-10">
                            <input type="text" class="form-control" name="account">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-2 control-label">汇款时间：</label>
                        <div class="col-xs-10 pay-time">
                            <div class="col-xs-3">
                                <input type="text" name="paytime" onclick="WdatePicker()" class="form-control" value="{{ date('Y-m-d') }}">
                            </div>
                            <div class="col-xs-3">
                                <select class="form-control" name="date_h">
                                    <option value="{{ date('H') }}">{{ date('H') }} 时</option>
                                    <option value="00"> 00 时 </option>
                                    <option value="01"> 01 时 </option>
                                    <option value="02"> 02 时 </option>
                                    <option value="03"> 03 时 </option>
                                    <option value="04"> 04 时 </option>
                                    <option value="05"> 05 时 </option>
                                    <option value="06"> 06 时 </option>
                                    <option value="07"> 07 时 </option>
                                    <option value="08"> 08 时 </option>
                                    <option value="09"> 09 时 </option>
                                    <option value="10"> 10 时 </option>
                                    <option value="11"> 11 时 </option>
                                    <option value="12"> 12 时 </option>
                                    <option value="13"> 13 时 </option>
                                    <option value="14"> 14 时 </option>
                                    <option value="15"> 15 时 </option>
                                    <option value="16"> 16 时 </option>
                                    <option value="17"> 17 时 </option>
                                    <option value="18"> 18 时 </option>
                                    <option value="19"> 19 时 </option>
                                    <option value="20"> 20 时 </option>
                                    <option value="21"> 21 时 </option>
                                    <option value="22"> 22 时 </option>
                                    <option value="23"> 23 时 </option>
                                    <option value="24"> 24 时 </option>
                                </select>
                            </div>
                            <div class="col-xs-3">
                                <select class="form-control" name="date_i">
                                    <option value="{{ date('i') }}">{{ date('i') }} 分</option>
                                    <option value="00"> 00 分 </option>
                                    <option value="01"> 01 分 </option>
                                    <option value="02"> 02 分 </option>
                                    <option value="03"> 03 分 </option>
                                    <option value="04"> 04 分 </option>
                                    <option value="05"> 05 分 </option>
                                    <option value="06"> 06 分 </option>
                                    <option value="07"> 07 分 </option>
                                    <option value="08"> 08 分 </option>
                                    <option value="09"> 09 分 </option>
                                    <option value="10"> 10 分 </option>
                                    <option value="11"> 11 分 </option>
                                    <option value="12"> 12 分 </option>
                                    <option value="13"> 13 分 </option>
                                    <option value="14"> 14 分 </option>
                                    <option value="15"> 15 分 </option>
                                    <option value="16"> 16 分 </option>
                                    <option value="17"> 17 分 </option>
                                    <option value="18"> 18 分 </option>
                                    <option value="19"> 19 分 </option>
                                    <option value="20"> 20 分 </option>
                                    <option value="21"> 21 分 </option>
                                    <option value="22"> 22 分 </option>
                                    <option value="23"> 23 分 </option>
                                    <option value="24"> 24 分 </option>
                                    <option value="25"> 25 分 </option>
                                    <option value="26"> 26 分 </option>
                                    <option value="27"> 27 分 </option>
                                    <option value="28"> 28 分 </option>
                                    <option value="29"> 29 分 </option>
                                    <option value="30"> 30 分 </option>
                                    <option value="31"> 31 分 </option>
                                    <option value="32"> 32 分 </option>
                                    <option value="33"> 33 分 </option>
                                    <option value="34"> 34 分 </option>
                                    <option value="35"> 35 分 </option>
                                    <option value="36"> 36 分 </option>
                                    <option value="37"> 37 分 </option>
                                    <option value="38"> 38 分 </option>
                                    <option value="39"> 39 分 </option>
                                    <option value="40"> 40 分 </option>
                                    <option value="41"> 41 分 </option>
                                    <option value="42"> 42 分 </option>
                                    <option value="43"> 43 分 </option>
                                    <option value="44"> 44 分 </option>
                                    <option value="45"> 45 分 </option>
                                    <option value="46"> 46 分 </option>
                                    <option value="47"> 47 分 </option>
                                    <option value="48"> 48 分 </option>
                                    <option value="49"> 49 分 </option>
                                    <option value="50"> 50 分 </option>
                                    <option value="51"> 51 分 </option>
                                    <option value="52"> 52 分 </option>
                                    <option value="53"> 53 分 </option>
                                    <option value="54"> 54 分 </option>
                                    <option value="55"> 55 分 </option>
                                    <option value="56"> 56 分 </option>
                                    <option value="57"> 57 分 </option>
                                    <option value="58"> 58 分 </option>
                                    <option value="59"> 59 分 </option>
                                </select>
                            </div>
                            <div class="col-xs-3">
                                <select class="form-control" name="date_s">
                                    <option value="{{ date('s') }}">{{ date('s') }} 秒</option>
                                    <option value="00"> 00 秒 </option>
                                    <option value="01"> 01 秒 </option>
                                    <option value="02"> 02 秒 </option>
                                    <option value="03"> 03 秒 </option>
                                    <option value="04"> 04 秒 </option>
                                    <option value="05"> 05 秒 </option>
                                    <option value="06"> 06 秒 </option>
                                    <option value="07"> 07 秒 </option>
                                    <option value="08"> 08 秒 </option>
                                    <option value="09"> 09 秒 </option>
                                    <option value="10"> 10 秒 </option>
                                    <option value="11"> 11 秒 </option>
                                    <option value="12"> 12 秒 </option>
                                    <option value="13"> 13 秒 </option>
                                    <option value="14"> 14 秒 </option>
                                    <option value="15"> 15 秒 </option>
                                    <option value="16"> 16 秒 </option>
                                    <option value="17"> 17 秒 </option>
                                    <option value="18"> 18 秒 </option>
                                    <option value="19"> 19 秒 </option>
                                    <option value="20"> 20 秒 </option>
                                    <option value="21"> 21 秒 </option>
                                    <option value="22"> 22 秒 </option>
                                    <option value="23"> 23 秒 </option>
                                    <option value="24"> 24 秒 </option>
                                    <option value="25"> 25 秒 </option>
                                    <option value="26"> 26 秒 </option>
                                    <option value="27"> 27 秒 </option>
                                    <option value="28"> 28 秒 </option>
                                    <option value="29"> 29 秒 </option>
                                    <option value="30"> 30 秒 </option>
                                    <option value="31"> 31 秒 </option>
                                    <option value="32"> 32 秒 </option>
                                    <option value="33"> 33 秒 </option>
                                    <option value="34"> 34 秒 </option>
                                    <option value="35"> 35 秒 </option>
                                    <option value="36"> 36 秒 </option>
                                    <option value="37"> 37 秒 </option>
                                    <option value="38"> 38 秒 </option>
                                    <option value="39"> 39 秒 </option>
                                    <option value="40"> 40 秒 </option>
                                    <option value="41"> 41 秒 </option>
                                    <option value="42"> 42 秒 </option>
                                    <option value="43"> 43 秒 </option>
                                    <option value="44"> 44 秒 </option>
                                    <option value="45"> 45 秒 </option>
                                    <option value="46"> 46 秒 </option>
                                    <option value="47"> 47 秒 </option>
                                    <option value="48"> 48 秒 </option>
                                    <option value="49"> 49 秒 </option>
                                    <option value="50"> 50 秒 </option>
                                    <option value="51"> 51 秒 </option>
                                    <option value="52"> 52 秒 </option>
                                    <option value="53"> 53 秒 </option>
                                    <option value="54"> 54 秒 </option>
                                    <option value="55"> 55 秒 </option>
                                    <option value="56"> 56 秒 </option>
                                    <option value="57"> 57 秒 </option>
                                    <option value="58"> 58 秒 </option>
                                    <option value="59"> 59 秒 </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-2 control-label"></label>
                        <div class="col-xs-10">
                            <button type="button" class="btn btn-primary form-control ajax-submit-without-confirm-btn">提交</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

