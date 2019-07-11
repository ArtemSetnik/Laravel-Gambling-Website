@extends('admin.layouts.main')
@section('content')
    <section class="content">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">抢红包记录</h3>
            </div>
            <div class="panel-body">
                @include('admin.red_log.filter')
                <table class="table table-bordered table-hover text-center">
                    <tr>
                        <th style="width: 10%">ID</th>
                        <th class="text-center">充值订单号</th>
                        <th  style="width: 10%">账号</th>
                        <th  style="width: 10%">红包金额</th>
                        <th  style="width: 20%">抽取时间</th>
                    </tr>
                    @foreach($data as $item)
                        <tr>
                            <td>
                                {{ $item->id }}
                            </td>
                            <td>
                                {{ $item->recharge->bill_no }}
                            </td>
                            <td>
                                {{ $item->recharge->member->name }}
                            </td>
                            <td>
                                {{ $item->money }}
                            </td>
                            <td>
                                {{ $item->creted_at }}
                            </td>
                        </tr>
                    @endforeach
                </table>
                <div class="clearfix">
                    <div class="pull-left" style="margin: 0;">
                        <p>总共 <strong style="color: red">{{ $data->total() }}</strong> 条</p>
                    </div>
                    <div class="pull-right" style="margin: 0;">
                        {!! $data->render() !!}
                    </div>
                </div>
            </div>
        </div>

    </section><!-- /.content -->
@endsection