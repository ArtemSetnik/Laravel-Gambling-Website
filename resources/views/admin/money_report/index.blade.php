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
                <h3 class="panel-title">{{__('words.financial_statements')}}</h3>
            </div>
            <div class="panel-body">
                @include('admin.money_report.filter')
                <table class="table table-bordered table-hover text-center">
                    
                    <tr>
                        <th style="width: 14%">{{__('words.username')}}</th>
                        <th style="width: 8%">{{__('words.actual_name')}}</th>
                        <th style="width: 10%">{{__('words.Agent_superior')}}</th>
                        <th style="width: 5%">{{__('words.Number_of_deposits')}}</th>
                        <th style="width: 5%">{{__('words.Number_of_withdrawals')}}</th>
                        <th style="width: 10%">{{__('words.Total_deposit_amount')}}</th>
                        <th style="width: 10%">{{__('words.Total_withdrawal_amount')}}</th>
                        <th style="width: 10%">{{__('words.Total_return')}}</th>
                        <th style="width: 10%">{{__('words.Total_dividend')}}</th>
                        <th style="width: 18%">{{__('words.Total_profit_and_loss')}}</th>
                        {{-- <th>时间范围</th> --}}
                    </tr>
                    @foreach($data as $item)
                        <tr>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-xs btn-primary">
                                        {{ $item->name }}
                                    </button>
                                    <button type="button" class="btn btn-xs btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#" class="show-cate" data-uri="{{ route('member.checkBalance', ['id' => $item->getKey()]) }}">{{__('words.View')}}</a></li>
                                        <li><a href="{{ route('member.edit', ['id' => $item->getKey()]) }}">{{__('words.modify')}}</a></li>
                                        <li><a href="{{ route('member.assign', ['id' => $item->getKey()]) }}">{{__('words.Distribution_agent')}}</a></li>

                                         @if ($item->status == 0)
                                            <li><a href="{{ route('member.check', ['id' => $item->getKey(), 'status' => 1]) }}" onclick="return confirm('确定禁用吗？')"><span style="color:red">{{__('words.disable')}}</span></a></li>
                                         @elseif($item->status == 1)
                                            <li><a href="{{ route('member.check', ['id' => $item->getKey(), 'status' => 0]) }}" onclick="return confirm('确定启用吗？')"><span style="color:green">{{__('words.enable')}}</span></a></li>
                                         @endif
                                        
                                    </ul>
                                </div>
                            </td>
                            <td>
                                 {{ $item->real_name }}
                            </td>
                            <td>
                                @if ($item->is_daili == 1)
                                    <span style="color: red">{{ __('words.Yes')}}</span>
                                @else
                                    <span>{{ __('words.no')}}</span>
                                @endif
                                /{{ $item->top_member->name or '' }}
                            </td>
                            <td>
                                {{ $item->recharges()->count() }}
                            </td>
                            <td>
                                {{ $item->drawings()->count() }}
                            </td>
                            <td>
                                {{ $item->recharges()->where('status','=','2')->sum('money') }}
                            </td>
                            <td>
                                {{ $item->drawings()->where('status','=','2')->sum('money') }}
                            </td>
                            <td>
                                {{ $item->dividends()->where('type','=','3')->sum('money') }}
                            </td>
                            <td>
                                {{ $item->dividends()->whereIn('type',array(1,2,4))->sum('money') }}
                            </td>
                            <td class="yinli">
                                <strong>
                                    {{ $item->recharges()->where('status','=','2')->sum('money')-$item->drawings()->where('status','=','2')->sum('money')-$item->dividends()->where('type','=','3')->sum('money')-$item->dividends()->whereIn('type',array(1,2,4))->sum('money') }}
                                </strong>
                            </td>
                        </tr>
                    @endforeach
                    <tfoot>
                        <tr style="color: #D57D11">                        
                            <td colspan="6"></td>
                            <td colspan="2"><strong>{{__('words.Profit_and_loss_calculation_formula_and_explanation')}}:</strong></td>
                            <td colspan="2"><strong >{{__('words.Deposit_withdrawal_return_water_bonus_actual_profit_and_loss')}}</strong></td>
                        </tr>
                    </tfoot>
                     <tfoot>
                        <tr>
                            <td><strong style="color: red">{{__('words.in_total')}}：</strong></td>
                            <td colspan="4"></td>
                            <td><strong style="color: red">{{ $total_recharges }}</strong></td>
                            <td><strong style="color: red">{{ $total_drawings }}</strong></td>
                            <td><strong style="color: red">{{ $total_fs }}</strong></td>
                            <td><strong style="color: red">{{ $total_dividend }}</strong></td>
                            <td>
                                @if($total_yinli > 0)
                                    <strong style="color: green">{{__('words.profit')}}：{{ $total_yinli }}</strong>
                                @else
                                    <strong style="color: red">{{__('words.Loss')}}：{{ abs($total_yinli) }}</strong>
                                @endif
                            </td>                            
                        </tr>
                    </tfoot>
                </table>
                <div class="clearfix">
                    <div class="pull-left" style="margin: 0;">
                        <p>{{__('words.Total')}} <strong style="color: red">{{ $data->total() }}</strong> {{__('words.article')}}</p>
                    </div>
                    <div class="pull-right" style="margin: 0;">
                        {!! $data->appends(['name' => $name,'start_at' => $start_at, 'end_at' => $end_at])->links() !!}
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
                     title: '记录',
                     shadeClose: false,
                     shade: 0.8,
                     area: ['90%', '90%'],
                     content: url
                 });
             });

             $(".yinli strong").each(function(){
                if(parseInt($(this).html())>0){
                    $(this).css("color","green");
                }else{
                    $(this).css("color","red");
                }
             });

             $('#time-quick button').click(function(){
                var type = $("#time-quick button").index(this);
                var url = window.location.href;
                window.location.href = url.split('?')[0]+'?type='+type;
             });
         });
     </script>
@endsection