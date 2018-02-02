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
use think\File;

class UserController extends PublicController
{
    /**
     * 用户注册 -> lj [2018/01/23]
     */
    public function addUserInfo(UserInfo $user)
    {
        // 获取参数
        $data = $this -> getParameter(['userName','mobile','email','repassWord','password']);
        $result = $user -> add($data);
        if($result){
            return json(['status' => 10001,'msg' => $result]);
        }
        // 查询信息是否存在
        $info = Db::table('blog_user_info') 
                        -> where('userName',$data['userName'])
                        -> whereOr('mobile',$data['mobile'])
                        -> whereOr('email',$data['email'])
                        -> find();
        if($info){
            return json(['status' => 10002,'msg' => '注册信息已存在']); // 此处应该细化为哪个字段存在
        }
        // 加密密码
        $data['password'] = PublicMethod::encryptPass($data['password']);
        unset($data['repassWord']);
        // 添加用户信息
        $userId = Db::table('blog_user_info') -> insertGetId($data); // 获取主键id
        if($userId){
            session('uid',$userId); // 设置session
            return json(['status' => 1,'msg' => '添加用户信息成功!','info' => $userId]);
        }else{
            return json(['status' => 10003,'msg' => '添加用户信息失败!']);
        }
    }

    /**
     * 用户登录 -> lj [2018/01/25]
     */
    public function userLogin(UserInfo $user) // 依赖
    {
        // 获取参数
        $data = $this -> getParameter(['userName','password']);
        $result = $user -> loginCheck($data);
        if($result){
            return json(['status' => 10004,'msg' => $result]);
        }
        $param['password'] = PublicMethod::encryptPass($data['password']);
        $data = Db::table('blog_user_info')
                        -> where('userName',$data['userName'])
                        // -> where('password',$data['password'])
                        -> find();
        if($data){
            $uid = $data['id'];
            session('uid',$uid);
            // 增加登录次数
            $this -> addLoginCount($uid);
            return json(['status' => 1,'msg' => '登录成功!']);
        }else{
            return json(['status' => 10005,'msg' => '用户信息不存在!']);
        }
    }

    /**
     * 增加用户登录次数 -> lj [2018/02/02]
     */
    private function addLoginCount($uid)
    {
        Db::table('blog_user_info') -> where('id',$uid) -> setInc('loginCount');
        $time = date('Y-m-d H:i:s',time());
        Db::table('blog_user_info') -> where('id',$uid) -> update(['updateTime' => $time]);
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
                $this -> assign('info',$info);
                // return $this -> fetch('/home'); // 仅跳转到页面，url没有改变
                return $this -> redirect('/home'); // 可以改变url地址 
            }else{
                // 返回错误信息并跳转到登录页面
                return $this -> error('用户信息不存在!','/indexLogin');
            }
        }else{
            // 跳转到用户登录页面
            return $this -> fetch('/indexLogin');
        }
    }

    /**
     * 前台用户个人中心 -> lj [2018/01/26]
     */
    public function personalCenter()
    {
        $uid = session('uid');
        $info = Db::table('blog_user_info') -> where('id',$uid) -> find();
        // 获取省信息
        $province = Db::connect('DB_ADDRESS') -> table('province') -> select();
        
        $this -> assign('userinfo',$info);
        $this -> assign('province',$province);
        return $this -> fetch();
    }

    /**
     * 个人中心退出登录 -> lj [2018/01/31]
     */
    public function loginOut()
    {
        // 清除sessionid
        session('uid',NULL);
        $this -> redirect('/');
    }

    /**
     * 修改用户密码 -> lj [2018/01/31]
     */
    public function changePassword(UserInfo $user)
    {
        // 校验数据
        $data = $this -> getParameter(['password','newpassword']);
        $result = $user -> changePass($data);
        if($result){
            return json(['status' => 10006,'msg' => $result]);
        }
        // 获取sessionid
        $uid = session('uid');
        $info = Db::table('blog_user_info') 
                        -> where('id',$uid) -> find();
        // 修改用户密码
        $originPass = PublicMethod::encryptPass($data['password']);

        if($originPass != $info['password']){
            return json(['status' => 10007,'msg' => '密码有误']);
        }else{
            $newPass = PublicMethod::encryptPass($data['newpassword']);
            $updateResult = Db::table('blog_user_info') 
                                -> update(['password' => $newPass,'id' => $uid]);
            if($updateResult){
                return json(['status' => 1,'msg' => '修改密码成功']);
            }else{
                return json(['status' => 10008,'msg' => '修改密码失败']);
            }
        }
    }

    /**
     * 上传头像 -> lj [2018/02/01]
     */
    public function uploadImage()
    {
        $file = request() -> file('image');
        if($file){
            $info = $file -> rule('unique') -> validate(['size' => 512000,'ext' => 'jpg,png,jpeg','type' => 'image/jpeg,image/png']) -> move(ROOT_PATH.self::PORTRAIT_SAVE_PATH);
            if($info){
                $savename = $info -> getSaveName(); // 保存文件路径
                $filename = self::PORTRAIT_SAVE_PATH.$savename;
                // $filename = $info -> getFilename(); // 保存文件名称
                // $filename = $info -> getPathname(); // 保存文件全路径
                return json(['status' => 1,'msg' => '保存头像成功','info' => $filename]);
            }else{
                $msg = $file -> getError();
                return json(['status' => 10009,'msg' => $msg]);
            }
        }else{
            return json(['status' => 10010,'msg' => '获取头像失败']);
        }
    }

    /**
     * 修改用户信息 -> lj [2018/02/02]
     */
    public function modifyUserInfo(UserInfo $user)
    {
        $data = $this -> getParameter(['userName','portrait','description','sex','email','mobile','province','city','country','address','birthdate']);
        $result = $user -> modifyInfo($data);
        if($result){
            return json(['status' => 10009,'msg' => $result]);
        }
        $uid = session('uid');
        $data['updateTime'] = date('Y-m-d H:i:s',time());
        $updateResult = Db::table('blog_user_info') 
                                -> where('id',$uid) -> update($data);
        if($updateResult){
            return json(['status' => 1,'msg' => '修改信息成功']);
        }else{
            return json(['status' => 10011,'msg' => '修改信息失败']);
        }
    }




    public function register()
    {
        return $this -> fetch();
    }

    public function login()
    {
        return $this -> fetch();
    }

    /**
     * 个人中心安全设置 -> lj [2018/01/31]
     */
    public function secure()
    {
        $uid = session('uid');
        $info = Db::table('blog_user_info') -> where('id',$uid) -> find();
        $this -> assign('userinfo',$info);
        return $this -> fetch();
    }




}
?>