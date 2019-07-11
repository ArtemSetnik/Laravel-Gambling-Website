<?php

namespace App\Http\Controllers\Daili;

use App\Http\Controllers\Daili\DailiBaseController;
use App\Services\SelfService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Member;
class MemberOfflineController extends DailiBaseController
{
    public function index(Request $request)
    {
        $mod = new Member();
        $name = $status = '';

        if ($request->has('name'))
        {
            $name = $request->get('name');
            $mod = $mod->where('name', 'like', "%$name%");
        }
        if ($request->has('status'))
        {
            $status = $request->get('status');
            $mod = $mod->where('status', $status);
        }

        $data = $mod->where('top_id', $this->getDaili()->id)->orderBy('created_at', 'desc')->paginate(config('admin.page-size'));
        foreach($data as $item){
            $money_obj = (new SelfService())->wallet_balance($item->name);
            $money = json_decode($money_obj,true);
            //print_r($money);
            $item->money = $item->money + $money['data'];
        }
        return view('daili.member_offline.index', compact('data', 'name', 'status'));
    }

    public function create()
    {
        return view('daili.member_offline.create');
    }

    public function store(Request $request)
    {
        $validator = $this->verify($request, 'member_offline.store');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }

        $daili = $this->getDaili();
        $data = $request->all();

        Member::create([
            'name' => $data['name'],
            'password' => 123456,
            'original_password' => substr(md5(md5($data['name'])), 0,10),
            'top_id' => $daili->id,
            'invite_code' => getRandom(7),
            'qk_pwd' => 123456
        ]);

        return responseSuccess('', '添加成功', route('daili.member_offline'));

    }
}
