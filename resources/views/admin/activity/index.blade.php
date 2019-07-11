@extends('admin.layouts.main')
@section('content')
     <section class="content">
         <div class="panel panel-primary">
             <div class="panel-heading">
                 <h3 class="panel-title">{{__('words.events_list')}}</h3>
             </div>
             <div class="panel-body">
                 @include('admin.activity.filter')
                 <table class="table table-bordered table-hover text-center">
                     <tr>
                         <th style="width: 10%">ID</th>
                         <th class="text-center">{{__('words.Event_title')}}</th>
                         <th  style="width: 20%">{{__('words.Activity_start_time')}}</th>
                         <th  style="width: 20%">{{__('words.Activity_deadline')}}</th>
                         <th  style="width: 5%">{{__('words.Sort')}}</th>
                         <th style="width: 10%">{{__('words.Online/offline')}}</th>
                         <th  style="width: 20%">{{__('words.operating')}}</th>
                     </tr>
                     @foreach($data as $item)
                         <tr>
                             <td>
                                 {{ $item->id }}
                             </td>
                             <td>
                                 {{ $item->title }}
                             </td>
                             <td>
                                 {{ $item->start_at }}
                             </td>
                             <td>
                                 {{ $item->end_at }}
                             </td>
                             <td>
                                 {{ $item->sort }}
                             </td>
                             <td>
                                @if(strpos(\App\Models\Base::$ON_LINE_HTML[$item->on_line], "上线") !== false)
                                    <span style="color:green">{{__('words.online')}}</span>
                                @else
                                    <span style="color:red">{{__('words.offline')}}</span>
                                @endif
                             </td>
                             <td>
                                 @if ($item->on_line == 0)
                                     <a href="{{ route('activity.check', ['id' => $item->getKey(), 'status' => 1]) }}" class="btn btn-danger btn-xs" onclick="return confirm('确定下线吗？')">{{__('words.offline')}}</a>
                                 @elseif($item->on_line == 1)
                                     <a href="{{ route('activity.check', ['id' => $item->getKey(), 'status' => 0]) }}" class="btn btn-success btn-xs" onclick="return confirm('确定上线吗？')">{{__('words.online')}}</a>
                                 @endif
                                 <a href="{{ route('activity.edit', ['id' => $item->getKey()]) }}" class="btn btn-primary btn-xs">{{__('words.modify')}}</a>
                                 <button class="btn btn-danger btn-xs"
                                         data-url="{{route('activity.destroy', ['id' => $item->getKey()])}}"
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
                         <p>{{__('words.Total')}} <strong style="color: red">{{ $data->total() }}</strong> {{__('words.article')}}</p>
                     </div>
                 <div class="pull-right" style="margin: 0;">
                     {!! $data->appends(['title' => $title, 'start_at' => $start_at, 'end_at' => $end_at])->links() !!}
                 </div>
                 </div>
             </div>
         </div>

     </section><!-- /.content -->
@endsection
@section("after.js")
     @include('admin.layouts.delete',['title'=>'操作提示','content'=>'你确定要删除这个活动吗?'])
@endsection