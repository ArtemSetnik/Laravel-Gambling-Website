<?php

namespace App\Http\Controllers\Admin;

use App\Models\BlackListIp;
use Illuminate\Http\Request;
class BlackListIpController extends AdminBaseController
{
    public function index(Request $request)
    {
        $mod = new BlackListIp();

        $ip = '';

        if ($request->has('ip'))
        {
            $ip = $request->get('ip');
            $mod = $mod->where('ip', 'LIKE', "%$ip%");
        }

        $data = $mod->orderBy('created_at', 'desc')->paginate(config('admin.page-size'));

        return view('admin.black_list_ip.index', compact('data', 'ip'));
    }

    public function create()
    {
        return view('admin.black_list_ip.create');
    }

    public function store(Request $request)
    {
        $validator = $this->verify($request, 'black_list_ip.store');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }

        $data = $request->all();

        BlackListIp::create($data);

        return responseSuccess('', '', route('black_list_ip.index'));

    }

    public function edit($id)
    {
        $data = BlackListIp::findOrFail($id);

        return view('admin.black_list_ip.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $validator = $this->verify($request, 'black_list_ip.store');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }

        $mod = BlackListIp::findOrFail($id);

        $mod->update($request->all());

        return responseSuccess('', '', route('black_list_ip.index'));

    }

    public function destroy($id)
    {
        BlackListIp::destroy($id);

        return respS();
    }
}
