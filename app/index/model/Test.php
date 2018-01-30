<?php 
/**
 * 公共的模型类
 * 服务层:用户定义数据相关的自动验证和自动完成和数据存取接口
 * lj [2018/01/16]
 */
namespace app\index\model;
use think\Model;
use think\Db;
use think\Validate;


class Test extends Model
{
    protected $rule = [
        ['age','number|between:1,120','年龄必须是数字|年龄必须在1~120之间'],
        ['email','email','邮箱格式错误']
    ];
    // 验证场景
    protected $scene = [
        'edit' => ['name','age'],
        // 对规则重置
        'edit'  =>  ['name','age'=>'require|number|between:1,120'],
    ];
    // 验证规则
    // protected $rule = [
    //     'age'   => ['number','between'=>'1,120'],
    //     'email' => ['email'],
    // ];
    // // 返回信息
    // protected $msg = [
    //     'age.number' => '年龄必须是数字',
    //     'email' => '邮箱格式错误',
    // ];

    // protected $field = [
    //     'age'   => '年龄',
    //     'email' => '邮箱',    
    // ];

    // 测试验证
    public function testValidate()
    {
        // $validate = new Validate($this->rule,$this->msg);
        // $validate = new Validate($this->rule,[],$this->field);
        $validate = new Validate($this->rule);
        $data = [
            'age' => '125',
            'email' => 'afsasfda',
        ];
        if(!$validate->check($data)){
            dump($validate->getError());
        }
    }


    // 定义全局的查找范围-查询时自动过滤此条件
    protected function base($query)
    {
        $query -> where('isDel',0);
    }

    // 在模型类的init方法里面统一注册模型时间
    protected static function init()
    {
        UserInfo::event('before_insert',function($user){
            return $user;
        });
    }



    public function testModel()
    {
        // 类型转换
        $user = UserInfo::find(14);
        $user -> birthdate = date('Y-m-d H:i:s',time());
        $user -> save();
        echo $user->birthdate;
    }

    protected function scopeMobile($query)
    {
        $query -> where('mobile','1212') -> field('id,userName');
    }












}


?>