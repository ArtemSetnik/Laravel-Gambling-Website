<?php

namespace App\Http\Controllers\Admin;

use App\Models\About;
use App\Models\Api;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class AboutController extends AdminBaseController
{
    public function index(Request $request)
    {
        $mod = new About();

        $title = $type = '';
        if ($request->has('title'))
        {
            $title = $request->get('title');
            $mod = $mod->where('title', 'LIKE', "%$title%");
        }
        if ($request->has('type'))
        {
            $type = $request->get('type');
            $mod = $mod->where('type', $type);
        }

        $data = $mod->orderBy('sort', 'asc')->orderBy('created_at', 'desc')->paginate(config('admin.page-size'));

        return view('admin.about.index', compact('data', 'title', 'type'));
    }

    public function create()
    {
        return view('admin.about.create');
    }

    public function store(Request $request)
    {
        $validator = $this->verify($request, 'about.store');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }

        $data = $request->all();

        if (About::where('type', $data['type'])->first())
            return responseWrong('已存在该类型的文章');

        try{
            DB::transaction(function() use($data) {

                $mod = About::create($data);
            });
        }catch(Exception $e){
            DB::rollback();
            return responseWrong('创建失败');
        }



        return responseSuccess('', '', route('about.index'));

    }

    public function edit($id)
    {
        $data = About::findOrFail($id);

        return view('admin.about.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $validator = $this->verify($request, 'about.store');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }
        $data = $request->all();

        $mod = About::findOrFail($id);

        if (About::where('type', $data['type'])->where('id', '!=', $id)->first())
            return responseWrong('已存在该类型的文章');

        try{
            DB::transaction(function() use($data, $mod) {

                $mod->update($data);
            });
        }catch(Exception $e){
            DB::rollback();
            return responseWrong('创建失败');
        }





        return responseSuccess('', '', route('about.index'));

    }

    public function destroy($id)
    {
        About::destroy($id);

        return respS();
    }

    public function check($id, $status)
    {
        $mod = About::findOrFail($id);


        if ($status == 0 && About::where('type', $mod->type)->where('on_line', 0)->first())
            return respF('该类型下存在已上线内容');

        $mod->update([
            'on_line' => $status
        ]);

        return respS();
    }
}
