@extends('admin.layouts.main')
@section('content')
     <section class="content">
         <div class="panel panel-primary">
             <div class="panel-heading">
                 <h3 class="panel-title">佣金发放记录</h3>
             </div>
             <div class="panel-body">
                 @include('admin.daili_money_log.filter')

                 <table class="table table-bordered table-hover text-center">
                     <tr>
                         <th style="width: 5%">ID</th>
                         <th>代理名称</th>
                         <th style="width: 10%">盈利情况</th>
                         <th style="width: 10%">佣金金额</th>
                         <th style="width: 15%">备注</th>
                         <th style="width: 15%">最后发放佣金月份</th>
                         <th style="width: 15%">发送时间</th>
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
                         <td><strong style="color: red">总合计</strong></td>
                         <td></td>
                         <td><strong style="color: red">{{ $total_yl_money }}</strong></td>
                         <td><strong style="color: red">{{ $total_money }}</strong></td>
                         <td colspan="3"></td>
                     </tr>
                     </tfoot>
                 </table>
                 <div class="clearfix">
                     <div class="pull-left" style="margin: 0;">
                         <p>总共 <strong style="color: red">{{ $data->total() }}</strong> 条</p>
                     </div>
                 <div class="pull-right" style="margin: 0;">
                    {!! $data->appends(['member_id' => $member_id])->links() !!}
                 </div>
                 </div>

             </div>
         </div>

     </section><!-- /.content -->
@endsection