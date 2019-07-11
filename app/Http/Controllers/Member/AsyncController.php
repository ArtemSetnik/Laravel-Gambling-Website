<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Web\WebBaseController;
use App\Models\Dividend;
use App\Models\Drawing;
use App\Models\GameRecord;
use App\Models\MemberMessage;
use App\Models\Recharge;
use App\Models\Transfer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AsyncController extends WebBaseController
{
    //存款记录
    public function rechargeList(Request $request)
    {
        $mod = new Recharge();
        if ($request->has('start_at'))
        {
            $start_at = $request->get('start_at');
            $mod = $mod->where('hk_at', '>=', $start_at);
        }
        if ($request->has('end_at'))
        {
            $end_at = $request->get('end_at');
            $mod = $mod->where('hk_at', '<=', $end_at);
        }

        $data = $mod->where('member_id', $this->getMember()->id)->orderBy('created_at', 'desc')->paginate(config('web.page-size'));

        return $data;
    }

    //提款记录
    public function drawingList(Request $request)
    {
        $mod = new Drawing();
        if ($request->has('start_at'))
        {
            $start_at = $request->get('start_at');
            $mod = $mod->where('created_at', '>=', $start_at);
        }
        if ($request->has('end_at'))
        {
            $end_at = $request->get('end_at');
            $mod = $mod->where('created_at', '<=', $end_at);
        }

        $data = $mod->where('member_id', $this->getMember()->id)->orderBy('created_at', 'desc')->paginate(config('web.page-size'));

        return $data;
    }

    //额度转换记录
    public function transferList(Request $request)
    {
        $mod = new Transfer();
        if ($request->has('start_at'))
        {
            $start_at = $request->get('start_at');
            $mod = $mod->where('created_at', '>=', $start_at);
        }
        if ($request->has('end_at'))
        {
            $end_at = $request->get('end_at');
            $mod = $mod->where('created_at', '<=', $end_at);
        }

        $data = $mod->where('member_id', $this->getMember()->id)->orderBy('created_at', 'desc')->paginate(config('web.page-size'));

        return $data;
    }

    //
    public function gameRecordList(Request $request)
    {
        $mod = new GameRecord();
        if ($request->has('start_at'))
        {
            $start_at = $request->get('start_at');
            $mod = $mod->where('created_at', '>=', $start_at);
        }
        if ($request->has('end_at'))
        {
            $end_at = $request->get('end_at');
            $mod = $mod->where('created_at', '<=', $end_at);
        }

        $data = $mod->with('api')->where('member_id', $this->getMember()->id)->orderBy('created_at', 'desc')->paginate(config('web.page-size'));

        return $data;
    }

    //红利记录
    public function dividendList(Request $request)
    {
        $mod = new Dividend();
        if ($request->has('start_at'))
        {
            $start_at = $request->get('start_at');
            $mod = $mod->where('created_at', '>=', $start_at);
        }
        if ($request->has('end_at'))
        {
            $end_at = $request->get('end_at');
            $mod = $mod->where('created_at', '<=', $end_at);
        }

        $data = $mod->where('member_id', $this->getMember()->id)->orderBy('created_at', 'desc')->paginate(config('web.page-size'));

        return $data;
    }

    public function messageList()
    {
        $member = $this->getMember();

        $data = $member->messages()->orderBy('created_at', 'desc')->paginate(config('web.page-size'));
        //$data = MemberMessage::where('member_id', $this->getMember()->id)->orderBy('created_at', 'desc')->paginate(config('web.page-size'));

//        $items = [];
//        foreach ($data as $v)
//        {
//            $item['created_at'] = $v->created_at;
//            $item['title'] = $v->message->title;
//            $item['content'] = $v->message->content;
//            $items[] = $item;
//        }

        return $data;
    }
}
