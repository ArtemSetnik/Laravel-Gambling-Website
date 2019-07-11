<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RedLog extends Model
{
    //

    protected $fillable = [
        'recharge_id',
        'money'
    ];

    public function recharge()
    {
        return $this->hasOne('App\\Models\\Recharge', 'id', 'recharge_id');
    }
}
