@extends('web.layouts.main')
@section('content')
    <div class="top_margin">
        <div class="container">
            <div class="register_con">
                <div class="top">
                    <a href="javascript:;"><span class="num">①</span>填写账户信息</a>
                    <a href="javascript:;" class="active"><span class="num">②</span>填写详细资料</a>
                    <a href="javascript:;"><span class="num">③</span>注册成功</a>
                </div>
                <div class="register_left">
                    <div class="bank_tips">温馨提示： 标志*为必填项目 注意：如发现客户拥有多个账户，其帐户将会被冻结并且取消所有胜出的投注，恕不另行通知。</div>
                    <div class="line_form">
                        <form method="POST" action="{{ route('web.post_register_two') }}">
                            <input type="hidden" name="name" value="{{ $register_name }}">
                            <input type="hidden" name="password"  value="{{ $pwd }}">
                            <input type="hidden" name="invite_code" value="{{ $i_code }}">
                            <div class="line">
                                <span class="tit">真实姓名</span>
                                <input type="text" class="inp" placeholder="" name="real_name">
                                <span class="tips"><span class="themeCr">*</span>注册后不得更改，在绑定银行卡时必须与开户人姓名保持一致</span>
                            </div>
                            <div class="line">
                                <span class="tit">性别</span>
                                <select class="select" name="gender">
                                    @foreach(config('platform.gender') as $k => $v)
                                        <option value="{{ $k }}">{{ $v }}</option>
                                        @endforeach
                                </select>
                                <span class="tips"><span class="themeCr">*</span>请选择性别</span>
                            </div>
                            <div class="line">
                                <span class="tit">联系电话</span>
                                <input type="text" class="inp" placeholder="" name="phone">
                                <span class="tips"><span class="themeCr">*</span>请输入您的联系电话/手机号码</span>
                            </div>
                            <div class="line">
                                <span class="tit">联系QQ</span>
                                <input type="text" class="inp" placeholder="" name="qq">
                                <span class="tips"><span class="themeCr">*</span>请输入您的常用QQ</span>
                            </div>
                            <div class="line">
                                <span class="tit">会员邮箱</span>
                                <input type="text" class="inp" placeholder="" name="email">
                                <span class="tips"><span class="themeCr">*</span>请输入您的常用邮箱（注意：邮箱可以帮助您找回登录密码）</span>
                            </div>
                            {{--<div class="line">--}}
                                {{--<span class="tit">推荐人</span>--}}
                                {{--<input type="text" class="inp" placeholder="">--}}
                                {{--<span class="tips">如有推荐人，可在此处输入推荐人的游戏账号，填写后不得修改。</span>--}}
                            {{--</div>--}}
                            <div class="line">
                                <span class="tit">取款密码</span>
                                <input type="password" class="inp" name="qk_pwd" maxlength="6">
                                <span class="tips"><span class="themeCr">*</span>必填</span>
                            </div>
                            <div class="line">
                                <span class="tit"></span>
                                <a href="javascript:;" class="ajax-submit-without-confirm-btn account_save">确定</a>
                                <a href="{{ route('web.register_one') }}?register_name={{ $register_name }}" class="account_save">返回上一步</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="register_links">
                    <img src="{{ asset('/web/images/n-reg-bg3c.jpg') }}">
                    <p class="more">
                        想了解更多活动介绍，请点击 <a href="{{ route('web.activityList') }}">查看优惠详情</a>
                    </p>
                </div>
            </div>

            @include('web.layouts.hot_act')
        </div>
    </div>
@endsection