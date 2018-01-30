<?php 
/**
 * 公共控制器
 * lj [2018/01/23]
 */
namespace app\index\controller;
use think\Controller;

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




}
?>