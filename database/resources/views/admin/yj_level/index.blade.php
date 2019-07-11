@extends('admin.layouts.main')
@section('content')
     <section class="content">
         <div class="panel panel-primary">
             <div class="panel-heading">
                 <h3 class="panel-title">{{ __('words.list_of_commission_levels') }}</h3>
             </div>
             <div class="panel-body">
                 @include('admin.yj_level.filter')
                 <h3 style="color: red" class="text-center"> {{ __('words.commission_level_notice') }}</h3>
                 <table class="table table-bordered table-hover text-center">
                     <tr>
                         <th style="width: 10%">ID</th>
                         <th style="width: 10%">{{ __('words.commission_level') }}</th>
                         <th style="width: 10%">{{ __('words.rank_name') }}</th>
                         <th>{{ __('words.create_revenue_range') }}</th>
                         <th style="width: 10%">{{ __('words.commission_rate') }}</th>
                         <th style="width: 20%">{{ __('words.operating') }}</th>
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
                                 {{ $item->name }}
                             </td>
                             <td>
                                 {{ $item->min }} -- {{ $item->max }}
                             </td>
                             <td>
                                 {{ $item->rate }}%
                             </td>
                             <td>
                                 <a href="{{ route('yj_level.edit', ['id' => $item->getKey()]) }}" class="btn btn-primary btn-xs">{{ __('words.modify') }}</a>
                                 <button class="btn btn-danger btn-xs"
                                         data-url="{{route('yj_level.destroy', ['id' => $item->getKey()])}}"
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
     @include('admin.layouts.delete',['title'=>'操作提示','content'=>'你确定要删除这个佣金等级吗?'])
@endsection