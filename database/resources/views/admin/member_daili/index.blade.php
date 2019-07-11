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
                 <h3 class="panel-title">{{__('words.proxy_list')}}</h3>
             </div>
             <div class="panel-body">
                 @include('admin.member_daili.filter')

                 <table class="table table-bordered table-hover text-center">
                     <tr>
                         <th style="width: 6%">ID</th>
                         <th class="text-center" style="width: 14%">{{__('words.user_name')}}</th>
                         <th  style="width: 20%">{{__('words.real_name_register_time')}}</th>
                         <th  style="width: 10%">{{__('words.agent_superior')}}</th>
                         <th  style="width: 10%">{{__('words.mobile_email')}}</th>
                         <th  style="width: 10%">{{__('words.status')}}</th>
                         <th  style="width: 20%">{{__('words.proxy_link')}}</th>
                         <th  style="width: 20%">{{__('words.operating')}}</th>
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
                                            <li><a href="{{ route('member.check', ['id' => $item->getKey(), 'status' => 1]) }}" onclick="return confirm('确定禁用吗？')">{{__('words.disable')}}</a></li>
                                         @elseif($item->status == 1)
                                            <li><a href="{{ route('member.check', ['id' => $item->getKey(), 'status' => 0]) }}" onclick="return confirm('确定启用吗？')">{{__('words.enable')}}</a></li>
                                         @endif
                                        
                                    </ul>
                                </div>
                             </td>
                             <td>
                                 {{ $item->real_name }}<br>
                                 {{ $item->created_at }}
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
                                @if(strpos(\App\Models\Base::$MEMBER_STATUS_HTML[$item->status], "启用") !== false)
                                    <span style="color:green">{{__('words.enable')}}</span>
                                @else
                                    <span style="color:red">{{__('words.disable')}}</span>
                                @endif
                             </td>
                             <td>
                                 @if($item->agent_uri)
                                     {{ $item->agent_uri }}
                                 @else
                                     {{ $_system_config->site_domain?'http://'.$_system_config->site_domain.'/r?i='.$item->invite_code :route('web.register_one').'?i='.$item->invite_code }}
                                 @endif
                             </td>
                             <td>
                                 <a href="{{ route('member_daili.edit', ['id' => $item->getKey()]) }}" class="btn btn-primary btn-xs">{{__('words.modify')}}</a>
                                 <button class="btn btn-danger btn-xs"
                                         data-url="{{route('member_daili.destroy', ['id' => $item->getKey()])}}"
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
                     {!! $data->appends(['name' => $name])->links() !!}
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