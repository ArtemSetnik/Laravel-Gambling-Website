@extends('admin.layouts.basic')
@section('content')
    <div class="container-fluid" style="margin-top: 10px;">

        <div>
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation"><a href="{{ route('member.checkBalance', ['id' => $id]) }}" aria-controls="settings" role="tab" data-toggle="tab">接口余额</a></li>
                <li role="presentation"><a href="{{ route('member.showGameRecordInfo', ['id' => $id]) }}" aria-controls="home" role="tab" data-toggle="tab">历史输赢</a></li>
                <li role="presentation"><a href="{{ route('member.showRechargeInfo', ['id' => $id]) }}" aria-controls="profile" role="tab" data-toggle="tab">历史充值</a></li>
                <li role="presentation" class="active"><a href="{{ route('member.showDrawingInfo', ['id' => $id]) }}" aria-controls="messages" role="tab" data-toggle="tab">历史提款</a></li>
                <li role="presentation"><a href="{{ route('member.showDividendInfo', ['id' => $id]) }}" aria-controls="settings" role="tab" data-toggle="tab">历史红利</a></li>
                <li role="presentation"><a href="{{ route('member.showTransfer', ['id' => $id]) }}" aria-controls="settings" role="tab" data-toggle="tab">平台转账记录</a></li>
            </ul>
        </div>

        <section class="content" style="margin-top: 10px;">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">历史提款</h3>
                </div>
                <div class="panel-body">
                    <div class="container-fluid" style="margin-bottom: 10px;">
                        <form action="" method="get" id="searchForm">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="input-group">
                                        <span class="input-group-addon">状态</span>
                                        <select name="status" id="status" class="form-control">
                                            <option value="">--请选择--</option>
                                            @foreach(config('platform.drawing_status') as $k =>$v)
                                                <option value="{{ $k }}" @if($k == $status) selected @endif>{{ $v }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-bottom: 5px;">
                                <div class="col-lg-2 pull-right">
                                    <div class="input-group">
                                        <button type="submit" class="btn btn-primary">搜索</button>&nbsp;
                                        <button type="button" class="btn btn-warning" id="restSearchForm">重置</button>&nbsp;
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <table class="table table-bordered table-hover text-center">
                        <tr>
                            <th style="width: 5%">ID</th>
                            <th style="width: 15%">订单号</th>
                            <th style="width: 10%">提款金额</th>
                            <th style="width: 5%">手续费</th>
                            <th style="width: 15%">开户行/卡号</th>
                            <th style="width: 15%">开户人/开户地址</th>
                            <th style="width: 10%">申请时间</th>
                            <th style="width: 10%">状态</th>
                            <th>操作</th>
                        </tr>
                        @foreach($data as $item)
                            <tr>
                                <td>
                                    {{ $item->id }}
                                </td>
                                <td>
                                    {{ $item->bill_no }}
                                </td>
                                <td>
                                    {{ $item->money }}
                                </td>
                                <td>
                                    {{ $item->counter_fee }}
                                </td>
                                <td>
                                    {{ $item->bank_name }}/{{ $item->bank_card }}
                                </td>
                                <td>
                                    {{ $item->member->real_name }}/{{ $item->bank_address }}
                                </td>
                                <td>
                                    {{ $item->created_at }}
                                </td>
                                <td>
                                    {!! \App\Models\Base::$DRAWING_STATUS_HTML[$item->status] !!}
                                </td>
                                <td>
                                    {{--@if ($item->status == 1)--}}
                                        {{--<a href="{{ route('drawing.show', ['id' => $item->getKey()]) }}" class="btn btn-primary btn-xs">同意</a>--}}

                                        {{--<button type="button" class="btn btn-danger btn-xs" data-uri="{{ route('drawing.update', ['id' => $item->id]) }}" onclick="showRemark(this)">不同意</button>--}}
                                        {{--<button class="btn btn-danger btn-xs"--}}
                                        {{--data-url="{{route('fs_level.destroy', ['id' => $item->getKey()])}}"--}}
                                        {{--data-toggle="modal"--}}
                                        {{--data-target="#delete-modal"--}}
                                        {{-->--}}
                                        {{--删除--}}
                                        {{--</button>--}}
                                    {{--@endif--}}
                                </td>
                            </tr>
                        @endforeach
                        <tfoot>
                        <tr>
                            <td><strong style="color: red">总合计</strong></td>
                            <td></td>
                            <td><strong style="color: red">{{ $total_money }}</strong></td>
                            <td><strong style="color: red">{{ $total_counter_fee }}</strong></td>
                            <td colspan="5"></td>
                        </tr>
                        </tfoot>
                    </table>
                    <div class="clearfix">
                        <div class="pull-left" style="margin: 0;">
                            <p>总共 <strong style="color: red">{{ $data->total() }}</strong> 条</p>
                        </div>
                        <div class="pull-right" style="margin: 0;">
                            {!! $data->appends(['status' => $status])->links() !!}
                        </div>
                    </div>

                </div>
            </div>

        </section><!-- /.content -->
    </div>

@endsection
@section("after.js")
    <script>
        var start = {
            elem: '#start_at',
            format: 'YYYY-MM-DD hh:mm:ss',
            //min: laydate.now(), //设定最小日期为当前日期
            max: '2099-06-16 23:59:59', //最大日期
            istime: true,
            istoday: false,
            choose: function(datas){
                end.min = datas; //开始日选好后，重置结束日的最小日期
                end.start = datas //将结束日的初始值设定为开始日
            }
        };
        var end = {
            elem: '#end_at',
            format: 'YYYY-MM-DD 23:59:59',
            //min: laydate.now(),
            max: '2099-06-16 23:59:59',
            istime: true,
            istoday: true,
            choose: function(datas){
                start.max = datas; //结束日选好后，重置开始日的最大日期
            }
        };
        laydate(start);
        laydate(end);
    </script>
@endsection