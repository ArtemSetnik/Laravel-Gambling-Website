@extends('admin.layouts.main')
@section('content')
     <section class="content">
         <div class="panel panel-primary">
             <div class="panel-heading">
                 <h3 class="panel-title">{{ __('words.station_message_list') }}</h3>
             </div>
             <div class="panel-body">
                 @include('admin.message.filter')
                 <table class="table table-bordered table-hover text-center">
                     <tr>
                         <th style="width: 5%">ID</th>
                         <th style="width: 10%">{{ __('words.title') }}</th>
                         <th>{{ __('words.content') }}</th>
                         <th  style="width: 15%">{{ __('words.creation_time') }}</th>
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
                                 {{ $item->created_at }}
                             </td>
                             <td>
                                 <a href="{{ route('message.edit', ['id' => $item->getKey()]) }}" class="btn btn-primary btn-xs">{{ __('words.station_message_list') }}{{ __('words.modify') }}</a>
                                 <button class="btn btn-danger btn-xs"
                                         data-url="{{route('message.destroy', ['id' => $item->getKey()])}}"
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
                     {!! $data->appends(['title' => $title])->links() !!}
                 </div>
                 </div>
             </div>
         </div>

     </section><!-- /.content -->
@endsection
@section("after.js")
     @include('admin.layouts.delete',['title'=>'操作提示','content'=>'你确定要删除这条站内消息吗?'])
@endsection