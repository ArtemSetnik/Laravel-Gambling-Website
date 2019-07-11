@extends('admin.layouts.main')
@section('content')

     <section class="content">
         <div class="panel panel-primary">
             <div class="panel-heading">
                 <h3 class="panel-title">会员列表</h3>
             </div>
             <div class="panel-body">
                 @include('admin.member.filter')

                 <table class="table table-bordered table-hover text-center">
                     <tr>
                         <th style="width: 2%">ID</th>
                         <th class="text-center">用户名</th>
                         <th  style="width: 8%">中心账户</th>
                         {{--<th  style="width: 8%">红利账户</th>--}}
                         <th  style="width: 8%">真实姓名</th>
                         <th  style="width: 10%">代理/上级</th>
                         <th  style="width: 10%">手机/邮箱</th>
                         <th  style="width: 10%">注册IP</th>
                         <th  style="width: 10%">注册时间</th>
                         <th  style="width: 5%">状态</th>
                         <th  style="width: 5%">在线</th>
                         <th  style="width: 20%">操作</th>
                     </tr>
                     @foreach($data as $item)
                         <tr>
                             <td>
                                 {{ $item->id }}
                             </td>
                             <td>
                                 {{ $item->name }}
                             </td>
                             <td>
                                 {{ $item->money }}
                             </td>
                             {{--<td>--}}
                                 {{--{{ $item->fs_money }}--}}
                             {{--</td>--}}
                             <td>
                                 {{ $item->real_name }}
                             </td>
                             <td>
                                 @if ($item->is_daili == 1)
                                     <span style="color: red">是</span>
                                 @else
                                     <span>否</span>
                                 @endif
                                 /{{ $item->top_member->name or '' }}
                             </td>
                             <td>
                                 {{ $item->phone }}/{{ $item->email }}
                             </td>
                             <td>
                                 {{ $item->register_ip }}
                             </td>
                             <td>
                                 {{ $item->created_at }}
                             </td>
                             <td>
                                 {!! \App\Models\Base::$MEMBER_STATUS_HTML[$item->status] !!}
                             </td>
                             <td>
                                 @if(in_array($item->id, $_online_member_array)) 是  @else 否 @endif
                             </td>
                             <td>
                                 <button type="button" data-uri="{{ route('member.checkBalance', ['id' => $item->getKey()]) }}" class="btn btn-info btn-xs show-cate">查看</button>
                                 <a href="{{ route('member.edit', ['id' => $item->getKey()]) }}" class="btn btn-primary btn-xs">修改</a>
                                 <a href="{{ route('member.assign', ['id' => $item->getKey()]) }}" class="btn btn-warning btn-xs">分配代理</a>
                             @if ($item->status == 0)
                                    <a href="{{ route('member.check', ['id' => $item->getKey(), 'status' => 1]) }}" class="btn btn-danger btn-xs" onclick="return confirm('确定禁用吗？')">禁用</a>
                                 @elseif($item->status == 1)
                                     <a href="{{ route('member.check', ['id' => $item->getKey(), 'status' => 0]) }}" class="btn btn-success btn-xs" onclick="return confirm('确定启用吗？')">启用</a>
                                 @endif
                                 <button class="btn btn-danger btn-xs"
                                         data-url="{{route('member.destroy', ['id' => $item->getKey()])}}"
                                         data-toggle="modal"
                                         data-target="#delete-modal"
                                 >
                                     删除
                                 </button>
                             </td>
                         </tr>
                     @endforeach
                 </table>
                 <div class="clearfix">
                     <div class="pull-left" style="margin: 0;">
                         <p>总共 <strong style="color: red">{{ $data->total() }}</strong> 条</p>
                     </div>
                     <div class="pull-right" style="margin: 0;">
                         {!! $data->appends(['name' => $name, 'status' => $status, 'register_ip' =>$register_ip,'on_line' => $on_line])->links() !!}
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
@section("after.js")
     @include('admin.layouts.delete',['title'=>'操作提示','content'=>'你确定要删除这个用户吗?'])
@endsection