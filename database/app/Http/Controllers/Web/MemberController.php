<?php

namespace App\Http\Controllers\Web;

use App\Models\Api;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MemberController extends WebBaseController
{
    public function member_center()
    {
        $api_list = Api::orderBy('created_at', 'desc')->get();

        return view('web.member.member_center', compact('api_list'));
    }
}
