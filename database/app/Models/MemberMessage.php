<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MemberMessage extends Model
{
    protected $table = 'member_message';

    protected $guarded = [];

    public function message()
    {
        return $this->hasOne('App\\Models\\Message', 'message_id', 'id')->withTrashed();
    }
}
