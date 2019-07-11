<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Feedback;
class FeedbackController extends Controller
{
    public function index(Request $request)
    {
        $mod = new Feedback();

        $is_read = $start_at = $end_at = '';
        if ($request->has('is_read'))
        {
            $is_read = $request->get('is_read');
            $mod = $mod->where('is_read', $is_read);
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

        $data = $mod->orderBy('created_at', 'desc')->paginate(config('admin.page-size'));

        return view('admin.feedback.index', compact('data','is_read','start_at', 'end_at'));
    }

    public function show($id)
    {
        $data = Feedback::findOrFail($id);

        return view('admin.feedback.show', compact('data'));
    }

    public function destroy($id)
    {
        Feedback::destroy($id);

        return respS();
    }

    public function check($id, $status)
    {
        $mod = Feedback::findOrFail($id);

        $mod->update([
            'is_read' => $status
        ]);

        return respS();
    }
}
