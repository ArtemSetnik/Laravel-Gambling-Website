<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MemberLoginLog extends Model
{
    protected $table = 'member_login_log' ;

    protected $guarded = [];

    public function member()
    {
        return $this->hasOne('App\\Models\\Member', 'id', 'member_id');
    }
}
