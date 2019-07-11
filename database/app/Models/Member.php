<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Hash;
use Illuminate\Database\Eloquent\SoftDeletes;
class Member extends Authenticatable
{
    use Notifiable,SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
//    protected $fillable = [
//        'name', 'email', 'password',
//    ];
    protected $fillable = [
        'name',
        'real_name',
        'email',
        'phone',
        'qq',
        'password',
        'original_password',
        'gender',
        'is_daili',
        'top_id',
        'invite_code',
        'qk_pwd',
        'money',
        'fs_money',
        'total_amount',
        'score',
        'last_login_ip',
        'last_login_at',
        'bank_username',
        'bank_name',
        'bank_branch_name',
        'bank_card',
        'bank_address',
        'status',
        'is_login',
        'register_ip',
        'o_password',
        'agent_uri',
        'agent_uri_pre',
        'last_session',
        'is_tips_on',
        'is_in_on'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = ['deleted_at'];

    public function setPasswordAttribute($value)
    {
        // 若传入的字符串已经进行了 Hash 加密，则不重复处理
        $this->attributes['password'] = Hash::needsRehash($value) ? Hash::make($value) : $value;
    }

    public function under_members()
    {
        return $this->hasMany('App\\Models\\Member', 'top_id','id');
    }

    public function top_member()
    {
        return $this->hasOne('App\\Models\\Member', 'id','top_id');
    }

    public function daili_money_logs()
    {
        return $this->hasMany('App\\Models\\DailiMoneyLog', 'member_id', 'id');
    }

    public function recharges()
    {
        return $this->hasMany('App\\Models\\Recharge', 'member_id', 'id');
    }

    public function drawings()
    {
        return $this->hasMany('App\\Models\\Drawing', 'member_id', 'id');
    }

    public function dividends()
    {
        return $this->hasMany('App\\Models\\Dividend', 'member_id', 'id');
    }

    public function apis()
    {
        return $this->hasMany('App\\Models\\MemberAPi', 'member_id', 'id');
    }

//    public function messages()
//    {
//        return $this->hasMany('App\\Models\\MemberMessage', 'member_id', 'id');
//    }

    public function messages()
    {
        return $this->belongsToMany('App\\Models\\Message', 'member_message', 'member_id', 'message_id')->withPivot('is_read')->withTimestamps();
    }

    public function daili_apply()
    {
        return $this->hasMany('App\\Models\\MemberDailiApply', 'member_id', 'id');
    }

}