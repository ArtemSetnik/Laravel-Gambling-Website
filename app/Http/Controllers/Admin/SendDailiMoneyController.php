<?php

namespace App\Http\Controllers\Admin;

use App\Models\DailiMoneyLog;
use Illuminate\Http\Request;
use App\Models\Member;
class SendDailiMoneyController extends AdminBaseController
{
    public function index(Request $request)
    {
        $member_id = $start_at = $end_at= '';

        $mod = new Member();
        if ($request->has('member_id'))
        {
            $member_id = $request->get('member_id');
            $mod = $mod->where('id', $member_id);
        }
        if ($request->has('start_at'))
        {
            $start_at = $request->get('start_at');
            //$mod = $mod->where('created_at', '>=', $start_at);
        }
        if ($request->has('end_at'))
        {
            $end_at = $request->get('end_at');
            //$mod = $mod->where('created_at', '<=',$end_at);
        }

        $data = $mod->where('is_daili', 1)->orderBy('created_at', 'desc')->paginate(config('admin.page-size'));

        return view('admin.send_daili_money.index', compact('data', 'member_id', 'start_at', 'end_at'));
    }

    public function store(Request $request)
    {
        $validator = $this->verify($request, 'send_daili_money.store');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }

        if (!$request->has('top_id'))
            return responseWrong('请选择代理');

        $data = $request->all();
        $month = date('m', strtotime('-1 month'));
        foreach ($data['top_id'] as $k => $item)
        {
            DailiMoneyLog::create([
                'member_id' => $item,
                'money' => $data['money'][$item],
                'yl_money' => $data['yl_money'][$item],
                'remark' => $data['remark'][$item],
                'last_month' =>$month
            ]);

            $member = Member::find($item);
            if ($member)
                $member->increment('money', $data['money'][$item]);
        }

        return responseSuccess();
    }
}
