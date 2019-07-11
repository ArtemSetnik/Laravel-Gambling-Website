@extends('admin.layouts.main')
@section('content')
    <section class="content">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('words.Administrator_action_account_record')}}</h3>
            </div>
            <div class="panel-body">
                @include('admin.admin_action_money_log.filter')

                <table class="table table-bordered table-hover text-center">
                    <tr>
                        <th style="width: 5%">ID</th>
                        <th>{{__('words.Account_Name')}}</th>
                        <th style="width: 10%">{{__('words.Pre-occurrence_balance')}}</th>
                        <th style="width: 10%">{{__('words.Balance_after_occurrence')}}</th>
                        <th style="width: 10%">{{__('words.Pre-occurrence_bonus_account')}}</th>
                        <th style="width: 10%">{{__('words.Bonus_account_after_the_occurrence')}}</th>
                        <th style="width: 15%">{{__('words.Remarks')}}</th>
                        <th style="width: 5%">{{__('words.Operator')}}</th>
                        <th style="width: 15%">{{__('words.Generation_time')}}</th>
                    </tr>
                    @foreach($data as $item)
                        <tr>
                            <td>
                                {{ $item->id }}
                            </td>
                            <td>
                                {{ $item->member->name or __('words.deleted')}}
                            </td>
                            <td>
                                {{ $item->old_money }}
                            </td>
                            <td>
                                {{ $item->new_money }}
                            </td>
                            <td>
                                {{ $item->old_fs_money }}
                            </td>
                            <td>
                                {{ $item->new_fs_money }}
                            </td>
                            <td>
                                {{ $item->remark }}
                            </td>
                            <td>
                                {{ $item->user->name or __('words.deleted')}}
                            </td>
                            <td>
                                {{ $item->created_at }}
                            </td>
                        </tr>
                    @endforeach
                    {{--<tfoot>--}}
                    {{--<tr>--}}
                    {{--<td><strong style="color: red">总合计</strong></td>--}}
                    {{--<td></td>--}}
                    {{--<td><strong style="color: red">{{ $total_yl_money }}</strong></td>--}}
                    {{--<td><strong style="color: red">{{ $total_money }}</strong></td>--}}
                    {{--<td colspan="3"></td>--}}
                    {{--</tr>--}}
                    {{--</tfoot>--}}
                </table>
                <div class="clearfix">
                    <div class="pull-left" style="margin: 0;">
                        <p>{{__('words.Total')}} <strong style="color: red">{{ $data->total() }}</strong> {{__('words.article')}}</p>
                    </div>
                    <div class="pull-right" style="margin: 0;">
                        {!! $data->appends(['start_at' => $start_at, 'end_at' => $end_at])->links() !!}
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