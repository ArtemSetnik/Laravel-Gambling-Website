<?php

namespace App\Http\Controllers\Admin;

use App\Models\Member;
use App\Models\MemberMessage;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class MessageController extends AdminBaseController
{
    public function index(Request $request)
    {
        $mod = new Message();

        $title = '';
        if($request->has('title'))
        {
            $title = $request->get('title');
            $mod = $mod->where('title', 'LIKE', "%$title%");
        }

        $data = $mod->orderBy('created_at', 'desc')->paginate(config('admin.page-size'));

        return view('admin.message.index', compact('data', 'title'));
    }

    public function create()
    {
        return view('admin.message.create');
    }

    public function store(Request $request)
    {
        $validator = $this->verify($request, 'message.store');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }

        $data = $request->all();

        try{
            DB::transaction(function() use($data,$request) {

                $mod = Message::create($data);

                //所有用户
                if ($data['send_member'] == 1)
                {
                    foreach (Member::all() as $item)
                    {
                        MemberMessage::create([
                            'member_id' => $item->id,
                            'message_id' => $mod->id
                        ]);
                    }
                } elseif ($data['send_member'] == 2)
                {
                    foreach (Member::where('is_login', 1)->get() as $item)
                    {
                        MemberMessage::create([
                            'member_id' => $item->id,
                            'message_id' => $mod->id
                        ]);
                    }
                }


            });
        }catch(Exception $e){
            DB::rollback();
            return responseWrong('创建失败');
        }

        return responseSuccess('', '', route('message.index'));

    }

    public function edit($id)
    {
        $data = Message::findOrFail($id);

        return view('admin.message.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $validator = $this->verify($request, 'message.update');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }
        $data = $request->all();

        $mod = Message::findOrFail($id);

        $mod->update($data);

        return responseSuccess('', '', route('message.index'));

    }

    public function destroy($id)
    {
        Message::destroy($id);

        return respS();
    }
}
