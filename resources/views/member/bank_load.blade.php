@extends('member.layouts.main')
@section('content')
<div class="userbasic_head">
    <a href="{{ route('member.userCenter') }}">基本信息</a>
    <a href="{{ route('member.bank_load') }}" class="active">银行资料</a>
    {{--<a href="{{ route('member.account_load') }}">账户设置</a>--}}
    <a href="{{ route('member.message_list') }}">站内消息</a>
</div>
<div class="userbasic_body">
    <div class="bank_tips">温馨提示：手机验证后，可自行修改银行相关信息（开户姓名无法修改;绑定的银行卡必须和注册绑定姓名一致，否则无法提款!）</div>
    <ul class="bank_list">
        <li><span class="tit">收款银行</span>{{ $_member->bank_name }}</li>
        {{--<li><span class="tit">开户地址</span>{{ $_member->bank_address }}</li>--}}
        <li><span class="tit">开户行网点</span>{{ $_member->bank_branch_name }}</li>
        <li><span class="tit">开户姓名</span>{{ $_member->bank_username }}</li>
        <li><span class="tit">银行账号</span>{{ $_member->bank_card }}</li>
    </ul>
    <div class="modify_bank">
        @if($_system_config->is_sms_on ==1 && !$_member->bank_username)
            <a href="{{ route('member.update_bank_info') }}">修改银行信息</a>
        @endif
    </div>
</div>
@endsection