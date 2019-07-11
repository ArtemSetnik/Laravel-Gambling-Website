<?php

namespace App\Http\Controllers\Admin;

use App\Models\SystemConfig;
use App\Models\Transfer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class MonitorController extends Controller
{
    public function index(Request $request)
    {
        $type = $request->get('type')?:1;
        $system_mod = SystemConfig::find(1);

        if ($type ==1)
        {
            $data = DB::table('member_login_log')
                ->select(DB::raw('count(distinct(member_id)) as user_count, ip'))
                ->groupBy('ip')
                ->orderBy('user_count', 'desc')
                ->get();
        }

        if ($type ==2)
        {
            $m = (int)$system_mod->big_amount;
            $data = Transfer::where('money', '>=', $m)->orderBy('created_at', 'desc')->paginate(10);
        }

        if ($type ==3)
        {
            $m = (int)$system_mod->transfer_times;
            $data = DB::table('transfers')
                ->leftJoin('members', 'members.id', '=', 'transfers.member_id')
                ->where('transfers.transfer_type', 1)
                ->where('transfers.created_at', '>=', date('Y-m-d'))
                ->where('transfers.created_at', '<=', date('Y-m-d 23:59:59'))
                ->select(DB::raw('count(transfers.member_id) as user_count, members.name as username'))
                ->havingRaw('count(transfers.member_id) > '.$m)
                ->get();
        }

        return view('admin.monitor.index', compact('data', 'type'));
    }
}
