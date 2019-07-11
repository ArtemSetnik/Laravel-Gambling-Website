@extends('member.layouts.main')
@section('content')
    <div class="userbasic_head">
        <a href="{{ route('member.userCenter') }}">基本信息</a>
        <a href="{{ route('member.bank_load') }}">银行资料</a>
        <a href="{{ route('member.account_load') }}" class="active">账户设置</a>
    </div>
    <div class="userbasic_body">
        <h3 class="head_line account_line">
            <span class="tit">已解锁的游戏平台</span>
        </h3>
        <ul class="lock_list">
            @foreach($_member->apis as $item)
                <li>
                    <div class="top">
                        <div class="left">
                            <img src="{{ asset('/web/images/n-u-11.png') }}">
                        </div>
                        <div class="right">
                            <h3>{{ $item->api->api_name }}厅</h3>
                            {{--<p>如您在登录中因密码输入错误三次被锁定账号，可在此处解锁</p>--}}
                        </div>
                    </div>
                    <div class="bot">
                        <button href="javascript:void(0)" class="min success">解锁</button>
                        <p class="lock_line min_line"><span class="level"></span></p>
                        {{--<button href="javascript:void(0)" class="min">登出</button>--}}
                        {{--<p class="lock_line min_line"><span class="level"></span></p>--}}
                    </div>
                </li>
            @endforeach


        </ul>
        {{--<h3 class="head_line account_line">--}}
        {{--<span class="tit">短信设置</span>--}}
        {{--</h3>--}}
        {{--<ul class="msg_list">--}}
        {{--<li>--}}
        {{--<img src="{{ asset('/web/images/n-u-8.png') }}"><span class="tit">系统短信</span>--}}
        {{--为您实时提醒平台重要通知信息--}}
        {{--<label class="switch switch-green fr">--}}
        {{--<input type="checkbox" class="switch-input" checked>--}}
        {{--<span class="switch-label" data-on="On" data-off="Off"></span>--}}
        {{--<span class="switch-handle"></span>--}}
        {{--</label>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<img src="{{ asset('/web/images/n-u-9.png') }}"><span class="tit">优惠短信</span>--}}
        {{--第一时间获知活动内容，不错过任何精彩瞬间--}}
        {{--<label class="switch switch-green fr">--}}
        {{--<input type="checkbox" class="switch-input" checked>--}}
        {{--<span class="switch-label" data-on="On" data-off="Off"></span>--}}
        {{--<span class="switch-handle"></span>--}}
        {{--</label>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<img src="{{ asset('/web/images/n-u-10.png') }}"><span class="tit">祝福短信</span>--}}
        {{--温馨的祝福，是腾博会感恩您一直以来的陪伴与支持--}}
        {{--<label class="switch switch-green fr">--}}
        {{--<input type="checkbox" class="switch-input" checked>--}}
        {{--<span class="switch-label" data-on="On" data-off="Off"></span>--}}
        {{--<span class="switch-handle"></span>--}}
        {{--</label>--}}
        {{--</li>--}}
        {{--</ul>--}}
        {{--<div class="account_save">--}}
        {{--<a href="javascript:void(0)">保存</a>--}}
        {{--</div>--}}
    </div>
@endsection