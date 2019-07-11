@extends('admin.layouts.main')
@section('content')
     <section class="content">
         <div class="panel panel-primary">
             <div class="panel-heading">
                 <h3 class="panel-title">{{ __('words.about_us') }}</h3>
             </div>
             <div class="panel-body">
                 @include('admin.about.filter')
                 <table class="table table-bordered table-hover text-center">
                     <tr>
                         <th style="width: 10%">ID</th>
                         <th class="text-center">{{ __('words.title') }}</th>
                         <th  style="width: 20%">{{ __('words.types') }}</th>
                         <th  style="width: 20%">{{ __('words.operating') }}</th>
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
                                 {{ trans(config('platform.about_type')[$item->type]) }}
                             </td>
                             <td>
                                 {{--@if ($item->on_line == 0)--}}
                                     {{--<a href="{{ route('about.check', ['id' => $item->getKey(), 'status' => 1]) }}" class="btn btn-danger btn-xs" onclick="return confirm('确定下线吗？')">下线</a>--}}
                                 {{--@elseif($item->on_line == 1)--}}
                                     {{--<a href="{{ route('about.check', ['id' => $item->getKey(), 'status' => 0]) }}" class="btn btn-success btn-xs" onclick="return confirm('确定上线吗？')">上线</a>--}}
                                 {{--@endif--}}
                                 <a href="{{ route('about.edit', ['id' => $item->getKey()]) }}" class="btn btn-primary btn-xs">{{ __('words.modify') }}</a>
                                 {{--<button class="btn btn-danger btn-xs"--}}
                                         {{--data-url="{{route('about.destroy', ['id' => $item->getKey()])}}"--}}
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
                         <p>{{ __('words.total') }} <strong style="color: red">{{ $data->total() }}</strong> {{ __('words.article') }}</p>
                     </div>
                 <div class="pull-right" style="margin: 0;">
                     {!! $data->appends(['title' => $title, 'type' => $type])->links() !!}
                 </div>
                 </div>
             </div>
         </div>

     </section><!-- /.content -->
@endsection
@section("after.js")
     @include('admin.layouts.delete',['title'=>'操作提示','content'=>'你确定要删除这个活动吗?'])
@endsection