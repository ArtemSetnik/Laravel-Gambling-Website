<?php

namespace App\Http\Controllers\Daili;

use App\Http\Controllers\Daili\DailiBaseController;
use App\Models\Dividend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Member;
class MemberOfflineDividendController extends DailiBaseController
{
    public function index(Request $request)
    {
        $mod = new Dividend();

        $status = $type = $start_at = $end_at = $name = '';

        if ($request->has('name'))
        {
            $name = $request->get('name');
            $m_list = Member::where('name', 'LIKE', "%$name%")->pluck('id')->toArray();
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

        $m_list = Member::where('top_id', $this->getDaili()->id)->pluck('id');
        $mod = $mod->whereIn('member_id', $m_list);

        $total_money = $mod->sum('money');

        $data = $mod->orderBy('created_at', 'desc')->paginate(config('admin.page-size'));

        //return view('web.index');
        return view('daili.member_offline_dividend.index', compact('data', 'status','total_money', 'type', 'start_at', 'end_at', 'name'));
    }
}
