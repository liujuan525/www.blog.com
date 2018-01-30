<?php
/**
 * 逻辑层:用户定义用户相关的业务逻辑
 * lj [2018/01/22]
 */
namespace app\index\logic;
use think\Model;

class UserInfo extends Model 
{
    // 实例化方法：
    \think\Loader::model('UserInfo','logic');
}