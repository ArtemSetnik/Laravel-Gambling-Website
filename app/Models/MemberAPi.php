<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MemberAPi extends Model
{
    protected $table = 'member_api';

    protected $guarded = [];

    public function api()
    {
        return $this->hasOne('App\\Models\\Api', 'id', 'api_id');
    }
}
