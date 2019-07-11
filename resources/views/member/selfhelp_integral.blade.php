@extends('member.layouts.main')
@section('content')
<div class="userbasic_head">
    <a href="javascript:void(0)" _href="{{ route('sync.tpl', ['name' => 'selfhelp_discount']) }}">信息认证红利</a>
    <a href="javascript:void(0)" class="active"  _href="{{ route('sync.tpl', ['name' => 'selfhelp_integral']) }}">自助积分/洗码</a>
</div>
<div class="userbasic_body">
    <div class="integral_head">
        当前洗码所需的流水限额<span class="themeCr">0.00</span>元 <a class="check" href="">[ 查看明细 ]</a>
        <a class="fr" href=""><i class="iconfont">&#xe7cc;</i>什么是流水限额</a>
    </div>

    <div class="identify_module intrgral_module">
        <h3>信息认证红利 <a class="check" href="#">[查看明细]</a><em class="tips">1元起领</em></h3>
        <div class="list">
            <ul>
                <li>
                    <span class="num">0.00</span>
                    <p>有效投注</p>
                </li>
                <li class="success">
                    <span class="num">0.00</span>
                    <p>限额抵扣</p>
                </li>
                <li>
                    <span class="num">0.00</span>
                    <p>洗码流水</p>
                </li>
                <li>
                    <span class="num">0.00</span>
                    <p>洗码比率</p>
                </li>
                <li>
                    <span class="num">0.00</span>
                    <p>洗码金额</p>
                </li>
            </ul>
            <a class="receive fr" href="#">点击领取</a>
            <div class="tips">
                提示：当前尚未达到领取条件
            </div>
        </div>
    </div>
    <div class="identify_module intrgral_module">
        <h3>信息认证红利 <a class="check" href="#">[查看明细]</a><em class="tips">1元起领</em></h3>
        <div class="list">
            <ul>
                <li>
                    <span class="num">0.00</span>
                    <p>有效投注</p>
                </li>
                <li class="success">
                    <span class="num">0.00</span>
                    <p>限额抵扣</p>
                </li>
                <li>
                    <span class="num">0.00</span>
                    <p>洗码流水</p>
                </li>
                <li>
                    <span class="num">0.00</span>
                    <p>洗码比率</p>
                </li>
                <li>
                    <span class="num">0.00</span>
                    <p>洗码金额</p>
                </li>
            </ul>
            <a class="receive fr" href="#">点击领取</a>
            <div class="tips">
                提示：当前尚未达到领取条件
            </div>
        </div>
    </div>
    <div class="identify_module intrgral_module">
        <h3>信息认证红利 <a class="check" href="#">[查看明细]</a><em class="tips">1元起领</em></h3>
        <div class="list">
            <ul>
                <li>
                    <span class="num">0.00</span>
                    <p>有效投注</p>
                </li>
                <li class="success">
                    <span class="num">0.00</span>
                    <p>限额抵扣</p>
                </li>
                <li>
                    <span class="num">0.00</span>
                    <p>洗码流水</p>
                </li>
                <li>
                    <span class="num">0.00</span>
                    <p>洗码比率</p>
                </li>
                <li>
                    <span class="num">0.00</span>
                    <p>洗码金额</p>
                </li>
            </ul>
            <a class="receive fr" href="#">点击领取</a>
            <div class="tips">
                提示：当前尚未达到领取条件
            </div>
        </div>
    </div>
    <div class="warm_tips identify_tips">
        <h3>温馨提示：</h3>
        <ul>
            <li>1. BSG平台不参与自助投注洗码、自助电游积分活动！</li>
            <li>2. BSG平台无需申请，系统将于每天下午16:00-18:00结算，并在18：00前系统自动发放</li>
            <li>3. 如您对此还有疑问，可点击查看 <a href="#" target="_blank">会员洗码</a> 及 <a href="#" target="_blank">会员积分</a> 规则。</li>
        </ul>
    </div>
</div>
    @endsection