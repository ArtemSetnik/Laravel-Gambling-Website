@extends('admin.layouts.main')
@section('content')
    <link rel="stylesheet" href="{{ asset('/node_modules/admin-lte/plugins/datatables/jquery.dataTables.min.css') }}">
    <script src="{{ asset('/node_modules/admin-lte/plugins/datatables/jquery.dataTables.min.js') }}"></script>

    <style type="text/css">
        .btn-group>.btn:first-child{
            width: 84px;
        }
    </style>
    <section class="content">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('words.Remittance_list')}}</h3>
            </div>
            <div class="panel-body">
                @include('admin.recharge.filter')

                <table id="tab" class="table table-bordered table-hover text-center">
                    <thead>
                    <tr>
                        <th style="width: 5%">ID</th>
                        <th style="width: 15%">{{__('words.order_number')}}</th>
                        <th style="width: 14%">{{__('words.Platform_account')}}</th>
                        <th style="width: 8%">{{__('words.Recharge_amount')}}</th>
                        <th style="width: 8%">{{__('words.Gift_amount')}}</th>
                        <th style="width: 10%">{{__('words.remittance')}}</th>
                        <th style="width: 15%">{{__('words.account_number')}}/{{__('words.card_number')}}</th>
                        <th style="width: 10%">{{__('words.Remittance_time')}}</th>
                        <th style="width: 10%">{{__('words.status')}}</th>
                        <th>{{__('words.operating')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $item)
                        <tr>
                            <td>
                                {{ $item->id }}
                            </td>
                            <td>
                                {{ $item->bill_no }}
                            </td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-xs btn-primary">
                                        {{ $item->member->name or __('words.deleted') }}
                                    </button>
                                    <button type="button" class="btn btn-xs btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#" class="show-cate" data-uri="{{ route('member.checkBalance', ['id' => $item->member->getKey()]) }}">{{__('words.View')}}</a></li>
                                        <li><a href="{{ route('member.edit', ['id' => $item->member->getKey()]) }}">{{__('words.modify')}}</a></li>
                                        <li><a href="{{ route('member.assign', ['id' => $item->member->getKey()]) }}">{{__('words.Distribution_agent')}}</a></li>

                                        @if ($item->member->status == 0)
                                            <li><a href="{{ route('member.check', ['id' => $item->member->getKey(), 'status' => 1]) }}" onclick="return confirm('确定禁用吗？')">{{__('words.test')}}禁用</a></li>
                                        @elseif($item->member->status == 1)
                                            <li><a href="{{ route('member.check', ['id' => $item->member->getKey(), 'status' => 0]) }}" onclick="return confirm('确定启用吗？')">{{__('words.test')}}启用</a></li>
                                        @endif

                                    </ul>
                                </div>
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
                                @if($item->payment_type == 3) {{ $item->payment_desc }} @endif{{ $item->account }}
                            </td>
                            <td>
                                {{ $item->created_at }}
                            </td>
                            <td>
                                {!! \App\Models\Base::$RECHARGE_STATUS_HTML[$item->status] !!}
                            </td>
                            <td>
                                @if ($item->status == 1)
                                    <a href="{{ route('recharge.show', ['id' => $item->getKey()]) }}" class="btn btn-primary btn-xs">{{__('words.by')}}</a>

                                    <button type="button" class="btn btn-danger btn-xs" data-uri="{{ route('recharge.update', ['id' => $item->id]) }}" onclick="showRemark(this)">{{__('words.Fail')}}</button>
                                    {{--<button class="btn btn-danger btn-xs"--}}
                                    {{--data-url="{{route('fs_level.destroy', ['id' => $item->getKey()])}}"--}}
                                    {{--data-toggle="modal"--}}
                                    {{--data-target="#delete-modal"--}}
                                    {{-->--}}
                                    {{--删除--}}
                                    {{--</button>--}}
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <td><strong style="color: red">{{__('words.in_total')}}</strong></td>
                        <td colspan="2"></td>
                        <td><strong style="color: red">{{ $total_recharge }}</strong></td>
                        <td><strong style="color: red">{{ $total_diff_money }}</strong></td>
                        <td colspan="5"></td>
                    </tr>
                    </tfoot>
                </table>
                <div class="clearfix">
                    <div class="pull-left" style="margin: 0;">
                        <p>{{__('words.Total')}} <strong style="color: red">{{ $data->total() }}</strong> {{__('words.article')}}</p>
                    </div>
                    <div class="pull-right" style="margin: 0;">
                        {!! $data->appends(['status' => $status, 'name' => $name,'payment_type' => $payment_type, 'start_at' => $start_at, 'end_at' => $end_at])->links() !!}
                    </div>
                </div>

            </div>
        </div>

    </section><!-- /.content -->

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">{{__('words.No_reason')}}</h4>
                </div>
                <div class="modal-body">
                    <form action="" method="post" class="form-horizontal" id="updateReason">
                        {!! csrf_field() !!}
                        <input type="hidden" name="_method" value="put">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="fail_reason" class="col-sm-3 control-label"><span style="color: red">{{__('words.No_reason')}}</span></label>
                                <div class="col-sm-8">
                                    <textarea name="fail_reason" id="fail_reason" rows="3" required class="form-control"></textarea>
                                </div>
                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <div class="form-group">
                                <label class="col-sm-3 control-label"></label>
                                <div class="col-sm-8">
                                    <button type="submit" class="btn btn-info btn-flat">{{__('words.submit')}}</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="confirm-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">{{__('words.by')}}</h4>
                </div>
                <div class="modal-body">
                    <form action="" method="post" class="form-horizontal" id="updateReason">
                        {!! csrf_field() !!}
                        <input type="hidden" name="_method" value="put">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="fail_reason" class="col-sm-3 control-label"><span style="color: red">{{__('words.No_reason')}}</span></label>
                                <div class="col-sm-8">
                                    <textarea name="fail_reason" id="fail_reason" rows="3" required class="form-control"></textarea>
                                </div>
                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <div class="form-group">
                                <label class="col-sm-3 control-label"></label>
                                <div class="col-sm-8">
                                    <button type="submit" class="btn btn-info btn-flat">{{__('words.submit')}}</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function showRemark(e)
        {
            var uri = $(e).attr('data-uri');
            $('#updateReason').attr('action',uri)
            $('#myModal').modal('show');
        }
    </script>
    <script>
        $(function(){
            $('.show-cate').click(function(){
                var url = $(this).attr('data-uri');
                layer.open({
                    type: 2,
                    title: '记录',
                    shadeClose: false,
                    shade: 0.8,
                    area: ['90%', '90%'],
                    content: url
                });
            })
            $('#tab').DataTable({
                "scrollX": true,
                "scrollY": false,
                "ordering": false,
                "paging" : false,
                'info' : false,
                'searching' : false
            });
        });
    </script>
@endsection