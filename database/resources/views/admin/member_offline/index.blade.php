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
                 <h3 class="panel-title">{{__('words.offline_member_list')}}</h3>
             </div>
             <div class="panel-body">
                 @include('admin.member_offline.filter')

                 <table class="table table-bordered table-hover text-center">
                     <tr>
                         <th style="width: 10%">ID</th>
                         <th style="width: 15%">{{__('words.user_name')}}</th>
                         <th  style="width: 10%">{{__('words.central_account')}}</th>
                         <th  style="width: 10%">{{__('words.actual_name')}}</th>
                         <th  style="width: 10%">{{__('words.affiliated_agent')}}</th>
                         <th  style="width: 10%">{{__('words.mobile_number')}}/</th>
                         <th  style="width: 15%">{{__('words.register_time')}}</th>
                         <th  style="width: 10%">{{__('words.status')}}</th>
                         <th  style="width: 15%">{{__('words.operating')}}</th>
                     </tr>
                     @foreach($data as $item)
                         <tr>
                             <td>
                                 {{ $item->id }}
                             </td>
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
                                        <li><a href="#" class="show-cate" data-uri="{{ route('member.checkBalance', ['id' => $item->getKey()]) }}">{{__('words.view')}}</a></li>
                                        <li><a href="{{ route('member.edit', ['id' => $item->getKey()]) }}">{{__('words.modify')}}</a></li>
                                        <li><a href="{{ route('member.assign', ['id' => $item->getKey()]) }}">{{__('words.distribution_agent')}}</a></li>

                                         @if ($item->status == 0)
                                            <li><a href="{{ route('member.check', ['id' => $item->getKey(), 'status' => 1]) }}" onclick="return confirm('确定禁用吗？')"><span style="color:red">{{__('words.disable')}}</span></a></li>
                                         @elseif($item->status == 1)
                                            <li><a href="{{ route('member.check', ['id' => $item->getKey(), 'status' => 0]) }}" onclick="return confirm('确定启用吗？')"><span style="color:green">{{__('words.enable')}}</span></a></li>
                                         @endif
                                        
                                    </ul>
                                </div>
                             </td>
                             <td>
                                 {{ $item->money }}
                             </td>
                             <td>
                                 {{ $item->real_name }}
                             </td>
                             <td>
                                 {{ $item->top_member->name or '已删除'}}
                             </td>
                             <td>
                                 {{ $item->phone }}/{{ $item->email }}
                             </td>
                             <td>
                                 {{ $item->created_at }}
                             </td>
                             <td>
                                 {!! \App\Models\Base::$MEMBER_STATUS_HTML[$item->status] !!}
                             </td>
                             <td>
                                    <a href="{{ route('member.edit', ['id' => $item->getKey()]) }}" class="btn btn-primary btn-xs">修改</a>
                                 {{--@if ($item->status == 0)--}}
                                    {{--<a href="{{ route('member.check', ['id' => $item->getKey(), 'status' => 1]) }}" class="btn btn-danger btn-xs" onclick="return confirm('确定禁用吗？')">禁用</a>--}}
                                 {{--@elseif($item->status == 1)--}}
                                     {{--<a href="{{ route('member.check', ['id' => $item->getKey(), 'status' => 0]) }}" class="btn btn-success btn-xs" onclick="return confirm('确定启用吗？')">启用</a>--}}
                                 {{--@endif--}}
                                 {{--<button class="btn btn-danger btn-xs"--}}
                                         {{--data-url="{{route('user.destroy', ['id' => $item->getKey()])}}"--}}
                                         {{--data-toggle="modal"--}}
                                         {{--data-target="#delete-modal"--}}
                                 {{-->--}}
                                     {{--删除--}}
                                 {{--</button>--}}
                             </td>
                         </tr>
                     @endforeach
                 </table>
                 <div class="clearfix">
                     <div class="pull-left" style="margin: 0;">
                         <p>{{__('words.total')}} <strong style="color: red">{{ $data->total() }}</strong> {{__('words.article')}}</p>
                     </div>
                     <div class="pull-right" style="margin: 0;">
                         {!! $data->appends(['name' => $name, 'status' => $status, 'top_id' => $top_id])->links() !!}
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