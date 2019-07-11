@extends('daili.layouts.main')
@section('content')
    <section class="content">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('words.remittance_list')}}</h3>
            </div>
            <div class="panel-body">
                @include('daili.member_offline_recharge.filter')

                <table class="table table-bordered table-hover text-center">
                    <tr>
                        <th style="width: 5%">ID</th>
                        <th style="width: 15%">{{__('words.order_number')}}</th>
                        <th style="width: 10%">{{__('words.platform_account')}}</th>
                        <th style="width: 10%">{{__('words.Recharge_amount')}}</th>
                        <th style="width: 10%">{{__('words.Gift_amount')}}</th>
                        <th style="width: 10%">{{__('words.remittance')}}</th>
                        <th style="width: 10%">{{__('words.account_card')}}</th>
                        <th style="width: 10%">{{__('words.Remittance_time')}}</th>
                        <th style="width: 10%">{{__('words.status')}}</th>
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
                                {{ $item->member->name or '已删除' }}
                            </td>
                            <td>
                                {{ $item->money }}
                            </td>
                            <td>
                                {{ $item->diff_money }}
                            </td>
                            <td>
                                {{ config('platform.recharge_type')[$item->payment_type] }}
                            </td>
                            <td>
                                {{ $item->account }}
                            </td>
                            <td>
                                {{ $item->created_at }}
                            </td>
                            <td>
                                {!! \App\Models\Base::$RECHARGE_STATUS_HTML[$item->status] !!}
                            </td>
                        </tr>
                    @endforeach
                    <tfoot>
                        <tr>
                            <td><strong style="color: red">{{__('words.in_total')}}</strong></td>
                            <td colspan="2"></td>
                            <td><strong style="color: red">{{ $total_money }}</strong></td>
                            <td><strong style="color: red">{{ $total_diff_money }}</strong></td>
                            <td colspan="4"></td>
                        </tr>
                    </tfoot>
                </table>
                <div class="clearfix">
                    <div class="pull-left" style="margin: 0;">
                        <p>{{__('words.total')}} <strong style="color: red">{{ $data->total() }}</strong> {{__('words.article')}}</p>
                    </div>
                    <div class="pull-right" style="margin: 0;">
                        {!! $data->appends(['status' => $status, 'start_at' => $start_at, 'end_at' => $end_at, 'payment_type' => $payment_type, 'name' => $name])->links() !!}
                    </div>
                </div>

            </div>
        </div>

    </section><!-- /.content -->
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