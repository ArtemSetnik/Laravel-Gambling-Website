<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GameList extends Model
{
    protected $guarded = [];

    public function api()
    {
        return $this->hasOne('App\\Models\\Api', 'id', 'api_id');
    }
}
