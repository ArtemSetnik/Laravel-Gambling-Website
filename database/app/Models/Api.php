<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Api extends Model
{
    protected $table = 'api';

    protected $guarded = [];

    public function setApiNameAttribute($value)
    {
        $this->attributes['api_name'] = strtoupper($value);
    }

    public function ctr()
    {
        return $this->hasOne('App\\Models\\Ctr', 'api_id', 'id');
    }
}
