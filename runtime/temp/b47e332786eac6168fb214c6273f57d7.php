<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:58:"/Users/Svn/www.blog.com/app/index/view/resource/index.html";i:1517324617;s:57:"/Users/Svn/www.blog.com/app/index/view/Common/header.html";i:1517321200;s:57:"/Users/Svn/www.blog.com/app/index/view/Common/footer.html";i:1517321044;}*/ ?>
﻿<!-- 引入头部文件 -->
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; Charset=gb2312">
    <meta http-equiv="Content-Language" content="zh-CN">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <title>关于网络技术的博客网站</title>
    <link rel="shortcut icon" href="/public//index/Images/Logo_40.png" type="image/x-icon">
    <!--Layui-->
    <link href="/public//plug/layui/css/layui.css" rel="stylesheet" />
    <!--font-awesome-->
    <link href="/public//plug/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <!--全局样式表-->
    <link href="/public//index/Css/global.css" rel="stylesheet" />

</head>
<body>
    <!-- 导航 -->
    <nav class="blog-nav layui-header">
        <div class="blog-container">
            <a href="javascript:;" class="blog-user layui-hide">
                <img src="/public//index/Images/Absolutely.jpg" alt="Absolutely" title="Absolutely" />
            </a>
            <!-- 不落阁 -->
            <a class="blog-logo" href="home.html">不落阁</a>
            <!-- 导航菜单 -->
            <ul class="layui-nav" lay-filter="nav">
                <li class="layui-nav-item layui-this">
                    <a href="home.html"><i class="fa fa-home fa-fw"></i>&nbsp;网站首页</a>
                </li>
                <li class="layui-nav-item">
                    <a href="article.html"><i class="fa fa-file-text fa-fw"></i>&nbsp;文章专栏</a>
                </li>
                <li class="layui-nav-item">
                    <a href="resource.html"><i class="fa fa-tags fa-fw"></i>&nbsp;资源分享</a>
                </li>
                <li class="layui-nav-item">
                    <a href="timeline.html"><i class="fa fa-hourglass-half fa-fw"></i>&nbsp;点点滴滴</a>
                </li>
                <li class="layui-nav-item">
                    <a href="about.html"><i class="fa fa-info fa-fw"></i>&nbsp;关于本站</a>
                </li>
                <!-- 此处为后期添加 -> lj [2018/01/25] -->
                <li class="layui-nav-item">
                    <?php if($info){ 
                        echo '<a href="personalcenter.html">&nbsp;个人中心</a>';
                    }else{
                        echo '<a href="register.html">&nbsp;登录/注册</a>';
                    } ?>
                </li>
                <!-- 此处为后期添加 -> lj [2018/01/25] -->
            </ul>
            <!-- 手机和平板的导航开关 -->
            <a class="blog-navicon" href="javascript:;">
                <i class="fa fa-navicon"></i>
            </a>
        </div>
    </nav>

