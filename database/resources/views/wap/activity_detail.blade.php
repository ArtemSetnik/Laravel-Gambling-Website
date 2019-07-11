@extends('wap.layouts.main')
@section('content')
    @include('wap.layouts.header')
    <div class="m_container">
        <div class="m_body">
            <div class="m_member-title clear textCenter">
                <a class="pull-left" href="javascript:history.go(-1);">&nbsp;返回</a>
                {{ $data->title }}
            </div>
            <div class="m_userCenter-line"></div>
            <div class="m_activityDetail">
                {{--<h3 class="title t_1">{{ $data->title }}</h3>--}}
                {!! $data->title_content !!}
                {{--<h3 class="title t_2">活动说明</h3>--}}
                {!! $data->content !!}
                {{--<h3 class="title t_3">活动规则</h3>--}}
                {!! $data->rule_content !!}
            </div>
        </div>
    </div>
@endsection