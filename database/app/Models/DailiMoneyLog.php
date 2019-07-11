<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DailiMoneyLog extends Model
{
    protected $table = 'daili_money_log';

    protected $guarded = [];

    public function member()
    {
        return $this->hasOne('App\\Models\\Member', 'id', 'member_id')->withTrashed();
    }
}
