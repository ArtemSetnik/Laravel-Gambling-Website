<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PayRecord extends Model
{
    protected $table = 'pay_records';

    protected $guarded = [];

    public function member()
    {
        return $this->hasOne('App\\Models\\Member', 'id', 'member_id')->withTrashed();
    }
}
