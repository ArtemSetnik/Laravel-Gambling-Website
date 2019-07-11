<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\RoleRouter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class RoleController extends AdminBaseController
{
    public function index(Request $request)
    {
        $mod = new Role();

        $data = $mod->orderBy('created_at', 'desc')->paginate(config('admin.page-size'));

        return view('admin.role.index', compact('data'));
    }

    public function create()
    {
        return view('admin.role.create');
    }

    public function store(Request $request)
    {
        $validator = $this->verify($request, 'role.store');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }

        $data = $request->all();

        if (Role::where('name', $data['name'])->first())
            return responseWrong('已存在角色名称');

        Role::create($data);

        return responseSuccess('', '', route('role.index'));

    }

    public function edit($id)
    {
        $data = Role::findOrFail($id);

        return view('admin.role.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $validator = $this->verify($request, 'role.store');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }
        $data = $request->all();

        if (Role::where('name', $data['name'])->where('id', '!=', $id)->first())
            return responseWrong('已存在角色名称');

        $mod = Role::findOrFail($id);

        $mod->update($data);

        return responseSuccess('', '', route('role.index'));

    }

    public function showRelation($id)
    {
        $data = Role::findOrFail($id);
        return view('admin.role.relation', compact('data'));
    }

    public function relation(Request $request, $id)
    {
//        $validator = $this->verify($request, 'role.relation');
//
//        if ($validator->fails())
//        {
//            $messages = $validator->messages()->toArray();
//            return responseWrong($messages);
//        }
        $data = $request->all();

        $mod = Role::findOrFail($id);

        if (isset($data['routers']) && !empty(array_filter($data['routers'])))
        {
            $mod->routers()->delete();
            foreach (array_filter($data['routers']) as $v)
            {
                RoleRouter::create([
                    'role_id' => $mod->id,
                    'router' => $v
                ]);
            }
        }

        return responseSuccess('', '');
    }

    public function destroy($id)
    {
        Role::destroy($id);

        return respS();
    }
}
