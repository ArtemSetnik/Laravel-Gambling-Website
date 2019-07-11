<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dividend extends Model
{
    protected $table = 'dividend';

    protected $guarded = [];

    public function member()
    {
        return $this->hasOne('App\\Models\\Member', 'id', 'member_id')->withTrashed();
    }
}
