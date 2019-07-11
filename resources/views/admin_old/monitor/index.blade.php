@extends('admin.layouts.main')

@section('content')
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) --><div class="row">
            <div class="col-lg-4 col-xs-4">
                <!-- small box -->
                <div class="small-box bg-red text-center">
                    <div class="inner">
                        <h4>会员监控</h4>

                        <p>监控同IP下登录的会员</p>
                    </div>
                    <div class="icon">
                        {{--<i class="ion ion-pie-graph"></i>--}}
                    </div>
                    <a href="{{ route('monitor.index') }}?type=1" class="small-box-footer">查看</a>
                </div>
            </div>

            <div class="col-lg-4 col-xs-4">
                <!-- small box -->
                <div class="small-box bg-red text-center">
                    <div class="inner">
                        <h4>大额监控</h4>

                        <p>监控大额转入/转出行为的会员</p>
                    </div>
                    <div class="icon">
                        {{--<i class="ion ion-pie-graph"></i>--}}
                    </div>
                    <a href="{{ route('monitor.index') }}?type=2" class="small-box-footer">查看</a>
                </div>
            </div>

            <div class="col-lg-4 col-xs-4">
                <!-- small box -->
                <div class="small-box bg-red text-center">
                    <div class="inner">
                        <h4>套利监控</h4>

                        <p>监控频繁转出行为的会员</p>
                    </div>
                    <div class="icon">
                        {{--<i class="ion ion-pie-graph"></i>--}}
                    </div>
                    <a href="{{ route('monitor.index') }}?type=3" class="small-box-footer">查看</a>
                </div>
            </div>
            <!-- ./col -->
        </div>

        @if($type == 1)
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">会员监控</h3>
            </div>
            <div class="panel-body">

                <table class="table table-bordered table-hover text-center">
                    <tr>
                        <th style="width: 60%">会员IP监控</th>
                        <th style="width: 60%">会员个数</th>
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
                    <h3 class="panel-title">大额监控</h3>
                </div>
                <div class="panel-body">
                    {{--@include('admin.transfer.filter')--}}

                    <table class="table table-bordered table-hover text-center">
                        <tr>
                            <th style="width: 5%">ID</th>
                            <th>用户名称</th>
                            <th style="width: 10%">转换类型</th>
                            <th style="width: 10%">转出账户</th>
                            <th style="width: 10%">转入账户</th>
                            <th style="width: 10%">转换金额</th>
                            <th style="width: 10%">红利金额</th>
                            <th style="width: 10%">转账时间</th>
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
                            <p>总共 <strong style="color: red">{{ $data->total() }}</strong> 条</p>
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
                    <h3 class="panel-title">套利监控</h3>
                </div>
                <div class="panel-body">

                    <table class="table table-bordered table-hover text-center">
                        <tr>
                            <th style="width: 60%">用户名</th>
                            <th style="width: 30%">转出次数</th>
                            <th style="width: 10%">操作</th>
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
                                    <a target="_blank" href="{{ route('transfer.index') }}?name={{ $item->username }}&transfer_type=1&start_at={{ date('Y-m-d') }}&end_at={{ date('Y-m-d 23:59:59') }}" class="btn btn-info btn-xs">查看</a>
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