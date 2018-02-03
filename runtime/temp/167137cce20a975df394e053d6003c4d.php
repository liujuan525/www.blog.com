<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:55:"/Users/Svn/www.blog.com/app/index/view/index/index.html";i:1517669472;s:57:"/Users/Svn/www.blog.com/app/index/view/Common/header.html";i:1517557470;s:57:"/Users/Svn/www.blog.com/app/index/view/Common/footer.html";i:1517321044;}*/ ?>

<!-- 引入头部文件 -->
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
                <?php if(!(empty($info) || (($info instanceof \think\Collection || $info instanceof \think\Paginator ) && $info->isEmpty()))): ?>
                    <a href="personalcenter.html"><i class="layui-icon" style="font-size:18px">&#xe60b;</i>&nbsp;个人中心</a>
                <?php else: ?>
                <a href="register.html">&nbsp;登录/注册</a>
                <?php endif; ?>
                </li>
                <!-- 退出登录 -->
                <?php if(!(empty($info['id']) || (($info['id'] instanceof \think\Collection || $info['id'] instanceof \think\Paginator ) && $info['id']->isEmpty()))): ?>
                <li class="layui-nav-item">
                    <a href="loginOut">退出登录</a>
                </li>
                <?php endif; ?>
                <!-- 此处为后期添加 -> lj [2018/01/25] -->
            </ul>
            <!-- 手机和平板的导航开关 -->
            <a class="blog-navicon" href="javascript:;">
                <i class="fa fa-navicon"></i>
            </a>
        </div>
    </nav>

<!-- 本页样式表 -->
<link href="/public//index/Css/home.css" rel="stylesheet" />


