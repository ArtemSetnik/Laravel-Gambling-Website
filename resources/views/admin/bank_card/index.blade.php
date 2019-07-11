@extends('admin.layouts.main')
@section('content')
     <section class="content">
         <div class="panel panel-primary">
             <div class="panel-heading">
                 <h3 class="panel-title">{{__('words.Bank_card_list')}}</h3>
             </div>
             <div class="panel-body">
                 @include('admin.bank_card.filter')
                 <table class="table table-bordered table-hover text-center">
                     <tr>
                         <th style="width: 10%">ID</th>
                         <th>{{__('words.Cardholder_Name')}}</th>
                         <th  style="width: 10%">{{__('words.Bank')}}</th>
                         <th  style="width: 20%">{{__('words.Account_bank_account')}}</th>
                         <th  style="width: 10%">{{__('words.Account_opening')}}</th>
                         <th style="width: 10%">{{__('words.Online/offline')}}</th>
                         <th  style="width: 15%">{{__('words.add_time')}}</th>
                         <th  style="width: 10%">{{__('words.operating')}}</th>
                     </tr>
                     @foreach($data as $item)
                         <tr>
                             <td>
                                 {{ $item->id }}
                             </td>
                             <td>
                                 {{ $item->username }}
                             </td>
                             <td>
                                 {{ \App\Models\Base::$BANK_TYPE[$item->bank_id] }}
                             </td>
                             <td>
                                 {{ $item->card_no }}
                             </td>
                             <td>
                                 {{ $item->bank_address }}
                             </td>
                             <td>
                                 {!! \App\Models\Base::$ON_LINE_HTML[$item->on_line] !!}
                             </td>
                             <td>
                                 {{ $item->created_at }}
                             </td>
                             <td>
                                 @if ($item->on_line == 0)
                                     <a href="{{ route('bank_card.check', ['id' => $item->getKey(), 'status' => 1]) }}" class="btn btn-danger btn-xs" onclick="return confirm( {{__('words.are_you_sure_offline')}} )">{{__('words.Offline')}}</a>
                                 @elseif($item->on_line == 1)
                                     <a href="{{ route('bank_card.check', ['id' => $item->getKey(), 'status' => 0]) }}" class="btn btn-success btn-xs" onclick="return confirm('确定上线吗？')">{{__('words.online')}}</a>
                                 @endif
                                 <a href="{{ route('bank_card.edit', ['id' => $item->getKey()]) }}" class="btn btn-primary btn-xs">{{__('words.modify')}}</a>
                                 <button class="btn btn-danger btn-xs"
                                         data-url="{{route('bank_card.destroy', ['id' => $item->getKey()])}}"
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
     @include('admin.layouts.delete',['title'=>'操作提示','content'=>'你确定要删除这张卡吗?'])
@endsection