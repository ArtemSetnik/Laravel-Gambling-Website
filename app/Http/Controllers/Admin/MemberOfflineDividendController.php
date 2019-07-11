<?php

namespace App\Http\Controllers\Admin;

use App\Models\Dividend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Member;
class MemberOfflineDividendController extends Controller
{
    public function index(Request $request)
    {
        $mod = new Dividend();

        $status = $top_id = $type = $start_at = $end_at = '';
        if ($request->has('top_id'))
        {
            $top_id = $request->get('top_id');
            $m_list = Member::where('top_id', $top_id)->pluck('id');
            $mod = $mod->whereIn('member_id', $m_list);
        }

        if ($request->has('type'))
        {
            $type = $request->get('type');
            $mod = $mod->where('type', $type);
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

        return view('admin.member_offline_dividend.index', compact('data', 'status', 'top_id','total_money', 'type', 'start_at', 'end_at'));
    }
}
