<?php 
/**
 * 文章专栏相关控制器
 * lj [2018/01/23]
 */
namespace app\index\controller;
use app\index\controller\PublicController;

class ArticleController extends PublicController
{
    /**
     * 文章首页展示 -> lj [2018/01/23]
     */
    public function index()
    {
        return $this->fetch();
    }

    /**
     * 文章详情 -> lj [2018/01/25]
     */
    public function detail()
    {
        return $this->fetch();
    }



}
?>