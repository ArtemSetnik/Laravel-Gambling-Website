<?php

namespace App\Http\Controllers\Admin;

use App\Models\Dividend;
use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\GameRecord;
class SendFsController extends AdminBaseController
{

    public function index(Request $request)
    {
        $mod = new Member();
        $name = $api_type = '';
        $gameType = 1;//默认真人
        $start_at = date('Y-m-d', strtotime('-1 day'));
        $end_at = date('Y-m-d 23:59:59', strtotime('-1 day'));
        if ($request->has('api_type'))
        {
            $api_type = $request->get('api_type');
        }
        if ($request->has('gameType'))
        {
            $gameType = $request->get('gameType');
        }
        if ($request->has('name'))
        {
            $name = $request->get('name');
            $mod = $mod->where('name', 'like', "%$name%");
        }
        if ($request->has('start_at'))
        {
            $start_at = $request->get('start_at');
            //$mod = $mod->where('betAmount', '>=', $start_at);
        }
        if ($request->has('end_at'))
        {
            $end_at = $request->get('end_at');
            //$mod = $mod->where('betAmount', '<=',$end_at);
        }

        $m_list = GameRecord::where('gameType', $gameType)->where('betTime', '>=', $start_at)->where('betTime', '<=', $end_at)->where('isfs','=','0')->pluck('member_id')->toArray();
        $m_list = array_unique($m_list);
        $mod = $mod->whereIn('id', $m_list);
        //$data = $mod->orderBy('created_at', 'desc')->paginate(config('admin.page-size'));
        $data = $mod->orderBy('created_at', 'desc')->get();

        return view('admin.send_fs.index', compact('data', 'name', 'start_at', 'end_at', 'api_type','gameType'));
    }

    public function store(Request $request)
    {
        $validator = $this->verify($request, 'send_fs.store');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }

        $data = $request->all();

        //dd($data);
        foreach ($data['member_id'] as $k => $item)
        {
            $member = Member::find($item);

            if ($member){
                $member->increment('money', $data['money'][$item]);
                $array_gamebill = explode(',', $data['gamebillno'][$item]);
                foreach($array_gamebill as $id)
                {
                    if($id)
                    {
                        $mod = GameRecord::findOrFail($id);
                        $mod->update([
                            'isfs' => 1
                        ]);
                    }
                }
                Dividend::create([
                    'member_id' => $item,
                    'type' => 3,
                    'describe' => '返水',
                    'money' => $data['money'][$item],
                    'user_id' => \Auth::user()->id
                    //'remark' => $data['remark'][$item],
                ]);
            }

        }

        return responseSuccess();
    }
}
