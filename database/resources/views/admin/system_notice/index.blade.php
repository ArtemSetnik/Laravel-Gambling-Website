@extends('admin.layouts.main')
@section('content')
     <section class="content">
         <div class="panel panel-primary">
             <div class="panel-heading">
                 <h3 class="panel-title">{{ __('words.system_announcement_list') }}</h3>
             </div>
             <div class="panel-body">
                 @include('admin.system_notice.filter')
                 <h3 style="color: red" class="text-center"> {{ __('words.system_announcement_list') }}</h3>
                 <table class="table table-bordered table-hover text-center">
                     <tr>
                         <th style="width: 5%">ID</th>
                         <th style="width: 10%">{{ __('words.title') }}</th>
                         <th>{{ __('words.content') }}</th>
                         <th style="width: 5%">{{ __('words.sort') }}</th>
                         <th style="width: 10%">{{ __('words.online_offline') }}</th>
                         <th  style="width: 15%">{{ __('words.creation_time') }}</th>
                         <th  style="width: 15%">{{ __('words.last_update_time') }}</th>
                         <th  style="width: 15%">{{ __('words.operating') }}</th>
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
                                 {{ $item->content }}
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
                                 {{ $item->created_at }}
                             </td>
                             <td>
                                 {{ $item->updated_at }}
                             </td>
                             <td>
                                 @if ($item->on_line == 0)
                                     <a href="{{ route('system_notice.check', ['id' => $item->getKey(), 'status' => 1]) }}" class="btn btn-danger btn-xs" onclick="return confirm('<?php echo trans('words.are_you_sure_offline') ?>')">{{ __('words.offline') }}</a>
                                 @elseif($item->on_line == 1)
                                     <a href="{{ route('system_notice.check', ['id' => $item->getKey(), 'status' => 0]) }}" class="btn btn-success btn-xs" onclick="return confirm('<?php echo trans('words.are_you_sure_online') ?>')">{{ __('words.online') }}</a>
                                 @endif
                                 <a href="{{ route('system_notice.edit', ['id' => $item->getKey()]) }}" class="btn btn-primary btn-xs">{{ __('words.modify') }}</a>
                                 <button class="btn btn-danger btn-xs"
                                         data-url="{{route('system_notice.destroy', ['id' => $item->getKey()])}}"
                                         data-toggle="modal"
                                         data-target="#delete-modal"
                                 >
                                     {{ __('words.delete') }}
                                 </button>
                             </td>
                         </tr>
                     @endforeach
                 </table>
                 <div class="clearfix">
                     <div class="pull-left" style="margin: 0;">
                         <p>{{ __('words.total') }} <strong style="color: red">{{ $data->total() }}</strong> {{ __('words.article') }}</p>
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
     @include('admin.layouts.delete',['title'=>'操作提示','content'=>'你确定要删除这个系统公告吗?'])
@endsection