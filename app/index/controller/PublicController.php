<?php 
/**
 * 公共控制器
 * lj [2018/01/23]
 */
namespace app\index\controller;
use think\Controller;
use think\Session;
use think\Db;

class PublicController extends Controller 
{
    // 定义用户头像保存路径
    const PORTRAIT_SAVE_PATH = "app/upload/Images/"; 

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
        foreach($param as $key => $value){
            $data["$value"] = input("$value");
        }
        return $data;
    }

    /**
     * 获取登录用户id -> lj [2018/02/02]
     */
    public function getUid()
    {
        return session('uid') ? session('uid') : 0;
    }

    /**
     * 记录用户登录的id -> lj [2018/02/02]
     */
    public function setUid($uid)
    {
        session('uid',$uid);
    }

    public function clearUid()
    {
        session('uid',NULL);
    }

    /**
     * 根据sessionid判断公共模板部分页面跳转 -> lj [2018/01/30]
     */
    public function index()
    {
        // 获取用户uid
        $uid = $this -> getUid();
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
    }





}
?>