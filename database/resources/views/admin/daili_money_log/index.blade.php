@extends('admin.layouts.main')
@section('content')
     <section class="content">
         <div class="panel panel-primary">
             <div class="panel-heading">
                 <h3 class="panel-title">{{ __('words.maid_put_records') }}</h3>
             </div>
             <div class="panel-body">
                 @include('admin.daili_money_log.filter')

                 <table class="table table-bordered table-hover text-center">
                     <tr>
                         <th style="width: 5%">ID</th>
                         <th>{{ __('words.proxy_name') }}</th>
                         <th style="width: 10%">{{ __('words.profitability') }}</th>
                         <th style="width: 10%">{{ __('words.commission_amount') }}</th>
                         <th style="width: 15%">{{ __('words.remarks') }}</th>
                         <th style="width: 15%">{{ __('words.final_commission_month') }}</th>
                         <th style="width: 15%">{{ __('words.sending_time') }}</th>
                     </tr>
                     @foreach($data as $item)
                         <tr>
                             <td>
                                 {{ $item->id }}
                             </td>
                             <td>
                                 {{ $item->member->name }}
                             </td>
                             <td>
                                 {{ $item->yl_money }}
                             </td>
                             <td>
                                 {{ $item->money }}
                             </td>
                             <td>
                                 {{ $item->remark }}
                             </td>
                             <td>
                                 {{ $item->last_month }}月
                             </td>
                             <td>
                                 {{ $item->created_at }}
                             </td>
                         </tr>
                     @endforeach
                     <tfoot>
                     <tr>
                         <td><strong style="color: red">{{ __('words.total') }}</strong></td>
                         <td></td>
                         <td><strong style="color: red">{{ $total_yl_money }}</strong></td>
                         <td><strong style="color: red">{{ $total_money }}</strong></td>
                         <td colspan="3"></td>
                     </tr>
                     </tfoot>
                 </table>
                 <div class="clearfix">
                     <div class="pull-left" style="margin: 0;">
                         <p>{{ __('words.total') }} <strong style="color: red">{{ $data->total() }}</strong> {{ __('words.article') }}</p>
                     </div>
                 <div class="pull-right" style="margin: 0;">
                    {!! $data->appends(['member_id' => $member_id])->links() !!}
                 </div>
                 </div>

             </div>
         </div>

     </section><!-- /.content -->
@endsection