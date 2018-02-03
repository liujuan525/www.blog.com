<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:63:"/Users/Svn/www.blog.com/app/index/view/user/personalCenter.html";i:1517673038;}*/ ?>
<!DOCTYPE html>
<!-- 前台个人中心页面 -> lj [2018/01/26] -->
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
                    <?php if(!(empty($userinfo['portrait']) || (($userinfo['portrait'] instanceof \think\Collection || $userinfo['portrait'] instanceof \think\Paginator ) && $userinfo['portrait']->isEmpty()))): ?>
                    <img src="/upload/Images/<?php echo $userinfo['portrait']; ?>" style="width:25px;height:25px;">
                    <?php else: ?>
                    <img src="/public//index/Images/Absolutely.jpg" class="layui-nav-img">
                    <?php endif; ?>
                    <?php echo $userinfo['userName']; ?>
                </a>
                </li>
                <li class="layui-nav-item">
                    <a href="loginOut">退出登录</a>
                </li>
            </ul>
        </div>

    <!-- 左侧导航区域  -->
        <!-- 下面代码为选项卡方式 -->
        <div class="layui-side layui-bg-black">

            <!-- 以下代码为链接方式 -->
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
        <div class="layui-body layui-bg-gray" style="margin-top:3%;">
            <form class="layui-form" action="" method="post">
                <!-- 用户名 -->
                <div class="layui-form-item">
                    <label class="layui-form-label">用户名</label>
                    <div class="layui-input-block">
                        <input type="text" name="userName" required lay-verify="required" class="layui-input user-defined" value="<?php echo (isset($userinfo['userName']) && ($userinfo['userName'] !== '')?$userinfo['userName']:'请输入用户名'); ?>">
                    </div>
                </div> 
                <!-- 头像 -->
                <div class="layui-form-item">
                    <label class="layui-form-label">上传头像</label>
                    <?php if(!(empty($userinfo['portrait']) || (($userinfo['portrait'] instanceof \think\Collection || $userinfo['portrait'] instanceof \think\Paginator ) && $userinfo['portrait']->isEmpty()))): ?>
                    <image src="/upload/Images/<?php echo $userinfo['portrait']; ?>" style="width:200px;height:200px;">
                    <?php endif; ?>
                    <input class="layui-icon" type="file" name="image" id="upimage">
                </div> 
                <!-- 邮箱 -->
                <div class="layui-form-item">
                    <label class="layui-form-label">邮箱</label>
                    <div class="layui-input-block">
                        <input type="email" name="email" required lay-verify="required email" class="layui-input user-defined" value="<?php echo (isset($userinfo['email']) && ($userinfo['email'] !== '')?$userinfo['email']:'请输入邮箱'); ?>">
                    </div>
                </div> 
                <!-- 手机号 -->
                <div class="layui-form-item">
                    <label class="layui-form-label">手机号</label>
                    <div class="layui-input-block">
                        <input type="phone" name="phone" required lay-verify="required phone" class="layui-input user-defined" value="<?php echo (isset($userinfo['mobile']) && ($userinfo['mobile'] !== '')?$userinfo['mobile']:'请输入手机号'); ?>">
                    </div>
                </div> 
                <!-- 出生日期 -->
                <div class="layui-form-item">
                    <label class="layui-form-label">生日</label>
                    <div class="layui-input-block">
                        <?php if(!(empty($userinfo['birthdate']) || (($userinfo['birthdate'] instanceof \think\Collection || $userinfo['birthdate'] instanceof \think\Paginator ) && $userinfo['birthdate']->isEmpty()))): ?>
                        <input type="datetime" name="birth" id="birthday" lay-verify="date" class="layui-input user-defined" value="<?php echo $userinfo['birthdate']; ?>">
                        <?php else: ?>
                        <input type="datetime" name="birth" lay-verify="date" class="layui-input user-defined" placeholder="请选择日期" id="birthday">
                        <?php endif; ?>
                    </div>
                </div>

                <!-- 用户地址 -->
                <div class="layui-form-item">
                    <label class="layui-form-label">地址:</label>
                    <!-- 省 -->
                        <div class="layui-form-item">
                            <label class="layui-form-label">省</label>
                            <div class="layui-input-block">
                                <select name="province" id="province"  lay-filter="sheng">
                                    <option value="">请选择</option>
                                    <?php foreach($province as $info): if($userinfo['province'] == $info['province_name']): ?>
                                    <option value="<?php echo $info['province_id']; ?>" selected><?php echo $info['province_name']; ?></option>
                                        <?php else: ?>
                                    <option value="<?php echo $info['province_id']; ?>"><?php echo $info['province_name']; ?></option>
                                        <?php endif; endforeach; ?>
                                </select>
                            </div>
                        </div>
                    <!-- 市 -->
                    <div class="layui-form-item">
                        <label class="layui-form-label">市</label>
                        <div class="layui-input-block">
                            <select name="city" id="city" lay-filter="shi">
                                <?php if(!(empty($userinfo['city']) || (($userinfo['city'] instanceof \think\Collection || $userinfo['city'] instanceof \think\Paginator ) && $userinfo['city']->isEmpty()))): ?>
                                    <option value="" selected><?php echo $userinfo['city']; ?></option>
                                <?php else: ?>
                                    <option value="">请选择</option>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                    <!-- 县/区 -->
                    <div class="layui-form-item">
                        <label class="layui-form-label">县/区</label>
                        <div class="layui-input-block">
                            <select name="country" id="country" lay-filter="qu">
                                <?php if(!(empty($userinfo['country']) || (($userinfo['country'] instanceof \think\Collection || $userinfo['country'] instanceof \think\Paginator ) && $userinfo['country']->isEmpty()))): ?>
                                <option value="" selected><?php echo $userinfo['country']; ?></option>
                                <?php else: ?>
                                <option value="">请选择</option>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div> 
                    <!-- 详细地址 -->
                    <div class="layui-form-item">
                        <label class="layui-form-label"></label>
                        <div class="layui-input-block" style="width:500px">
                            <input type="text" name="address" class="layui-input" id="user-defined" placeholder="请输入详细地址" value="<?php echo !empty($userinfo['address'])?$userinfo['address']: ''; ?>">
                        </div>
                    </div>
                </div>
                <!-- 性别 -->
                <div class="layui-form-item">
                    <label class="layui-form-label">性别</label>
                    <div class="layui-input-block" id="sex" lay-filter="sex">
                        <?php switch($userinfo['sex']): case "0": ?>
                        <input type="radio" name="sex" value="未知" title="未知" checked>
                        <input type="radio" name="sex" value="男" title="男">
                        <input type="radio" name="sex" value="女" title="女">
                        <?php break; case "1": ?>
                        <input type="radio" name="sex" value="未知" title="未知">
                        <input type="radio" name="sex" value="男" title="男">
                        <input type="radio" name="sex" value="女" title="女" checked>
                        <?php break; case "2": ?>
                        <input type="radio" name="sex" value="未知" title="未知">
                        <input type="radio" name="sex" value="男" title="男">
                        <input type="radio" name="sex" value="女" title="女" checked>
                        <?php break; endswitch; ?>
                    </div>
                </div>
                                <!-- 个人描述 -->
                <div class="layui-form-item layui-form-text">
                    <label class="layui-form-label">个人描述</label>
                    <div class="layui-input-block">
                        <textarea name="description" class="layui-textarea" placeholder="请用简单的一句话描述自己" id="description"><?php echo !empty($userinfo['description'])?$userinfo['description']: ''; ?></textarea>
                    </div>
                </div>
                <!-- 提交修改或者放弃修改 -->
                <div class="layui-form-item">
                    <div class="layui-input-block" style="left:18%;">
                        <!-- <button type="button" class="layui-btn" lay-submit lay-filter="formDemo" id="submit">提交</button> -->
                        <button type="button" class="layui-btn" id="submit">提交</button>
                    </div>
                    
                </div>

            </form> 
        </div>

    <!-- 底部区域 -->
        <div class="layui-footer">
            <p class="layui-bg-gray" style="text-align: center;font-size: 18px;font-weight: bold;">最终解释权归 www.blog.com 所有</p>
        </div>

    </div>
                <!-- 以下为js文件
   <!--遮罩-->
    <div class="blog-mask animated layui-hide"></div>
    <!-- layui.js -->
    <script src="/public//plug/layui/layui.js"></script>
    <!-- 全局脚本 -->
    <script src="/public//index/Js/global.js"></script>
    <!-- jquery.js -->
    <script src="/public//index/Js/personalcenter.js"></script> 

</body>
</html>