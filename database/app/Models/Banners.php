<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banners extends Model
{
    //
    protected $fillable = [
        'title',
        'path',
        'type',
        'sort'
    ];
}
