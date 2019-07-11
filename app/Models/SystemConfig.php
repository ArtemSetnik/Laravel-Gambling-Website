<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SystemConfig extends Model
{
    protected $table = 'system_config';

    protected $fillable = [
        'site_logo',
        'm_site_logo',
        'site_name',
        'site_title',
        'keyword',
        'phone1',
        'phone2',
        'site_domain',
        'qq',
        'down_name',
        'down_desc',
        'service_link',
        'is_maintain',
        'maintain_desc',
        'active_member_money',
        'alipay_nickname',
        'alipay_account',
        'alipay_qrcode',
        'wechat_nickname',
        'wechat_account',
        'wechat_qrcode',
        'is_alipay_on',
        'is_wechat_on',
        'is_bankpay_on',
        'is_thirdpay_on',
        'third_version',
        'third_userid',
        'third_userkey',
        'third_pay_url',
        'web_domain',
        'is_ctr_on',
        'wap_qrcode',
        'app_link',
        'is_alert_on',
        'alert_img',
        'is_qq_on',
        'qq_nickname',
        'qq_account',
        'qq_qrcode',
        'is_transfer_on',
        'transfer_times',
        'big_amount',
        'pic_link',
        'is_mbk_on',
        'agent_qq',
        'wx_pic',
        'fs_time',
        'cz_ration',
        'auto_logout_time'
    ];
}