<!-- 主体（一般只改变这里的内容） -->
<div class="blog-body">
    <!-- canvas -->
    <canvas id="canvas-banner" style="background: #393D49;"></canvas>
    <!--为了及时效果需要立即设置canvas宽高，否则就在home.js中设置-->
    <script type="text/javascript">
        var canvas = document.getElementById('canvas-banner');
        canvas.width = window.document.body.clientWidth - 10;//减去滚动条的宽度
        if (screen.width >= 992) {
            canvas.height = window.innerHeight * 1 / 3;
        } else {
            canvas.height = window.innerHeight * 2 / 7;
        }
    </script>
    <!-- 这个一般才是真正的主体内容 -->
    <div class="blog-container">
        <div class="blog-main">
            <!--左边文章列表-->
            <div class="blog-main-left">
                <div class="article shadow">
                    <div class="article-left">
                        <img src="/public//index/Images/cover/201703181909057125.jpg" alt="基于laypage的layui扩展模块（pagesize.js）！" />
                    </div>
                    <div class="article-right">
                        <div class="article-title">
                            <a href="detail.html">基于laypage的layui扩展模块（pagesize.js）！</a>
                        </div>
                        <div class="article-abstract">
                            该模块主要是针对当前版本laypage没有页容量控制功能而制作，使用该模块后即可实现每页显示多少条数据的控制！本人原创，但是可能有可能只对本人的分页写法有用！
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="article-footer">
                        <span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;2017-03-18</span>
                        <span class="article-author"><i class="fa fa-user"></i>&nbsp;&nbsp;Absolutely</span>
                        <span><i class="fa fa-tag"></i>&nbsp;&nbsp;<a href="#">Web前端</a></span>
                        <span class="article-viewinfo"><i class="fa fa-eye"></i>&nbsp;0</span>
                        <span class="article-viewinfo"><i class="fa fa-commenting"></i>&nbsp;4</span>
                    </div>
                </div>
                <div class="article shadow">
                    <div class="article-left">
                        <img src="/public//index/Images/cover/201703181909057125.jpg" alt="基于laypage的layui扩展模块（pagesize.js）！" />
                    </div>
                    <div class="article-right">
                        <div class="article-title">
                            <a href="detail.html">基于laypage的layui扩展模块（pagesize.js）！</a>
                        </div>
                        <div class="article-abstract">
                            该模块主要是针对当前版本laypage没有页容量控制功能而制作，使用该模块后即可实现每页显示多少条数据的控制！本人原创，但是可能有可能只对本人的分页写法有用！
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="article-footer">
                        <span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;2017-03-18</span>
                        <span class="article-author"><i class="fa fa-user"></i>&nbsp;&nbsp;Absolutely</span>
                        <span><i class="fa fa-tag"></i>&nbsp;&nbsp;<a href="#">Web前端</a></span>
                        <span class="article-viewinfo"><i class="fa fa-eye"></i>&nbsp;0</span>
                        <span class="article-viewinfo"><i class="fa fa-commenting"></i>&nbsp;4</span>
                    </div>
                </div>
                <div class="article shadow">
                    <div class="article-left">
                        <img src="/public//index/Images/cover/201703181909057125.jpg" alt="基于laypage的layui扩展模块（pagesize.js）！" />
                    </div>
                    <div class="article-right">
                        <div class="article-title">
                            <a href="detail.html">基于laypage的layui扩展模块（pagesize.js）！</a>
                        </div>
                        <div class="article-abstract">
                            该模块主要是针对当前版本laypage没有页容量控制功能而制作，使用该模块后即可实现每页显示多少条数据的控制！本人原创，但是可能有可能只对本人的分页写法有用！
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="article-footer">
                        <span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;2017-03-18</span>
                        <span class="article-author"><i class="fa fa-user"></i>&nbsp;&nbsp;Absolutely</span>
                        <span><i class="fa fa-tag"></i>&nbsp;&nbsp;<a href="#">Web前端</a></span>
                        <span class="article-viewinfo"><i class="fa fa-eye"></i>&nbsp;0</span>
                        <span class="article-viewinfo"><i class="fa fa-commenting"></i>&nbsp;4</span>
                    </div>
                </div>
                <div class="article shadow">
                    <div class="article-left">
                        <img src="/public//index/Images/cover/201703181909057125.jpg" alt="基于laypage的layui扩展模块（pagesize.js）！" />
                    </div>
                    <div class="article-right">
                        <div class="article-title">
                            <a href="detail.html">基于laypage的layui扩展模块（pagesize.js）！</a>
                        </div>
                        <div class="article-abstract">
                            该模块主要是针对当前版本laypage没有页容量控制功能而制作，使用该模块后即可实现每页显示多少条数据的控制！本人原创，但是可能有可能只对本人的分页写法有用！
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="article-footer">
                        <span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;2017-03-18</span>
                        <span class="article-author"><i class="fa fa-user"></i>&nbsp;&nbsp;Absolutely</span>
                        <span><i class="fa fa-tag"></i>&nbsp;&nbsp;<a href="#">Web前端</a></span>
                        <span class="article-viewinfo"><i class="fa fa-eye"></i>&nbsp;0</span>
                        <span class="article-viewinfo"><i class="fa fa-commenting"></i>&nbsp;4</span>
                    </div>
                </div>
                <div class="article shadow">
                    <div class="article-left">
                        <img src="/public//index/Images/cover/201703181909057125.jpg" alt="基于laypage的layui扩展模块（pagesize.js）！" />
                    </div>
                    <div class="article-right">
                        <div class="article-title">
                            <a href="detail.html">基于laypage的layui扩展模块（pagesize.js）！</a>
                        </div>
                        <div class="article-abstract">
                            该模块主要是针对当前版本laypage没有页容量控制功能而制作，使用该模块后即可实现每页显示多少条数据的控制！本人原创，但是可能有可能只对本人的分页写法有用！
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="article-footer">
                        <span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;2017-03-18</span>
                        <span class="article-author"><i class="fa fa-user"></i>&nbsp;&nbsp;Absolutely</span>
                        <span><i class="fa fa-tag"></i>&nbsp;&nbsp;<a href="#">Web前端</a></span>
                        <span class="article-viewinfo"><i class="fa fa-eye"></i>&nbsp;0</span>
                        <span class="article-viewinfo"><i class="fa fa-commenting"></i>&nbsp;4</span>
                    </div>
                </div>
                <div class="article shadow">
                    <div class="article-left">
                        <img src="/public//index/Images/cover/201703181909057125.jpg" alt="基于laypage的layui扩展模块（pagesize.js）！" />
                    </div>
                    <div class="article-right">
                        <div class="article-title">
                            <a href="detail.html">基于laypage的layui扩展模块（pagesize.js）！</a>
                        </div>
                        <div class="article-abstract">
                            该模块主要是针对当前版本laypage没有页容量控制功能而制作，使用该模块后即可实现每页显示多少条数据的控制！本人原创，但是可能有可能只对本人的分页写法有用！
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="article-footer">
                        <span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;2017-03-18</span>
                        <span class="article-author"><i class="fa fa-user"></i>&nbsp;&nbsp;Absolutely</span>
                        <span><i class="fa fa-tag"></i>&nbsp;&nbsp;<a href="#">Web前端</a></span>
                        <span class="article-viewinfo"><i class="fa fa-eye"></i>&nbsp;0</span>
                        <span class="article-viewinfo"><i class="fa fa-commenting"></i>&nbsp;4</span>
                    </div>
                </div>
                <div class="article shadow">
                    <div class="article-left">
                        <img src="/public//index/Images/cover/201703181909057125.jpg" alt="基于laypage的layui扩展模块（pagesize.js）！" />
                    </div>
                    <div class="article-right">
                        <div class="article-title">
                            <a href="detail.html">基于laypage的layui扩展模块（pagesize.js）！</a>
                        </div>
                        <div class="article-abstract">
                            该模块主要是针对当前版本laypage没有页容量控制功能而制作，使用该模块后即可实现每页显示多少条数据的控制！本人原创，但是可能有可能只对本人的分页写法有用！
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="article-footer">
                        <span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;2017-03-18</span>
                        <span class="article-author"><i class="fa fa-user"></i>&nbsp;&nbsp;Absolutely</span>
                        <span><i class="fa fa-tag"></i>&nbsp;&nbsp;<a href="#">Web前端</a></span>
                        <span class="article-viewinfo"><i class="fa fa-eye"></i>&nbsp;0</span>
                        <span class="article-viewinfo"><i class="fa fa-commenting"></i>&nbsp;4</span>
                    </div>
                </div>
                <div class="article shadow">
                    <div class="article-left">
                        <img src="/public//index/Images/cover/201703181909057125.jpg" alt="基于laypage的layui扩展模块（pagesize.js）！" />
                    </div>
                    <div class="article-right">
                        <div class="article-title">
                            <a href="detail.html">基于laypage的layui扩展模块（pagesize.js）！</a>
                        </div>
                        <div class="article-abstract">
                            该模块主要是针对当前版本laypage没有页容量控制功能而制作，使用该模块后即可实现每页显示多少条数据的控制！本人原创，但是可能有可能只对本人的分页写法有用！
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="article-footer">
                        <span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;2017-03-18</span>
                        <span class="article-author"><i class="fa fa-user"></i>&nbsp;&nbsp;Absolutely</span>
                        <span><i class="fa fa-tag"></i>&nbsp;&nbsp;<a href="#">Web前端</a></span>
                        <span class="article-viewinfo"><i class="fa fa-eye"></i>&nbsp;0</span>
                        <span class="article-viewinfo"><i class="fa fa-commenting"></i>&nbsp;4</span>
                    </div>
                </div>
            </div>
            <!--右边小栏目-->
            <div class="blog-main-right">
                <?php if(!(empty($info) || (($info instanceof \think\Collection || $info instanceof \think\Paginator ) && $info->isEmpty()))): ?>
                    <div class="blogerinfo shadow">
                        <div class="blogerinfo-figure">
                            <?php if(!(empty($info['portrait']) || (($info['portrait'] instanceof \think\Collection || $info['portrait'] instanceof \think\Paginator ) && $info['portrait']->isEmpty()))): ?>
                            <img src="/upload/Images/<?php echo $info['portrait']; ?>" style="width:100px;height:100px;" alt="Absolutely" />
                            <?php else: ?>
                            <img src="/public//index/Images/Absolutely.jpg" alt="Absolutely" />
                            <?php endif; ?>
                        </div>
                        <p class="blogerinfo-nickname"><?php echo $info['userName']; ?></p>
                        <p class="blogerinfo-introduce"><?php echo $info['email']; ?></p>
                        <p class="blogerinfo-location"><?php echo $info['mobile']; ?></p>
                        <hr />
                    </div>
                <?php endif; ?>
                <div></div><!--占位-->
                <div class="blog-module shadow">
                    <div class="blog-module-title">热文排行</div>
                    <ul class="fa-ul blog-module-ul">
                        <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">Web安全之跨站请求伪造CSRF</a></li>
                        <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">ASP.NET MVC 防范跨站请求伪造（CSRF）</a></li>
                        <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">常用正则表达式</a></li>
                        <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">EF CodeFirst数据迁移常用指令</a></li>
                        <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">浅谈.NET Framework基元类型</a></li>
                        <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">C#基础知识回顾-扩展方法</a></li>
                        <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">一步步制作时光轴（一）（HTML篇）</a></li>
                        <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">一步步制作时光轴（二）（CSS篇）</a></li>
                    </ul>
                </div>
                <div class="blog-module shadow">
                    <div class="blog-module-title">最近分享</div>
                    <ul class="fa-ul blog-module-ul">
                        <li><i class="fa-li fa fa-hand-o-right"></i><a href="http://pan.baidu.com/s/1c1BJ6Qc" target="_blank">Canvas</a></li>
                        <li><i class="fa-li fa fa-hand-o-right"></i><a href="http://pan.baidu.com/s/1kVK8UhT" target="_blank">pagesize.js</a></li>
                        <li><i class="fa-li fa fa-hand-o-right"></i><a href="https://pan.baidu.com/s/1mit2aiW" target="_blank">时光轴</a></li>
                        <li><i class="fa-li fa fa-hand-o-right"></i><a href="https://pan.baidu.com/s/1nuAKF81" target="_blank">图片轮播</a></li>
                    </ul>
                </div>
                <div class="blog-module shadow">
                    <div class="blog-module-title">一路走来</div>
                    <dl class="footprint">
                        <dt>2017年03月12日</dt>
                        <dd>新增留言回复功能！人人都可参与回复！</dd>
                        <dt>2017年03月10日</dt>
                        <dd>不落阁2.0基本功能完成，正式上线！</dd>
                        <dt>2017年03月09日</dt>
                        <dd>新增文章搜索功能！</dd>
                        <dt>2017年02月25日</dt>
                        <dd>QQ互联接入网站，可QQ登陆发表评论与留言！</dd>
                    </dl>
                </div>
                <div class="blog-module shadow">
                    <div class="blog-module-title">后台记录</div>
                    <dl class="footprint">
                        <dt>2017年03月16日</dt>
                        <dd>分页新增页容量控制</dd>
                        <dt>2017年03月12日</dt>
                        <dd>新增管家提醒功能</dd>
                        <dt>2017年03月10日</dt>
                        <dd>新增Win10快捷菜单</dd>
                    </dl>
                </div>
                <div class="blog-module shadow">
                    <div class="blog-module-title">友情链接</div>
                    <ul class="blogroll">
                        <li><a target="_blank" href="http://www.layui.com/" title="Layui">Layui</a></li>
                        <li><a target="_blank" href="http://www.pagemark.cn/" title="页签">页签</a></li>
                    </ul>
                </div>
            </div>
            <div class="clear"></div>
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
<!-- 本页脚本 -->
<script src="/public//index/Js/home.js"></script>
    