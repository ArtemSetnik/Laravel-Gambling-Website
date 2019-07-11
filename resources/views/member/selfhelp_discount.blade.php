@extends('member.layouts.main')
@section('content')
<div class="userbasic_head">
    <a href="javascript:void(0)" class="active" _href="{{ route('sync.tpl', ['name' => 'selfhelp_discount']) }}">信息认证红利</a>
    <a href="javascript:void(0)"  _href="{{ route('sync.tpl', ['name' => 'selfhelp_integral']) }}">自助积分/洗码</a>
</div>
<div class="userbasic_body">
    <div class="identify_module">
        <h3>信息认证红利</h3>
        <div class="list">
            <ul>
                <li>
                    <i class="iconfont">&#xe60c;</i>
                    <p>手机验证</p>
                </li>
                <li class="success">
                    <i class="iconfont">&#xe649;</i>
                    <p>银行卡验证</p>
                </li>
                <li>
                    <i class="iconfont">&#xe60c;</i>
                    <p>安全密码验证</p>
                </li>
                <li>
                    <i class="iconfont">&#xe60c;</i>
                    <p>历史累计存款200元</p>
                </li>
            </ul>
            <div class="num_right fr">
                <span class="num">30.00</span>
                <p>认证红利（元）</p>
            </div>
            <div class="tips">
                <span class="themeCr">提示：</span>用户需完成上述所有认证并审核通过后，才能够领取此红利
                <a href="javascript:void(0)" class="modify">[完整认证]</a>
                <a href="javascript:void(0)" class="receive fr">点击领取</a>
            </div>
        </div>
    </div>
    <div class="warm_tips identify_tips">
        <h3>温馨提示：</h3>
        <ul>
            <li>1.用户必须完成通过所有认证以及历史累计存款不小于200元后，才达到申领条件！</li>
            <li>2.每个账户只允许申领一次信息认证红利。</li>
            <li>3.如您对此还有疑问，可点击查看 <a href="#" target="_blank">认证红利</a> 规则。</li>
        </ul>
    </div>
</div>
    @endsection