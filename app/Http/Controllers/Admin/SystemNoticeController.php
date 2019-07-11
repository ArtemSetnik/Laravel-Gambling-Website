<?php

namespace App\Http\Controllers\Admin;

use App\Models\SystemNotice;
use Illuminate\Http\Request;
class SystemNoticeController extends AdminBaseController
{
    public function index(Request $request)
    {
        $mod = new SystemNotice();

        $data = $mod->orderBy('created_at', 'desc')->paginate(config('admin.page-size'));

        return view('admin.system_notice.index', compact('data'));
    }

    public function create()
    {
        return view('admin.system_notice.create');
    }

    public function store(Request $request)
    {
        $validator = $this->verify($request, 'system_notice.store');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }

        $data = $request->all();

        SystemNotice::create($data);

        return responseSuccess('', '', route('system_notice.index'));

    }

    public function edit($id)
    {
        $data = SystemNotice::findOrFail($id);

        return view('admin.system_notice.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $validator = $this->verify($request, 'system_notice.store');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }

        $mod = SystemNotice::findOrFail($id);

        $mod->update($request->all());

        return responseSuccess('', '', route('system_notice.index'));

    }

    public function destroy($id)
    {
        SystemNotice::destroy($id);

        return respS();
    }

    public function check($id, $status)
    {
        $mod = SystemNotice::findOrFail($id);
        $mod->update([
            'on_line' => $status
        ]);

        return respS();
    }
}
