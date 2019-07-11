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
                        'name' => 'words.Add_Managment',
                        'router' => 'user.store'
                    ],
                    [
                        'name' => 'words.Edit_Managment',
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
                        'name' => 'words.Add_new_Managment_Group',
                        'router' => 'role.store'
                    ],
                    [
                        'name' => 'words.Edit_Managment_Group',
                        'router' => 'role.update'
                    ],
                    [
                        'name' => 'words.Access_Level',
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
                        'name' => 'words.Add_Bank_Account',
                        'router' => 'bank_card.store'
                    ],
                    [
                        'name' => 'words.Edit_Bank_Account',
                        'router' => 'bank_card.update'
                    ],
                    [
                        'name' => 'words.Delete_Bank_Account',
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
                        'name' => 'words.Edit_Setting',
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
                        'name' => 'words.IP_Blocker_List',
                        'router' => 'black_list_ip.store'
                    ],
                    [
                        'name' => 'words.Edit_IP_Blocker',
                        'router' => 'black_list_ip.update'
                    ],
                    [
                        'name' => 'words.Delete_IP_Blocker',
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
                        'name' => 'words.Check_User',
                        'router' => 'member.show'
                    ],
                    [
                        'name' => 'words.Edit_User',
                        'router' => 'member.update'
                    ],
                    [
                        'name' => 'words.Block_User',
                        'router' => 'member.check'
                    ],
                    [
                        'name' => 'words.Delete_User',
                        'router' => 'member.destroy'
                    ],
                    [
                        'name' => 'words.Agent_Managment',
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
                        'name' => 'words.Confirm_Deposit',
                        'router' => 'recharge.confirm'
                    ],
                    [
                        'name' => 'words.Cancel_Deposit',
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
                        'name' => 'words.Confirm_Withdraw',
                        'router' => 'drawing.confirm'
                    ],
                    [
                        'name' => 'words.Cancel_Withdraw',
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
                        'name' => 'words.Set_Red_Envelope_LVL',
                        'router' => 'red.store'
                    ],
                    [
                        'name' => 'words.Update_Red_Envelope_LVL',
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
                        'name' => 'words.Confirm_Agent',
                        'router' => 'member_daili_apply.show'
                    ],
                    [
                        'name' => 'words.Edit_Agent',
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
                        'name' => 'words.Add_New_Agent',
                        'router' => 'member_daili.store'
                    ],
                    [
                        'name' => 'words.Edit_Agent',
                        'router' => 'member_daili.update'
                    ],
                    [
                        'name' => 'words.Delete_Agent',
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
                        'name' => 'words.Send_Commission',
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
                        'name' => 'words.Commission_LVL',
                        'router' => 'yj_level.store'
                    ],
                    [
                        'name' => 'words.Edit_Commission_LvL',
                        'router' => 'yj_level.update'
                    ],
                    [
                        'name' => 'words.Delete_COmmission_LVL',
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
                        'name' => 'words.New_Rebate_Level',
                        'router' => 'fs_level.store'
                    ],
                    [
                        'name' => 'words.Edit_Rebate_Level',
                        'router' => 'fs_level.update'
                    ],
                    [
                        'name' => 'words.Delete_Rebate_Level',
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
                        'name' => 'words.Rebate_Pay',
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
                        'name' => 'words.Add_new_Event',
                        'router' => 'activity.store'
                    ],
                    [
                        'name' => 'words.Edit_Event',
                        'router' => 'activity.update'
                    ],
                    [
                        'name' => 'words.Delete_Event',
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
                        'name' => 'words.Add_News',
                        'router' => 'system_notice.store'
                    ],
                    [
                        'name' => 'words.Edit_News',
                        'router' => 'system_notice.update'
                    ],
                    [
                        'name' => 'words.Delete_News',
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
                        'name' => 'words.Add_Notification',
                        'router' => 'message.store'
                    ],
                    [
                        'name' => 'words.Edit_Notification',
                        'router' => 'message.update'
                    ],
                    [
                        'name' => 'words.Delete_Notification',
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
                        'name' => 'words.About_Us',
                        'router' => 'about.store'
                    ],
                    [
                        'name' => 'words.Edit_About_Us',
                        'router' => 'about.update'
                    ],
                    [
                        'name' => 'words.Delete_About_US',
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
                        'name' => 'words.New_Api',
                        'router' => 'apple.store'
                    ],
                    [
                        'name' => 'words.Edit_Api',
                        'router' => 'apple.update'
                    ],
                    [
                        'name' => 'words.Delete_Api',
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
                        'name' => 'words.Edit_Personal_Information',
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