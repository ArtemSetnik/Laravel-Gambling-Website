@extends('admin.layouts.main')
@section('content')

     <section class="content">
         <div class="panel panel-primary">
             <div class="panel-heading">
                 <h3 class="panel-title">会员登录记录</h3>
             </div>
             <div class="panel-body">
                 @include('admin.member_login_log.filter')

                 <table class="table table-bordered table-hover text-center">
                     <tr>
                         <th style="width: 10%">ID</th>
                         <th style="width: 15%">账号</th>
                         <th  >IP</th>
                         <th  style="width: 15%">登录时间</th>
                         <th  style="width: 20%">操作</th>
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
                                 {{ $item->ip }}
                             </td>
                             <td>
                                 {{ $item->created_at }}
                             </td>

                             <td>
                                 <button type="button" class="btn btn-info btn-xs">查看</button>
                             </td>
                         </tr>
                     @endforeach
                 </table>
                 <div class="clearfix">
                     <div class="pull-left" style="margin: 0;">
                         <p>总共 <strong style="color: red">{{ $data->total() }}</strong> 条</p>
                     </div>
                     <div class="pull-right" style="margin: 0;">
                         {!! $data->appends(['name' => $name, 'start_at' => $start_at, 'end_at' => $end_at])->links() !!}
                     </div>
                 </div>
             </div>
         </div>

     </section><!-- /.content -->
@endsection
@section("after.js")
     @include('admin.layouts.delete',['title'=>'操作提示','content'=>'你确定要删除这个用户吗?'])
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