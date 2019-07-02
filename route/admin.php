<?php
/**
 * Created by PhpStorm.
 * User: kai
 * Date: 2019/5/9
 * Time: 10:37
 */

return [
    // 获取菜单列表
    'admin/menu/menu_list' => ['admin/menu/menu_list', ['method' => 'get']],
    // 菜单添加
    'admin/menu/menu_add' => ['admin/menu/menu_add', ['method' => 'post']],
    // 菜单更新
    'admin/menu/menu_update' => ['admin/menu/menu_update', ['method' => 'post']],
    // 菜单删除
    'admin/menu/menu_delete' => ['admin/menu/menu_delete', ['method' => 'post']],
    // 菜单详情
    'admin/menu/menu_detail' => ['admin/menu/menu_detail', ['method' => 'get']],

    // 角色列表
    'admin/role/role_list' => ['admin/role/role_list', ['method' => 'get']],
    // 角色增加
    'admin/role/role_add' => ['admin/role/role_add', ['method' => 'post']],
    // 角色更新
    'admin/role/role_update' => ['admin/role/role_update', ['method' => 'post']],
    // 角色删除
    'admin/role/role_delete' => ['admin/role/role_delete', ['method' => 'post']],

    // 权限节点列表
    'admin/node/node_list' => ['admin/node/node_list', ['method' => 'get']],
    // 节点详情
    'admin/node/node_detail' => ['admin/node/node_detail', ['method' => 'get']],
    // 获取父级节点
    'admin/node/node_list_header' => ['admin/node/node_list_header', ['method' => 'get']],
    // 节点增加
    'admin/node/node_add' => ['admin/node/node_add', ['method' => 'post']],
    // 节点更新
    'admin/node/node_update' => ['admin/node/node_update', ['method' => 'post']],
    // 节点删除
    'admin/node/node_delete' => ['admin/node/node_delete', ['method' => 'post']],
    // 所有节点列表
    'admin/node/node_list_all' => ['admin/node/node_list_all', ['method' => 'get']],

    // 用户列表
    'admin/user/user_list' => ['admin/user/user_list', ['method' => 'get']],

    // 用户下的所有角色
    'admin/user_role/user_role_list' => ['admin/user_role/user_role_list', ['method' => 'get']],
    // 角色下的所有用户
    'admin/user_role/role_user_list' => ['admin/user_role/role_user_list', ['method' => 'get']],

    // 给用户分角色(新增/更新)
    'admin/user_role/user_role_save' => ['admin/user_role/user_role_save', ['method' => 'post']],
    // 给角色加用户(新增)
    'admin/user_role/role_user_add' => ['admin/user_role/role_user_add', ['method' => 'post']],
    // 获取角色待添加用户
    'admin/user_role/user_list' => ['admin/user_role/user_list', ['method' => 'get']],
    // 删除角色下的用户
    'admin/user_role/user_delete' => ['admin/user_role/user_delete', ['method' => 'post']],

    // 给角色分节点(新增/更新)
    'admin/role_node/role_node_save' => ['admin/role_node/role_node_save', ['method' => 'post']],
    // 更新部分，但是选中，未选中都得传给我
    'admin/role_node/role_node_save1' => ['admin/role_node/role_node_save1', ['method' => 'post']],

];