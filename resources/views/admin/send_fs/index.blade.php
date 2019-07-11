@extends('admin.layouts.main')
@section('content')
    <section class="content">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('words.button_back_to_water')}}</h3>
            </div>
            <div class="panel-body">
                @include('admin.send_fs.filter')
                <form action="{{ route('send_fs.store') }}" method="post">
                    <div class="row text-center" style="margin-top: 5px;margin-bottom: 5px;">
                        <button type="button" class="btn btn-primary btn-md submit-form-sync">{{__('words.button_back_to_water')}}</button>
                        {{--<div class="col-lg-12">--}}
                        {{--<div class="input-group">--}}
                        {{--<button type="button" class="btn btn-primary btn-md submit-form-sync">一键返水</button>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                    </div>
                    <table class="table table-bordered table-hover text-center">
                        <tr>
                            <th style="width: 10%">{{__('words.member')}}</th>
                            <th style="width: 20%">{{__('words.game_type')}}</th>
                            <th style="width: 5%">{{__('words.interface')}}</th>
                            <th style="width: 5%">{{__('words.Number_of_pens')}}</th>
                            <th>{{__('words.Effective_bet_amount')}}</th>
                            <th style="width: 20%">{{__('words.return_level')}}</th>
                            <th style="width: 10%">{{__('words.Return_ratio')}}</th>
                            <th style="width: 15%">{{__('words.Return_amount')}}</th>
                        </tr>
                        <?php
                        $total_num = $total_tz_amount = $total_fs_money = 0;
                        ?>
                        @foreach($data as $item)
                            <?php
                            $member_id = $item->id;

                            $gameType_str = '';
                            $game_mod = new \App\Models\GameRecord();
                            if ($start_at)
                            {
                                $game_mod = $game_mod->where('betTime', '>=', $start_at);
                            }
                            if ($end_at)
                            {
                                $game_mod = $game_mod->where('betTime', '<=', $end_at);
                            }
                            if ($api_type)
                            {
                                $game_mod = $game_mod->where('api_type', $api_type);
                            }
//                            if (count(array_filter($gameType)) == 0)
//                            {
//                                $gameType = array_keys(config('platform.game_type'));
//                            }

                            $game_mod = $game_mod->where('gameType', $gameType);
//                            foreach ($gameType as $v)
//                                $gameType_str.=config('platform.game_type')[$v].'&';

                            //$gameType_str = rtrim($gameType_str, '&');

                            $game_mod = $game_mod->where('member_id', $member_id);

                            $num = $game_mod->count();
                            $tz_amount = $game_mod->sum('validBetAmount');//投注总额
                            $game_nos = $game_mod->pluck('id');
                            $game_str = '';
                            foreach($game_nos as $value)
                            {
                                $game_str .= $value.',';
                            }
                            //返水等级
                            $fs_level = \App\Models\FsLevel::orderBy('level', 'desc')->where('game_type', $gameType)->get();
                            $rate = 0;$level_name = '';
                            foreach ($fs_level as $k => $v)
                            {
                                if ($tz_amount >= $v->quota)
                                {
                                    $level_name = $v->name;
                                    $rate = $v->rate;
                                    break;
                                }
                            }

                            $fs_money = sprintf("%.2f",  $tz_amount*$rate/100);

                            $total_tz_amount +=$tz_amount;
                            $total_num +=$num;
                            $total_fs_money += $fs_money;

                            ?>
                            @if($num > 0)
                                <tr>
                                    <td>
                                        <label>
                                            <input type="checkbox" name="member_id[]" checked value="{{ $member_id }}">{{ $item->name }}
                                        </label>
                                    </td>
                                    <td>
                                        {{ config('platform.game_type')[$gameType] }}
                                    </td>
                                    <td>
                                        @if($api_type){{ $_api_list[$api_type] }}@endif
                                    </td>
                                    <td>
                                        {{ $num }}
                                    </td>
                                    <td>
                                        {{ $tz_amount }}
                                    </td>
                                    <td>
                                        {{ $level_name }}
                                    </td>
                                    <td>
                                        {{ $rate.'%' }}
                                    </td>
                                    <td>
                                        <input type="text" name="money[{{$member_id}}]" class="form-control"  style="max-width: 80px;" value="{{ sprintf("%.2f",  $tz_amount*$rate/100) }}">
                                        <input type="hidden" name="gamebillno[{{$member_id}}]" class="form-control" value="{{ $game_str }}">
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                        <tfoot>
                        <tr>
                            <td><strong style="color: red">{{__('words.in_total')}}</strong></td>
                            <td colspan="2"></td>
                            <td><strong style="color: red">{{ $total_num }}</strong></td>
                            <td><strong style="color: red">{{ $total_tz_amount }}</strong></td>
                            <td colspan="2"></td>
                            <td><strong style="color: red">{{ $total_fs_money }}</strong></td>
                        </tr>
                        <tr>
                            <td colspan="8">
                                <button type="button" class="btn btn-primary btn-md submit-form-sync">{{__('words.button_back_to_water')}}</button>
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </form>
                {{--<div class="clearfix">--}}
                {{--<div class="pull-left" style="margin: 0;">--}}
                {{--<p>总共 <strong style="color: red">{{ $data->total() }}</strong> 条</p>--}}
                {{--</div>--}}
                {{--<div class="pull-right" style="margin: 0;">--}}
                {{--{!! $data->appends(['name' => $name, 'start_at' => $start_at, 'end_at' => $end_at, 'api_type' => $api_type, 'gameType' => $gameType])->links() !!}--}}
                {{--</div>--}}
                {{--</div>--}}

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