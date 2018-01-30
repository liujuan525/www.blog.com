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
        if(!$validate -> check($data)){
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





}
?>