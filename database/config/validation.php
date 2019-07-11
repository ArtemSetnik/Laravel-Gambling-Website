<?php

return [
    'member' => [
        'register_one' => [
            'name' => [
                'name' => '用户名',
                'rules' => 'required|min:6|max:8|unique:members',
                'message' => ['min' => 'User name is at least 6 digits', 'max' => 'Username is up to 8 digits','unique' => 'The name already exists']
            ],
            'password' => [
                'name' => '注册密码',
                'rules' => 'required|min:6|max:12|confirmed',
                'message' => ['min' => 'Password is at least 6 digits', 'max' => 'Password up to 12 digits','confirmed' => 'Two password entries are inconsistent']
            ],
            'real_name' => [
                'name' => '姓名',
                'rules' => 'required',
                'message' => [],
            ],
            'qk_pwd' => [
                'name' => '取款密码',
                'rules' => 'required|numeric',
                'message' => []
            ],
            'check1' => [
                'name' => '条款一',
                'rules' => 'required',
                'message' => ['required' => 'Please agree to check the clause one']
            ],
            'check2' => [
                'name' => '条款二',
                'rules' => 'required',
                'message' => ['required' => 'Please agree to check the second clause']
            ],
        ],
        'register_two' => [
            'real_name' => [
                'name' => '真实姓名',
                'rules' => 'required|max:255',
                'message' => []
            ],
            'gender' => [
                'name' => '性别',
                'rules' => 'required',
                'message' => ['required' => 'Please select gender']
            ],
            'phone' => [
                'name' => '手机号码',
                'rules' => 'required|regex:/^1[34578]\d{9}$/',
                'message' => ['required' => 'please fill in cell phone number','regex'=> 'Please fill in the correct mobile number']
            ],
            'qq' => [
                'name' => '联系QQ',
                'rules' => 'required',
                'message' => []
            ],
            'email' => [
                'name' => '邮箱',
                'rules' => 'required|email|max:255|unique:members',
                'message' => ['unique' => 'Mailbox is already in use']
            ],
            'qk_pwd' => [
                'name' => '取款密码',
                'rules' => 'required|numeric|min:6',
                'message' => []
            ]
        ],
        'login' => [
            'name' => [
                'name' => '用户名',
                'rules' => 'required',
                'message' => []
            ],
            'password' => [
                'name' => '注册密码',
                'rules' => 'required',
                'message' => []
            ],
        ],
        'update_qk_password' => [
            'old_password' => [
                'name' => '原密码1',
                'rules' => 'required|min:6',
                'message' => []
            ],
            'password' => [
                'name' => '新密码1',
                'rules' => 'required|min:6|confirmed',
                'message' => ['confirmed' => 'Two password entries are inconsistent']
            ],
        ],
        'update_login_password' => [
            'old_password' => [
                'name' => 'aaaaa',
                'rules' => 'required|min:6',
                'message' => []
            ],
            'password' => [
                'name' => 'adsafsfasdf',
                'rules' => 'required|min:6|confirmed',
                'message' => ['confirmed' => 'Two password entries are inconsistent']
            ],
        ],
        'update_bank_info' => [
            'bank_name' => [
                'name' => '收款银行',
                'rules' => 'required',
                'message' => ['required' => 'Please select a receiving bank']
            ],
//            'bank_address' => [
//                'name' => '开户地址',
//                'rules' => 'required',
//                'message' => []
//            ],
            'bank_branch_name' => [
                'name' => '开户网点',
                'rules' => 'required',
                'message' => []
            ],
            'bank_username' => [
                'name' => '开户姓名',
                'rules' => 'required',
                'message' => []
            ],
            'bank_card' => [
                'name' => '银行账号',
                'rules' => 'required',
                'message' => []
            ],
        ],
        'post_weixin_pay' => [
            'money' => [
                'name' => '汇款金额',
                'rules' => 'required',
                'message' => []
            ],
            'account' => [
                'name' => '汇款账号',
                'rules' => 'required',
                'message' => []
            ],
            'paytime' => [
                'name' => '汇款时间',
                'rules' => 'required',
                'message' => []
            ]
        ],
        'post_ali_pay' => [
            'money' => [
                'name' => '汇款金额',
                'rules' => 'required',
                'message' => []
            ],
            'account' => [
                'name' => '汇款账号',
                'rules' => 'required',
                'message' => []
            ],
            'paytime' => [
                'name' => '汇款时间',
                'rules' => 'required',
                'message' => []
            ]
        ],

        'post_qq_pay' => [
            'money' => [
                'name' => '汇款金额',
                'rules' => 'required',
                'message' => []
            ],
            'account' => [
                'name' => '汇款账号',
                'rules' => 'required',
                'message' => []
            ],
            'paytime' => [
                'name' => '汇款时间',
                'rules' => 'required',
                'message' => []
            ]
        ],
        'post_bank_pay' => [
            'money' => [
                'name' => '汇款金额',
                'rules' => 'required',
                'message' => []
            ],
            'payment_desc' => [
                'name' => '付款银行',
                'rules' => 'required',
                'message' => ['required' => 'Please select payment bank']
            ],
            'name' => [
                'name' => '付款户名',
                'rules' => 'required',
                'message' => []
            ],
            'account' => [
                'name' => '付款账号',
                'rules' => 'required',
                'message' => []
            ],
            'paytime' => [
                'name' => '汇款时间',
                'rules' => 'required',
                'message' => []
            ]
        ],
        'post_drawing' => [
            'money' => [
                'name' => '取款金额',
                'rules' => 'required',
                'message' => []
            ],
            'qk_pwd' => [
                'name' => '取款密码',
                'rules' => 'required',
                'message' => []
            ],
        ],
        'post_transfer' => [
            'account2' => [
                'name' => '游戏平台',
                'rules' => 'required',
                'message' => ['required' => 'Please select a game platform']
            ],
            'money' => [
                'name' => '转换金额',
                'rules' => 'required',
                'message' => []
            ],
            'transfer_type' => [
                'name' => '转换类型',
                'rules' => 'required',
                'message' => ['required' => 'Please select a conversion type']
            ],
        ],
        'post_feedback' => [
            'type' => [
                'name' => '反馈类型',
                'rules' => 'required',
                'message' => ['required' => 'Please select a feedback type']
            ],
            'content' => [
                'name' => '反馈内容',
                'rules' => 'required',
                'message' => []
            ],
            'phone' => [
                'name' => '手机号码',
                'rules' => 'required|regex:/^1[34578]\d{9}$/',
                'message' => ['required' => 'please fill in cell phone number','regex'=> 'Please fill in the correct mobile number']
            ]
        ],
        'update' => [
//            'password' => [
//                'name' => '登录密码',
//                'rules' => 'min:6|max:12',
//                'message' => []
//            ],
//            'qk_pwd' => [
//                'name' => '取款密码',
//                'rules' => 'numeric|min:6',
//                'message' => []
//            ]
            'phone' => [
                'name' => '手机号码',
                'rules' => 'required|regex:/^1[34578]\d{9}$/',
                'message' => ['required' => 'please fill in cell phone number','regex'=> 'Please fill in the correct mobile number']
            ],
            'email' => [
                'name' => '邮箱',
                'rules' => 'required|email|max:255',
                'message' => []
            ],
        ]
    ],
    'fs_level' => [
        'store' => [
            'level' => [
                'name' => '返水等级',
                'rules' => 'required',
                'message' => ['required' => 'Please select the return level']
            ],
            'game_type' => [
                'name' => '游戏类型',
                'rules' => 'required',
                'message' => ['required' => 'Please select the type of game']
            ],
            'name' => [
                'name' => '等级名称',
                'rules' => 'required',
                'message' => []
            ],
            'quota' => [
                'name' => '额度',
                'rules' => 'required',
                'message' => []
            ],
            'rate' => [
                'name' => '返水比例',
                'rules' => 'required',
                'message' => []
            ],
        ]
    ],
    'black_list_ip' => [
        'store' => [
            'ip' => [
                'name' => 'IP地址',
                'rules' => 'required|ip',
                'message' => []
            ]
        ]
    ],
    'recharge' => [
        'confirm' => [
            'money' => [
                'name' => '充值金额',
                'rules' => 'required|min:1',
                'message' => []
            ],
            'diff_money' => [
                'name' => '赠送金额',
                'rules' => 'min:1',
                'message' => []
            ],
        ]
    ],
    'yj_level' => [
        'store' => [
            'level' => [
                'name' => '佣金等级',
                'rules' => 'required',
                'message' => ['required' => '请选择 佣金等级']
            ],
            'name' => [
                'name' => '等级名称',
                'rules' => 'required',
                'message' => []
            ],
            'min' => [
                'name' => '最小金额',
                'rules' => 'required',
                'message' => []
            ],
            'num' => [
                'name' => '活跃用户数量',
                'rules' => 'required|min:1',
                'message' => []
            ],
            'rate' => [
                'name' => '佣金比例',
                'rules' => 'required',
                'message' => []
            ],
        ]
    ],
    'send_daili_money' => [
        'store' => [
            'top_id' => [
                'name' => '代理',
                'rules' => 'required',
                'message' => ['required' => 'Please select an agent']
            ],
        ]
    ],
    'send_fs' => [
        'store' => [
            'member_id' => [
                'name' => '用户',
                'rules' => 'required',
                'message' => ['required' => 'Please select a user']
            ],
        ]
    ],
    'member_daili' => [
        's_store' => [
            'member_id' => [
                'name' => '会员',
                'rules' => 'required',
                'message' => ['required' => 'Please select a member to become an agent']
            ]
        ]
    ],
    'api' => [
        'store' => [
            'api_name' => [
                'name' => '接口名称',
                'rules' => 'required',
                'message' => []
            ],
            'api_title' => [
                'name' => '显示名称',
                'rules' => 'required',
                'message' => []
            ],
            /*'api_money' => [
                'name' => '接口余额',
                'rules' => 'required|min:0',
                'message' => []
            ],*/
        ]
    ],
    'system_notice' => [
        'store' => [
//            'title' => [
//                'name' => '标题',
//                'rules' => 'required',
//                'message' => []
//            ],
            'content' => [
                'name' => '内容',
                'rules' => 'required',
                'message' => []
            ],
        ]
    ],
    'message' => [
        'store' => [
            'title' => [
                'name' => '标题',
                'rules' => 'required',
                'message' => []
            ],
            'content' => [
                'name' => '内容',
                'rules' => 'required|min:0',
                'message' => []
            ],
            'send_member' => [
                'name' => '发送的用户',
                'rules' => 'required',
                'message' => ['required' => '请选择 发放的用户']
            ],
        ],
        'update' => [
            'title' => [
                'name' => '标题',
                'rules' => 'required',
                'message' => []
            ],
            'content' => [
                'name' => '内容',
                'rules' => 'required|min:0',
                'message' => []
            ]
        ]
    ],
    'bank_card' => [
        'store' => [
            'bank_id' => [
                'name' => '开户行',
                'rules' => 'required',
                'message' => []
            ],
            'username' => [
                'name' => '持卡人姓名',
                'rules' => 'required',
                'message' => []
            ],
            'card_no' => [
                'name' => '卡号',
                'rules' => 'required',
                'message' => []
            ]
        ]
    ],
    'activity' => [
        'store' => [
            'title' => [
                'name' => '活动标题',
                'rules' => 'required',
                'message' => []
            ],
//            'api' => [
//                'name' => '参与接口',
//                'rules' => 'required',
//                'message' => ['required' => '请选择 参与的接口']
//            ]
        ]
    ],
    'user' => [
        'personal' => [
            'name' => [
                'name' => '用户名',
                'rules' => 'required',
                'message' => []
            ],
            'email' => [
                'name' => '邮箱',
                'rules' => 'required|email',
                'message' => ['email' => 'Please fill in the correct email address']
            ],
//            'password' => [
//                'name' => '密码',
//                'rules' => 'min:6',
//                'message' => ['min' => '请至少输入6位字符密码']
//            ],
        ],
        'store' => [
            'name' => [
                'name' => '用户名',
                'rules' => 'required',
                'message' => []
            ],
            'email' => [
                'name' => '邮箱',
                'rules' => 'required|email',
                'message' => ['email' => 'Please fill in the correct email address']
            ],
            'password' => [
                'name' => '密码',
                'rules' => 'required|min:6',
                'message' => ['min' => '请至少输入6位字符密码']
            ],
        ],
        'update' => [
            'name' => [
                'name' => '用户名',
                'rules' => 'required',
                'message' => []
            ],
            'email' => [
                'name' => '邮箱',
                'rules' => 'required|email',
                'message' => ['email' => 'Please fill in the correct email address']
            ],
//            'password' => [
//                'name' => '密码',
//                'rules' => 'min:6',
//                'message' => ['min' => '请至少输入6位字符密码']
//            ],
        ]
    ],
    'role' => [
        'store' => [
            'name' => [
                'name' => '角色名',
                'rules' => 'required',
                'message' => []
            ]
        ],
        'relation' => [
            'routers' => [
                'name' => '权限',
                'rules' => 'required',
                'message' => ['']
            ]
        ]
    ],
    'game_list' => [
        'store' => [
            'name' => [
                'name' => '游戏名称',
                'rules' => 'required',
                'message' => []
            ],
            'api_id' => [
                'name' => '所属接口',
                'rules' => 'required',
                'message' => ['required' => 'Please select the interface to which you belong']
            ],
            'game_id' => [
                'name' => '游戏代码',
                'rules' => 'required',
                'message' => []
            ],
            'game_type' => [
                'name' => '游戏类型',
                'rules' => 'required',
                'message' => ['required' => 'Please select the type of game']
            ],
            'client_type' => [
                'name' => '游戏平台',
                'rules' => 'required',
                'message' => ['required' => 'Please select a game platform']
            ],
            'sort' => [
                'name' => '排序',
                'rules' => 'required',
                'message' => []
            ]
        ]
    ],
    'wap' => [
        'login' => [
            'name' => [
                'name' => '用户名',
                'rules' => 'required',
                'message' => []
            ],
            'password' => [
                'name' => '注册密码',
                'rules' => 'required',
                'message' => []
            ],
        ],
        'register' => [
            'name' => [
                'name' => '用户名',
                'rules' => 'required|min:6|max:8|unique:members',
                'message' => ['min' => 'User name is at least 6 digits', 'max' => 'Username is up to 8 digits','unique' => 'The name already exists']
            ],
            'password' => [
                'name' => '注册密码',
                'rules' => 'required|min:6|max:12|confirmed',
                'message' => ['min' => 'Password is at least 6 digits', 'max' => 'Password up to 12 digits','confirmed' => 'Two password entries are inconsistent']
            ],
            'real_name' => [
                'name' => '真实姓名',
                'rules' => 'required|max:255',
                'message' => []
            ],
            'qk_pwd' => [
                'name' => '取款密码',
                'rules' => 'required|numeric',
                'message' => ['min' => 'Withdrawal password is 6 digits']
            ]
        ],
        'post_transfer' => [
            'out_account' => [
                'name' => '转出账户',
                'rules' => 'required',
                'message' => ['required' => 'Please choose to transfer your account']
            ],
            'in_account' => [
                'name' => '转入账户',
                'rules' => 'required',
                'message' => ['required' => 'Please choose to transfer to the account']
            ],
            'money' => [
                'name' => '转账金额',
                'rules' => 'required',
                'message' => []
            ]
        ],
        'post_weixin_pay' => [
            'money' => [
                'name' => '汇款金额',
                'rules' => 'required',
                'message' => []
            ],
            'account' => [
                'name' => '汇款账号',
                'rules' => 'required',
                'message' => []
            ],
            'paytime' => [
                'name' => '汇款时间',
                'rules' => 'required',
                'message' => []
            ]
        ],
        'post_qq_pay' => [
            'money' => [
                'name' => '汇款金额',
                'rules' => 'required',
                'message' => []
            ],
            'account' => [
                'name' => '汇款账号',
                'rules' => 'required',
                'message' => []
            ],
            'paytime' => [
                'name' => '汇款时间',
                'rules' => 'required',
                'message' => []
            ]
        ],
        'post_ali_pay' => [
            'money' => [
                'name' => '汇款金额',
                'rules' => 'required',
                'message' => []
            ],
            'account' => [
                'name' => '汇款账号',
                'rules' => 'required',
                'message' => []
            ],
            'paytime' => [
                'name' => '汇款时间',
                'rules' => 'required',
                'message' => []
            ]
        ],
        'post_bank_pay' => [
            'money' => [
                'name' => '汇款金额',
                'rules' => 'required',
                'message' => []
            ],
            'payment_desc' => [
                'name' => '付款银行',
                'rules' => 'required',
                'message' => ['required' => 'Please select payment bank']
            ],
            'name' => [
                'name' => '付款户名',
                'rules' => 'required',
                'message' => []
            ],
            'account' => [
                'name' => '付款账号',
                'rules' => 'required',
                'message' => []
            ],
            'paytime' => [
                'name' => '汇款时间',
                'rules' => 'required',
                'message' => []
            ]
        ],
        'update_bank_info' => [
            'bank_name' => [
                'name' => '收款银行',
                'rules' => 'required',
                'message' => ['required' => 'Please select a receiving bank']
            ],
//            'bank_address' => [
//                'name' => '开户地址',
//                'rules' => 'required',
//                'message' => []
//            ],
            'bank_branch_name' => [
                'name' => '开户网点',
                'rules' => 'required',
                'message' => []
            ],
            'bank_username' => [
                'name' => '开户姓名',
                'rules' => 'required',
                'message' => []
            ],
            'bank_card' => [
                'name' => '银行账号',
                'rules' => 'required',
                'message' => []
            ],
        ],
        'post_drawing' => [
            'money' => [
                'name' => '取款金额',
                'rules' => 'required',
                'message' => []
            ],
            'qk_pwd' => [
                'name' => '取款密码',
                'rules' => 'required',
                'message' => []
            ],
        ],
        'update_qk_password' => [
            'old_password' => [
                'name' => 'OldPassword',
                'rules' => 'required|min:6',
                'message' => []
            ],
            'password' => [
                'name' => 'NewPassword',
                'rules' => 'required|min:6|confirmed',
                'message' => ['confirmed' => 'Two password entries are inconsistent']
            ],
        ],
        'update_login_password' => [
            'old_password' => [
                'name' => 'OldPassword',
                'rules' => 'required|min:6',
                'message' => []
            ],
            'password' => [
                'name' => 'NewPassword',
                'rules' => 'required|min:6|confirmed',
                'message' => ['confirmed' => 'Two password entries are inconsistent']
            ],
        ],
        'post_agent_apply' => [
            'qq' => [
                'name' => 'QQ号码',
                'rules' => 'required',
                'message' => []
            ],
            'phone' => [
                'name' => '手机号码',
                'rules' => 'required|regex:/^1[34578]\d{9}$/',
                'message' => ['required' => 'please fill in cell phone number','regex'=> 'Please fill in the correct mobile number']
            ],
            'about' => [
                'name' => '申请理由',
                'rules' => 'required',
                'message' => []
            ]
        ],
        'post_set_phone' => [
            'phone' => [
                'name' => '手机号码',
                'rules' => 'required|regex:/^1[34578]\d{9}$/',
                'message' => ['required' => 'please fill in cell phone number','regex'=> 'Please fill in the correct mobile number']
            ],
        ]
    ],
    'member_offline' => [
        'store' => [
            'name' => [
                'name' => '用户名',
                'rules' => 'required|min:7|max:10|unique:members',
                'message' => ['min' => '用户名最少为7位', 'max' => '用户名最多为10位','unique' => 'The name already exists']
            ],
        ]
    ],
    'about' => [
        'store' => [
            'content' => [
                'name' => '内容',
                'rules' => 'required',
                'message' => []
            ],
        ]
    ],
    'red' => [
        'store' => [
            'min_amount' => [
                'name' => '充值范围最小',
                'rules' => 'required|numeric',
                'message' => []
            ],
            'max_amount' => [
                'name' => '充值范围最大',
                'rules' => 'required|numeric',
                'message' => []
            ],
            'min_rate' => [
                'name' => '红包金额比例最小',
                'rules' => 'required|numeric',
                'message' => []
            ],
            'max_rate' => [
                'name' => '红包金额比例最大',
                'rules' => 'required|numeric',
                'message' => []
            ],
            'sort' => [
                'name' => '排序',
                'rules' => 'required|numeric',
                'message' => []
            ],
            'times' => [
                'name' => '次数',
                'rules' => 'required|numeric',
                'message' => []
            ],
        ]
    ]


];