<?php 
/**
 * test
 * lj [2018/01/17]
 */
namespace app\index\controller;
use app\index\controller\PublicController;
use app\index\model\UserInfo;
use think\db\Query;
use think\Validate;



class TestController extends PublicController
{
    public function testLayer()
    {
        $str = 'Users/Svn/www.blog.com/app/upload/Images/20180202/12c7ef0e20e3553daf2e7dd843688e7d.jpg ';
        $preg = "/^[0-9]+/";
        $j = preg_match($preg,$str);
        return $j;
        // return $this->fetch('/layuitest');
    }

    // 资源分享首页展示 -> lj [2018/01/13]
    // public function index()
    // {
    //     return $this->fetch();
    // }
    
    public function upload()
    {
        $data = $this->getParameter(['imageurl']);
        return $data;
    }

    // 自定义初始化
    protected function initialize()
    {
        parent::initialize();
        // 下面写 自定义的初始化代码
    }

    public function userInfo()
    {
        debug('begin');
        $user = new UserInfo(); // 实例化模型
        $info = $user -> queryInfo();
        debug('end');
        // 进行统计区间
        echo debug('begin','end');
        // dump($info);
    }

    // 依赖 此方法结果同上面的userInfo()
    public function getInfo(UserInfo $user)
    {
        // $info = UserInfo::get(2,true); // 如果没有数据的话返回NULL 
        // $info = UserInfo::get(2);
        // dump($info);
        // UserInfo::get(2);
        // echo UserInfo::getLastSql();
    }

    // 添加数据
    public function testAdd(UserInfo $user)
    {
        $data = [
            ['userName'=>'thinkph', 'email'=>'thinkph5@qq.com','mobile'=>'12d12'],
            ['userName'=>'onethin', 'email'=>'onethin@qq.com','mobile'=>'434d34'],
        ];
        $user -> saveAll($data);
    }

    // 更新数据
    public function testUpdate(UserInfo $user)
    {
        $user = $user -> get(12);
        $user -> isDel = 1;
        // $user -> userName = 'javascript'; 
        $user -> updateTime = date('Y-m-d H:i:s',time());
        $user -> save();
        return $user->id;
    }

    // 删除数据
    public function testDelete()
    {
        // $result = UserInfo::destroy(['id'=>13]);
        $result = UserInfo::where(['id'=>15]) -> delete();
        if($result){
            return 'success'; // 删除成功 $result=1 失败 $result=0
        }else{
            return 'failed';
        }
    }

    // 查询数据
    public function testQuery(Query $query)
    {
        $user = UserInfo::all(function($query){
            $query -> where('id','lt',10) -> limit(2) -> order('updateTime desc');
        });
        dump($user);
    }

    public function testTest(UserInfo $user)
    {
        $user -> testValidate();
    }

    public function getStatusAttr($value)
    {
        $result = strtolower($value);
        return $result;
    }

    public function index()
    {
        // 直接把模板文件放到 view 文件夹下
        return $this->fetch('/about');
    }


}
?>