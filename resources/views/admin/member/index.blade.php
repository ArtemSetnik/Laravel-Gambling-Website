@extends('admin.layouts.main')
@section('content')

     <section class="content">
         <div class="panel panel-primary">
             <div class="panel-heading">
                 <h3 class="panel-title">{{__('words.member_list')}}</h3>
             </div>
             <div class="panel-body">
                 @include('admin.member.filter')

                 <table class="table table-bordered table-hover text-center">
                     <tr>
                         <th style="width: 2%">ID</th>
                         <th class="text-center">{{__('words.username')}}</th>
                         <th  style="width: 8%">{{__('words.central_account')}}</th>
                         {{--<th  style="width: 8%">红利账户</th>--}}
                         <th  style="width: 8%">{{__('words.actual_name')}}</th>
                         <th  style="width: 10%">{{__('words.agent_superior')}}</th>
                         <th  style="width: 10%">{{__('words.mobile_email')}}</th>
                         <th  style="width: 10%">{{__('words.registered_IP')}}</th>
                         <th  style="width: 10%">{{__('words.registration_time')}}</th>
                         <th  style="width: 5%">{{__('words.status')}}</th>
                         <th  style="width: 5%">{{__('words.online')}}</th>
                         <th  style="width: 20%">{{__('words.operating')}}</th>
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
                                     <span style="color: red">{{__('words.yes')}}</span>
                                 @else
                                     <span>{{__('words.no')}}</span>
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
                                @if(strpos(\App\Models\Base::$MEMBER_STATUS_HTML[$item->status], "启用") !== false)
                                    <span style="color:green">{{__('words.enable')}}</span>
                                @else
                                    <span style="color:red">{{__('words.disable')}}</span>
                                @endif
                             </td>
                             <td>
                                 @if(in_array($item->id, $_online_member_array)) {{__('words.yes')}}  @else {{__('words.no')}} @endif
                             </td>
                             <td>
                                 <button type="button" data-uri="{{ route('member.checkBalance', ['id' => $item->getKey()]) }}" class="btn btn-info btn-xs show-cate">{{__('words.view')}}</button>
                                 <a href="{{ route('member.edit', ['id' => $item->getKey()]) }}" class="btn btn-primary btn-xs">{{__('words.modify')}}</a>
                                 <a href="{{ route('member.assign', ['id' => $item->getKey()]) }}" class="btn btn-warning btn-xs">{{__('words.distribution_agent')}}</a>
                             @if ($item->status == 0)
                                    <a href="{{ route('member.check', ['id' => $item->getKey(), 'status' => 1]) }}" class="btn btn-danger btn-xs" onclick="return confirm('确定禁用吗？')">{{__('words.disable')}}</a>
                                 @elseif($item->status == 1)
                                     <a href="{{ route('member.check', ['id' => $item->getKey(), 'status' => 0]) }}" class="btn btn-success btn-xs" onclick="return confirm('确定启用吗？')">{{__('words.enable')}}</a>
                                 @endif
                                 <button class="btn btn-danger btn-xs"
                                         data-url="{{route('member.destroy', ['id' => $item->getKey()])}}"
                                         data-toggle="modal"
                                         data-target="#delete-modal"
                                 >
                                     {{__('words.delete')}}
                                 </button>
                             </td>
                         </tr>
                     @endforeach
                 </table>
                 <div class="clearfix">
                     <div class="pull-left" style="margin: 0;">
                         <p>{{__('words.total')}} <strong style="color: red">{{ $data->total() }}</strong> {{__('words.article')}}</p>
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
                     title: "{{__('words.recording')}}",
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