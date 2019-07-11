<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    protected $guarded = [];

    public function routers()
    {
        return $this->hasMany('App\\Models\\RoleRouter', 'role_id', 'id');
    }
}
