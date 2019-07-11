<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TcgGameRecord extends Model
{
    protected $table = 'tcg_game_records';

    protected $fillable = [
        'username',
        'betAmount',
        'validBetAmount',
        'winAmount',
        'netPnl',
        'currency',
        'transactionTime',
        'gameCode',
        'betOrderNo',
        'betTime',
        'productType',
        'gameCategory',
        'sessionId',
        'additionalDetails'
    ];
}
