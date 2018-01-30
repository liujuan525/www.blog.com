<?php 
/**
 * 用户相关信息控制器
 * lj [2018/01/23]
 */
namespace app\index\controller;
use app\index\controller\PublicController;
use app\index\model\UserInfo;
use app\common\PublicMethod;
use think\Session;
use think\Db;

class UserController extends PublicController
{
    /**
     * 用户注册 -> lj [2018/01/23]
     */
    public function addUserInfo(UserInfo $user)
    {
        // 获取参数
        $data = $this->getParameter(['userName','mobile','email','repassWord','password']);
        $result = $user -> add($data);
        if($result){
            return json(['status'=>10001,'msg'=>$result]);
        }
        // 查询信息是否存在
        $info = Db::table('blog_user_info') 
                        -> where('userName',$data['userName'])
                        -> whereOr('mobile',$data['mobile'])
                        -> whereOr('email',$data['email'])
                        -> find();
        if($info){
            return json(['status'=>10002,'msg'=>'注册信息已存在']); // 此处应该细化为哪个字段存在
        }
        // 加密密码
        $data['password'] = PublicMethod::encryptPass($data['password']);
        unset($data['repassWord']);
        // 添加用户信息
        $userId = Db::table('blog_user_info')->insertGetId($data); // 获取主键id
        if($userId){
            session('uid',$userId); // 设置session
            return json(['status'=>1,'msg'=>'添加用户信息成功!','info'=>$userId]);
        }else{
            return json(['status'=>10003,'msg'=>'添加用户信息失败!']);
        }
    }

    /**
     * 用户登录 -> lj [2018/01/25]
     */
    public function userLogin(UserInfo $user) // 依赖
    {
        // 获取参数
        $data = $this->getParameter(['userName','password']);
        $result = $user -> loginCheck($data);
        if($result){
            return json(['status'=>10004,'msg'=>$result]);
        }
        $param['password'] = PublicMethod::encryptPass($data['password']);
        $data = Db::table('blog_user_info')
                        -> where('userName',$data['userName'])
                        // -> where('password',$data['password'])
                        -> find();
        if($data){
            session('uid',$data['id']);
            return json(['status'=>1,'msg'=>'登录成功!']);
        }else{
            return json(['status'=>10005,'msg'=>'用户信息不存在!']);
        }
    }

    /**
     * 判断用户是否登录 -> lj [2018/01/25]
     */
    public function judgeLogin()
    {
        // 获取用户uid
        $uid = session('uid');
        if($uid){
            // 获取用户信息并跳转到首页
            $info = Db::table('blog_user_info') -> where('id',$uid) -> find();
            if($info){
                $this->assign('info',$info);
                // return $this->fetch('/home'); // 仅跳转到页面，url没有改变
                return $this->redirect('/home'); // 可以改变url地址 
            }else{
                // 返回错误信息并跳转到登录页面
                return $this->error('用户信息不存在!','/indexLogin');
            }
        }else{
            // 跳转到用户登录页面
            return $this->fetch('/indexLogin');
        }
    }

    /**
     * 前台用户个人中心 -> lj [2018/01/26]
     */
    public function personalCenter()
    {
        // // 获取省信息
        $province = Db::connect('DB_ADDRESS') -> table('province') -> select();
        // // 获取市信息
        // $city = Db::connect('DB_ADDRESS') -> table('city') -> select();
        // // 获取县/区信息
        // $country = Db::connect('DB_ADDRESS') -> table('country') -> select();

        $this->assign('province',$province);
        // $this->assign('cityinfo',$city);
        // $this->assign('countryinfo',$country);
        return $this->fetch();
    }

    public function register()
    {
        return $this->fetch();
    }

    public function login()
    {
        return $this->fetch();
    }

    public function secure()
    {
        return $this->fetch();
    }




}
?>