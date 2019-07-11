@extends('wap.layouts.main')
@section('content')
    @include('wap.layouts.header')
    <div class="m_container">
        <div class="m_body">
            <div class="container-fluid gm_main">
                {{--<div class="head">--}}
                {{--<a class="f_l" href="{{ route('wap.agent') }}"><img src="{{ asset('/wap/images/user_back.png') }}" alt=""></a>--}}
                {{--<span>下线会员</span>--}}
                {{--<a class="f_r" href="{{ route('wap.agent') }}" style="visibility: hidden"><img src="{{ asset('/wap/images/user_back.png') }}" alt=""></a>--}}
                {{--</div>--}}
                {{--@include('wap.layouts.aside')--}}
                {{--<div id="type" style="display: none">--}}
                {{--<ul class="g_type">--}}
                {{--<li>--}}
                {{--@include('wap.layouts.aside_game_list')--}}
                {{--</li>--}}
                {{--</ul>--}}
                {{--</div>--}}
                <div class="m_member-title clear textCenter">
                    <a class="pull-left" href="javascript:history.go(-1);">&nbsp;返回</a>
                    下线会员
                </div>
                <div class="m_userCenter-line"></div>
                <div class="wrap data_h_money">
                    <table cellspacing="1" cellpadding="0" border="0" class="tab1 text-center">
                        <tr class="tic">
                            <td width="25%">用户名</td>
                            <td width="25%">姓名</td>
                            <td width="25%">当前余额</td>
                            <td width="25%">管理</td>
                        </tr>
                        @if ($data->total() > 0)
                            @foreach($data as $item)
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->real_name }}</td>
                                    <td>{{ $item->money }}</td>
                                    <td></td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="4">暂无下线会员！</td>
                            </tr>
                        @endif
                    </table>
                    <table border="0" cellpadding="0" cellspacing="0" class="page">
                        {!! $data->render() !!}
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection