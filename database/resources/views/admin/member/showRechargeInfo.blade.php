@extends('admin.layouts.basic')
@section('content')
    <div class="container-fluid" style="margin-top: 10px;">

        
        <div>
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation"><a href="{{ route('member.checkBalance', ['id' => $id]) }}" aria-controls="settings" role="tab" data-toggle="tab">{{__('words.interface_balance')}}</a></li>
                <li role="presentation"><a href="{{ route('member.showGameRecordInfo', ['id' => $id]) }}" aria-controls="home" role="tab" data-toggle="tab">{{__('words.history_win_lose')}}</a></li>
                <li role="presentation" class="active"><a href="{{ route('member.showRechargeInfo', ['id' => $id]) }}" aria-controls="profile" role="tab" data-toggle="tab">{{__('words.historical_recharge')}}</a></li>
                <li role="presentation"><a href="{{ route('member.showDrawingInfo', ['id' => $id]) }}" aria-controls="messages" role="tab" data-toggle="tab">{{__('words.historical_withdrawal')}}</a></li>
                <li role="presentation"><a href="{{ route('member.showDividendInfo', ['id' => $id]) }}" aria-controls="settings" role="tab" data-toggle="tab">{{__('words.historical_dividend')}}</a></li>
                <li role="presentation"><a href="{{ route('member.showTransfer', ['id' => $id]) }}" aria-controls="settings" role="tab" data-toggle="tab">{{__('words.platform_transfer_record')}}</a></li>
            </ul>
        </div>

        <section class="content" style="margin-top: 10px;">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">{{__('words.historical_recharge')}}</h3>
                </div>
                <div class="panel-body">
                    <div class="container-fluid" style="margin-bottom: 10px;">
                        <form action="" method="get" id="searchForm">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="input-group">
                                        <span class="input-group-addon">{{__('words.status')}}</span>
                                        <select name="status" id="status" class="form-control">
                                            <option value="">{{__('words.please_choose')}}</option>
                                            @foreach(config('platform.recharge_status') as $k =>$v)
                                                <option value="{{ $k }}" @if($k == $status) selected @endif>{{ $v }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="input-group">
                                        <span class="input-group-addon">{{__('words.transfer_type')}}</span>
                                        <select name="payment_type" id="payment_type" class="form-control">
                                            <option value="">{{__('words.please_choose')}}</option>
                                            @foreach(config('platform.recharge_type') as $k =>$v)
                                                <option value="{{ $k }}" @if($k == $payment_type) selected @endif>{{ $v }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-bottom: 5px;">
                                <div class="col-lg-3 pull-right">
                                    <div class="input-group">
                                        <button type="submit" class="btn btn-primary">{{__('words.search_for')}}</button>&nbsp;
                                        <button type="button" class="btn btn-warning" id="restSearchForm">{{__('words.reset')}}</button>&nbsp;
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <table class="table table-bordered table-hover text-center">
                        <tr>
                            <th style="width: 5%">ID</th>
                            <th style="width: 15%">{{__('words.order_number')}}</th>
                            <th style="width: 10%">{{__('words.recharge_amount')}}</th>
                            <th style="width: 10%">{{__('words.gift_amount')}}</th>
                            <th style="width: 10%">{{__('words.remittance')}}</th>
                            <th style="width: 10%">{{__('words.account_card')}}</th>
                            <th style="width: 10%">{{__('words.remittance_time')}}</th>
                            <th style="width: 10%">{{__('words.status')}}</th>
                            <th>{{__('words.operating')}}</th>
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
                                <td>
                                    {{--@if ($item->status == 1)--}}
                                        {{--<a href="{{ route('recharge.show', ['id' => $item->getKey()]) }}" class="btn btn-primary btn-xs">通过</a>--}}

                                        {{--<button type="button" class="btn btn-danger btn-xs" data-uri="{{ route('recharge.update', ['id' => $item->id]) }}" onclick="showRemark(this)">不通过</button>--}}
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
                            <td><strong style="color: red">{{ $total_recharge }}</strong></td>
                            <td><strong style="color: red">{{ $total_diff_money }}</strong></td>
                            <td colspan="5"></td>
                        </tr>
                        </tfoot>
                    </table>
                    <div class="clearfix">
                        <div class="pull-left" style="margin: 0;">
                            <p>{{__('words.total')}} <strong style="color: red">{{ $data->total() }}</strong> {{__('words.artical')}}</p>
                        </div>
                        <div class="pull-right" style="margin: 0;">
                            {!! $data->appends(['status' => $status, 'payment_type' => $payment_type])->links() !!}
                        </div>
                    </div>

                </div>
            </div>

        </section><!-- /.content -->
    </div>

@endsection