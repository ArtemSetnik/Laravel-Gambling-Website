@extends('admin.layouts.basic')
@section('content')
    <div class="container-fluid" style="margin-top: 10px;">

        
        <div>
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation"><a href="{{ route('member.checkBalance', ['id' => $id]) }}" aria-controls="settings" role="tab" data-toggle="tab">{{__('words.interface_balance')}}</a></li>
                <li role="presentation" class="active"><a href="{{ route('member.showGameRecordInfo', ['id' => $id]) }}" aria-controls="home" role="tab" data-toggle="tab">{{__('words.history_win_lose')}}</a></li>
                <li role="presentation"><a href="{{ route('member.showRechargeInfo', ['id' => $id]) }}" aria-controls="profile" role="tab" data-toggle="tab">{{__('words.historical_recharge')}}</a></li>
                <li role="presentation"><a href="{{ route('member.showDrawingInfo', ['id' => $id]) }}" aria-controls="messages" role="tab" data-toggle="tab">{{__('words.historical_withdrawal')}}</a></li>
                <li role="presentation"><a href="{{ route('member.showDividendInfo', ['id' => $id]) }}" aria-controls="settings" role="tab" data-toggle="tab">{{__('words.historical_dividend')}}</a></li>
                <li role="presentation"><a href="{{ route('member.showTransfer', ['id' => $id]) }}" aria-controls="settings" role="tab" data-toggle="tab">{{__('words.platform_transfer_record')}}</a></li>
            </ul>
        </div>

        <section class="content" style="margin-top: 10px;">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">{{__('words.history_win_lose')}}</h3>
                </div>
                <div class="panel-body">
                    <div class="container-fluid" style="margin-bottom: 10px;">
                        <form action="" method="get" id="searchForm">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="input-group">
                                        <span class="input-group-addon">{{__('words.platform_type')}}</span>
                                        <select name="api_type" id="api_type" class="form-control">
                                            <option value="">{{__('words.please_choose')}}</option>
                                            @foreach($_api_list as $k => $v)
                                                <option value="{{ $k }}" @if($api_type == $k) selected @endif>{{ $v }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
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

                            </div>
                            <div class="row" style="margin-top: 5px;">
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
                            <th>{{__('words.account_number')}}</th>
                            {{--<th style="width: 15%">平台账号</th>--}}
                            <th style="width: 5%">{{__('words.platform_name')}}</th>
                            <th style="width: 10%">{{__('words.game_category')}}</th>
                            <th style="width: 10%">{{__('words.win_lose_situation')}}</th>
                            <th style="width: 10%">{{__('words.bet_amount')}}</th>
                            <th style="width: 10%">{{__('words.effective_bet')}}</th>
                            {{--<th style="width: 10%">彩票种类</th>--}}
                            <th style="width: 10%">{{__('words.game_name')}}</th>
                            <th style="width: 10%">{{__('words.bet_content')}}</th>
                            <th style="width: 20%">{{__('words.bet_time')}}</th>
                        </tr>
                        @foreach($data as $item)
                            <tr>
                                <td>
                                    {{ $item->id }}
                                </td>
                                <td>
                                    {{ $item->member->name or '已删除' }}
                                </td>
                                {{--<td>--}}
                                {{--{{ $item->playerName }}--}}
                                {{--</td>--}}
                                <td>
                                    {{ $item->api->api_name }}
                                </td>
                                <td>
                                    {{ config('platform.game_type')[$item->gameType] }}
                                </td>
                                <td>
                                    {{ $item->netAmount }}
                                </td>
                                <td>
                                    {{ $item->betAmount }}
                                </td>
                                <td>
                                    {{ $item->validBetAmount }}
                                </td>
                                {{--<td>
                                    @if($item->api->api_name == 'EG')
                                        {{ $item->gameCode }}
                                    @endif
                                </td>--}}
                                <td>
                                    {{--@if($item->api->api_name == 'EG')
                                        {{ $item->tableCode }}
                                    @endif--}}
                                    {{ $item->gameCode }}
                                </td>
                                <td>
                                    {{--{{ $item->stringex }}@if($item->api->api_name == 'EG')@if($item->flag == 1)<span style="color: green">(已结算)</span> @else <span style="color: red">(未结算)</span> @endif @endif--}}
                                    {{$item->xzhm}}
                                </td>
                                <td>
                                    {{ $item->betTime }}
                                </td>
                            </tr>
                        @endforeach
                        <tfoot>
                        <tr>
                            <td><strong style="color: red">总合计</strong></td>
                            <td colspan="3"></td>
                            <td><strong style="color: red">{{ $total_netAmount }}</strong></td>
                            <td><strong style="color: red">{{ $total_betAmount }}</strong></td>
                            <td><strong style="color: red">{{ $total_validBetAmount }}</strong></td>
                            <td colspan="4"></td>
                        </tr>
                        </tfoot>
                    </table>
                    <div class="clearfix">
                        <div class="pull-left" style="margin: 0;">
                            <p>{{__('words.total')}} <strong style="color: red">{{ $data->total() }}</strong> {{__('words.artical')}}</p>
                        </div>
                        <div class="pull-right" style="margin: 0;">
                            {!! $data->appends(['start_at' => $start_at, 'end_at' => $end_at, 'api_type' => $api_type])->links() !!}
                        </div>
                    </div>

                </div>
            </div>

        </section><!-- /.content -->
    </div>

@endsection