@extends('daili.layouts.main')
@section('content')

     <section class="content">
         <div class="panel panel-primary">
             <div class="panel-heading">
                 <h3 class="panel-title">{{__('words.proxy_list')}}</h3>
             </div>
             <div class="panel-body">
                 {{--@include('daili.member_daili.filter')--}}

                 <table class="table table-bordered table-hover text-center">
                     <tr>
                         <th style="width: 10%">ID</th>
                         <th class="text-center">{{__('words.user_name')}}</th>
                         <th  style="width: 20%">{{__('words.real_name_register_time')}}</th>
                         <th  style="width: 10%">{{__('words.agent_superior')}}</th>
                         <th  style="width: 10%">{{__('words.mobile_email')}}</th>
                         <th  style="width: 10%">{{__('words.status')}}</th>
                         <th  style="width: 20%">{{__('words.Promotion_URL')}}</th>
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
                                 {{ $item->real_name }}<br>
                                 {{ $item->created_at }}
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
                                 {!! \App\Models\Base::$MEMBER_STATUS_HTML[$item->status] !!}
                             </td>
                             <td>

                                 @if($item->agent_uri)
                                     {{ $item->agent_uri }}
                                 @else
                                     {{ $_system_config->site_domain?'http://'.$_system_config->site_domain.'/r?i='.$item->invite_code :route('web.register_one').'?i='.$item->invite_code }}
                                 @endif
                             </td>
                         </tr>
                     @endforeach
                 </table>
                 <div class="clearfix">
                     <div class="pull-left" style="margin: 0;">
                         <p>{{__('words.total')}} <strong style="color: red">{{ $data->total() }}</strong>{{__('words.article')}} </p>
                     </div>
                 <div class="pull-right" style="margin: 0;">
                     {!! $data->render() !!}
                 </div>
                 </div>
             </div>
         </div>

     </section><!-- /.content -->
@endsection
@section("after.js")
     @include('admin.layouts.delete',['title'=>'操作提示','content'=>'你确定要删除这个用户吗?'])
@endsection