<?php 
/**
 * 公共控制器
 * lj [2018/01/23]
 */
namespace app\index\controller;
use think\Controller;
use think\Db;

class PublicController extends Controller 
{
    // 构造函数
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 获取参数 -> lj [2018/01/24]
     * @param array 参数数组
     */
    public function getParameter($param)
    {
        foreach($param as $key=>$value){
            $data["$value"] = input("$value");
        }
        return $data;
    }

    /**
     * 根据sessionid判断公共模板部分页面跳转 -> lj [2018/01/30]
     */
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

    /**
     * 获取验证码 -> lj [2018/01/31]
     */
    public function getCaptcha()
    {
        $captcha = new Captcha();
        return $captcha -> entry();
        // dump($captcha -> entry());
    }



}
?>