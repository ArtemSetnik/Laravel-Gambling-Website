<?php

namespace App\Http\Controllers\Admin;

use App\Models\Api;
use App\Models\Ctr;
use App\Models\SystemConfig;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CtrController extends Controller
{
    public function index(Request $request)
    {
        $apis = Api::all();

        $ctrs_checked = Ctr::pluck('api_id')->toArray();

        $system_config = SystemConfig::find(1);

        return view('admin.ctr.index', compact('apis', 'ctrs_checked', 'system_config'));
    }

    public function store(Request $request)
    {
        $apis = $request->get('api_ids');
        $rates = $request->get('rates');

        if (is_array($apis) && is_array($rates))
        {
            //先删除
            $mod = new Ctr();
            $mod = $mod->where('id', '>', 0);
            $mod->delete();

            foreach ($apis as $key => $v)
            {
                $r = $rates[$key];
                if ($r>70 || $r <50)
                    $r = 50;
                Ctr::create([
                    'api_id' => $v,
                    'rate' => $r
                ]);
            }
        }

        return responseSuccess();

    }
}
