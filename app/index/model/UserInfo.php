<?php 
/**
 * 用户信息模型
 * lj [2018/01/23]
 */
namespace app\index\model;
use think\Model;
use think\Loader;

class UserInfo extends Model
{
    // 定义全局的查找范围-查询时自动过滤此条件
    protected function base($query)
    {
        $query -> where('isDel',0);
    }

    /**
     * 添加用户信息 -> lj [2018/01/24]
     */
    public function add($data)
    {
        $validate = Loader::validate('UserInfo');
        $validate -> scene('add',['userName','password','repassWord','mobile','email']);
        if(!$validate -> scene('add') -> check($data)){
        // if(!$validate -> check($data)){
            return $validate -> getError();
        }
    }

    /**
     * 用户登录 -> lj [2018/01/25]
     */
    public function loginCheck($data)
    {
        $validate = validate('UserInfo');
        // 定义场景
        $validate -> scene('login',['userName','password']);
        if(!$validate -> scene('login') -> check($data)){
            return $validate -> getError();
        }
    }

    /**
     * 修改登录密码 -> lj [2018/01/31]
     */
    public function changePass($data)
    {
        $validate = validate('UserInfo');
        // 定义场景
        $validate -> scene('updatepass',['password','newpassword']);
        if(!$validate -> scene('updatepass') -> check($data)){
            return $validate -> getError();
        }
    }

    /**
     * 修改用户信息 -> lj [2018/02/02]
     */
    public function modifyInfo($data)
    {
        $validate = Loader::validate('UserInfo');
        $validate -> scene('updateInfo',['userName','mobile','email']);
        if(!$validate -> scene('updateInfo') -> check($data)){
            return $validate -> getError();
        }
    }





}
?>