<?php 
/**
 * 各种公共方法类
 * lj [2018/01/24]
 */
namespace app\common;

class PublicMethod
{
    /**
     * [encryptPass 密码加密] -> lj [2018/01/24]
     * @param  [string] $pass [用户输入的密码]
     * @return [string]       [加密后的密码]
     */
    public static function encryptPass($pass)
    {
        $salt = '6BSSDFB65257FCAB4E2975CD96B230F7FSDFC4B53D97C10B6';
        return strtoupper(md5(sha1(md5($pass.$salt)).$pass));
    }

    /**
     * [unique 获取唯一值(大写)] -> lj [2018/01/25]
     */
    public static function unique()
    {
        $key = mt_rand(1,99999).uniqid('juanblog',true).time();
        return strtoupper(md5(md5($key)));
    }



}
?>