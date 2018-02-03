<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:58:"/Users/Svn/www.blog.com/app/index/view/index/register.html";i:1517629205;}*/ ?>
<!DOCTYPE html>
<!-- 前台用户注册页面 -> lj [2018/01/26] -->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>不落阁用户注册</title>
        <!--Layui-->
        <link href="/public//plug/layui/css/layui.css" rel="stylesheet" />
        <!--全局样式表-->
        <link href="/public//index/Css/global.css" rel="stylesheet" />
        <!-- 注册样式表 -->
        <link href="/public//index/Css/register.css" rel="stylesheet" />
    </head>

    <body class="beg-login-bg">
        <div class="beg-login-box">
            <div class="register-style">
                <fieldset class="layui-elem-field layui-field-title" style="border-color: #979797;padding-left: 106px;">
                    <legend class="c-header">不落阁用户注册</legend>
                </fieldset>
                <div class="beg-login-main">
                    <form action="index.html" class="layui-form" method="post">
                        <input name="" type="hidden" value="" />

                        <div class="layui-form-item">
                            <label class="beg-login-icon">
                                    <i class="layui-icon icon-bg"></i>
                                </label>
                            <input type="text" name="userName" lay-verify="required|username" autocomplete="off" placeholder="请输入账号" class="layui-input c-text" id="userName">
                        </div>
                        <div class="layui-form-item">
                            <label class="beg-login-icon">
                                    <i class="layui-icon icon-lock"></i>
                                </label>
                            <input type="password" name="password" lay-verify="required|password|pass" autocomplete="off" placeholder="请输入密码" class="layui-input c-text" id="password">
                        </div>
                        <div class="layui-form-item">
                            <label class="beg-login-icon">
                                    <i class="layui-icon icon-lock"></i>
                                </label>
                            <input type="password" name="repassword" lay-verify="required|password" autocomplete="off" placeholder="请再次输入密码" class="layui-input c-text" id="repassWord">
                        </div>
                        <div class="layui-form-item">
                            <label class="beg-login-icon">
                                    <i class="layui-icon icon-lock"></i>
                                </label>
                            <input type="text" name="mobile" lay-verify="required|phone|number" autocomplete="off" placeholder="请输入手机号" class="layui-input c-text" id="mobile">
                        </div>
                        <div class="layui-form-item">
                            <label class="beg-login-icon">
                                    <i class="layui-icon icon-lock"></i>
                                </label>
                            <input type="email" name="email" lay-verify="required|email" autocomplete="off" placeholder="请输入邮箱地址" class="layui-input c-text" id="email">
                        </div>
                        <div class="layui-form-item">
                            <button lay-submit lay-filter="register" class="layui-btn layui-btn-primary c-btn" id="register">提交</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- 两个div之间加一条竖线 -->
            <div class="centerdiv"></div>
            <div class="login-style">
                <fieldset class="layui-elem-field layui-field-title" style="border-color: #979797;padding-left: 106px;">
                    <legend class="c-header">不落阁用户登录</legend>
                </fieldset>
                <a class="blog-logo" href="indexLogin.html">如果您已注册,请点击此处登录</a>
            </div>
        </div>
            
        </div>
        <script type="text/javascript" src="/public//plug/layui/layui.js"></script>
        <!-- <script type="text/javascript" src="/public//plug/jquery-2.1.4.min.js"></script> -->
        <!-- 引入页面js -->
        <script type="text/javascript" src="/public//index/Js/register.js"></script>
    </body>

</html>