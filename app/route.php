<?php 
/**
 * 路由配置文件
 * lj [2018/01/16]
 */
// ThinkPHP5.0的路由规则定义是从根目录开始，而不是基于模块名的。

use think\Route;

// 注册路由到index模块的Index控制器的index操作
Route::get('/','index/Index/index');

return [
    /**
     * 前台相关路由设置
     */
    'home' => 'index/Index/index', // 网站首页
    'resource' => 'index/Resource/index', // 资源分享首页
    'timeline' => 'index/Record/index', // 点点滴滴首页
    'about' => 'index/Website/index', // 关于网站首页
    // 文章模块
    'article' => 'index/Article/index', // 文章专栏首页
    'detail' => 'index/Article/detail', // 文章详情
    // 用户模块
    'addUser' => 'index/User/addUserInfo', // 添加用户信息
    'register' => 'index/User/register', // 新用户注册
    'indexLogin' => 'index/User/login', // 新用户注册
    'userLogin' => 'index/User/userLogin', // 用户登录
    'personalcenter' => 'index/User/personalCenter', // 用户个人中心 -> 基本设置
    'securesetting' => 'index/User/secure', // 用户个人中心 -> 安全设置
    'loginOut' => 'index/User/loginOut', // 用户个人中心 -> 退出登录

    // 地址模块
    'getProvince' => 'index/Address/getProvince', // 获取省份信息
    'getCityByPid' => 'index/Address/getCityByPid', // 根据省id获取市信息

    'upload' => 'index/Test/upload', // 根据省id获取市信息



    'test' => 'index/Index/testTest', // 新用户注册
    'judge' => 'index/User/judgeLogin', // 新用户注册


    /**
     * 后台相关路由设置
     */
    'admin' => 'admin/Index/index',
    'datalist' => 'admin/Index/datail',
    'adminLogin' => 'admin/Index/login',
    'main' => 'admin/Index/main',

];
?>