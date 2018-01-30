<?php 
/**
 * 生活点点滴滴相关控制器
 * lj [2018/01/23]
 */
namespace app\index\controller;
use app\index\controller\PublicController;

class RecordController extends PublicController
{
    // 点点滴滴主页 -> lj [2018/01/23]
    public function index()
    {
        return $this->fetch();
    }
    


}
?>