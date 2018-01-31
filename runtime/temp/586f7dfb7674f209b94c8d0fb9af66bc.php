<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:54:"/Users/Svn/www.blog.com/app/index/view/user/login.html";i:1517369276;}*/ ?>
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
    </head>
    <body class="beg-login-bg">
        <div class="beg-login-box">
            <fieldset class="layui-elem-field layui-field-title" style="border-color: #979797;padding-left: 106px;">
                <legend class="c-header">不落阁用户登录</legend>
            </fieldset>
            <div class="beg-login-main">
                <form action="home.html" class="layui-form" method="post">
                    <input name="" type="hidden" value="" />
                    <div class="layui-form-item">
                        <label class="beg-login-icon">
                                <i class="layui-icon icon-bg"></i>
                            </label>
                        <input type="text" name="userName" lay-verify="userName" autocomplete="off" placeholder="请输入账号" class="layui-input c-text" id="userName">
                    </div>
                    <div class="layui-form-item">
                        <label class="beg-login-icon">
                                <i class="layui-icon icon-lock"></i>
                            </label>
                        <input type="password" name="password" lay-verify="password" autocomplete="off" placeholder="请输入密码" class="layui-input c-text" id="password">
                    </div>
                    <div class="layui-form-item">
                        <button type="button" lay-submit lay-filter="login" class="layui-btn layui-btn-primary c-btn" id="login">登录</button>
                    </div>
                </form>
            </div>

        </div>
        <script type="text/javascript" src="/public//plug/layui/layui.js"></script>
        <script type="text/javascript" src="/public//plug/jquery-2.1.4.min.js"></script>
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
            })
        </script>
    </body>

</html>







