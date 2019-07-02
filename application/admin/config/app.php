<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/10
 * Time: 11:30
 */

return [
    'url_route_must' => true,
    // +----------------------------------------------------------------------
    // | 日志设置
    // +----------------------------------------------------------------------
    'log' => [
        // 日志记录方式，内置 file socket 支持扩展
        'type' => 'File',
        // 日志保存目录
        'path' => '/var/www/manager_cmlaw/runtime/log',
        // 日志记录级别
        'level' => [],
    ],
    //分页配置
    'paginate' => [
        'type' => 'bootstrap', //分页类
        'var_page' => 'page',
        'list_rows' => 10,
    ],
];
