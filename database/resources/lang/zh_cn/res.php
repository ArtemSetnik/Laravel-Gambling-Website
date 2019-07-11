<?php

return [
    'success'           => '操作成功',
    'fail'              => '操作失败',
    'create_success'    => '添加成功',
    'update_success'    => '编辑成功',
    'delete_success'    => '删除成功',
    'model_not_exist'   => '对象不存在',
    'permission_limit'  => '无权操作，请联系管理员',

    'user' => [
        'add_user_success'      => '添加成功',
        'edit_user_success'     => '修改成功',
        'edit_user_wrong'       => '修改失败，请重试',
        'user_not_exist'        => '用户不存在',
        'no_roles'              => '请选择角色'
    ],
    'role' => [
        'role_name_exist'       => '角色名称已经存在',
        'no_access'             => '请添加权限',
        'has_users'             => '该角色下存在用户'
    ],
    'article' => [
        'create_article_success'=> '文章添加成功',
    ],
    'comment' => [
        'create_comment_success'=> '评论成功！',
        'create_comment_fail'   => '评论失败！',
        'edit_comment_success'  => '修改评论成功',
        'comment_content_null'  => '请输入评论内容'
    ],
    'menu' => [
        'has_child_menus' => '存在子菜单，不能删除'
    ],
    'file' => [
        'file_not_exist' => '下载文件不存在',
        'error' => '下载文件出错',
        'file_destroy_yet' => '文件已删除,请刷新页面',

    ],
    'letter' => [
        'ids_not_exist' => '请选择需要发送的用户',
        'has_log' => '该站内信存在发送记录，不能删除'
    ]
];