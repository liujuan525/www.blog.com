<?php 
/**
 * 关于本站相关控制器
 * lj [2018/01/23]
 */
namespace app\index\controller;
use app\index\controller\PublicController;

class WebsiteController extends PublicController
{
    // 关于网站首页展示 -> lj [2018/01/23]
    public function index()
    {
        return $this->fetch();
    }


}
?>