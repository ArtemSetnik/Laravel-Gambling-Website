<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Red extends Model
{
    protected $fillable = [
        'min_amount',
        'max_amount',
        'times',
        'min_rate',
        'max_rate',
        'on_line',
        'sort',
        'type',
    ];
}
