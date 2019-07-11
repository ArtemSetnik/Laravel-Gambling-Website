<?php

namespace App\Http\Controllers\Admin;

use App\Models\FsLevel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class FsLevelController extends AdminBaseController
{
    public function index(Request $request)
    {
        $mod = new FsLevel();

        $game_type = '';

        if ($request->has('game_type'))
        {
            $game_type = $request->get('game_type');
            $mod = $mod->where('game_type', $game_type);
        }

        $data = $mod->orderBy('level', 'asc')->paginate(config('admin.page-size'));

        return view('admin.fs_level.index', compact('data', 'game_type'));
    }

    public function create()
    {
        return view('admin.fs_level.create');
    }

    public function store(Request $request)
    {
        $validator = $this->verify($request, 'fs_level.store');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }

        $data = $request->all();

        if (FsLevel::where('level', $data['level'])->where('game_type', $data['game_type'])->first())
            return responseWrong('该游戏类型下已存在该等级的返水等级');

        FsLevel::create($data);

        return responseSuccess('', '', route('fs_level.index'));

    }

    public function edit($id)
    {
        $data = FsLevel::findOrFail($id);

        return view('admin.fs_level.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $validator = $this->verify($request, 'fs_level.store');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }
        $data = $request->all();

        if (FsLevel::where('level', $data['level'])->where('game_type', $data['game_type'])->where('id', '!=', $id)->first())
            return responseWrong('该游戏类型下已存在该等级的返水等级');

        $mod = FsLevel::findOrFail($id);

        $mod->update($data);

        return responseSuccess('', '', route('fs_level.index'));

    }

    public function destroy($id)
    {
        FsLevel::destroy($id);

        return respS();
    }
}
