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
    
    // 首页模块
    'home' => 'index/Index/index', // 网站首页
    'indexLogin' => 'index/Index/login', // 用户登录页面
    'register' => 'index/Index/register', // 新用户注册页面
    'loginOut' => 'index/Index/loginOut', // 用户个人中心 -> 退出登录
    

    'resource' => 'index/Resource/index', // 资源分享首页
    'timeline' => 'index/Record/index', // 点点滴滴首页
    'about' => 'index/Website/index', // 关于网站首页

    // 文章模块
    'article' => 'index/Article/index', // 文章专栏首页
    'detail' => 'index/Article/detail', // 文章详情

    // 用户模块
    'addUser' => 'index/User/addUserInfo', // 添加用户信息
    'userLogin' => 'index/User/userLogin', // 用户登录校验
    'judge' => 'index/User/judgeLogin', // 判断用户是否登录
    'personalcenter' => 'index/User/personalCenter', // 用户个人中心 -> 基本设置
    'securesetting' => 'index/User/secure', // 用户个人中心 -> 安全设置页面
    'changePass' => 'index/User/changePassword', // 用户个人中心 -> 安全设置(修改密码)
    'uploadImage' => 'index/User/uploadImage', // 用户个人中心 -> 上传头像
    'modifyUserInfo' => 'index/User/modifyUserInfo', // 用户个人中心 -> 修改用户信息



    // 地址模块
    'getProvince' => 'index/Address/getProvince', // 获取省份信息
    'getCityByPid' => 'index/Address/getCityByPid', // 根据省id获取市信息
    'getCountryByCid' => 'index/Address/getCountryByCid', // 根据市id获取县区信息


    // 各种测试路由
    'upload' => 'index/Test/upload', // 根据省id获取市信息
    'testlayui' => 'index/Test/testLayer', // 根据省id获取市信息
    'test' => 'index/Index/testTest', // 新用户注册


    /**
     * 后台相关路由设置
     */
    'admin' => 'admin/Index/index',
    'datalist' => 'admin/Index/datail',
    'adminLogin' => 'admin/Index/login',
    'main' => 'admin/Index/main',

];
?>