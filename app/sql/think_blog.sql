-- thinkphp5 博客相关数据库/数据表

-- 创建数据库
CREATE DATABASE `tp5_blog` DEFAULT CHARSET=utf8;
-- 使用数据库
USE `tp5_blog`;

-- 创建数据表
-- 1、用户信息数据表
CREATE TABLE `blog_user_info` (
    `id` int(32) NOT NULL AUTO_INCREMENT,

    `userName` varchar(128) NOT NULL DEFAULT '' COMMENT '用户名',
    `portrait` varchar(255) NOT NULL DEFAULT '' COMMENT '用户头像:/用户头像路径/111482xx9.jpg',
    `description` varchar(255) NOT NULL DEFAULT '' COMMENT '个人描述',
    `idCard` varchar(32) NOT NULL DEFAULT '' COMMENT '证件号码',
    `sex` tinyint(1) NOT NULL DEFAULT 0 COMMENT '性别:0-未知,1-男,2-女',
    `email` varchar(64) NOT NULL DEFAULT '' COMMENT '用户邮箱',
    `mobile` varchar(32) NOT NULL DEFAULT '' COMMENT '用户手机号码',
    `province` varchar(32) NOT NULL DEFAULT '' COMMENT '所在省',
    `city` varchar(64) NOT NULL DEFAULT '' COMMENT '所在市',
    `country` varchar(64) NOT NULL DEFAULT '' COMMENT '所在区/县',
    `address` varchar(255) NOT NULL DEFAULT '' COMMENT '详细地址',
    `birthdate` varchar(64) NOT NULL DEFAULT '' COMMENT '格式:1990-05-25',
    
    `password` char(32) NOT NULL DEFAULT '' COMMENT '登录密码', 
    `loginStatus` tinyint(1) NOT NULL DEFAULT 1 COMMENT '登录状态:1-正常 2-审核 3-停用',
    `loginCount` int(32) NOT NULL DEFAULT 1 COMMENT '登录次数',

    `isDel` tinyint(1) NOT NULL DEFAULT 0 COMMENT '是否删除:0-不删除,1-删除',
    `addTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '记录添加时间',
    `updateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '记录更新时间',
    -- `updateTime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '记录更新时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_name` (`userName`),
  UNIQUE KEY `unique_mobile` (`mobile`),
  UNIQUE KEY `unique_email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户信息数据表';

-- 创建时间 -> lj [2018/01/23]

-- -- 2、用户登录信息表
-- CREATE TABLE `blog_user_login` (
--     `id` int(32) NOT NULL AUTO_INCREMENT,

--     `userId` int(32) NOT NULL COMMENT 'blog_user_info表id',
--     `userName` varchar(128) NOT NULL DEFAULT '' COMMENT '登录名',
--     `password` char(32) NOT NULL DEFAULT '' COMMENT '登录密码', 
--     `loginStatus` tinyint(1) NOT NULL DEFAULT 1 COMMENT '登录状态:1-正常 2-审核 3-停用',
--     `loginCount` int(32) NOT NULL DEFAULT 1 COMMENT '登录次数',

--     `isDel` tinyint(1) NOT NULL DEFAULT 0 COMMENT '是否删除:0-不删除,1-删除',
--     `addTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '记录添加时间',
--     `updateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '记录更新时间',
--   PRIMARY KEY (`id`),
--   UNIQUE KEY `UNIQUE_uid`(`userId`),
--   UNIQUE KEY `UNIQUE_username`(`userName`)
-- )ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户登录信息表';

-- 3、标签信息数据表
CREATE TABLE `blog_tag_info` (
    `id` int(32) NOT NULL AUTO_INCREMENT,

    `tagName` varchar(64) NOT NULL DEFAULT '' COMMENT '标签名',
    `parentId` int(32) NOT NULL DEFAULT 0 COMMENT '所属标签id:blog_tag_info表id',

    `isDel` tinyint(1) NOT NULL DEFAULT 0 COMMENT '是否删除:0-不删除,1-删除',
    `addTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '记录添加时间',
    `updateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '记录更新时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQUE_tagName`(`tagName`,`parentId`)  
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='标签信息数据表';

-- 4、文章信息数据表
CREATE TABLE `blog_article_info` (
    `id` int(32) NOT NULL AUTO_INCREMENT,

    `userId` int(32) NOT NULL COMMENT '用户id', 
    `title` varchar(64) NOT NULL DEFAULT '' COMMENT '文章标题',
    `content` varchar(64) NOT NULL DEFAULT '' COMMENT '文章内容',
    `storageKey` varchar(64) NOT NULL DEFAULT '' COMMENT '存储文件的标题key',
    `pageView` int(32) NOT NULL DEFAULT 0 COMMENT '文章浏览量',
    `intro` varchar(128) NOT NULL DEFAULT '' COMMENT '文章简介',
    `cover` varchar(64) NOT NULL DEFAULT '' COMMENT '文章封面',

    `isDel` tinyint(1) NOT NULL DEFAULT 0 COMMENT '是否删除:0-不删除,1-删除',
    `addTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '记录添加时间',
    `updateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '记录更新时间',
  PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='文章信息数据表';

-- 5、文章-标签关联信息表
CREATE TABLE `blog_article_tag` (
    `id` int(32) NOT NULL AUTO_INCREMENT,

    `userId` int(32) NOT NULL COMMENT '用户id', 
    `articleId` int(32) NOT NULL DEFAULT 0 COMMENT '文章id',
    `tagId` int(32) NOT NULL DEFAULT 0 COMMENT '标签id',

    `isDel` tinyint(1) NOT NULL DEFAULT 0 COMMENT '是否删除:0-不删除,1-删除',
    `addTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '记录添加时间',
    `updateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '记录更新时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQUE_key`(`userId`,`articleId`,`tagId`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='文章-标签关联信息表';

-- 6、分类信息数据表
CREATE TABLE `blog_category_info` (
    `id` int(32) NOT NULL AUTO_INCREMENT,

    `categoryName` int(32) NOT NULL COMMENT '用户id',
    `parentId` int(32) NOT NULL DEFAULT 0 COMMENT '上级id',

    `isDel` tinyint(1) NOT NULL DEFAULT 0 COMMENT '是否删除:0-不删除,1-删除',
    `addTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '记录添加时间',
    `updateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '记录更新时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQUE_name`(`categoryName`,`parentId`) 
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='分类信息数据表';

-- 7、文章-分类关联信息表
CREATE TABLE `blog_article_category` (
    `id` int(32) NOT NULL AUTO_INCREMENT,

    `userId` int(32) NOT NULL COMMENT '用户id', 
    `categoryId` int(32) NOT NULL DEFAULT 0 COMMENT '分类id',
    `articleId` int(32) NOT NULL DEFAULT 0 COMMENT '文章id',

    `isDel` tinyint(1) NOT NULL DEFAULT 0 COMMENT '是否删除:0-不删除,1-删除',
    `addTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '记录添加时间',
    `updateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '记录更新时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQUE_key`(`userId`,`articleId`,`categoryId`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='文章-分类关联信息表';

-- 8、评论信息数据表
CREATE TABLE `blog_comment_info` (
    `id` int(32) NOT NULL AUTO_INCREMENT,

    `userId` int(32) NOT NULL COMMENT '用户id', 
    `categoryId` int(32) NOT NULL DEFAULT 0 COMMENT '分类id',
    `content` varchar(255) NOT NULL DEFAULT '' COMMENT '评论内容',
    `replyId` int(32) NOT NULL DEFAULT 0 COMMENT '回复那条留言:0-回复当前文章',

    `isDel` tinyint(1) NOT NULL DEFAULT 0 COMMENT '是否删除:0-不删除,1-删除',
    `addTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '记录添加时间',
    `updateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '记录更新时间',
  PRIMARY KEY (`id`),
  KEY (`categoryId`,`replyId`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='评论信息数据表';

-- 创建时间 -> lj [2018/01/23]


