<?php 
/**
 * 用户信息验证器 -> lj [2018/01/30]
 */
namespace app\index\validate;
use think\Validate;

class UserInfo extends Validate 
{
    // 验证规则
    protected $rule = [
        ['userName','require|max:128','用户名不能为空|用户名长度不能超过128个字节'],
        ['password','require','密码不能为空!'],
        ['repassWord','require|confirm:password','密码不能为空|两次输入的密码不一致'],
        ['mobile','require|mobile','手机号不能为空|手机号格式错误'],
        ['email','email','邮箱格式错误'],
    ];






}
?>