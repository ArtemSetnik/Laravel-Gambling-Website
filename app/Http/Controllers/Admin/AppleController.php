<?php

namespace App\Http\Controllers\Admin;

use App\Models\Api;
use Illuminate\Http\Request;
class AppleController extends AdminBaseController
{
    public function index(Request $request)
    {
        $type  = $request->get('type')?:5;
        $mod = new Api();

        $data = $mod->where('type', $type)->orderBy('sort', 'asc')->orderBy('id', 'asc')->paginate(100);

        return view('admin.api.index', compact('data', 'type'));
    }

    public function show($id)
    {
        $data = Api::findOrFail($id);

        return view('admin.api.show', compact('data'));
    }

    public function create(Request $request)
    {
        $type= $request->get('type')?:1;
        return view('admin.api.create', compact('type'));
    }

    public function store(Request $request)
    {
        $validator = $this->verify($request, 'api.store');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }

        $data = $request->all();

        if (Api::where('type', $data['type'])->where('api_name', $data['api_name'])->first())
            return responseWrong('该类型下已存在该接口名称');

        Api::create($data);

        return responseSuccess('', '', route('apple.index').'?type='.$data['type']);

    }

    public function edit($id)
    {
        $data = Api::findOrFail($id);

        return view('admin.api.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {

        $validator = $this->verify($request, 'api.store');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }

        $data = $request->all();
        $mod = Api::findOrFail($id);

        if (Api::where('type', $mod->type)->where('api_name', $data['api_name'])->where('id', '!=', $id)->first())
            return responseWrong('该类型下已存在该接口名称');

        $mod->update($data);

        return responseSuccess('', '', route('apple.index').'?type='.$mod->type);

    }

    public function destroy($id)
    {
        Api::destroy($id);

        return respS();
    }

    public function check($id, $status)
    {
        $mod = Api::findOrFail($id);
        $m = Api::where('api_name', $mod->api_name)->where('on_line', 0)->first();
        if ($status == 0 && $m)
        {
            return respF('类型 '.$m->type.' 已存在该上线的接口');
        }


        $mod->update([
            'on_line' => $status
        ]);

        return respS();
    }
}
