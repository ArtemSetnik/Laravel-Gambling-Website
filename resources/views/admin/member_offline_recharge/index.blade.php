@extends('admin.layouts.main')
@section('content')
    <section class="content">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">{{ __('words.remittance_list') }}</h3>
            </div>
            <div class="panel-body">
                @include('admin.member_offline_recharge.filter')

                <table class="table table-bordered table-hover text-center">
                    <tr>
                        <th style="width: 5%">ID</th>
                        <th style="width: 15%">{{ __('words.order_number') }}</th>
                        <th style="width: 10%">{{ __('words.recharge_amount') }}</th>
                        <th style="width: 10%">{{ __('words.gift_amount') }}</th>
                        <th style="width: 10%">{{ __('words.remittance') }}</th>
                        <th style="width: 10%">{{ __('words.account_card') }}</th>
                        <th style="width: 10%">{{ __('words.remittance_time') }}</th>
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
                                {{ $item->diff_money }}
                            </td>
                            <td>
                                {{ __(config('platform.recharge_type')[$item->payment_type]) }}
                            </td>
                            <td>
                                {{ $item->account }}
                            </td>
                            <td>
                                {{ $item->created_at }}
                            </td>
                            <td>
                                @if(strpos(\App\Models\Base::$RECHARGE_STATUS_HTML[$item->status], "汇款成功") !== false)
                            <span style="color:green">{{ __('words.Successful_remittance') }}</span>
                            @elseif(strpos(\App\Models\Base::$RECHARGE_STATUS_HTML[$item->status], "待确认") !== false)
                            <span style="color:orange;">{{ __('words.to_be_confirmed') }}</span>
                            @elseif(strpos(\App\Models\Base::$RECHARGE_STATUS_HTML[$item->status], "汇款失败") !== false)
                            <span style="color:red">{{ __('words.Remittance_failed') }}</span>
                            @endif
                            </td>
                        </tr>
                    @endforeach
                    <tfoot>
                        <tr>
                            <td><strong style="color: red">{{ __('words.total') }}</strong></td>
                            <td></td>
                            <td><strong style="color: red">{{ $total_money }}</strong></td>
                            <td><strong style="color: red">{{ $total_diff_money }}</strong></td>
                            <td colspan="4"></td>
                        </tr>
                    </tfoot>
                </table>
                <div class="clearfix">
                    <div class="pull-left" style="margin: 0;">
                        <p>{{ __('words.total') }} <strong style="color: red">{{ $data->total() }}</strong> {{ __('words.article') }}</p>
                    </div>
                    <div class="pull-right" style="margin: 0;">
                        {!! $data->appends(['status' => $status, 'top_id' =>$top_id, 'start_at' => $start_at, 'end_at' => $end_at, 'payment_type' => $payment_type])->links() !!}
                    </div>
                </div>

            </div>
        </div>

    </section><!-- /.content -->
@endsection