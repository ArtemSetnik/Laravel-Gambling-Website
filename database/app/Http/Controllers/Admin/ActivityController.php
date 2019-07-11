<?php

namespace App\Http\Controllers\Admin;

use App\Models\Activity;
use App\Models\Api;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class ActivityController extends AdminBaseController
{
    public function index(Request $request)
    {
        $mod = new Activity();

        $title = $start_at = $end_at = '';
        if ($request->has('title'))
        {
            $title = $request->get('title');
            $mod = $mod->where('title', 'LIKE', "%$title%");
        }
        if ($request->has('start_at'))
        {
            $start_at = $request->get('start_at');
            $mod = $mod->where('created_at', '>=', $start_at);
        }
        if ($request->has('end_at'))
        {
            $end_at = $request->get('end_at');
            $mod = $mod->where('created_at', '<=',$end_at);
        }

        $data = $mod->orderBy('sort', 'asc')->orderBy('created_at', 'desc')->paginate(config('admin.page-size'));

        return view('admin.activity.index', compact('data', 'title', 'start_at', 'end_at'));
    }

    public function create()
    {
        $api_list = Api::pluck('api_name', 'id');

        return view('admin.activity.create', compact('api_list'));
    }

    public function store(Request $request)
    {
        $validator = $this->verify($request, 'activity.store');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }

        $data = $request->all();

        try{
            DB::transaction(function() use($data) {

                $mod = Activity::create($data);

                if (isset($data['api']) && !empty($data['api']))
                    $mod->apis()->sync($data['api']);
            });
        }catch(Exception $e){
            DB::rollback();
            return responseWrong('创建失败');
        }



        return responseSuccess('', '', route('activity.index'));

    }

    public function edit($id)
    {
        $data = Activity::findOrFail($id);

        $api_list = Api::pluck('api_name', 'id');

        return view('admin.activity.edit', compact('data', 'api_list'));
    }

    public function update(Request $request, $id)
    {
        $validator = $this->verify($request, 'activity.store');

        if ($validator->fails())
        {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }
        $data = $request->all();
        $mod = Activity::findOrFail($id);
        try{
            DB::transaction(function() use($data, $mod) {

                $mod->update($data);

                if (isset($data['api']) && !empty($data['api']))
                    $mod->apis()->sync($data['api']);
            });
        }catch(Exception $e){
            DB::rollback();
            return responseWrong('创建失败');
        }





        return responseSuccess('', '', route('activity.index'));

    }

    public function destroy($id)
    {
        Activity::destroy($id);

        return respS();
    }

    public function check($id, $status)
    {
        $mod = Activity::findOrFail($id);

        $mod->update([
            'on_line' => $status
        ]);

        return respS();
    }
}