<!-- 本页样式表 -->
<link href="/public//index/Css/resource.css" rel="stylesheet" />

    <!-- 主体（一般只改变这里的内容） -->
    <div class="blog-body">
        <div class="blog-container">
            <blockquote class="layui-elem-quote sitemap layui-breadcrumb shadow">
                <a href="home.html" title="网站首页">网站首页</a>
                <a><cite>资源分享</cite></a>
            </blockquote>
            <div class="blog-main">
                <div class="blog-main">
                    <div class="child-nav shadow">
                        <span class="child-nav-btn child-nav-btn-this">全部</span>
                        <span class="child-nav-btn">源码</span>
                        <span class="child-nav-btn">工具</span>
                        <span class="child-nav-btn">电子书</span>
                    </div>
                    <div class="resource-main">
                        <div class="resource shadow">
                            <div class="resource-cover">
                                <a href="javascript:layer.msg(&#39;这里填演示地址&#39;)" target="_blank">
                                    <img src="/public//index/Images/cover/201703051349045432.jpg" alt="时光轴" />
                                </a>
                            </div>
                            <h1 class="resource-title"><a href="javascript:layer.msg(&#39;这里填演示地址&#39;)" target="_blank">时光轴</a></h1>
                            <p class="resource-abstract">本博客使用的时光轴的源码，手工打造！</p>
                            <div class="resource-info">
                                <span class="category"><a href="javascript:layer.msg(&#39;这里跳转到相应分类&#39;)"><i class="fa fa-tags fa-fw"></i>&nbsp;源码</a></span>
                                <span class="author"><i class="fa fa-user fa-fw"></i>Absolutely</span>
                                <div class="clear"></div>
                            </div>
                            <div class="resource-footer">
                                <a class="layui-btn layui-btn-small layui-btn-primary" href="javascript:layer.msg(&#39;这里填演示地址&#39;)" target="_blank"><i class="fa fa-eye fa-fw"></i>演示</a>
                                <a class="layui-btn layui-btn-small layui-btn-primary" href="javascript:layer.msg(&#39;这里填下载地址&#39;)" target="_blank"><i class="fa fa-download fa-fw"></i>下载</a>
                            </div>
                        </div>
                        <div class="resource shadow">
                            <div class="resource-cover">
                                <a href="javascript:layer.msg(&#39;这里填演示地址&#39;)" target="_blank">
                                    <img src="/public//index/Images/cover/201703051349045432.jpg" alt="时光轴" />
                                </a>
                            </div>
                            <h1 class="resource-title"><a href="javascript:layer.msg(&#39;这里填演示地址&#39;)" target="_blank">时光轴</a></h1>
                            <p class="resource-abstract">本博客使用的时光轴的源码，手工打造！</p>
                            <div class="resource-info">
                                <span class="category"><a href="javascript:layer.msg(&#39;这里跳转到相应分类&#39;)"><i class="fa fa-tags fa-fw"></i>&nbsp;源码</a></span>
                                <span class="author"><i class="fa fa-user fa-fw"></i>Absolutely</span>
                                <div class="clear"></div>
                            </div>
                            <div class="resource-footer">
                                <a class="layui-btn layui-btn-small layui-btn-primary" href="javascript:layer.msg(&#39;这里填演示地址&#39;)" target="_blank"><i class="fa fa-eye fa-fw"></i>演示</a>
                                <a class="layui-btn layui-btn-small layui-btn-primary" href="javascript:layer.msg(&#39;这里填下载地址&#39;)" target="_blank"><i class="fa fa-download fa-fw"></i>下载</a>
                            </div>
                        </div>
                        <div class="resource shadow">
                            <div class="resource-cover">
                                <a href="javascript:layer.msg(&#39;这里填演示地址&#39;)" target="_blank">
                                    <img src="/public//index/Images/cover/201703051349045432.jpg" alt="时光轴" />
                                </a>
                            </div>
                            <h1 class="resource-title"><a href="javascript:layer.msg(&#39;这里填演示地址&#39;)" target="_blank">时光轴</a></h1>
                            <p class="resource-abstract">本博客使用的时光轴的源码，手工打造！</p>
                            <div class="resource-info">
                                <span class="category"><a href="javascript:layer.msg(&#39;这里跳转到相应分类&#39;)"><i class="fa fa-tags fa-fw"></i>&nbsp;源码</a></span>
                                <span class="author"><i class="fa fa-user fa-fw"></i>Absolutely</span>
                                <div class="clear"></div>
                            </div>
                            <div class="resource-footer">
                                <a class="layui-btn layui-btn-small layui-btn-primary" href="javascript:layer.msg(&#39;这里填演示地址&#39;)" target="_blank"><i class="fa fa-eye fa-fw"></i>演示</a>
                                <a class="layui-btn layui-btn-small layui-btn-primary" href="javascript:layer.msg(&#39;这里填下载地址&#39;)" target="_blank"><i class="fa fa-download fa-fw"></i>下载</a>
                            </div>
                        </div>
                        <div class="resource shadow">
                            <div class="resource-cover">
                                <a href="javascript:layer.msg(&#39;这里填演示地址&#39;)" target="_blank">
                                    <img src="/public//index/Images/cover/201703051349045432.jpg" alt="时光轴" />
                                </a>
                            </div>
                            <h1 class="resource-title"><a href="javascript:layer.msg(&#39;这里填演示地址&#39;)" target="_blank">时光轴</a></h1>
                            <p class="resource-abstract">本博客使用的时光轴的源码，手工打造！</p>
                            <div class="resource-info">
                                <span class="category"><a href="javascript:layer.msg(&#39;这里跳转到相应分类&#39;)"><i class="fa fa-tags fa-fw"></i>&nbsp;源码</a></span>
                                <span class="author"><i class="fa fa-user fa-fw"></i>Absolutely</span>
                                <div class="clear"></div>
                            </div>
                            <div class="resource-footer">
                                <a class="layui-btn layui-btn-small layui-btn-primary" href="javascript:layer.msg(&#39;这里填演示地址&#39;)" target="_blank"><i class="fa fa-eye fa-fw"></i>演示</a>
                                <a class="layui-btn layui-btn-small layui-btn-primary" href="javascript:layer.msg(&#39;这里填下载地址&#39;)" target="_blank"><i class="fa fa-download fa-fw"></i>下载</a>
                            </div>
                        </div>
                        <div class="resource shadow">
                            <div class="resource-cover">
                                <a href="javascript:layer.msg(&#39;这里填演示地址&#39;)" target="_blank">
                                    <img src="/public//index/Images/cover/201703051349045432.jpg" alt="时光轴" />
                                </a>
                            </div>
                            <h1 class="resource-title"><a href="javascript:layer.msg(&#39;这里填演示地址&#39;)" target="_blank">时光轴</a></h1>
                            <p class="resource-abstract">本博客使用的时光轴的源码，手工打造！</p>
                            <div class="resource-info">
                                <span class="category"><a href="javascript:layer.msg(&#39;这里跳转到相应分类&#39;)"><i class="fa fa-tags fa-fw"></i>&nbsp;源码</a></span>
                                <span class="author"><i class="fa fa-user fa-fw"></i>Absolutely</span>
                                <div class="clear"></div>
                            </div>
                            <div class="resource-footer">
                                <a class="layui-btn layui-btn-small layui-btn-primary" href="javascript:layer.msg(&#39;这里填演示地址&#39;)" target="_blank"><i class="fa fa-eye fa-fw"></i>演示</a>
                                <a class="layui-btn layui-btn-small layui-btn-primary" href="javascript:layer.msg(&#39;这里填下载地址&#39;)" target="_blank"><i class="fa fa-download fa-fw"></i>下载</a>
                            </div>
                        </div>
                        <!-- 清除浮动 -->
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<!-- 引入尾部文件 -->
    <!-- 底部 -->
