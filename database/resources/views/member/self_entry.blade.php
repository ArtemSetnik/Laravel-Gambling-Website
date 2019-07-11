@extends('member.layouts.main')
@section('content')
<div class="userbasic_head">
    <a href="javascript:void(0)" _href="{{ route('sync.tpl', ['name' => 'finance_center']) }}">会员存款</a>
    <a href="javascript:void(0)"   _href="{{ route('sync.tpl', ['name' => 'member_drawing']) }}">会员提款</a>
    <a href="javascript:void(0)" _href="{{ route('sync.tpl', ['name' => 'indoor_transfer']) }}">户内转账</a>
    <a href="javascript:void(0)" class="active" _href="{{ route('sync.tpl', ['name' => 'self_entry']) }}">自助入账</a>
</div>
<div class="userbasic_body selfentry_body">
    <div class="bank_tips">温馨提示: 支付宝转银行卡自助入账目前只支持农业银行！</div>
    <div class="line_form">
        <div class="line">
            <span class="tit">转账方式</span>
            <a href="javascript:void(0)" class="banktoggle bankactive">从支付宝 转 银行卡</a>
            <a href="javascript:void(0)" class="banktoggle">从银行卡 转 银行卡</a>
        </div>
        <div class="banktoggle_module">
            <div class="module">
                <div class="line">
                    <span class="tit">付款人</span>
                    <input type="text" class="inp">
                    <span class="tips"><span class="themeCr">*</span>输入付款人姓名（您的支付宝姓名长度多余四位只填前四位即可）</span>
                </div>
                <div class="line">
                    <span class="tit">收款人</span>
                    <input type="text" class="inp">
                    <span class="tips"><span class="themeCr">*</span>收款卡号姓名</span>
                </div>
                <div class="line">
                    <span class="tit">支付金额</span>
                    <input type="text" class="inp">
                    <span class="tips"><span class="themeCr">*</span>输入付款金额</span>
                </div>
                <div class="line">
                    <span class="tit">入账时间</span>
                    <input type="text" class="inp">
                    <span class="tips"><span class="themeCr">*</span>正确格式：2016-10-20 12:00</span>
                </div>
                <div class="line">
                    <span class="tit">收款卡号</span>
                    <input type="text" class="inp">
                    <span class="tips"><span class="themeCr">*</span>收款银行卡号后四位</span>
                </div>
                <div class="line line_ercode">
                    <span class="tit">验证码</span>
                    <input type="text" class="inp">
                </div>
                <div class="line">
                    <span class="tit"></span>
                    <span class="account_save"><a href="javascript:void(0)">确定</a></span>
                    <span class="account_btn"><a href="javascript:void(0)">入账演示</a></span>
                </div>
            </div>
            <div class="module hide">
                <div class="line">
                    <span class="tit">付款人</span>
                    <input type="text" class="inp">
                    <span class="tips"><span class="themeCr">*</span>输入付款人姓名</span>
                </div>
                <div class="line">
                    <span class="tit">付款卡号</span>
                    <input type="text" class="inp">
                    <span class="tips"><span class="themeCr">*</span>付款银行卡号后四位</span>
                </div>
                <div class="line">
                    <span class="tit">支付金额</span>
                    <input type="text" class="inp">
                    <span class="tips"><span class="themeCr">*</span>输入付款金额</span>
                </div>
                <div class="line">
                    <span class="tit">收款人</span>
                    <input type="text" class="inp">
                    <span class="tips"><span class="themeCr">*</span>收款卡号姓名</span>
                </div>
                <div class="line">
                    <span class="tit">收款卡号</span>
                    <input type="text" class="inp">
                    <span class="tips"><span class="themeCr">*</span>收款银行卡号后四位</span>
                </div>
                <div class="line">
                    <span class="tit">交易时间</span>
                    <input type="text" class="inp">
                    <span class="tips"><span class="themeCr">*</span>正确格式：2016-10-20 12:00</span>
                </div>
                <div class="line line_ercode">
                    <span class="tit">验证码</span>
                    <input type="text" class="inp">
                </div>
                <div class="line">
                    <span class="tit"></span>
                    <span class="account_save"><a href="javascript:void(0)">确定</a></span>
                    <span class="account_btn"><a href="javascript:void(0)">入账演示</a></span>
                </div>
            </div>
        </div>
        <div class="line warm_tips">
            <div class="tit"></div>
            <div class="tips">
                <h4>温馨提示：</h4>
                <dl><dt>1. 注意！支付宝提交订单后不能立即进行自助入账，因为网络有延迟！</dt></dl>
                <dl><dt>2. 订单号必须是2天内的交易订单！</dt></dl>
                <dl><dt>3. 注意：创建订单后，15分钟内必须到账，否则无法自动入账。</dt></dl>
            </div>
        </div>
    </div>
</div>
    @endsection



