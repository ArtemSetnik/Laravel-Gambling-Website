<?php

namespace App\Http\Controllers\Daili;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Drawing;
use App\Models\Member;
class MemberOfflineDrawingController extends DailiBaseController
{
    public function index(Request $request)
    {
        $mod = new Drawing();

        $status  = $start_at = $end_at =  $name = '';

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
        $total_counter_fee = $mod->sum('counter_fee');

        $data = $mod->orderBy('created_at', 'desc')->paginate(config('admin.page-size'));

        return view('daili.member_offline_drawing.index', compact('data', 'status','total_money', 'total_counter_fee', 'start_at', 'end_at', 'name'));
    }
}
