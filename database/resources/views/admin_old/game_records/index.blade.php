@extends('admin.layouts.main')
@section('content')
     <section class="content">
         <div class="panel panel-primary">
             <div class="panel-heading">
                 <h3 class="panel-title">游戏记录</h3>
             </div>
             <div class="panel-body">
                 @include('admin.game_record.filter')

                 <table class="table table-bordered table-hover text-center">
                     <tr>
                         <th style="width: 5%">ID</th>
                         <th>账号</th>
                         {{--<th style="width: 20%">平台账号</th>--}}
                         <th style="width: 10%">游戏类别</th>
                         <th style="width: 10%">输赢情况</th>
                         <th style="width: 10%">下注金额</th>
                         <th style="width: 20%">下注时间</th>
                     </tr>
                     @foreach($data as $item)
                         <tr>
                             <td>
                                 {{ $item->id }}
                             </td>
                             <td>
                                 {{ $item->username}}
                             </td>
                             {{--<td>--}}
                                 {{--{{ $item->playerName }}--}}
                             {{--</td>--}}
                             <td>
                                 {{ $item->gameCategory }}
                             </td>
                             <td>
                                 {{ $item->netPnl }}
                             </td>
                             <td>
                                 {{ $item->betAmount }}
                             </td>
                             <td>
                                 {{ $item->betTime }}
                             </td>
                         </tr>
                     @endforeach
                     <tfoot>
                     <tr>
                         <td><strong style="color: red">总合计</strong></td>
                         <td colspan="2"></td>
                         <td><strong style="color: red">{{ $total_netPnl }}</strong></td>
                         <td><strong style="color: red">{{ $total_betAmount }}</strong></td>
                         <td></td>
                     </tr>
                     </tfoot>
                 </table>
                 <div class="clearfix">
                     <div class="pull-left" style="margin: 0;">
                         <p>总共 <strong style="color: red">{{ $data->total() }}</strong> 条</p>
                     </div>
                 <div class="pull-right" style="margin: 0;">
                    {!! $data->appends(['username' => $username, 'start_at' => $start_at, 'end_at' => $end_at, 'productType' => $productType])->links() !!}
                 </div>
                 </div>

             </div>
         </div>

     </section><!-- /.content -->

     <!-- Modal -->
     <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                     <h4 class="modal-title" id="myModalLabel">不通过原因</h4>
                 </div>
                 <div class="modal-body">
                     <form action="" method="post" class="form-horizontal" id="updateReason">
                         {!! csrf_field() !!}
                         <input type="hidden" name="_method" value="put">
                         <div class="box-body">
                             <div class="form-group">
                                 <label for="fail_reason" class="col-sm-3 control-label"><span style="color: red">不通过原因</span></label>
                                 <div class="col-sm-8">
                                     <textarea name="fail_reason" id="fail_reason" rows="3" required class="form-control"></textarea>
                                 </div>
                             </div>
                         </div><!-- /.box-body -->
                         <div class="box-footer">
                             <div class="form-group">
                                 <label class="col-sm-3 control-label"></label>
                                 <div class="col-sm-8">
                                     <button type="submit" class="btn btn-info btn-flat">提交</button>
                                 </div>
                             </div>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
     <script>
         function showRemark(e)
         {
             var uri = $(e).attr('data-uri');
             $('#updateReason').attr('action',uri)
             $('#myModal').modal('show');
         }
     </script>

@endsection
@section("after.js")
     @include('admin.layouts.delete',['title'=>'操作提示','content'=>'你确定要删除这个返水等级吗?'])
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