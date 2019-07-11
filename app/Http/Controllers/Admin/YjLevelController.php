<?php

namespace App\Http\Controllers\Admin;

use App\Models\YjLevel;
use Illuminate\Http\Request;
class YjLevelController extends AdminBaseController
{
    public function index(Request $request)
    {
        $mod = new YjLevel();

        $data = $mod->orderBy('level', 'asc')->paginate(config('admin.page-size'));

        return view('admin.yj_level.index', compact('data'));
    }

    public function create()
    {
        return view('admin.yj_level.create');
    }

    public function store(Request $request)
    {
        $validator = $this->verify($request, 'yj_level.store');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }

        $data = $request->all();

        if (YjLevel::where('level', $data['level'])->first())
            return responseWrong('已存在该等级的佣金等级');

        if (isset($data['max']) && $data['max'] < $data['min'])
            return responseWrong('上限金额不能小于下限金额');

        YjLevel::create($data);

        return responseSuccess('', '', route('yj_level.index'));

    }

    public function edit($id)
    {
        $data = YjLevel::findOrFail($id);

        return view('admin.yj_level.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $validator = $this->verify($request, 'yj_level.store');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }

        $data = $request->all();

        $mod = YjLevel::findOrFail($id);

        if (YjLevel::where('level', $data['level'])->where('id', '!=', $id)->first())
            return responseWrong('已存在该等级的佣金等级');

        if (isset($data['max']) && $data['max'] < $data['min'])
            return responseWrong('上限金额不能小于下限金额');

        $mod->update($data);

        return responseSuccess('', '', route('yj_level.index'));

    }

    public function destroy($id)
    {
        YjLevel::destroy($id);

        return respS();
    }
}
