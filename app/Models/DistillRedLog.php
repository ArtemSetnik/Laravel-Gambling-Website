<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DistillRedLog extends Model
{

    protected $guarded = [];
    //
    public function recharge()
    {
        return $this->hasOne('App\\Models\\Recharge', 'id', 'recharge_id');
    }

}
