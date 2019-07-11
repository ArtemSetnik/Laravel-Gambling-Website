<?php

namespace App\Http\Controllers\Admin;

use App\Models\Red;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class RedController extends AdminBaseController
{
    public function index(Request $request)
    {
        $mod = new Red();

        $data = $mod->orderBy('sort', 'asc')->paginate(config('admin.page-size'));

        return view('admin.red.index', compact('data'));
    }

    public function create()
    {
        return view('admin.red.create');
    }

    public function store(Request $request)
    {
        $validator = $this->verify($request, 'red.store');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }

        $data = $request->all();

        Red::create($data);

        return responseSuccess('', '', route('red.index'));

    }

    public function edit($id)
    {
        $data = Red::findOrFail($id);

        return view('admin.red.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $validator = $this->verify($request, 'red.store');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }
        $data = $request->all();

        $mod = Red::findOrFail($id);

        $mod->update($data);

        return responseSuccess('', '', route('red.index'));

    }

    public function destroy($id)
    {
        Red::destroy($id);

        return respS();
    }
    public function check($id, $status)
    {
        $mod = Red::findOrFail($id);


        $mod->update([
            'on_line' => $status
        ]);

        return respS();
    }
}
