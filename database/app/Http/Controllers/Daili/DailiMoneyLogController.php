<?php

namespace App\Http\Controllers\Daili;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DailiMoneyLog;
class DailiMoneyLogController extends DailiBaseController
{
    public function index(Request $request)
    {
        $mod = new DailiMoneyLog();

        $mod = $mod->where('member_id', $this->getDaili()->id);
        $data = $mod->orderBy('created_at', 'desc')->paginate(config('admin.page-size'));

        $total_yl_money = $mod->sum('yl_money');
        $total_money = $mod->sum('money');

        return view('daili.daili_money_log.index', compact('data', 'total_yl_money', 'total_money'));
    }
}
