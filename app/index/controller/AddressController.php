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
        return $province;
    }

    /**
     * 获取所有市信息 -> lj [2018/01/29]
     */
    public function getCity()
    {
        $city = Db::connect('DB_ADDRESS') -> table('city') -> select();
        return $city;
    }

    /**
     * 获取所有县区信息 -> lj [2018/01/29]
     */
    public function getCountry()
    {
        $country = Db::connect('DB_ADDRESS') -> table('country') -> select();
        return $country;
    }

    /**
     * 根据省id获取市信息 -> lj [2018/01/29]
     */
    public function getCityByPid($pid)
    {
        $city = Db::connect('DB_ADDRESS') -> table('city')
                            -> where('province_id',$pid) -> select();
        return $city;
    }

    /**
     * 根据市id获取县区信息 -> lj [2018/01/29]
     */
    public function getCountryByCid($cid)
    {
        $country = Db::connect('DB_ADDRESS') -> table('country')
                            -> where('city_id',$cid) -> select();
        return $country;
    }




}