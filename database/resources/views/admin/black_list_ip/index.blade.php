@extends('admin.layouts.main')
@section('content')
     <section class="content">
         <div class="panel panel-primary">
             <div class="panel-heading">
                 <h3 class="panel-title">{{__('words.Blacklist_IP_list')}}</h3>
             </div>
             <div class="panel-body">
                 @include('admin.black_list_ip.filter')

                 <table class="table table-bordered table-hover text-center">
                     <tr>
                         <th style="width: 10%">ID</th>
                         <th style="width: 20%">IP{{__('words.address')}}</th>
                         <th >{{__('words.Remarks')}}</th>
                         <th  style="width: 15%">{{__('words.add_time')}}</th>
                         <th  style="width: 15%">{{__('words.Last_update_time')}}</th>
                         <th  style="width: 15%">{{__('words.operating')}}</th>
                     </tr>
                     @foreach($data as $item)
                         <tr>
                             <td>
                                 {{ $item->id }}
                             </td>
                             <td>
                                 {{ $item->ip }}
                             </td>
                             <td>
                                 {{ $item->remark }}
                             </td>
                             <td>
                                 {{ $item->created_at }}
                             </td>
                             <td>
                                 {{ $item->updated_at }}
                             </td>
                             <td>

                                 <a href="{{ route('black_list_ip.edit', ['id' => $item->getKey()]) }}" class="btn btn-primary btn-xs">{{__('words.modify')}}</a>
                                 <button class="btn btn-danger btn-xs"
                                         data-url="{{route('black_list_ip.destroy', ['id' => $item->getKey()])}}"
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
                         <p>{{__('words.Total')}} <strong style="color: red">{{ $data->total() }}</strong>{{__('words.article')}} </p>
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
     @include('admin.layouts.delete',['title'=>'操作提示','content'=>'你确定要删除这个IP吗?'])
@endsection