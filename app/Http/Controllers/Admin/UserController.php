<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
class UserController extends AdminBaseController
{
    public function index(Request $request)
    {
        $mod = new User();
        $name = $role_id = '';
        if ($request->has('name'))
        {
            $name = $request->get('name');
            $mod = $mod->where('name', 'like', "%$name%");
        }
        if ($request->has('role_id'))
        {
            $role_id = $request->get('role_id');
            $mod = $mod->where('role_id', $role_id);
        }

        //默认不显示超级管理员
        $data = $mod->where('is_super_admin', 0)->paginate(config('admin.page-size'));
        $role_list = Role::pluck('name', 'id');

        return view('admin.user.index', compact('data', 'name', 'role_id','role_list'));
    }

    public function export(Request $request)
    {
        $map = [];
        if ($request->has('name'))
        {
            $name = $request->get('name');
            $map['name'] = ['name', 'like', "%$name%"];
        }

        if ($request->has('realname'))
        {
            $realname = $request->get('realname');
            $map['realname'] = ['realname', 'like', "%$realname%"];
        }

        //默认不显示超级管理员
        $map['is_super_admin'] = 0;
        $data = UserRepository::getByWhere($map)->toArray();

        Excel::create('测试', function ($excel) use ($data) {
            $excel->sheet('Sheetname', function ($sheet) use ($data) {
                $sheet->rows(
                    $data
                );
            });
        })->download('xls');
    }

    public function create()
    {
        $role_list = Role::pluck('name', 'id');

        return view('admin.user.create', compact('role_list'));
    }

    /**
     *
     * 创建
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validator = $this->verify($request, 'user.store');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }

        $data = $request->all();

        User::create($data);

        return responseSuccess('','Success', route('user.index'));
    }

    /**
     *
     * 编辑
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $data= User::findOrFail($id);
        $role_list = Role::pluck('name', 'id');

        return view('admin.user.edit', compact('data', 'role_list'));
    }

    public function update(Request $request, $id)
    {
        $validator = $this->verify($request, 'user.update');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }
        $user= User::findOrFail($id);

        if (!$request->has('password'))
            $user->update([
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'role_id' => $request->get('role_id')
            ]);
        else
            $user->update($request->all());

        return responseSuccess('','', route('admin.login'));
    }

    public function destroy($id)
    {
        User::destroy($id);

        return respS();
    }

    /**
     * 视图：修改个人资料
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getPersonal()
    {
        return view('admin.user.personalEdit');
    }

    public function postPersonal(Request $request)
    {
        $validator = $this->verify($request, 'user.personal');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }

        if (!$request->has('password'))
            Auth::user()->update([
                'name' => $request->get('name'),
                'email' => $request->get('email')
            ]);
        else
            Auth::user()->update($request->all());
        //UserRepository::updateById(Auth::user()->id, $request->all());

        return responseSuccess('', '', route('admin.login.out'));
    }

}
