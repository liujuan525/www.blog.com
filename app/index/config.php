<?php 
/**
 * index模块配置文件
 * lj [2018/01/16]
 */
return [
    // 地址数据库
    'DB_ADDRESS' => [
        // 数据库类型
        'type'            => 'mysql',
        // 服务器地址
        'hostname'        => '127.0.0.1',
        // 数据库名
        'database'        => 'address',
        // 用户名
        'username'        => 'root',
        // 密码
        'password'        => 'liujuan525',
        // 数据库编码默认采用utf8
        'charset'         => 'utf8',
        // 数据库表前缀
        'prefix'          => '',
    ],

    // 默认模块名
    'default_module' => 'index',
    // 默认控制器名
    'default_controller' => 'Index',
    // 默认操作名
    'default_action' => 'index',
    // 开启自动定位控制器-便于url访问(多级控制器)
    'controller_auto_search' => true,
    // 设置session
    'session' => [
        'prefix' => 'module',
        'type' => '',
        'auto_start' => true, // 自动开启session
    ],

    
];


?>