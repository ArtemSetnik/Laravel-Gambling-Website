<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminLoginLog extends Model
{
    protected $table = 'admin_login_log' ;

    protected $guarded = [];

    public function user()
    {
        return $this->hasOne('App\\Models\\User', 'id', 'user_id');
    }
}
