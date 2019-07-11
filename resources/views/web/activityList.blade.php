@extends('web.layouts.main')
@section('content')
    <link rel="stylesheet" href="{{ asset('/web/css/activity.css') }}">
    <div id="banner"></div>
    <div class="activity">
        <div class="myhot">
            <ul class="hleft">

                <li>
                    <a href="{{route('web.activityList')}}">
                        <span @if ( !request()->get('type') )class="ok" @endif>{{ __('ft.All_activities') }}</span>
                    </a>
                </li>
                @foreach(config('platform.activity_type') as $k => $v)
                    <li>
                        <a href="{{route('web.activityList',['type'=>$k])}}">
                            <span @if (request() -> get('type') == $k)class="ok" @endif>{{__($v)}}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
            <div class="hright">
                @foreach($data as $item)
                <dl data-id="34">
                    <dd>
                        <img src="{{ $item->title_img }}" width="1020" style="opacity: 1;height: 159px">
                    </dd>
                    <dt>
                        {{--<span class="title">{{ $item->title }}</span>
                        <span class="actime">活动时间：{{ $item->start_at }} -- {{ $item->end_at }}</span>--}}
                        <div class="hotcontent">
                        {!! $item->title_content !!}
                        {!! $item->content !!}
                        {!! $item->rule_content !!}
                        </div>
                    </dt>
                </dl>
                @endforeach

            </div>
        </div>
    </div>

    <script>
        $(".myhot .hright dl dd img").click(function () {
            $(this).parent().parent().children("dt").children(".hotcontent").slideToggle(200)
        })
    </script>
@endsection