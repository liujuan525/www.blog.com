<?php 
/**
 * 后台控制器
 * lj [2018/01/23]
 */
namespace app\admin\controller;
use think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return $this->fetch('/index');
    }

    public function datail()
    {
        return $this->fetch('/datalist');
    }

    public function login()
    {
        return $this->fetch('/login');
    }

    public function main()
    {
        return $this->fetch('/main');
    }


}
?>