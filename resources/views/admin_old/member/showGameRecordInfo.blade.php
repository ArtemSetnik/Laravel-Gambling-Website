@extends('admin.layouts.basic')
@section('content')
    <div class="container-fluid" style="margin-top: 10px;">

        <div>
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation"><a href="{{ route('member.checkBalance', ['id' => $id]) }}" aria-controls="settings" role="tab" data-toggle="tab">接口余额</a></li>
                <li role="presentation" class="active"><a href="{{ route('member.showGameRecordInfo', ['id' => $id]) }}" aria-controls="home" role="tab" data-toggle="tab">历史输赢</a></li>
                <li role="presentation"><a href="{{ route('member.showRechargeInfo', ['id' => $id]) }}" aria-controls="profile" role="tab" data-toggle="tab">历史充值</a></li>
                <li role="presentation"><a href="{{ route('member.showDrawingInfo', ['id' => $id]) }}" aria-controls="messages" role="tab" data-toggle="tab">历史提款</a></li>
                <li role="presentation"><a href="{{ route('member.showDividendInfo', ['id' => $id]) }}" aria-controls="settings" role="tab" data-toggle="tab">历史红利</a></li>
                <li role="presentation"><a href="{{ route('member.showTransfer', ['id' => $id]) }}" aria-controls="settings" role="tab" data-toggle="tab">平台转账记录</a></li>
            </ul>
        </div>

        <section class="content" style="margin-top: 10px;">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">历史输赢</h3>
                </div>
                <div class="panel-body">
                    <div class="container-fluid" style="margin-bottom: 10px;">
                        <form action="" method="get" id="searchForm">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="input-group">
                                        <span class="input-group-addon">平台类型</span>
                                        <select name="api_type" id="api_type" class="form-control">
                                            <option value="">--请选择--</option>
                                            @foreach($_api_list as $k => $v)
                                                <option value="{{ $k }}" @if($api_type == $k) selected @endif>{{ $v }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="input-group">
                                        <span class="input-group-addon">开始时间</span>
                                        <input type="text" class="form-control" name="start_at" id="start_at" value="{{ $start_at }}" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="input-group">
                                        <span class="input-group-addon">结束时间</span>
                                        <input type="text" class="form-control" name="end_at" id="end_at" value="{{ $end_at }}" readonly>
                                    </div>
                                </div>

                            </div>
                            <div class="row" style="margin-top: 5px;">
                                <div class="col-lg-2 pull-right">
                                    <div class="input-group">
                                        <button type="submit" class="btn btn-primary">搜索</button>&nbsp;
                                        <button type="button" class="btn btn-warning" id="restSearchForm">重置</button>&nbsp;
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <table class="table table-bordered table-hover text-center">
                        <tr>
                            <th style="width: 5%">ID</th>
                            <th>账号</th>
                            {{--<th style="width: 15%">平台账号</th>--}}
                            <th style="width: 5%">平台名称</th>
                            <th style="width: 10%">游戏类别</th>
                            <th style="width: 10%">输赢情况</th>
                            <th style="width: 10%">下注金额</th>
                            <th style="width: 10%">有效下注</th>
                            {{--<th style="width: 10%">彩票种类</th>--}}
                            <th style="width: 10%">游戏名称</th>
                            <th style="width: 10%">下注内容</th>
                            <th style="width: 20%">下注时间</th>
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
                            <p>总共 <strong style="color: red">{{ $data->total() }}</strong> 条</p>
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