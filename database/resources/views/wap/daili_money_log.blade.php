@extends('wap.layouts.main')
@section('content')
    @include('wap.layouts.header')
    <div class="m_container">
        <div class="m_body">
            <div class="container-fluid gm_main">
                {{--<div class="head">--}}
                {{--<a class="f_l" href="javascript:history.go(-1)"><img src="{{ asset('/wap/images/user_back.png') }}" alt=""></a>--}}
                {{--<span>佣金发放记录</span>--}}
                {{--<a class="f_r" href="javascript:history.go(-1)" style="visibility: hidden"><img src="{{ asset('/wap/images/user_back.png') }}" alt=""></a>--}}
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
                    佣金发放记录
                </div>
                <div class="m_userCenter-line"></div>
                <div class="wrap data_h_money">
                    <table cellspacing="1" cellpadding="0" border="0" class="tab1 text-center">
                        <tr class="tic">
                            <td width="33.333%">发放佣金</td>
                            <td width="33.333%">发放时间</td>
                            <td width="33.333%">备注</td>
                        </tr>
                        @if ($data->total() > 0)
                            @foreach($data as $item)
                                <tr>
                                    <td>{{ $item->money }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>{{ $item->remark }}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="3">暂无发放记录！</td>
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