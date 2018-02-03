<?php 
/**
 * 应用配置文件
 * lj [2017/01/16]
 */
return [
    // 开启多模块设计
    'app_multi_module' => true,
    // 开启路由规则
    'url_route_on' => true,
    // URL按照顺序解析变量
    'url_param_type' => 1,
    // 路由配置文件
    'route_config_file' => ['route'],
    // 应用调试模式
    'app_debug' => true, // false -> 部署模式
    // 控制器类后缀
    'controller_suffix' => true,
    // 模板输出替换
    'view_replace_str' => [
        '__PUBLIC__' => '/public/',
        '' => '/',
        '__PORTRAIT__' => '/upload/Images/',
    ],
    // 开启trace调试功能
    'app_trace' => true,

    // git test

    

];

?>