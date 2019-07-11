@extends('admin.layouts.main')
@section('content')
    <section class="content">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">{{ __('words.withdrawal_list') }}</h3>
            </div>
            <div class="panel-body">
                @include('admin.member_offline_drawing.filter')

                <table class="table table-bordered table-hover text-center">
                    <tr>
                        <th style="width: 5%">ID</th>
                        <th style="width: 15%">{{ __('words.withdrawal_list') }}</th>
                        <th style="width: 10%">{{ __('words.order_number') }}</th>
                        <th style="width: 5%">{{ __('words.handling_fee') }}</th>
                        <th style="width: 15%">{{ __('words.bank_card_number') }}</th>
                        <th style="width: 15%">{{ __('words.Account_holder_address') }}</th>
                        <th style="width: 10%">{{ __('words.application_time') }}</th>
                        <th style="width: 10%">{{ __('words.status') }}</th>
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
                                {{ $item->member->real_name   or __('words.deleted') }}/{{ $item->bank_address }}
                            </td>
                            <td>
                                {{ $item->created_at }}
                            </td>
                            <td>
							  @if(strpos(\App\Models\Base::$DRAWING_STATUS_HTML[$item->status], "提款失败") !== false)
                                    <span style="color:red">{{__('words.Remittance_failed')}}</span>
                                @elseif(strpos(\App\Models\Base::$DRAWING_STATUS_HTML[$item->status], "提款成功") !== false)
                                    <span style="color:green">{{__('words.Successful_remittance')}}</span>
                                @elseif(strpos(\App\Models\Base::$DRAWING_STATUS_HTML[$item->status], "待确认") !== false)
                                    <span style="color:orange">{{__('words.to_be_confirmed')}}</span>
                                
                                @endif
                              
                            </td>
                        </tr>
                    @endforeach
                    <tfoot>
                        <tr>
                            <td><strong style="color: red">{{ __('words.total') }}</strong></td>
                            <td></td>
                            <td><strong style="color: red">{{ $total_money }}</strong></td>
                            <td><strong style="color: red">{{ $total_counter_fee }}</strong></td>
                            <td colspan="4"></td>
                        </tr>
                    </tfoot>
                </table>
                <div class="clearfix">
                    <div class="pull-left" style="margin: 0;">
                        <p>{{ __('words.total') }} <strong style="color: red">{{ $data->total() }}</strong> {{ __('words.article') }}</p>
                    </div>
                <div class="pull-right" style="margin: 0;">
                    {!! $data->appends(['status' => $status, 'top_id' =>$top_id, 'start_at' => $start_at, 'end_at' => $end_at])->links() !!}
                </div>
                </div>

            </div>
        </div>

    </section><!-- /.content -->
@endsection