<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recharge extends Model
{
    protected $table = 'recharge';

    protected $guarded = [];

    public function member()
    {
        return $this->hasOne('App\\Models\\Member', 'id', 'member_id')->withTrashed();
    }
}
