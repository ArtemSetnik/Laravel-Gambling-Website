<?php

namespace App\Http\Controllers\Daili;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Models\Member;
use App\Traits\ValidationTrait;
class DailiBaseController extends Controller
{
    //
    use ValidationTrait;
    protected $_user;

    protected function getDaili()
    {
        $mod = Session::get('daili_login_info');
        $this->_user = $mod ? Member::findOrFail($mod->id):'';
        return $this->_user;
    }
}
