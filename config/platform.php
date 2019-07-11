<?php
return [
    //红利类型
    'dividend_type' => [
        1 => 'words.recharge_bonus',
        2 => 'words.platform_bonus',
        3 => 'words.backwater',
        4 => 'words.grab_red_envelope'
    ],
    //充值类型
    'recharge_type' => [
        1 => 'words.alipay',
        2 => 'words.wechat',
        3 => 'words.bank_transfer',
        4 => 'words.third_party_payment',
        5 => 'QQ',
    ],
    //充值状态
    'recharge_status' => [
        1 => 'words.to_be_confirmed',
        2 => 'words.Successful_remittance',
        3 => 'words.Remittance_failed'
    ],
    //提款状态
    'drawing_status' => [
        1 => 'words.to_be_confirmed',
        2 => 'words.Successful_withdrawal',
        3 => 'words.Withdrawal_failed'
    ],
    //用户状态
    'member_status' => [
        0 => 'words.Enable',
        1 => 'words.Disable'
    ],
    //平台转账类型
    'transfer_type' => [
        0 => 'words.Transfer_in',
        1 => 'words.Withdraw_out'
    ],
    'api_type' => [
        1 => 'AG',
        2 => 'MG',
        3 => 'BBIN'
    ],
    'productType' => [
        1 => 'AG',
        2 => 'MG',
        3 => 'BBIN'
    ],
    'on_line' => [
        0 => '上线',
        1 => '下线'
    ],
    'game_type' => [
        1 => 'words.real_person',
        2 => 'words.electronic',
        3 => 'words.lottery_ticket',
        4 => 'words.physical_education',
        5 => 'words.gaming',
        6 => 'words.fishing',
        7 => 'words.chess'
    ],
    'activity_type' => [
        1 => 'words.water_return_activity',
        2 => 'words.bonus_activity',
        3 => 'words.recharge_activity',
        4 => 'exhibition_event',
        5 => 'words.slot_machine',
        6 => 'words.live_casino',
        7 => 'words.other'
    ],
    'gender' => [
        0 => '男',
        1 => '女'
    ],
    'feedback_type' => [
        1 => '平台问题',
        2 => '财务问题',
        3 => '提供建议'
    ],
    'is_read' => [
        0 => '未读',
        1 => '已读'
    ],
    'productCode' => [
        3=> 'PT',
        12 => 'PNG'
    ],
    'tcg_game_type' => [
        'RNG' => 'RNG',
        'LIVE' => 'LIVE',
        'PVP' => 'PVP',
        'FISH' => 'FISH'
    ],
    'tcg_client_type' => [
        'pc' => 'pc',
        'phone' => 'phone',
        'web' => 'web',
        'html5' => 'html5'
    ],
    'member_on_line' => [
        1 => '在线',
        2 => '下线'
    ],
    'client_type' => [
        1 => 'pc',
        2 => 'phone'
    ],
    'tcg_product_type' => [
        'AG' => 4
    ],
    'about_type' => [
        1 => 'words.about_us',
        2 => 'words.deposite_help',
        3 => 'words.withdrawal_help',
        4 => 'words.common_problem',
        5 => 'words.disclaimer',
        6 => 'words.agency_cooperation'
    ]
];