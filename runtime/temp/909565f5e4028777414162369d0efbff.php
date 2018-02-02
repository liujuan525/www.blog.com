<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:55:"/Users/Svn/www.blog.com/app/index/view/index/login.html";i:1517577618;}*/ ?>
<!DOCTYPE html>
<!-- 前台用户登录页面 -> lj [2018/01/26] -->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>不落阁用户登录</title>
        <link rel="stylesheet" href="/public//plug/layui/css/layui.css" media="all">
        <link rel="stylesheet" href="/public//index/Css/login.css">
        <!-- 验证码插件css -->
        <link rel="stylesheet" href="/public//plug/verify/css/verify.css">
    </head>
    <body class="beg-login-bg">
        <div class="beg-login-box">
            <fieldset class="layui-elem-field layui-field-title" style="border-color: #979797;padding-left: 106px;">
                <legend class="c-header">不落阁用户登录</legend>
            </fieldset>
            <div class="beg-login-main">
                <form action="home.html" class="layui-form" method="post">
                    <input name="" type="hidden" value="" />
                    <!-- 用户名 -->
                    <div class="layui-form-item">
                        <label class="beg-login-icon">
                                <i class="layui-icon icon-bg"></i>
                            </label>
                        <input type="text" name="userName" lay-verify="userName" autocomplete="off" placeholder="请输入账号" class="layui-input c-text" id="userName">
                    </div>
                    <!-- 密码 -->
                    <div class="layui-form-item">
                        <label class="beg-login-icon">
                                <i class="layui-icon icon-lock"></i>
                            </label>
                        <input type="password" name="password" lay-verify="password" autocomplete="off" placeholder="请输入密码" class="layui-input c-text" id="password">
                    </div>
                    <!-- 验证码 -->
                    <div class="layui-form-item">
                        <!-- <label class="beg-login-icon">
                                <i class="layui-icon icon-lock"></i>
                        </label> -->
                        <input type="hidden" id="image1" value="/public/plug/verify/images/">
                        <!-- <input type="hidden" id="image1" value="/public/plug/verify/images/1.jpg"> -->
                        <input type="hidden" id="image2" value="/public/plug/verify/images/2.jpg">
                        <div id="verify"></div>
                    </div>

                    <div class="layui-form-item">
                        <button type="button" lay-submit lay-filter="login" class="layui-btn layui-btn-primary c-btn" id="login">登录</button>
                    </div>
                </form>
            </div>

        </div>
        <script type="text/javascript" src="/public//plug/layui/layui.js"></script>
        <script type="text/javascript" src="/public//plug/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="/public//plug/verify/js/verify.min.js"></script>
        <script type="text/javascript">
            $('.layui-form').submit(function(){
                return false;
            })
            $(function(){
                $('#login').on('click', function(){
                    var userName = $('#userName').val();
                    var password = $('#password').val();
                    if(!userName){
                        alert('用户名不能为空');
                        return false;
                    }
                    if(password == ''){
                        alert('密码不能为空');
                        return false;
                    }
                    // return false;
                    $.post(
                        'userLogin', // 用户登录
                        {userName:userName,password:password},
                        function(result){
                            if(result.status == 1){
                                alert(result.msg);
                                location.href = 'home';
                                return false;                       
                            }else{
                                alert(result.msg);
                                return false;
                            }
                        },'json');
                })
            });

            image1 = $("#image1").val();
            image2 = $("#image2").val();
            console.log(image1);
            console.log(image2);

            $("#verify").slideVerify({
                //滑动验证码type=1，拼图验证码type=2
                type : 2,
                mode : 'fixed',
                vOffset : 5,
                vSpace : 5,
                explain : '向右滑动完成验证',
                //拼图验证码或选择验证码图片名称
                imgUrl : image1,
                imgName : ['1.jpg','2.jpg'],
                //拼图验证码的图片尺寸
                imgSize : {
                    width: '270px',
                    height: '100px',
                },
                blockSize : {
                    width: '40px',
                    height: '40px',
                },
                barSize : {
                    width : '270px',
                    height : '40px',
                },
                success: function(){
                    alert('验证成功,请输入信息或点击登录!');
                },
                error: function(){
                    alert('验证失败,请重新验证!');
                    return false;
                }
            });
        </script>
    </body>

</html>







