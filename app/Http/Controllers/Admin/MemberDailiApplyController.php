<?php

namespace App\Http\Controllers\Admin;

use App\Models\MemberDailiApply;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class MemberDailiApplyController extends Controller
{
    public function index(Request $request)
    {
        $mod = new MemberDailiApply();
        $phone = '';
        if ($request->has('phone'))
        {
            $phone = $request->get('phone');
            $mod = $mod->where('phone', 'like', "%$phone%");
        }

        $data = $mod->orderBy('created_at', 'desc')->paginate(config('admin.page-size'));

        return view('admin.member_daili_apply.index', compact('data', 'phone'));
    }

    public function show($id)
    {
        $mod = MemberDailiApply::findOrFail($id);

        try{
            DB::transaction(function() use($mod) {

                $mod->update([
                    'status' => 1
                ]);

                $mod->member()->update([
                    'is_daili' => 1
                ]);

            });
        }catch(Exception $e){
            DB::rollback();
            return respF('创建失败');
        }

        return respS();
    }

    public function edit(Request $request, $id)
    {

    }

    public function update(Request $request, $id)
    {
        if (!$request->has('fail_reason'))
            respF('请输入不通过原因');

        $mod = MemberDailiApply::findOrFail($id);

        $mod->update([
            'fail_reason' => $request->get('fail_reason'),
            'status' => 2
        ]);

        return respS();
    }
}
