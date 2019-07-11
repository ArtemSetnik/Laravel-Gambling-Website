<?php

namespace App\Http\Controllers\Admin;

use App\Models\Api;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\ValidationTrait;
class AdminBaseController extends Controller
{
    use ValidationTrait;

    protected function getOnLineApiList()
    {
        return Api::where('on_line', 0)->orderBy('created_at', 'desc')->pluck('api_name', 'id')->toArray();
    }
}
