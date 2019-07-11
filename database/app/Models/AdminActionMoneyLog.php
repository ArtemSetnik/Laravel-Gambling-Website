<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminActionMoneyLog extends Model
{
    protected $table = 'admin_action_money_log';

    protected $guarded = [];

    public function user()
    {
        return $this->hasOne('App\\Models\\User', 'id', 'user_id')->withTrashed();
    }

    public function member()
    {
        return $this->hasOne('App\\Models\\Member', 'id', 'member_id')->withTrashed();
    }
}
