@extends('admin.layouts.main')
@section('content')
    <style type="text/css">
        .btn-group>.btn:first-child{
            width: 84px;
        }
    </style>
    <section class="content">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('words.platform_transfer_record')}}</h3>
            </div>
            <div class="panel-body">
                @include('admin.transfer.filter')

                <table class="table table-bordered table-hover text-center">
                    <tr>
                        <th style="width: 5%">ID</th>
                        <th style="width: 15%">{{__('words.user_name')}}</th>
                        <th style="width: 10%">{{__('words.conversion_type')}}</th>
                        <th style="width: 10%">{{__('words.transfer_account')}}</th>
                        <th style="width: 10%">{{__('words.transfer_to_account')}}</th>
                        <th style="width: 10%">{{__('words.conversion_amount')}}</th>
                        <th style="width: 10%">{{__('words.bonus_amount')}}</th>
                        <th style="width: 10%">{{__('words.transfer_time')}}</th>
                    </tr>
                    @foreach($data as $item)
                        <tr>
                            <td>
                                {{ $item->id }}
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
                                        <li><a href="#" class="show-cate" data-uri="{{ route('member.checkBalance', ['id' => $item->member->getKey()]) }}">{{__('words.view')}}</a></li>
                                        <li><a href="{{ route('member.edit', ['id' => $item->member->getKey()]) }}">{{__('words.modify')}}</a></li>
                                        <li><a href="{{ route('member.assign', ['id' => $item->member->getKey()]) }}">{{__('words.distribution_agent')}}</a></li>

                                         @if ($item->member->status == 0)
                                            <li><a href="{{ route('member.check', ['id' => $item->member->getKey(), 'status' => 1]) }}" onclick="return confirm('<?php echo trans('words.are_you_sure_disable') ?>')"><span style="color:red">{{__('words.disable')}}</span></a></li>
                                         @elseif($item->member->status == 1)
                                            <li><a href="{{ route('member.check', ['id' => $item->member->getKey(), 'status' => 0]) }}" onclick="return confirm('<?php echo trans('words.are_you_sure_enable') ?>')"><span style="color:green">{{__('words.enable')}}</span></a></li>
                                         @endif
                                        
                                    </ul>
                                </div>
                            </td>
                            <td>
                                {{ __(config('platform.transfer_type')[$item->transfer_type] )}}
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
                    <tfoot>
                    <tr>
                        <td><strong style="color: red">{{__('words.total')}}</strong></td>
                        <td colspan="4"></td>
                        <td><strong style="color: red">{{ $total_money }}</strong></td>
                        <td><strong style="color: red">{{ $total_diff_money }}</strong></td>
                        <td></td>
                    </tr>
                    </tfoot>
                </table>
                <div class="clearfix">
                    <div class="pull-left" style="margin: 0;">
                        <p>{{__('words.total')}} <strong style="color: red">{{ $data->total() }}</strong> {{__('words.article')}}</p>
                    </div>
                    <div class="pull-right" style="margin: 0;">
                        {!! $data->appends(['name' => $name, 'transfer_type' => $transfer_type, 'transfer_in_account' => $transfer_in_account, 'transfer_out_account' => $transfer_out_account, 'start_at' => $start_at, 'end_at' => $end_at])->links() !!}
                    </div>
                </div>

            </div>
        </div>

    </section><!-- /.content -->

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
         });
     </script>
@endsection