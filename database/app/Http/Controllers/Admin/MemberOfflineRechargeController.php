<?php

namespace App\Http\Controllers\Admin;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Recharge;
class MemberOfflineRechargeController extends Controller
{
    public function index(Request $request)
    {
        $mod = new Recharge();

        $status = $payment_type = $top_id = $start_at = $end_at = '';

        if ($request->has('top_id'))
        {
            $top_id = $request->get('top_id');
            $m_list = Member::where('top_id', $top_id)->pluck('id');
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

        $data = $mod->orderBy('created_at', 'desc')->paginate(config('admin.page-size'));

        $total_money = $mod->sum('money');
        $total_diff_money = $mod->sum('diff_money');

        return view('admin.member_offline_recharge.index', compact('data', 'status', 'payment_type', 'top_id', 'total_money', 'total_diff_money', 'start_at', 'end_at'));
    }
}
