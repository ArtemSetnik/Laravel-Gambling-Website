<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MemberDailiApply extends Model
{
    protected $table = 'member_daili_apply';

    protected $guarded = [];

    public function member()
    {
        return $this->hasOne('App\\Models\\Member', 'id', 'member_id')->withTrashed();
    }
}
