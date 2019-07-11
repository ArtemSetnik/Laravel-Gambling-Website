@extends('web.layouts.main')
@section('content')
    <div class="body clear">
        <div class="pro-nr-bg">
            <div class="container">
                <div class="pro-xq">
                    <div>
                        <div class="pro-xq-bt">
                            <h2>{{ $data->title }}</h2>
                            <span>时间：{{ $data->date_desc }}</span>
                        </div>
                        <div class="pro-cont">
                            <h3 class="title t_1">{{ $data->title }}</h3>
                            {!! $data->title_content !!}
                            <h3 class="title t_2">活动说明</h3>
                            {!! $data->content !!}
                            <h3 class="title t_3">活动规则</h3>
                            {!! $data->rule_content !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection