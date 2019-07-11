<?php
return [
    'system' =>[
        'name' => 'words.system_management',
        'icon' => 'fa fa-cog',
        'router' => '',
        'is_hide' => 1,
        'submenus' => [
            [
                'title' => 'words.administrator_list',
                'router' => 'user.index',
                'icon' => 'fa fa-circle-o',
                'is_hide' => 1,
                'actions' => [
                    [
                        'name' => '新增管理员',
                        'router' => 'user.store'
                    ],
                    [
                        'name' => '编辑管理员',
                        'router' => 'user.update'
                    ]
                ]
            ],
            [
                'title' => 'words.management_group',
                'router' => 'role.index',
                'icon' => 'fa fa-circle-o',
                'is_hide' => 1,
                'actions' => [
                    [
                        'name' => '新增管理组',
                        'router' => 'role.store'
                    ],
                    [
                        'name' => '编辑管理组',
                        'router' => 'role.update'
                    ],
                    [
                        'name' => '关联权限',
                        'router' => 'role.update'
                    ]
                ]
            ],
//            [
//                'title' => '管理员操作日志',
//                'router' => '',
//                'icon' => 'fa fa-circle-o',
//                'is_hide' => 0,
//                'actions' => [
//
//                ]
//            ],
            [
                'title' => 'words.bank_card_settings',
                'router' => 'bank_card.index',
                'icon' => 'fa fa-circle-o',
                'is_hide' => 1,
                'actions' => [
                    [
                        'name' => '新增银行卡',
                        'router' => 'bank_card.store'
                    ],
                    [
                        'name' => '编辑银行卡',
                        'router' => 'bank_card.update'
                    ],
                    [
                        'name' => '删除银行卡',
                        'router' => 'bank_card.destroy'
                    ]
                ]
            ],
            [
                'title' => 'words.edit_balance_record',
                'router' => 'admin_action_money_log.index',
                'icon' => 'fa fa-circle-o',
                'is_hide' => 1,
                'actions' => [

                ]
            ],
            [
                'title' => 'words.system_ettings',
                'router' => 'system_config.index',
                'icon' => 'fa fa-circle-o',
                'is_hide' => 1,
                'actions' => [
                    [
                        'name' => '编辑系统设置',
                        'router' => 'system_config.update'
                    ]
                ]
            ],
            [
                'title' => 'words.ip_settings',
                'router' => 'black_list_ip.index',
                'icon' => 'fa fa-circle-o',
                'is_hide' => 1,
                'actions' => [
                    [
                        'name' => '新增黑名单IP',
                        'router' => 'black_list_ip.store'
                    ],
                    [
                        'name' => '编辑黑名单IP',
                        'router' => 'black_list_ip.update'
                    ],
                    [
                        'name' => '删除黑名单IP',
                        'router' => 'black_list_ip.destroy'
                    ]
                ]
            ],
            /*[
                'title' => '电子控制器',
                'router' => 'ctr.index',
                'icon' => 'fa fa-circle-o',
                'is_hide' => 1,
                'actions' => [
                    [
                        'name' => '设置',
                        'router' => 'ctr.update'
                    ]
                ]
            ],*/
           [
               'title' => 'words.administrator_login_record',
               'router' => 'admin_login_log.index',
               'icon' => 'fa fa-circle-o',
               'is_hide' => 0,
               'actions' => [

               ]
           ]
        ]
    ],
    'member' => [
        'name' => 'words.user_management',
        'icon' => 'fa fa-users',
        'router' => '',
        'is_hide' => 1,
        'submenus' => [
            [
                'title' => 'words.user_list',
                'router' => 'member.index',
                'icon' => 'fa fa-circle-o',
                'is_hide' => 1,
                'actions' => [
                    [
                        'name' => '查看用户',
                        'router' => 'member.show'
                    ],
                    [
                        'name' => '编辑用户',
                        'router' => 'member.update'
                    ],
                    [
                        'name' => '禁用用户',
                        'router' => 'member.check'
                    ],
                    [
                        'name' => '删除用户',
                        'router' => 'member.destroy'
                    ],
                    [
                        'name' => '分配代理',
                        'router' => 'member.post_assign'
                    ]
                ]
            ],
//            [
//                'title' => '用户消息',
//                'router' => '',
//                'icon' => 'fa fa-circle-o',
//                'is_hide' => 1,
//                'actions' => [
//
//                ]
//            ],
            [
                'title' => 'words.user_bonus',
                'router' => 'dividend.index',
                'icon' => 'fa fa-circle-o',
                'is_hide' => 1,
                'actions' => [

                ]
            ],
//            [
//                'title' => '银行卡',
//                'router' => '',
//                'icon' => 'fa fa-circle-o',
//                'is_hide' => 1,
//                'actions' => [
//
//                ]
//            ],
            [
                'title' => 'words.login_log',
                'router' => 'member_login_log.index',
                'icon' => 'fa fa-circle-o',
                'is_hide' => 1,
                'actions' => [

                ]
            ],
            [
                'title' => 'words.game_record',
                'router' => 'game_record.index',
                'icon' => 'fa fa-circle-o',
                'is_hide' => 1,
                'actions' => [

                ]
            ],
            [
                'title' => 'words.platform_transfer_record',
                'router' => 'transfer.index',
                'icon' => 'fa fa-circle-o',
                'is_hide' => 1,
                'actions' => [

                ]
            ]
        ]
    ],
    'money' => [
        'name' => 'words.financial_management',
        'icon' => 'fa fa-money',
        'router' => '',
        'is_hide' => 1,
        'submenus' => [
//            [
//                'title' => '银行汇款',
//                'router' => 'recharge_bank.index',
//                'icon' => 'fa fa-circle-o',
//                'is_hide' => 1,
//                'actions' => [
//
//                ]
//            ],
//            [
//                'title' => '支付宝汇款',
//                'router' => 'recharge_ali.index',
//                'icon' => 'fa fa-circle-o',
//                'is_hide' => 1,
//                'actions' => [
//
//                ]
//            ],
//            [
//                'title' => '微信汇款',
//                'router' => 'recharge_weixin.index',
//                'icon' => 'fa fa-circle-o',
//                'is_hide' => 1,
//                'actions' => [
//
//                ]
//            ],           
            [
                'title' => 'words.recharge',
                'router' => 'recharge.index',
                'icon' => 'fa fa-circle-o',
                'is_hide' => 1,
                'actions' => [
                    [
                        'name' => '确认充值',
                        'router' => 'recharge.confirm'
                    ],
                    [
                        'name' => '不确认充值',
                        'router' => 'recharge.update'
                    ],
                ]
            ],
            [
                'title' => 'words.withdrawal',
                'router' => 'drawing.index',
                'icon' => 'fa fa-circle-o',
                'is_hide' => 1,
                'actions' => [
                    [
                        'name' => '确认提款',
                        'router' => 'drawing.confirm'
                    ],
                    [
                        'name' => '不同意提款',
                        'router' => 'drawing.update'
                    ],
                ]
            ],
            [
                'title' => 'words.red_envelope',
                'router' => 'red.index',
                'icon' => 'fa fa-circle-o',
                'is_hide' => 1,
                'actions' => [
                    [
                        'name' => '创建红包等级',
                        'router' => 'red.store'
                    ],
                    [
                        'name' => '更新红包等级',
                        'router' => 'red.update'
                    ],
                ]
            ],
            [
                'title' => 'words.financial_statements',
                'router' => 'money_report.index',
                'icon' => 'fa fa-circle-o',
                'is_hide' => 1,
                'actions' => [

                ]
            ],
        ]
    ],
    'daili' => [
        'name' => 'words.agent_management',
        'icon' => 'fa fa-list',
        'router' => '',
        'is_hide' => 1,
        'submenus' => [
            [
                'title' => 'words.agent_review',
                'router' => 'member_daili_apply.index',
                'icon' => 'fa fa-circle-o',
                'is_hide' => 1,
                'actions' => [
                    [
                        'name' => '审核代理',
                        'router' => 'member_daili_apply.show'
                    ],
                    [
                        'name' => '编辑代理',
                        'router' => 'member_daili_apply.update'
                    ]
                ]
            ],
            [
                'title' => 'words.binding_domain_name',
                'router' => 'member_daili.index',
                'icon' => 'fa fa-circle-o',
                'is_hide' => 1,
                'actions' => [
                    [
                        'name' => '新增代理',
                        'router' => 'member_daili.store'
                    ],
                    [
                        'name' => '编辑代理',
                        'router' => 'member_daili.update'
                    ],
                    [
                        'name' => '删除代理',
                        'router' => 'member_daili.destroy'
                    ]
                ]
            ],
            [
                'title' => 'words.offline_member',
                'router' => 'member_offline.index',
                'icon' => 'fa fa-circle-o',
                'is_hide' => 1,
                'actions' => [

                ]
            ],
            [
                'title' => 'words.member_deposit_record',
                'router' => 'member_offline_recharge.index',
                'icon' => 'fa fa-circle-o',
                'is_hide' => 1,
                'actions' => [

                ]
            ],
            [
                'title' => 'words.member_withdrawal_record',
                'router' => 'member_offline_drawing.index',
                'icon' => 'fa fa-circle-o',
                'is_hide' => 1,
                'actions' => [

                ]
            ],
            [
                'title' => 'words.member_receives_bonus_record',
                'router' => 'member_offline_dividend.index',
                'icon' => 'fa fa-circle-o',
                'is_hide' => 1,
                'actions' => [

                ]
            ],
            [
                'title' => 'words.member_wins_losses_report',
                'router' => 'member_offline_game_record.index',
                'icon' => 'fa fa-circle-o',
                'is_hide' => 1,
                'actions' => [

                ]
            ],
            [
                'title' => 'words.commission',
                'router' => 'send_daili_money.index',
                'icon' => 'fa fa-circle-o',
                'is_hide' => 1,
                'actions' => [
                    [
                        'name' => '发放佣金',
                        'router' => 'send_daili_money.store'
                    ]
                ]
            ],
            [
                'title' => 'words.commission_record',
                'router' => 'daili_money_log.index',
                'icon' => 'fa fa-circle-o',
                'is_hide' => 1,
                'actions' => [

                ]
            ],
            [
                'title' => 'words.commission_level',
                'router' => 'yj_level.index',
                'icon' => 'fa fa-circle-o',
                'is_hide' => 1,
                'actions' => [
                    [
                        'name' => '新增佣金等级',
                        'router' => 'yj_level.store'
                    ],
                    [
                        'name' => '编辑佣金等级',
                        'router' => 'yj_level.update'
                    ],
                    [
                        'name' => '删除佣金等级',
                        'router' => 'yj_level.destroy'
                    ]
                ]
            ]
        ]
    ],
    'fs' => [
        'name' => 'words.return_water_management',
        'icon' => 'fa fa-gg',
        'router' => '',
        'is_hide' => 1,
        'submenus' => [
            [
                'title' => 'words.return_level',
                'router' => 'fs_level.index',
                'icon' => 'fa fa-circle-o',
                'is_hide' => 1,
                'actions' => [
                    [
                        'name' => '新增返水等级',
                        'router' => 'fs_level.store'
                    ],
                    [
                        'name' => '编辑返水等级',
                        'router' => 'fs_level.update'
                    ],
                    [
                        'name' => '删除返水等级',
                        'router' => 'fs_level.destroy'
                    ]
                ]
            ],
            [
                'title' => 'words.button_back_to_water',
                'router' => 'send_fs.index',
                'icon' => 'fa fa-circle-o',
                'is_hide' => 1,
                'actions' => [
                    [
                        'name' => '发放返水',
                        'router' => 'send_fs.store'
                    ]
                ]
            ],
            [
                'title' => 'words.return_record',
                'router' => 'fs.index',
                'icon' => 'fa fa-circle-o',
                'is_hide' => 1,
                'actions' => [

                ]
            ]
        ]
    ],
    'activity' => [
        'name' => 'words.activity_management',
        'icon' => 'fa fa-map-o',
        'router' => '',
        'is_hide' => 1,
        'submenus' => [
            [
                'title' => 'words.events_list',
                'router' => 'activity.index',
                'icon' => 'fa fa-circle-o',
                'is_hide' => 1,
                'actions' => [
                    [
                        'name' => '新增活动',
                        'router' => 'activity.store'
                    ],
                    [
                        'name' => '编辑活动',
                        'router' => 'activity.update'
                    ],
                    [
                        'name' => '删除活动',
                        'router' => 'activity.destroy'
                    ]
                ]
            ],
            [
                'title' => 'words.add_event',
                'router' => 'activity.create',
                'icon' => 'fa fa-circle-o',
                'is_hide' => 1,
                'actions' => [

                ]
            ]
        ]
    ],
    'system_notice' => [
        'name' => 'words.content_management',
        'icon' => 'fa fa-link',
        'router' => '',
        'is_hide' => 1,
        'submenus' => [
            [
                'title' => 'words.system_notification',
                'router' => 'system_notice.index',
                'icon' => 'fa fa-circle-o',
                'is_hide' => 1,
                'actions' => [
                    [
                        'name' => '新增系统公告',
                        'router' => 'system_notice.store'
                    ],
                    [
                        'name' => '编辑系统公告',
                        'router' => 'system_notice.update'
                    ],
                    [
                        'name' => '删除系统公告',
                        'router' => 'system_notice.destroy'
                    ]
                ]
            ],
            [
                'title' => 'words.station_news',
                'router' => 'message.index',
                'icon' => 'fa fa-circle-o',
                'is_hide' => 1,
                'actions' => [
                    [
                        'name' => '新增站内消息',
                        'router' => 'message.store'
                    ],
                    [
                        'name' => '编辑站内消息',
                        'router' => 'message.update'
                    ],
                    [
                        'name' => '删除站内消息',
                        'router' => 'message.destroy'
                    ]
                ]
            ],

            [
                'title' => 'words.about_us',
                'router' => 'about.index',
                'icon' => 'fa fa-circle-o',
                'is_hide' => 1,
                'actions' => [
                    [
                        'name' => '新增关于我们',
                        'router' => 'about.store'
                    ],
                    [
                        'name' => '编辑关于我们',
                        'router' => 'about.update'
                    ],
                    [
                        'name' => '删除关于我们',
                        'router' => 'about.destroy'
                    ]
                ]
            ]
        ]
    ],
    'api' => [
        'name' => 'words.interface_management',
        'icon' => 'fa fa-paper-plane-o',
        'router' => '',
        'is_hide' => 1,
        'submenus' => [
            [
                'title' => 'words.interface_list',
                'router' => 'apple.index',
                'icon' => 'fa fa-circle-o',
                'is_hide' => 1,
                'actions' => [
                    [
                        'name' => '新增接口',
                        'router' => 'apple.store'
                    ],
                    [
                        'name' => '编辑接口',
                        'router' => 'apple.update'
                    ],
                    [
                        'name' => '删除接口',
                        'router' => 'apple.destroy'
                    ]
                ]
            ],
            /*[
                'title' => '游戏列表',
                'router' => 'tcg_game_list.index',
                'icon' => 'fa fa-circle-o',
                'is_hide' => 1,
                'actions' => [
                    [
                        'name' => '新增TCG游戏',
                        'router' => 'tcg_game_list.store'
                    ],
                    [
                        'name' => '编辑TCG游戏',
                        'router' => 'tcg_game_list.update'
                    ],
                    [
                        'name' => '删除TCG游戏',
                        'router' => 'tcg_game_list.destroy'
                    ]
                ]
            ]*/
        ]
    ],
    'personal' => [
        'name' => 'words.personal_information',
        'icon' => 'fa fa-paper-plane-o',
        'router' => '',
        'is_hide' => 0,
        'submenus' => [
            [
                'title' => 'words.personal_information',
                'router' => 'personal.index',
                'icon' => 'fa fa-circle-o',
                'is_hide' => 0,
                'actions' => [
                    [
                        'name' => '编辑个人资料',
                        'router' => 'user.personal.post'
                    ]
                ]
            ]
        ]
    ],
    'feedback' => [
        'name' => 'words.feedback_management',
        'icon' => 'fa fa-commenting-o',
        'router' => '',
        'is_hide' => 1,
        'submenus' => [
            [
                'title' => 'words.feedback_list',
                'router' => 'feedback.index',
                'icon' => 'fa fa-circle-o',
                'is_hide' => 1,
                'actions' => [
                ]
            ]
        ]
    ]
//    'platform' => [
//        'name' => '平台管理',
//        'icon' => 'fa fa-paper-plane-o',
//        'router' => '',
//        'is_hide' => 1,
//        'submenus' => [
//            [
//                'title' => '平台账户余额',
//                'router' => 'api.index',
//                'icon' => 'fa fa-circle-o',
//                'is_hide' => 1,
//                'actions' => [
//                    [
//                        'name' => '新增接口',
//                        'router' => 'api.store'
//                    ],
//                    [
//                        'name' => '编辑接口',
//                        'router' => 'api.update'
//                    ],
//                    [
//                        'name' => '删除接口',
//                        'router' => 'api.destroy'
//                    ]
//                ]
//            ]
//        ]
//    ]
];