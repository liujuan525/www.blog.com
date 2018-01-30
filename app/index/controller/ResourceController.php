<?php 
/**
 * 资源分享相关控制器
 * lj [2018/01/23]
 */
namespace app\index\controller;
use app\index\controller\PublicController;

class ResourceController extends PublicController
{
    // 资源分享首页展示 -> lj [2018/01/13]
    public function index()
    {
        return $this->fetch();
    }


}
?>