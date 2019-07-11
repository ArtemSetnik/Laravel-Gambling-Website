@extends('admin.layouts.main')
@section('content')
     <section class="content">
         <div class="panel panel-primary">
             <div class="panel-heading">
                 <h3 class="panel-title">{{__('words.Red_envelope_rating_list')}}</h3>
             </div>
             <div class="panel-body">
                 @include('admin.red.filter')
                 <h3 style="color: red" class="text-center"> {{__('words.When_you_grab_a_red_envelope_it_will_sort_according_to')}}&nbsp;&nbsp;{{__('words.Reverse_order')}}&nbsp;&nbsp;{{__('words.match')}}</h3>
                 <table class="table table-bordered table-hover text-center">
                     <tr>
                         <th style="width: 10%">ID</th>
                         <th class="text-center">{{__('words.Deposit_range')}}</th>
                         <th  style="width: 10%">{{__('words.Red_packet_times')}}</th>
                         <th  style="width: 20%">{{__('words.Red_envelope_amount_range')}}</th>
                         <th  style="width: 5%">{{__('words.Sort')}}</th>
                         <th  style="width: 20%">{{__('words.Last_update_time')}}</th>
                         <th  style="width: 5%">{{__('words.Online/offline')}}</th>
                         <th  style="width: 20%">{{__('words.operating')}}</th>
                     </tr>
                     @foreach($data as $item)
                         <tr>
                             <td>
                                 {{ $item->id }}
                             </td>
                             <td>
                                 {{ $item->min_amount }} -- {{ $item->max_amount }}
                             </td>
                             <td>
                                 {{ $item->times }}
                             </td>
                             <td>
                                 {{ $item->min_rate }}% -- {{ $item->max_rate }}%
                             </td>
                             <td>
                                 {{ $item->sort }}
                             </td>
                             <td>
                                 {{ $item->updated_at }}
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
                                     <a href="{{ route('red.check', ['id' => $item->getKey(), 'status' => 1]) }}" class="btn btn-danger btn-xs" onclick="return confirm('<?php echo trans('words.are_you_sure_offline') ?>')">{{__('words.Offline')}}</a>
                                 @elseif($item->on_line == 1)
                                     <a href="{{ route('red.check', ['id' => $item->getKey(), 'status' => 0]) }}" class="btn btn-success btn-xs" onclick="return confirm('<?php echo trans('words.are_you_sure_online') ?>')">{{__('words.online')}}</a>
                                 @endif
                                 <a href="{{ route('red.edit', ['id' => $item->getKey()]) }}" class="btn btn-primary btn-xs">{{__('words.modify')}}</a>
                                 {{--<button class="btn btn-danger btn-xs"--}}
                                         {{--data-url="{{route('red.destroy', ['id' => $item->getKey()])}}"--}}
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