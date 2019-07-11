<?php

namespace App\Http\Controllers\Daili;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Recharge;
class MemberOfflineRechargeController extends DailiBaseController
{
    public function index(Request $request)
    {
        $mod = new Recharge();

        $status = $payment_type =  $start_at = $end_at = $name = '';

        if ($request->has('name'))
        {
            $name = $request->get('name');
            $m_list = Member::where('name', 'LIKE', "%$name%")->pluck('id')->toArray();
            $mod = $mod->whereIn('member_id', $m_list);
        }

        if ($request->has('status'))
        {
            $status = $request->get('status');
            $mod = $mod->where('status', $status);
        }

        if ($request->has('payment_type'))
        {
            $payment_type = $request->get('payment_type');
            $mod = $mod->where('payment_type', $payment_type);
        }
        if ($request->has('start_at'))
        {
            $start_at = $request->get('start_at');
            $mod = $mod->where('created_at', '>=', $start_at);
        }
        if ($request->has('end_at'))
        {
            $end_at = $request->get('end_at');
            $mod = $mod->where('created_at', '<=',$end_at);
        }

        $m_list = Member::where('top_id', $this->getDaili()->id)->pluck('id');
        $mod = $mod->whereIn('member_id', $m_list);

        $total_money = $mod->sum('money');
        $total_diff_money = $mod->sum('diff_money');

        $data = $mod->orderBy('created_at', 'desc')->paginate(config('admin.page-size'));

        return view('daili.member_offline_recharge.index', compact('data', 'status', 'payment_type', 'total_money', 'total_diff_money', 'start_at', 'end_at', 'name'));
    }
}
