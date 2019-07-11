<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Base extends Model
{

    static public $MEMBER_STATUS_HTML = [
        0      => '<strong style="color:green;">启用</strong>',
        1      => '<strong style="color:red;">禁用</strong>'
    ];

    static public $ON_LINE_HTML = [
        0      => '<strong style="color:green;">Online</strong>',
        1      => '<strong style="color:red;">Offline</strong>'
    ];

    static public $IS_READ_HTML = [
        0      => '<strong style="color:red;">未读</strong>',
        1      => '<strong style="color:green;">已读</strong>'
    ];

    //支付类型
    const PAYMENT_TYPE_ONE    = 1;
    const PAYMENT_TYPE_TWO    = 2;
    const PAYMENT_TYPE_THREE  = 3;

    static public $PAYMENT_TYPE = [
        self::PAYMENT_TYPE_ONE      => '支付宝',
        self::PAYMENT_TYPE_TWO      => '微信',
        self::PAYMENT_TYPE_THREE    => '银行转账'
    ];

    /*static public $RECHARGE_STATUS_HTML = [
        1      => '<strong style="color:orange;">@</strong>',
        2      => '<strong style="color:green;">@</strong>',
        3    => '<strong style="color:red;">@</strong>'
    ];

    static public $DRAWING_STATUS_HTML = [
        1      => '<strong style="color:orange;">@</strong>',
        2      => '<strong style="color:green;">@</strong>',
        3    => '<strong style="color:red;">@</strong>'
    ];*/
	
	 static public $RECHARGE_STATUS_HTML = [
        1      => '<strong style="color:orange;">待确认</strong>',
        2      => '<strong style="color:green;">汇款成功</strong>',
        3    => '<strong style="color:red;">汇款失败</strong>'
    ];

    static public $DRAWING_STATUS_HTML = [
        1      => '<strong style="color:orange;">待确认</strong>',
        2      => '<strong style="color:green;">提款成功</strong>',
        3    => '<strong style="color:red;">提款失败</strong>'
    ];

    static public $TRANSFER_IN_ACCOUNT = [
        '中心账户'      => '中心账户',
        'AG账户'      => 'AG账户',
        'MG账户'      => 'MG账户',
        'BBIN账户'      => 'BBIN账户',
    ];

    static public $TRANSFER_OUT_ACCOUNT = [
        '中心账户'      => '中心账户',
        '返水账户'      => '返水账户',
        'AG账户'      => 'AG账户',
        'MG账户'      => 'MG账户',
        'BBIN账户'      => 'BBIN账户',
    ];



    //交易类型
    const PAY_TYPE_ONE = 1;
    const PAY_TYPE_TWO = 2;

    static public $PAY_TYPE = [
        self::PAY_TYPE_ONE => '收入',
        self::PAY_TYPE_TWO => '支出'
    ];

    static public $PAY_TYPE_HTML = [
        self::PAY_TYPE_ONE => '<span style="color: green"><b>收入</b></span>',
        self::PAY_TYPE_TWO => '<span style="color: red"><b>支出</b></span>'
    ];

    //流水状态
    const TRANSACTION_STATUS_ONE    = 1;
    const TRANSACTION_STATUS_TWO    = 2;
    const TRANSACTION_STATUS_THREE  = 3 ;

    static public $TRANSACTION_STATUS = [
        self::TRANSACTION_STATUS_ONE    => '审核中',
        self::TRANSACTION_STATUS_TWO    => '审核通过',
        self::TRANSACTION_STATUS_THREE  => '作废'
    ];
    //流水显示状态
    static public $TRANSACTION_STATUS_HTML = [
        self::TRANSACTION_STATUS_ONE    => '<span style="color: red"><b>审核中</b></span>',
        self::TRANSACTION_STATUS_TWO    => '<span style="color: green"><b>审核通过</b></span>',
        self::TRANSACTION_STATUS_THREE  => '<span style="color: orange"><b>作废</b></span>',
    ];

    static public $PROVINCE_LIST = [
        '北京' => '北京',
        '天津' => '天津',
        '山东' => '山东',
        '江苏' => '江苏',
        '安徽' => '安徽',
        '浙江' => '浙江',
        '福建' => '福建',
        '上海' => '上海',
        '广东' => '广东',
        '广西' => '广西',
        '海南' => '海南',
        '湖北' => '湖北',
        '湖南' => '湖南',
        '河南' => '河南',
        '江西' => '江西',
        '河北' => '河北',
        '山西' => '山西',
        '内蒙古' => '内蒙古',
        '宁夏' => '宁夏',
        '新疆' => '新疆',
        '青海' => '青海',
        '陕西' => '陕西',
        '甘肃' => '甘肃',
        '四川' => '四川',
        '云南' => '云南',
        '贵州' => '贵州',
        '西藏' => '西藏',
        '重庆' => '重庆',
        '辽宁' => '辽宁',
        '吉林' => '吉林',
        '黑龙江' => '黑龙江',
        '台湾' => '台湾',
        '香港' => '香港',
        '澳门' => '澳门'
    ];


    //银行类型
    const BANK_TYPE_ONE         = 1;
    const BANK_TYPE_TWO         = 2;
    const BANK_TYPE_THREE       = 3;
    const BANK_TYPE_FOUR        = 4;
    const BANK_TYPE_FIVE        = 5;
    const BANK_TYPE_SIX         = 6;
    const BANK_TYPE_SEVEN       = 7;
    const BANK_TYPE_EIGHT       = 8;
    const BANK_TYPE_NINE        = 9;
    const BANK_TYPE_TEN         = 10;
    const BANK_TYPE_ELEVEN      = 11;
     /*const BANK_TYPE_TWELVE      = 12;
     const BANK_TYPE_THIRTEEN    = 13;
     const BANK_TYPE_FOURTEEN    = 14;
     const BANK_TYPE_FIFTEEN     = 15;
     const BANK_TYPE_SIXTEEN     = 16;*/

    static public $BANK_TYPE = [
        self::BANK_TYPE_ONE => 'MayBank',
        self::BANK_TYPE_TWO => 'Cimb Bank',
        self::BANK_TYPE_THREE => 'Public Bank',
        self::BANK_TYPE_FOUR => 'Hong Leong',
        self::BANK_TYPE_FIVE => 'BSN Bank',
        self::BANK_TYPE_SIX => 'RHB Bank',
        self::BANK_TYPE_SEVEN => 'City Bank',
        self::BANK_TYPE_EIGHT => 'Am Bank',
        self::BANK_TYPE_NINE => 'HSBC Bank',
        self::BANK_TYPE_TEN => 'Alliance Bank',
        self::BANK_TYPE_ELEVEN => 'Bank Rakyat',
       /*  self::BANK_TYPE_TWELVE => '华夏银行',
         self::BANK_TYPE_THIRTEEN => '深圳发展银行',
         self::BANK_TYPE_FOURTEEN => '中信银行',
         self::BANK_TYPE_FIFTEEN => '兴业银行',
         self::BANK_TYPE_SIXTEEN => '光大银行',*/
    ];

    const WITHDRAW_STATUS_ZERO   = 0;
    const WITHDRAW_STATUS_ONE    = 1;
    const WITHDRAW_STATUS_TWO    = 2;
    const WITHDRAW_STATUS_THREE  = 3;
    const WITHDRAW_STATUS_FOUR  = 4;

    static public $WITHDRAW_STATUS = [
        self::WITHDRAW_STATUS_ZERO  => '提现申请',
        self::WITHDRAW_STATUS_ONE   => '提现驳回',
        self::WITHDRAW_STATUS_TWO   => '申请成功',
        self::WITHDRAW_STATUS_THREE   => '银行驳回',
        self::WITHDRAW_STATUS_FOUR   => '已到账',
    ];

    static public $WITHDRAW_STATUS_HTML= [
        self::WITHDRAW_STATUS_ZERO  => '<strong style="color:orange;">提现申请</strong>',
        self::WITHDRAW_STATUS_ONE   => '<strong style="color:red;">提现驳回</strong>',
        self::WITHDRAW_STATUS_TWO   => '<strong style="color:green;">申请成功</strong>',
        self::WITHDRAW_STATUS_THREE   => '<strong style="color:red;">银行驳回</strong>',
        self::WITHDRAW_STATUS_FOUR   => '<strong style="color:green;">已到账</strong>',
    ];
}
