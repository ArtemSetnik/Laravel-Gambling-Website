@extends('admin.layouts.main')

@section('content')
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) --><div class="row">
            <div class="col-lg-4 col-xs-4">
                <!-- small box -->
                <div class="small-box bg-red text-center">
                    <div class="inner">
                        <h4>{{ __('words.member_monitoring') }}</h4>

                        <p>{{ __('words.meber_logged_with_ip') }}</p>
                    </div>
                    <div class="icon">
                        {{--<i class="ion ion-pie-graph"></i>--}}
                    </div>
                    <a href="{{ route('monitor.index') }}?type=1" class="small-box-footer">{{ __('words.view') }}</a>
                </div>
            </div>

            <div class="col-lg-4 col-xs-4">
                <!-- small box -->
                <div class="small-box bg-red text-center">
                    <div class="inner">
                        <h4>{{ __('words.large_amount_monitoring') }}</h4>

                        <p>{{ __('words.member_large_transfer') }}</p>
                    </div>
                    <div class="icon">
                        {{--<i class="ion ion-pie-graph"></i>--}}
                    </div>
                    <a href="{{ route('monitor.index') }}?type=2" class="small-box-footer">{{ __('words.view') }}</a>
                </div>
            </div>

            <div class="col-lg-4 col-xs-4">
                <!-- small box -->
                <div class="small-box bg-red text-center">
                    <div class="inner">
                        <h4>{{ __('words.arbitrage_monitoring') }}</h4>

                        <p>{{ __('words.member_frequent_outbond') }}</p>
                    </div>
                    <div class="icon">
                        {{--<i class="ion ion-pie-graph"></i>--}}
                    </div>
                    <a href="{{ route('monitor.index') }}?type=3" class="small-box-footer">{{ __('words.view') }}</a>
                </div>
            </div>
            <!-- ./col -->
        </div>

        @if($type == 1)
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">{{ __('words.member_monitoring') }}</h3>
            </div>
            <div class="panel-body">

                <table class="table table-bordered table-hover text-center">
                    <tr>
                        <th style="width: 60%">{{ __('words.member_ip_monitoring') }}</th>
                        <th style="width: 60%">{{ __('words.number_member') }}</th>
                    </tr>
                    @foreach($data as $item)
                        @if($item->user_count > 1)
                        <tr>
                            <td>
                                {{ $item->ip }}
                            </td>
                            <td>
                                {{ $item->user_count }}
                            </td>
                        </tr>
                        @endif
                    @endforeach
                </table>
                    {{--<div class="clearfix">--}}
                        {{--<div class="pull-left" style="margin: 0;">--}}
                            {{--<p>总共 <strong style="color: red">{{ $data->total() }}</strong> 条</p>--}}
                        {{--</div>--}}
                        {{--<div class="pull-right" style="margin: 0;">--}}
                            {{--{!! $data->render() !!}--}}
                        {{--</div>--}}
                    {{--</div>--}}
            </div>
        </div>
            @elseif($type==2)
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ __('words.large_amount_monitoring') }}</h3>
                </div>
                <div class="panel-body">
                    {{--@include('admin.transfer.filter')--}}

                    <table class="table table-bordered table-hover text-center">
                        <tr>
                            <th style="width: 5%">ID</th>
                            <th>{{ __('words.user_name') }}</th>
                            <th style="width: 10%">{{ __('words.conversion_type') }}</th>
                            <th style="width: 10%">{{ __('words.transfer_account') }}</th>
                            <th style="width: 10%">{{ __('words.transfer_to_account') }}</th>
                            <th style="width: 10%">{{ __('words.conversion_amount') }}</th>
                            <th style="width: 10%">{{ __('words.bonus_amount') }}</th>
                            <th style="width: 10%">{{ __('words.transfer_time') }}</th>
                        </tr>
                        @foreach($data as $item)
                            <tr>
                                <td>
                                    {{ $item->id }}
                                </td>
                                <td>
                                    {{ $item->member->name }}
                                </td>
                                <td>
                                    {{ config('platform.transfer_type')[$item->transfer_type] }}
                                </td>
                                <td>
                                    {{ $item->transfer_out_account }}
                                </td>
                                <td>
                                    {{ $item->transfer_in_account }}
                                </td>
                                <td>
                                    {{ $item->money }}
                                </td>
                                <td>
                                    {{ $item->diff_money }}
                                </td>
                                <td>
                                    {{ $item->created_at }}
                                </td>
                            </tr>
                        @endforeach
                        {{--<tfoot>--}}
                        {{--<tr>--}}
                            {{--<td><strong style="color: red">总合计</strong></td>--}}
                            {{--<td colspan="4"></td>--}}
                            {{--<td><strong style="color: red">{{ $total_money }}</strong></td>--}}
                            {{--<td><strong style="color: red">{{ $total_diff_money }}</strong></td>--}}
                            {{--<td></td>--}}
                        {{--</tr>--}}
                        {{--</tfoot>--}}
                    </table>
                    <div class="clearfix">
                        <div class="pull-left" style="margin: 0;">
                            <p>{{ __('words.total') }} <strong style="color: red">{{ $data->total() }}</strong> {{ __('words.article') }}</p>
                        </div>
                        <div class="pull-right" style="margin: 0;">
                            {!! $data->appends(['type' => $type])->render() !!}
                        </div>
                    </div>

                </div>
            </div>
            @elseif($type == 3)
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ __('words.arbitrage_monitoring') }}</h3>
                </div>
                <div class="panel-body">

                    <table class="table table-bordered table-hover text-center">
                        <tr>
                            <th style="width: 60%">{{ __('words.user_name') }}</th>
                            <th style="width: 30%">{{ __('words.number_transfer') }}</th>
                            <th style="width: 10%">{{ __('words.operating') }}</th>
                        </tr>
                        @foreach($data as $item)
                            <tr>
                                <td>
                                    {{ $item->username }}
                                </td>
                                <td>
                                    {{ $item->user_count }}
                                </td>
                                <td>
                                    <a target="_blank" href="{{ route('transfer.index') }}?name={{ $item->username }}&transfer_type=1&start_at={{ date('Y-m-d') }}&end_at={{ date('Y-m-d 23:59:59') }}" class="btn btn-info btn-xs">{{ __('words.view') }}</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    {{--<div class="clearfix">--}}
                    {{--<div class="pull-left" style="margin: 0;">--}}
                    {{--<p>总共 <strong style="color: red">{{ $data->total() }}</strong> 条</p>--}}
                    {{--</div>--}}
                    {{--<div class="pull-right" style="margin: 0;">--}}
                    {{--{!! $data->render() !!}--}}
                    {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>
        @endif
    </section>
@endsection