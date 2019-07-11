<?php

namespace App\Http\Controllers\Admin;

use App\Models\Banners;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BannerController extends Controller
{
    //
    public function store(Request $request)
    {
        $banners = $request->get('banners');
        $type = $request->has('type')?$request->get('type'):1;

         Banners::where('type', $type)->delete();

        foreach ($banners as $item)
        {
            Banners::create([
                'path' => $item,
                'type' => $type
            ]);
        }


        return responseSuccess('', '', route('system_config.index'));

    }
}
