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
                    <a class="pull-left" href="javascript:history.go(-1);">&nbsp;{{ __('mb.Back') }}</a>
                    {{ __('mb.Deposit_History') }}
                </div>
                <div class="m_userCenter-line"></div>
                <div class="wrap data_h_money">
                    <table cellspacing="1" cellpadding="0" border="0" class="tab1 text-center">
                        <tr class="tic">
							<td width="33.333%">{{ __('mb.Deposit_Time') }}</td>
                            <td width="33.333%">{{ __('mb.Deposit_Amount') }}</td>
                            <td width="33.333%">{{ __('mb.Deposit_Status') }}</td>
                            <!--<td width="33.333%">提款时间</td>
                            <td width="33.333%">提款金额</td>
                            <td width="33.333%">提款状态</td>//-->
                        </tr>
                        @if ($data->total() > 0)
                            @foreach($data as $item)
                                <tr>
                                    <td>{{ $item->created_at }}</td>
                                    <td>{{ $item->money }}</td>
                                    <td>{!! str_replace('@',__('mb.drawing_status'.$item->status),\App\Models\Base::$DRAWING_STATUS_HTML[$item->status]) !!}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="3">{{ __('mb.No_History') }}</td>
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