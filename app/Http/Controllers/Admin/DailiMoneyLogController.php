<?php

namespace App\Http\Controllers\Admin;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DailiMoneyLog;
class DailiMoneyLogController extends Controller
{
    public function index(Request $request)
    {
        $mod = new DailiMoneyLog();
        $member_id = $type = $transfer_type = $transfer_in_account = $transfer_out_account = '';
        if ($request->has('member_id'))
        {
            $member_id = $request->get('member_id');
            $mod = $mod->where('member_id', $member_id);
        }

        $data = $mod->orderBy('created_at', 'desc')->paginate(config('admin.page-size'));

        $total_yl_money = $mod->sum('yl_money');
        $total_money = $mod->sum('money');

        return view('admin.daili_money_log.index', compact('data', 'member_id', 'total_yl_money', 'total_money'));
    }

    public function show_by_id($id)
    {
        $mod = DailiMoneyLog::where('member_id', $id);
        $data = $mod->orderBy('created_at', 'desc')->paginate(config('admin.page-size'));

        $total_yl_money = $mod->sum('yl_money');
        $total_money = $mod->sum('money');

        return view('admin.daili_money_log.show_by_id', compact('data', 'total_yl_money', 'total_money'));
    }
}
