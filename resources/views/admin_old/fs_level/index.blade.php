@extends('admin.layouts.main')
@section('content')
     <section class="content">
         <div class="panel panel-primary">
             <div class="panel-heading">
                 <h3 class="panel-title">{{__('words.Return_water_rating_list')}}</h3>
             </div>
             <div class="panel-body">
                 @include('admin.fs_level.filter')
                 <h3 style="color: red" class="text-center">{{__('words.When_returning_water_it_will_match')}} </h3>
                 <table class="table table-bordered table-hover text-center">
                     <tr>
                         <th style="width: 10%">ID</th>
                         <th class="text-center">{{__('words.return_level')}}</th>
                         <th  style="width: 10%">{{__('words.game_type')}}</th>
                         <th  style="width: 20%">{{__('words.Rank_name')}}</th>
                         <th  style="width: 20%">{{__('words.Amount')}}</th>
                         <th  style="width: 10%">{{__('words.Return_ratio')}}</th>
                         <th  style="width: 20%">{{__('words.operating')}}</th>
                     </tr>
                     @foreach($data as $item)
                         <tr>
                             <td>
                                 {{ $item->id }}
                             </td>
                             <td>
                                 {{ $item->level }}
                             </td>
                             <td>
                                 {{ config('platform.game_type')[$item->game_type] }}
                             </td>
                             <td>
                                 {{ $item->name }}
                             </td>
                             <td>
                                 {{ $item->quota }}
                             </td>
                             <td>
                                 {{ $item->rate }}%
                             </td>
                             <td>
                                 <a href="{{ route('fs_level.edit', ['id' => $item->getKey()]) }}" class="btn btn-primary btn-xs">{{__('words.modify')}}</a>
                                 <button class="btn btn-danger btn-xs"
                                         data-url="{{route('fs_level.destroy', ['id' => $item->getKey()])}}"
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
                     {!! $data->render() !!}
                 </div>
                 </div>
             </div>
         </div>

     </section><!-- /.content -->
@endsection
@section("after.js")
     @include('admin.layouts.delete',['title'=>'操作提示','content'=>'你确定要删除这个返水等级吗?'])
@endsection