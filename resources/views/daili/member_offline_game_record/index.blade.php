@extends('daili.layouts.main')
@section('content')
    <section class="content">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('words.offline_member_wins_lose')}}</h3>
            </div>
            <div class="panel-body">
                @include('daili.member_offline_game_record.filter')

                <table class="table table-bordered table-hover text-center">
                    <tr>
                        <th style="width: 5%">ID</th>
                        <th>{{__('words.account_number')}}</th>
                        <th style="width: 20%">{{__('words.platform_account')}}</th>
                        <th style="width: 10%">{{__('words.platform_name')}}</th>
                        <th style="width: 10%">{{__('words.win_lose_situation')}}</th>
                        <th style="width: 10%">{{__('words.bet_amount')}}</th>
                        <th style="width: 10%">{{__('words.effective_bet')}}</th>
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
                                {{ $item->member->name  or __('words.deleted') }}
                            </td>
                            <td>
                                {{ $item->playerName }}
                            </td>
                            <td>
                                {{ $item->api->api_name or '已下线'}}
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
                            <td>
                                {{--@if($item->gameType == 4)
                                    {{ $item->wfmz }}
                                @elseif($item->gameType == 5)
                                    {{ $item->odds }}({{ $item->oddsType }})
                                @else
                                    {{ $item->gameCode }}
                                @endif--}}
                                {{ $item->gameCode }}
                            </td>
                            <td>
                                {{--@if($item->gameType == 4)
                                    {{ $item->xzhm }}
                                @else
                                    {{ $item->stringex }}
                                @endif
                                @if($item->api->api_name == 'EG')
                                    @if($item->flag == 1)<span style="color: green">({{__('words.Settled')}})</span>
                                    @else <span style="color: red">({{__('words.Unsettlement')}})</span>
                                    @endif
                                @endif
                                @if($item->api->api_name == 'IBC')
                                    {{ $item->betStatus }}
                                @endif--}}
                                {{$item->xzhm}}
                            </td>
                            <td>
                                {{ $item->betTime }}
                            </td>
                        </tr>
                    @endforeach
                    <tfoot>
                    <tr>
                        <td><strong style="color: red">{{__('words.in_total')}}</strong></td>
                        <td colspan="3"></td>
                        <td><strong style="color: red">{{ $total_netAmount }}</strong></td>
                        <td><strong style="color: red">{{ $total_betAmount }}</strong></td>
                        <td><strong style="color: red">{{ $total_validBetAmount }}</strong></td>
                        <td></td>
                    </tr>
                    </tfoot>
                </table>
                <div class="clearfix">
                    <div class="pull-left" style="margin: 0;">
                        <p>{{__('words.total')}} <strong style="color: red">{{ $data->total() }}</strong> {{__('words.article')}}</p>
                    </div>
                    <div class="pull-right" style="margin: 0;">
                        {!! $data->appends(['name' => $name, 'start_at' => $start_at, 'end_at' => $end_at, 'api_type' => $api_type])->links() !!}
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