<?php

namespace App\Http\Controllers\Admin;

use App\Models\AdminLoginLog;
use App\Models\Member;
use App\Models\MemberLoginLog;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminLoginLogController extends Controller
{
    public function index(Request $request)
    {
        $mod = new AdminLoginLog();
        $name = $start_at = $end_at = $ip = '';
        if ($request->has('name'))
        {
            $name = $request->get('name');
            $m_list = User::where('name', 'LIKE', "%$name%")->pluck('id');
            $mod = $mod->whereIn('member_id', $m_list);
        }
        if ($request->has('ip'))
        {
            $ip = $request->get('ip');
            $mod = $mod->where('ip', 'like', "%$ip%");
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

        return view('admin.admin_login_log.index', compact('data', 'name', 'start_at','end_at', 'ip'));
    }
}
