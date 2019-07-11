@extends('admin.layouts.main')
@section('content')
    <link rel="stylesheet" href="{{asset('/node_modules/admin-lte/plugins/datatables/jquery.dataTables.min.css') }}">
    <script src="{{ asset('/node_modules/admin-lte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <style type="text/css">
        .btn-group>.btn:first-child{
            width: 84px;
        }
    </style>
    <section class="content">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('words.Withdrawal_list')}}</h3>
            </div>
            <div class="panel-body">
                @include('admin.drawing.filter')

                <table id="tab" class="table table-bordered table-hover text-center">
                    <thead>
                    <tr>
                        <th style="width: 5%">ID</th>
                        <th>{{__('words.order_number')}}</th>
                        <th style="width: 10%">{{__('words.Withdrawal_amount')}}</th>
                        <th style="width: 5%">{{__('words.Handling_fee')}}</th>
                        <th style="width: 15%">{{__('words.Bank')}}/{{__('words.card_number')}}</th>
                        <th style="width: 15%">{{__('words.Account_holder')}}/{{__('words.Account_opening_address')}}</th>
                        <th style="width: 14%">{{__('words.username')}}</th>
                        <th style="width: 10%">{{__('words.application_time')}}</th>
                        <th style="width: 10%">{{__('words.status')}}</th>
                        <th style="width: 6%">{{__('words.operating')}}</th>
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
                                {{ $item->money }}
                            </td>
                            <td>
                                {{ $item->counter_fee }}
                            </td>
                            <td>
                                {{ $item->bank_name }}/{{ $item->bank_card }}
                            </td>
                            <td>
                                {{ $item->name }}/{{ $item->bank_address }}
                            </td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-xs btn-primary">
                                        {{ $item->member->name }}
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
                                            <li><a href="{{ route('member.check', ['id' => $item->member->getKey(), 'status' => 1]) }}" onclick="return confirm('确定禁用吗？')"><span style="color:red">{{__('words.disable')}}</span></a></li>
                                        @elseif($item->member->status == 1)
                                            <li><a href="{{ route('member.check', ['id' => $item->member->getKey(), 'status' => 0]) }}" onclick="return confirm('确定启用吗？')"><span style="color:green">{{__('words.enable')}}</span></a></li>
                                        @endif

                                    </ul>
                                </div>
                            </td>
                            <td>
                                {{ $item->created_at }}
                            </td>
                            <td>
								 @if(strpos(\App\Models\Base::$DRAWING_STATUS_HTML[$item->status], "提款成功") !== false)
								<span style="color:green">{{ __('words.Successful_remittance') }}</span>
								@elseif(strpos(\App\Models\Base::$DRAWING_STATUS_HTML[$item->status], "待确认") !== false)
								<span style="color:orange;">{{ __('words.to_be_confirmed') }}</span>
								@elseif(strpos(\App\Models\Base::$DRAWING_STATUS_HTML[$item->status], "提款失败") !== false)
								<span style="color:red">{{ __('words.Remittance_failed') }}</span>
								@endif
							
                                
                            </td>
                            <td>
                                @if ($item->status == 1)
                                    <a href="{{ route('drawing.show', ['id' => $item->getKey()]) }}" class="btn btn-primary btn-xs">{{__('words.agree')}}</a>

                                    <button type="button" class="btn btn-danger btn-xs" data-uri="{{ route('drawing.update', ['id' => $item->id]) }}" onclick="showRemark(this)">{{__('words.disagree')}}</button>
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
                        <td></td>
                        <td><strong style="color: red">{{ $total_money }}</strong></td>
                        <td><strong style="color: red">{{ $total_counter_fee }}</strong></td>
                        <td colspan="6"></td>
                    </tr>
                    </tfoot>
                </table>
                <div class="clearfix">
                    <div class="pull-left" style="margin: 0;">
                        <p>{{__('words.Total')}} <strong style="color: red">{{ $data->total() }}</strong>{{__('words.article')}} </p>
                    </div>
                    <div class="pull-right" style="margin: 0;">
                        {!! $data->appends(['status' => $status, 'name' => $name, 'start_at' => $start_at, 'end_at' => $end_at])->links() !!}
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
                    title: "{{__('words.recording')}}",
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