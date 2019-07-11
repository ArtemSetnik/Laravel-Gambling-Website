@extends('admin.layouts.main')
@section('content')
     <section class="content">
         <div class="panel panel-primary">
             <div class="panel-heading">
                 <h3 class="panel-title">代理审核列表</h3>
             </div>
             <div class="panel-body">
                 @include('admin.member_daili_apply.filter')

                 <table class="table table-bordered table-hover text-center">
                     <tr>
                         <th style="width: 10%">用户</th>
                         <th style="width: 20%">电话</th>
                         <th style="width: 20%">qq</th>
                         <th>申请理由</th>
                         <th style="width: 10%">状态</th>
                         <th style="width: 20%">操作</th>
                     </tr>
                     @foreach($data as $item)
                         <tr>
                             <td>
                                 {{ $item->member->name }}
                             </td>
                             <td>
                                 {{ $item->phone }}
                             </td>
                             <td>
                                 {{ $item->msn_qq }}
                             </td>
                             <td>
                                 {{ $item->about }}
                             </td>
                             <td>
                                 @if($item->status == 0)
                                     <strong style="color: orange">待审核</strong>
                                 @elseif($item->status == 1)
                                     <strong style="color: green">审核通过</strong>
                                 @elseif($item->status == 2)
                                     <strong style="color: red">审核不通过</strong>
                                 @endif
                             </td>
                             <td>
                                 @if ($item->status == 0)
                                 <a href="{{ route('member_daili_apply.show', ['id' => $item->getKey()]) }}" class="btn btn-primary btn-xs" onclick="return confirm('确定通过吗？')">同意</a>

                                 <button type="button" class="btn btn-danger btn-xs" data-uri="{{ route('member_daili_apply.update', ['id' => $item->id]) }}" onclick="showRemark(this)">不同意</button>
                                 {{--<button class="btn btn-danger btn-xs"--}}
                                         {{--data-url="{{route('fs_level.destroy', ['id' => $item->getKey()])}}"--}}
                                         {{--data-toggle="modal"--}}
                                         {{--data-target="#delete-modal"--}}
                                 {{-->--}}
                                     {{--删除--}}
                                 {{--</button>--}}
                                     @endif
                             </td>
                         </tr>
                     @endforeach
                 </table>
                 <div class="clearfix">
                     <div class="pull-left" style="margin: 0;">
                         <p>总共 <strong style="color: red">{{ $data->total() }}</strong> 条</p>
                     </div>
                 <div class="pull-right" style="margin: 0;">
                    {!! $data->appends(['phone' => $phone])->links() !!}
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
@endsection