@extends('admin.layouts.basic')
@section('content')
    <div class="container-fluid" style="margin-top: 10px;">

        <div>
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation"><a href="{{ route('member.checkBalance', ['id' => $id]) }}" aria-controls="settings" role="tab" data-toggle="tab">{{__('words.interface_balance')}}</a></li>
                <li role="presentation"><a href="{{ route('member.showGameRecordInfo', ['id' => $id]) }}" aria-controls="home" role="tab" data-toggle="tab">{{__('words.history_win_lose')}}</a></li>
                <li role="presentation"><a href="{{ route('member.showRechargeInfo', ['id' => $id]) }}" aria-controls="profile" role="tab" data-toggle="tab">{{__('words.historical_recharge')}}</a></li>
                <li role="presentation"><a href="{{ route('member.showDrawingInfo', ['id' => $id]) }}" aria-controls="messages" role="tab" data-toggle="tab">{{__('words.historical_withdrawal')}}</a></li>
                <li role="presentation"><a href="{{ route('member.showDividendInfo', ['id' => $id]) }}" aria-controls="settings" role="tab" data-toggle="tab">{{__('words.historical_dividend')}}</a></li>
                <li role="presentation" class="active"><a href="{{ route('member.showTransfer', ['id' => $id]) }}" aria-controls="settings" role="tab" data-toggle="tab">{{__('words.platform_transfer_record')}}</a></li>
            </ul>
        </div>

        <section class="content" style="margin-top: 10px;">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">{{__('words.platform_transfer_record')}}</h3>
                </div>
                <div class="panel-body">
                    <div class="container-fluid" style="margin-bottom: 10px;">
                        <form action="" method="get" id="searchForm">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="input-group">
                                        <span class="input-group-addon">{{__('words.user')}}</span>
                                        <input type="text" name="name" class="form-control" value="{{ $name }}">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="input-group">
                                        <span class="input-group-addon">{{__('words.transfer')}}</span>
                                        <select name="transfer_type" id="transfer_type" class="form-control">
                                            <option value="">{{__('words.please_choose')}}</option>
                                            @foreach(config('platform.transfer_type') as $k => $v)
                                                <option value="{{ $k }}" @if(is_numeric($transfer_type) && $transfer_type == $k) selected @endif>{{ $v }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="input-group">
                                        <span class="input-group-addon">{{__('words.transfer_to_account')}}</span>
                                        <select name="transfer_in_account" id="transfer_in_account" class="form-control">
                                            <option value="">{{__('words.please_choose')}}</option>
                                            <option value="中心账户">{{__('words.central_account')}}</option>
                                            @foreach($_api_list as $k => $v)
                                                <option value="{{ $v }}" @if($transfer_in_account == $v) selected @endif>{{ $v }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="input-group">
                                        <span class="input-group-addon">{{__('words.transfer_account')}}</span>
                                        <select name="transfer_out_account" id="transfer_out_account" class="form-control">
                                            <option value="">{{__('words.please_choose')}}</option>
                                            <option value="中心账户">{{__('words.central_account')}}</option>
                                            <option value="返水账户">{{__('words.return_water_account')}}</option>
                                            @foreach($_api_list as $k => $v)
                                                <option value="{{ $v }}" @if($transfer_out_account == $v) selected @endif>{{ $v }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 5px;">
                                <div class="col-lg-3">
                                    <div class="input-group">
                                        <span class="input-group-addon">{{__('words.starting_time')}}</span>
                                        <input type="text" class="form-control" name="start_at" id="start_at" value="{{ $start_at }}" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="input-group">
                                        <span class="input-group-addon">{{__('words.end_time')}}</span>
                                        <input type="text" class="form-control" name="end_at" id="end_at" value="{{ $end_at }}" readonly>
                                    </div>
                                </div>
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
                            <th>{{__('words.user_name')}}</th>
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
                                    {{ $item->member->name }}
                                </td>
                                <td>
                                    {{ config('platform.transfer_type')[$item->transfer_type] }}
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
                            <td><strong style="color: red">总合计</strong></td>
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
    </div>

@endsection