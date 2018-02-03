<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:55:"/Users/Svn/www.blog.com/app/index/view/user/secure.html";i:1517630542;}*/ ?>
<!DOCTYPE html>
<!-- 前台安全设置页面 -> lj [2018/01/28] -->
<html>
<head>
    <meta charset="utf-8">
    <title>不落阁个人中心</title>
                <!-- 以下为css文件 -->
    <!--Layui-->
    <link href="/public//plug/layui/css/layui.css" rel="stylesheet" />
    <!--font-awesome-->
    <link href="/public//plug/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <!--全局样式表-->
    <link href="/public//index/Css/global.css" rel="stylesheet" />
    <!-- 本页样式表 -->
    <link href="/public//index/Css/personalcenter.css" rel="stylesheet" />
</head>
<body class="layui-layout-body">
    <div class="layui-layout layui-layout-admin">
    <!-- 头部区域 -->
        <div class="layui-header">
            <div class="layui-logo">不落阁用户登录</div>
            <!-- 头部区域 左侧 -->
            <ul class="layui-nav layui-layout-left">
                <li class="layui-nav-item"><a href="home.html">网站首页</a></li>
                <li class="layui-nav-item">
                    <a href="article.html">文章专栏</a>
                    <dl class="layui-nav-child">
                        <dd><a href="">文章管理</a></dd>
                        <dd><a href="">编辑文章</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item"><a href="resource.html">资源分享</a></li>
                <li class="layui-nav-item"><a href="timeline.html">点点滴滴</a></li>
                <li class="layui-nav-item"><a href="about.html">关于本站</a></li>
            </ul>
            <!-- 头部区域 右侧 -->
            <ul class="layui-nav layui-layout-right">
                <li class="layui-nav-item">
                    <a href="">消息<span class="layui-badge">5</span></a>
                </li>
                <li class="layui-nav-item">
                    <a href="javascript:;">
                    <img src="/public//index/Images/Absolutely.jpg" class="layui-nav-img">
                    <?php echo $userinfo['userName']; ?>
                </a>
                </li>
                <li class="layui-nav-item">
                    <a href="">退出登录</a>
                </li>
            </ul>
        </div>

    <!-- 左侧导航区域  -->
        <div class="layui-side layui-bg-black">
            <div class="layui-side-scroll">
                <ul class="layui-nav layui-nav-tree" lay-filter="test">
                    <li class="layui-nav-item layui-nav-itemed">
                        <a href="personalCenter">基本资料</a>
                    </li>
                    <li class="layui-nav-item">
                        <a href="securesetting">安全设置</a>
                    </li>
                </ul>
            </div>
        </div>
    
    <!-- 内容主题区域  -->
        <div class="layui-body layui-bg-gray" style="margin-top:5%;">
            <form class="layui-form" action="" method="post">
                <!-- 原密码 -->
                <div class="layui-form-item">
                    <label class="layui-form-label">原密码</label>
                    <div class="layui-input-block">
                        <input type="password" name="password" required lay-verify="required| password" placeholder="请输入密码" autocomplete="off" class="layui-input user-defined" id="password">
                    </div>
                </div> 
                <!-- 修改后的密码 -->
                <div class="layui-form-item">
                    <label class="layui-form-label">新密码</label>
                    <div class="layui-input-block">
                        <input type="password" name="newpassword" required lay-verify="required |checkPass" placeholder="请输入修改后的密码" autocomplete="off" class="layui-input user-defined" id="newpassword">
                    </div>
                </div> 
                <!-- 提交修改或者放弃修改 -->
                <div class="layui-form-item">
                    <div class="layui-input-block">
                        <button type="button" class="layui-btn" lay-submit lay-filter="change" id="change">提交</button>
                        <!-- <button type="reset" class="layui-btn" layui-btn id="reset">重置</button> -->
                    </div>
                    
                </div>

            </form> 
        </div>

    <!-- 底部区域 -->
        <div class="layui-footer">
            <p class="layui-bg-gray" style="text-align: center;font-size: 18px;font-weight: bold;">最终解释权归 www.blog.com 所有</p>
        </div>
    </div>

                <!-- 以下为js文件 -->
   <!--遮罩-->
    <div class="blog-mask animated layui-hide"></div>
    <!-- layui.js -->
    <script src="/public//plug/layui/layui.js"></script>
    <!-- 全局脚本 -->
    <script src="/public//index/Js/global.js"></script>
    <!-- jquery.js -->
    <script type="text/javascript" src="/public//plug/jquery-2.1.4.min.js"></script> 
    
    <script type="text/javascript">

        layui.use(['form','layer'],function(){
            var layer = layui.layer;
            var form = layui.form;
            var $ = layui.jquery;

            // 自定义验证规则
            form.verify({
                checkPass: [
                    // /^[\S]{6,12}$/
                    /^[a-z0-9_-]{6,18}$/
                    ,'密码必须由字母或数字组成的6到18位'
                ] 
            });

            // 监听事件
            form.on('submit(change)',function(data){
                $("#change").on('click',function(){
                    var password = $("#password").val();
                    var newpassword = $("#newpassword").val();
                    if(!password){
                        layer.msg('密码不能为空');
                        return false;
                    }
                    if(!newpassword){
                        layer.msg('修改密码不能为空');
                        return false;
                    }
                    if(password == newpassword){
                        layer.msg('两次输入的密码不能一致');
                        return false;
                    }

                    $.post(
                        'changePass', 
                        {password:password,newpassword:newpassword},
                        function(result){
                            if(result.status == 1){
                                console.log(result);
                                // layer.msg(result.msg);
                                alert(result.msg);
                                location.href = 'securesetting';
                            }else{
                                layer.msg(result.msg);
                                return false;
                            }
                        },'json')
                });

            });



        });

    </script>

</body>
</html>