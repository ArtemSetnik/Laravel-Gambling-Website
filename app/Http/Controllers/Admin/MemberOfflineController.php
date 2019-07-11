<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Member;
class MemberOfflineController extends Controller
{
    public function index(Request $request)
    {
        $mod = new Member();
        $name = $status = $top_id = '';
        if ($request->has('top_id'))
        {
            $top_id = $request->get('top_id');
            $mod = $mod->where('top_id', $top_id);
        }
        if ($request->has('name'))
        {
            $name = $request->get('name');
            $mod = $mod->where('name', 'like', "%$name%");
        }
        if ($request->has('status'))
        {
            $status = $request->get('status');
            $mod = $mod->where('status', $status);
        }

        $data = $mod->has('top_member')->orderBy('created_at', 'desc')->paginate(config('admin.page-size'));

        return view('admin.member_offline.index', compact('data', 'name', 'status', 'top_id'));
    }
}
