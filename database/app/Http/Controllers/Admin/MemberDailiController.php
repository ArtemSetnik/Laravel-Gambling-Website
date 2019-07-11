<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\ValidationTrait;
use App\Models\Member;
class MemberDailiController extends Controller
{
    use ValidationTrait;
    public function index(Request $request)
    {
        $mod = new Member();
        $name = '';
        if ($request->has('name'))
        {
            $name = $request->get('name');
            $mod = $mod->where('name', 'like', "%$name%");
        }

        $data = $mod->where('is_daili', 1)->orderBy('created_at', 'desc')->paginate(config('admin.page-size'));

        return view('admin.member_daili.index', compact('data', 'name'));
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
        $data = MemberRepository::getByWhere($map)->toArray();

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
        $member_list = Member::where('is_daili', 0)->pluck('name', 'id');
        return view('admin.member_daili.create', compact('member_list'));
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
        $validator = $this->verify($request, 'member_daili.s_store');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }

        $data = $request->all();

        $member = Member::findOrFail($data['member_id']);

        if ($member->is_daili == 1)
            return responseWrong('该会员已经是代理');

        if ($request->has('agent_uri'))
        {
            if (Member::where('agent_uri', $data['agent_uri'])->first())
            {
                return responseWrong('该链接已分配');
            }
            $member->update([
                'agent_uri' => $request->get('agent_uri'),
                'is_daili' =>1
            ]);
        } else {
            $member->update([
                'is_daili' =>1
            ]);
        }

        return responseSuccess('','', route('member_daili.index'));
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
        $data= Member::findOrFail($id);

        return view('admin.member_daili.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $member= Member::findOrFail($id);

        if ($request->has('agent_uri'))
        {
            if (Member::where('agent_uri', $request->get('agent_uri'))->where('id', '!=', $id)->first())
            {
                return responseWrong('该链接已分配');
            }
        }

        $member->update($request->all());

        return responseSuccess('','', route('member_daili.index'));
    }

    public function destroy($id)
    {
        Member::destroy($id);

        return respS();
    }
}
