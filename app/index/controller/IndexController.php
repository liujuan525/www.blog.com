<?php
/**
 * lj [2018/01/15]
 */
namespace app\index\controller;
use app\index\controller\PublicController;
use think\Session;
use think\Db;
// use think\Exception;

class IndexController extends PublicController
{   
    // 前台首页展示 -> lj [2018/01/25]
    public function index()
    {
        // 获取用户uid
        $uid = session('uid');
        if($uid){
            $info = Db::table('blog_user_info')
                            -> where('id',$uid)
                            -> find();
            if($info){
                $this->assign('info',$info);
            }else{
                $this->assign('info',[]);
            }
        }else{
            $this->assign('info',0);
        }
        return $this->fetch();
    }




}

?>