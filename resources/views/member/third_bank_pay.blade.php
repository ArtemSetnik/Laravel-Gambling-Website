@extends('member.layouts.main')
@section('content')
    <div class="userbasic_head">
        <a href="{{ route('member.finance_center') }}" class="active">会员存款</a>
        <a href="{{ route('member.member_drawing') }}" >会员提款</a>
        <a href="{{ route('member.indoor_transfer') }}">户内转账</a>
        {{--<a href="{{ route('member.finance_center') }}">自助入账</a>--}}
    </div>

    <!--第二个页面开始-->
    <div class="userbasic_body">
        <div class="bank_tips">温馨提示: 如当前支付方式未能支付成功，请您尝试其他支付方式进行支付！</div>
        <div class="pay_way_wrap">
            <form action="{{ route('pay') }}" method="post" target="_blank">
                {!! csrf_field() !!}
                <div class="pay_way_line">
                    <div class="tit">选择方式</div>
                    <div class="con">
                        <select name="bankcode">
                            <option value="KJZF">网银快捷支付</option>
                            {{--<option value="alipay">支付宝</option>--}}
                            {{--<option value="weixin">微信扫码</option>--}}
                            {{--<option value="alipaywap">支付宝wap</option>--}}
                            {{--<option value="gzhpay">微信公众号支付</option>--}}
                        </select>
                        <input type="hidden" name="get_code" value="0">
                    </div>
                </div>
                {{--<div class="pay_way_line" id="bankcode">--}}
                    {{--<div class="tit">选择银行</div>--}}
                    {{--<div class="con">--}}
                        {{--<select name="bankcode">--}}
                            {{--<option value="ICBC">中国工商银行</option>--}}
                            {{--<option value="ABC">中国农业银行</option>--}}
                            {{--<option value="BOCSH">中国银行</option>--}}
                            {{--<option value="CCB">建设银行</option>--}}
                            {{--<option value="CMB">招商银行</option>--}}
                            {{--<option value="SPDB">浦发银行</option>--}}
                            {{--<option value="GDB">广发银行</option>--}}
                            {{--<option value="BOCOM">交通银行</option>--}}
                            {{--<option value="PSBC">邮政储蓄银行</option>--}}
                            {{--<option value="CNCB">中信银行</option>--}}
                            {{--<option value="CMBC">民生银行</option>--}}
                            {{--<option value="CEB">光大银行</option>--}}
                            {{--<option value="HXB">华夏银行</option>--}}
                            {{--<option value="CIB">兴业银行</option>--}}
                            {{--<option value="BOS">上海银行</option>--}}
                            {{--<option value="SRCB">上海农商</option>--}}
                            {{--<option value="PAB">平安银行</option>--}}
                            {{--<option value="BCCB">北京银行</option>--}}
                        {{--</select>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="pay_way_line" id="weixin" style="display:none">--}}
                    {{--<div class="tit">微信选项</div>--}}
                    {{--<div class="con">--}}
                        {{--<select name="get_code">--}}
                            {{--<option value="0">默认</option>--}}
                            {{--<option value="1">仅获取二维码</option>--}}
                        {{--</select>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="pay_way_line">
                    <div class="tit">转账金额</div>
                    <div class="con">
                        <p><input type="text" class="inp" name="amount" required> 元</p>
                    </div>
                </div>
                <div class="pay_way_line">
                    <div class="tit"></div>
                    <div class="con">
                        <button type="submit" class="account_save">提 交</button> <a href="{{ route('member.finance_center') }}" class="account_save">返回</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    {{--<script>--}}
        {{--function changePay(pname){--}}
            {{--document.getElementById('bankcode').style.display='none';--}}
            {{--document.getElementById('weixin').style.display='none';--}}
            {{--if(pname=='bank'){--}}
                {{--document.getElementById('bankcode').style.display='';--}}
            {{--}--}}
            {{--if(pname=='weixin'){--}}
                {{--document.getElementById('weixin').style.display='';--}}
            {{--}--}}
        {{--}--}}
    {{--</script>--}}
@endsection
@section('after.js')
@endsection
