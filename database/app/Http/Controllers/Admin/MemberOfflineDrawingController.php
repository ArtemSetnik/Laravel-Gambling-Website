<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Drawing;
use App\Models\Member;
class MemberOfflineDrawingController extends Controller
{
    public function index(Request $request)
    {
        $mod = new Drawing();

        $status = $top_id = $start_at = $end_at =  '';
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
        $total_counter_fee = $mod->sum('counter_fee');

        return view('admin.member_offline_drawing.index', compact('data', 'status', 'top_id','total_money', 'total_counter_fee', 'start_at', 'end_at'));
    }
}
