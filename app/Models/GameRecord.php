<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GameRecord extends Model
{
    protected $table = 'game_record';

    protected $guarded = [];

//    protected $fillable = [
//        'username',
//        'betAmount',
//        'validBetAmount',
//        'winAmount',
//        'netPnl',
//        'currency',
//        'transactionTime',
//        'gameCode',
//        'betOrderNo',
//        'betTime',
//        'productType',
//        'gameCategory',
//        'sessionId',
//        'additionalDetails'
//    ];

    public function member()
    {
        return $this->hasOne('App\\Models\\Member', 'id', 'member_id')->withTrashed();
    }


    public function api()
    {
        return $this->hasOne('App\\Models\\Api', 'id', 'api_type');
    }
}
