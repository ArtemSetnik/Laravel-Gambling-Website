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
                 <h3 class="panel-title">下线会员输赢记录</h3>
             </div>
             <div class="panel-body">
                 @include('admin.member_offline_game_record.filter')

                 <table class="table table-bordered table-hover text-center">
                     <tr>
                         <th style="width: 5%">ID</th>
                         <th style="width: 15%">账号</th>
                         <th style="width: 20%">平台账号</th>
                         <th style="width: 10%">平台名称</th>
                         <th style="width: 10%">输赢情况</th>
                         <th style="width: 10%">下注金额</th>
                         <th style="width: 10%">有效下注</th>
                         <th style="width: 20%">下注时间</th>
                     </tr>
                     @foreach($data as $item)
                         <tr>
                             <td>
                                 {{ $item->id }}
                             </td>
                             <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-xs btn-primary">
                                        {{ $item->member->name   or '已删除'}}
                                    </button>
                                    <button type="button" class="btn btn-xs btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#" class="show-cate" data-uri="{{ route('member.checkBalance', ['id' => $item->member->getKey()]) }}">查看</a></li>
                                        <li><a href="{{ route('member.edit', ['id' => $item->member->getKey()]) }}">修改</a></li>
                                        <li><a href="{{ route('member.assign', ['id' => $item->member->getKey()]) }}">分配代理</a></li>

                                         @if ($item->member->status == 0)
                                            <li><a href="{{ route('member.check', ['id' => $item->member->getKey(), 'status' => 1]) }}" onclick="return confirm('确定禁用吗？')">禁用</a></li>
                                         @elseif($item->member->status == 1)
                                            <li><a href="{{ route('member.check', ['id' => $item->member->getKey(), 'status' => 0]) }}" onclick="return confirm('确定启用吗？')">启用</a></li>
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
                         <td><strong style="color: red">总合计</strong></td>
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
                         <p>总共 <strong style="color: red">{{ $data->total() }}</strong> 条</p>
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