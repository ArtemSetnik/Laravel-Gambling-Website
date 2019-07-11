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
            <form action="{{ route('quick_pay_confirm') }}" method="post" target="_blank">
                {!! csrf_field() !!}
                <input type="hidden"  name="opeNo" value ="{{ $tradeNo }}" />
                <input type="hidden"  name="opeDate" value="{{ $opeDate }}"/>
                <input type="hidden" name="sessionID" value="{{ $sessionID }}">
                <div class="pay_way_line">
                    <div class="tit">短信验证码</div>
                    <div class="con">
                        <p><input type="text" class="inp" name="dymPwd" required> </p>
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
