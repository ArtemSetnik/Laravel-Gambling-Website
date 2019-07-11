<?php

namespace App\Http\Controllers\Admin;

use App\Models\AdminActionMoneyLog;
use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminActionMoneyLogController extends AdminBaseController
{
    public function index(Request $request)
    {
        $mod = new AdminActionMoneyLog();

        $name = $start_at = $end_at = '';

        if ($request->has('name'))
        {
            $name = $request->get('name');
            $m_list = Member::where('name', 'LIKE', "%$name%")->pluck('id')->toArray();
            $mod = $mod->whereIn('member_id', $m_list);
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

        return view('admin.admin_action_money_log.index', compact('data', 'name', 'start_at', 'end_at'));
    }
}
