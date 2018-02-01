<?php 
/**
 * 获取地址相关信息 -> lj [2018/01/29]
 */
namespace app\index\controller;
use app\index\controller\PublicController;
use think\Db;

class AddressController extends PublicController
{
    /**
     * 获取所有省份信息 -> lj [2018/01/29]
     */
    public function getProvince()
    {
        $province = Db::connect('DB_ADDRESS') -> table('province') -> select();
        return json(['status'=>1,'msg'=>'获取省份信息成功','info'=>$province]);
    }

    /**
     * 获取所有市信息 -> lj [2018/01/29]
     */
    public function getCity()
    {
        $city = Db::connect('DB_ADDRESS') -> table('city') -> select();
        return json(['status'=>1,'msg'=>'获取市信息成功','info'=>$city]);
    }

    /**
     * 获取所有县区信息 -> lj [2018/01/29]
     */
    public function getCountry()
    {
        $country = Db::connect('DB_ADDRESS') -> table('country') -> select();
        return json(['status'=>1,'msg'=>'获取县区信息成功','info'=>$country]);
    }

    /**
     * 根据省id获取市信息 -> lj [2018/01/29]
     */
    public function getCityByPid()
    {
        $data = $this->getParameter(['pid']); // 省id
        $city = Db::connect('DB_ADDRESS') -> table('city')
                            -> where('province_id',$data['pid']) -> select();
        return json(['status'=>1,'msg'=>'获取城市信息成功','info'=>$city]);
    }

    /**
     * 根据市id获取县区信息 -> lj [2018/01/29]
     */
    public function getCountryByCid()
    {
        $data = $this->getParameter(['cid']);
        $country = Db::connect('DB_ADDRESS') -> table('country')
                            -> where('city_id',$data['cid']) -> select();
        return json(['status'=>1,'msg'=>'获取县区信息成功','info'=>$country]);
    }




}