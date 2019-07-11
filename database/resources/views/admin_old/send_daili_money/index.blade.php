@extends('admin.layouts.main')
@section('content')
     <section class="content">
         <div class="panel panel-primary">
             <div class="panel-heading">
                 <h3 class="panel-title">佣金发放</h3>
             </div>
             <div class="panel-body">
                 @include('admin.send_daili_money.filter')

                 <form action="{{ route('send_daili_money.store') }}" method="post">
                 <table class="table table-bordered table-hover text-center">
                     <tr align="center" style="background:#3C4D82;color:#ffffff;">
                         <td colspan="19">代理财务报表</td>
                     </tr>
                     <tr align="center" style="background:#3C4D82;color:#ffffff;">
                         <td rowspan="2">代理账号</td>
                         <td rowspan="2">下线会员</td>
                         <td rowspan="2">下线余额</td>
                         <td colspan="2">常规存取款</td>
                         <td colspan="3">红利派送</td>
                         <td rowspan="2">其他情况</td>
                         <td rowspan="2">上次发放佣金时间</td>
                         <td rowspan="2">佣金金额</td>
                         <td rowspan="2">发放佣金备注</td>
                     </tr>
                     <tr align="center" style="background:#3C4D82;color:#ffffff;">
                         <td>存款</td>
                         <td>提款</td>
                         <td>汇款赠送</td>
                         <td>彩金派送</td>
                         <td>反水派送</td>
                     </tr>
                     @foreach($data as $item)
                         <?php
                            $m_list = $item->under_members()->pluck('id');
                            $recharge_mod = new \App\Models\Recharge();
                            $drawing_mod = new \App\Models\Drawing();
                            $dividend_mod = new \App\Models\Dividend();
                            if ($start_at)
                            {
                                $recharge_mod = $recharge_mod->where('confirm_at', '>=', $start_at);
                                $drawing_mod = $drawing_mod->where('confirm_at', '>=', $start_at);
                                $dividend_mod = $dividend_mod->where('created_at', '>=', $start_at);
                            }
                         if ($end_at)
                         {
                             $recharge_mod = $recharge_mod->where('confirm_at', '<=', $end_at);
                             $drawing_mod = $drawing_mod->where('confirm_at', '<=', $end_at);
                             $dividend_mod = $dividend_mod->where('created_at', '<=', $end_at);
                         }

                         $recharge_money = $recharge_mod->whereIn('member_id', $m_list)->where('status', 2)->sum('money');
                         $drawing_money = $drawing_mod->whereIn('member_id', $m_list)->where('status', 2)->sum('money');
                         $dividend_money_1 = $dividend_mod->whereIn('member_id', $m_list)->where('type', 1)->sum('money');
                         $dividend_money_2 = $dividend_mod->whereIn('member_id', $m_list)->where('type', 2)->sum('money');
                         $dividend_money_3 = $dividend_mod->whereIn('member_id', $m_list)->where('type', 3)->sum('money');

                         //总收益
                             $total_sy_money = $recharge_money - $drawing_money - $dividend_money_1 - $dividend_money_2 - $dividend_money_3;
                             //查询单个代理的活跃用户
                             //活跃用户月充值金额
                             $active_money = \App\Models\SystemConfig::findOrFail(1)->active_member_money;
                             $yj_level = \App\Models\YjLevel::orderBy('level', 'desc')->get();
                             //获取该代理下活跃用户总数
                            //$num = $recharge_mod->whereIn('member_id', $m_list)->select('sum(money) as user_count')->groupBy('member_id')->having('user_count', '>=', $active_money)->get();
                         $num = $recharge_mod->whereIn('member_id', $m_list)->select(\DB::raw('sum(money) as user_count'))->groupBy('member_id')->having('user_count', '>=', $active_money)->get();

                         $num = count($num);
                            $rate = 0;
                             foreach ($yj_level as $k => $v)
                             {
                                 if ($v->max > 0)
                                 {
                                     if ($num >= $v->num && $total_sy_money>=$v->min && $total_sy_money <= $v->max)
                                     {
                                         $rate = $v->rate;
                                         break;
                                     }
                                 } else {
                                     if ($num >= $v->num && $total_sy_money>=$v->min)
                                     {
                                         $rate = $v->rate;
                                         break;
                                     }
                                 }

                             }

                             //$num = $recharge_mod->whereIn('member_id', $m_list)->whereRaw('sum(money) > ?', [1000])->count();

                         ?>
                         <tr>
                             <td>
                                 <label>
                                     <input type="checkbox" name="top_id[]" value="{{ $item->id }}">{{ $item->name }}
                                     <input type="hidden" name="yl_money[{{ $item->id }}]" value="{{ $total_sy_money }}">
                                 </label>
                             </td>
                             <td>
                                 {{ $item->under_members()->count()}}
                             </td>
                             <td>
                                 {{ $item->under_members()->sum('money') }}
                             </td>
                             <td>
                                 {{ $recharge_money }}
                             </td>
                             <td>
                                 {{ $drawing_money }}
                             </td>
                             <td>
                                 {{ $dividend_money_1 }}
                             </td>
                             <td>
                                 {{ $dividend_money_2 }}
                             </td>
                             <td>
                                 {{ $dividend_money_3 }}
                             </td>
                             <td></td>
                             <td>{{ $item->daili_money_logs()->orderBy('created_at', 'desc')->first()->created_at or '无' }}</td>
                             <td>
                                 <input type="text" class="form-control" name="money[{{ $item->id }}]" value="{{ $total_sy_money*$rate/100 }}" style="max-width: 80px;">
                             </td>
                             <td>
                                 <button type="button" data-uri="{{ route('daili_money_log.show_by_id', ['id' => $item->id]) }}" class="btn btn-info btn-xs show-cate">记录</button>
                                 <textarea name="remark[{{ $item->id }}]"  rows="2" class="form-control"></textarea>
                             </td>
                         </tr>
                     @endforeach
                     <tfoot>
                        <tr>
                            <td colspan="12">
                                <button type="button" class="btn btn-primary btn-md submit-form-sync">发放佣金</button>
                            </td>
                        </tr>
                     </tfoot>
                 </table>
                 </form>
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
@section("after.js")
     <script>
         $(function(){
             $('.show-cate').click(function(){
                 var url = $(this).attr('data-uri');
                 layer.open({
                     type: 2,
                     title: '发放佣金记录表',
                     shadeClose: false,
                     shade: 0.8,
                     area: ['60%', '90%'],
                     content: url
                 });
             })
         });
     </script>
@endsection