<footer class="blog-footer">
        <p><span>Copyright</span><span>&copy;</span><span>2017</span><a href="http://www.lyblogs.cn">不落阁</a><span>Design By LY</span></p>
        <p><a href="http://www.miibeian.gov.cn/" target="_blank">蜀ICP备16029915号-1</a></p>
    </footer>
    <!--侧边导航-->
    <ul class="layui-nav layui-nav-tree layui-nav-side blog-nav-left layui-hide" lay-filter="nav">
        <li class="layui-nav-item layui-this">
            <a href="home.html"><i class="fa fa-home fa-fw"></i>&nbsp;网站首页</a>
        </li>
        <li class="layui-nav-item">
            <a href="article.html"><i class="fa fa-file-text fa-fw"></i>&nbsp;文章专栏</a>
        </li>
        <li class="layui-nav-item">
            <a href="resource.html"><i class="fa fa-tags fa-fw"></i>&nbsp;资源分享</a>
        </li>
        <li class="layui-nav-item">
            <a href="timeline.html"><i class="fa fa-road fa-fw"></i>&nbsp;点点滴滴</a>
        </li>
        <li class="layui-nav-item">
            <a href="about.html"><i class="fa fa-info fa-fw"></i>&nbsp;关于本站</a>
        </li>
    </ul>
    <!--分享窗体-->
    <div class="blog-share layui-hide">
        <div class="blog-share-body">
            <div style="width: 200px;height:100%;">
                <div class="bdsharebuttonbox">
                    <a class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                    <a class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                    <a class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                    <a class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a>
                </div>
            </div>
        </div>
    </div>
    <!--遮罩-->
    <div class="blog-mask animated layui-hide"></div>
    <!-- layui.js -->
    <script src="/public//plug/layui/layui.js"></script>
    <!-- 全局脚本 -->
    <script src="/public//index/Js/global.js"></script>
    <!-- jquery.js -->
    <!-- <script type="text/javascript" src="/public//plug/jquery-2.1.4.min.js"></script> -->
</body>
</html>