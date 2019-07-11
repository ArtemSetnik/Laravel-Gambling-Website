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
                 <h3 class="panel-title">{{ __('words.offline_member_wins_lose') }}</h3>
             </div>
             <div class="panel-body">
                 @include('admin.member_offline_game_record.filter')

                 <table class="table table-bordered table-hover text-center">
                     <tr>
                         <th style="width: 5%">ID</th>
                         <th style="width: 15%">{{ __('words.account_number') }}</th>
                         <th style="width: 20%">{{ __('words.platform_account') }}</th>
                         <th style="width: 10%">{{ __('words.platform_name') }}</th>
                         <th style="width: 10%">{{ __('words.win_lose_situation') }}</th>
                         <th style="width: 10%">{{ __('words.bet_amount') }}</th>
                         <th style="width: 10%">{{ __('words.effective_bet') }}</th>
                         <th style="width: 20%">{{ __('words.bet_time') }}</th>
                     </tr>
                     @foreach($data as $item)
                         <tr>
                             <td>
                                 {{ $item->id }}
                             </td>
                             <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-xs btn-primary">
                                        {{ $item->member->name   or __('words.deleted')}}
                                    </button>
                                    <button type="button" class="btn btn-xs btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#" class="show-cate" data-uri="{{ route('member.checkBalance', ['id' => $item->member->getKey()]) }}">{{ __('words.view') }}</a></li>
                                        <li><a href="{{ route('member.edit', ['id' => $item->member->getKey()]) }}">{{ __('words.modify') }}</a></li>
                                        <li><a href="{{ route('member.assign', ['id' => $item->member->getKey()]) }}">{{ __('words.distribution_agent') }}</a></li>

                                         @if ($item->member->status == 0)
                                            <li><a href="{{ route('member.check', ['id' => $item->member->getKey(), 'status' => 1]) }}" onclick="return confirm('确定禁用吗？')"><span style="color:red">{{__('words.disable')}}</span></a></li>
                                         @elseif($item->member->status == 1)
                                            <li><a href="{{ route('member.check', ['id' => $item->member->getKey(), 'status' => 0]) }}" onclick="return confirm('确定启用吗？')"><span style="color:green">{{__('words.enable')}}</span></a></li>
                                         @endif
                                        
                                    </ul>
                                </div>
                                 
                             </td>
                             <td>
                                 {{ $item->playerName }}
                             </td>
                             <td>
                                 {{ $item->api->api_name }}
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
                                 {{ $item->betTime }}
                             </td>
                         </tr>
                     @endforeach
                     <tfoot>
                     <tr>
                         <td><strong style="color: red">{{ __('words.total') }}</strong></td>
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
                         <p>{{ __('words.total') }} <strong style="color: red">{{ $data->total() }}</strong> {{ __('words.article') }}</p>
                     </div>
                 <div class="pull-right" style="margin: 0;">
                    {!! $data->appends(['playerName' => $playerName, 'start_at' => $start_at, 'end_at' => $end_at,'top_id' => $top_id, 'api_type' => $api_type])->links() !!}
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
             })
         });
     </script>

@endsection