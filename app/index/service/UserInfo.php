<?php 
/**
 * 服务层:用于定义用户相关的服务接口等
 * lj [2018/01/22]
 */
namespace app\index\service;
use think\Model;

class UserInfo extends Model 
{
    // 实例化方法：
    \think\Loader::model('UserInfo','service');
}