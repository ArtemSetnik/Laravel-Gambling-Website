<?php

namespace App\Http\Controllers\Daili;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DailiController extends Controller
{
    public function index()
    {
        return view('daili.index');
    }
}
