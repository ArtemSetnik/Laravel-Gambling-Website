@extends('wap.layouts.main')
@section('content')
    @include('wap.layouts.header')
    <div class="m_container">
        <div class="m_body">
            <div class="container-fluid gm_main">
                {{--<div class="head">--}}
                {{--<a class="f_l" href="#u_nav"><img src="{{ asset('/wap/images/user_menu.png') }}" alt=""></a>--}}
                {{--<span>会员中心</span>--}}
                {{--<a class="f_r" href="#type"><img src="{{ asset('/wap/images/user_game.png') }}" alt=""></a>--}}
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
                    投注记录
                </div>
                <div class="m_userCenter-line"></div>
                <div class="wrap userInfo">
                    <form action="" method="get">
                        <div class="line">
                            <span>平台</span>
                            <select name="api_type" id="api_type" required>
                                <option value="">--请选择--</option>
                                @foreach($_api_list as $k => $v)
                                    <option value="{{ $k }}" @if($api_type == $k) selected @endif>{{ $v }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button class="submit_btn" style="margin-top: 0;" type="submit">查询</button>
                    </form>
                    <table cellspacing="1" cellpadding="0" border="0" class="tab1 mt10 text-center">
                        <tr class="tic">
                            <td width="15%">平台</td>
                            <td width="15%">有效</td>
                            <td width="15%">投注</td>
                            <td width="15%">输赢</td>
                            <td width="40%">时间</td>
                        </tr>
                        @if ($data->total() > 0)
                            @foreach($data as $item)
                                <tr>
                                    <td>{{ $_api_list[$item->api_type] }}</td>
                                    <td>{{ $item->validBetAmount }}</td>
                                    <td>{{ $item->betAmount }}</td>
                                    <td>{{ $item->netAmount }}</td>
                                    <td>{{ $item->betTime }}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="5">暂无投注记录！</td>
                            </tr>
                        @endif
                    </table>
                    <table border="0" cellspacing="0" cellpadding="0" class="page">
                        <tr>
                            {!! $data->appends(['api_type' => $api_type])->links() !!}
                        </tr>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection