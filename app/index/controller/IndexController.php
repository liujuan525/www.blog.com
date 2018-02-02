<?php
/**
 * lj [2018/01/15]
 */
namespace app\index\controller;
use app\index\controller\PublicController;
use think\Db;

class IndexController extends PublicController
{   
    /**
     * 用户注册 -> lj [2018/02/02]
     */
    public function register()
    {
        return $this -> fetch();
    }

    /**
     * 用户登录 -> lj [2018/02/02]
     */
    public function login()
    {
        return $this -> fetch();
    }

    /**
     * 个人中心退出登录 -> lj [2018/02/02]
     */
    public function loginOut()
    {
        $this -> clearUid();
        $this -> redirect('/');
    }

    

    public function testTest()
    {
        return $this->fetch('/test');
    }



}

?>