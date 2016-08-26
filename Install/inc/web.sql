/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50051
Source Host           : localhost:3306
Source Database       : hdcws

Target Server Type    : MYSQL
Target Server Version : 50051
File Encoding         : 65001

Date: 2014-12-21 19:26:58
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `hd_article`
-- ----------------------------
DROP TABLE IF EXISTS `hd_article`;
CREATE TABLE `hd_article` (
  `id` int(10) unsigned NOT NULL auto_increment COMMENT '文章表主键',
  `title` char(40) NOT NULL COMMENT '文章标题',
  `thumburl` varchar(200) default NULL COMMENT '缩略图url',
  `content` text COMMENT '文章内容',
  `keywords` varchar(100) default NULL COMMENT '关键字',
  `description` varchar(250) default NULL COMMENT '描述',
  `time` char(20) NOT NULL COMMENT '添加时间',
  `cid` int(10) unsigned default '0' COMMENT '文章类型id',
  `tid` int(10) unsigned NOT NULL default '1' COMMENT '文章类型id,1为普通文章类,2为公司团队类,3为关于公司',
  `mid` int(10) unsigned NOT NULL default '1' COMMENT '文章模型id,1为普通,2为单页,3为特殊图片',
  `status` int(10) unsigned NOT NULL default '1' COMMENT '文章状态(1为可见，0为不可见)',
  `key1` char(1) default NULL COMMENT '扩展表',
  `key2` char(1) default NULL COMMENT '扩展表',
  `key3` char(1) default NULL COMMENT '扩展表',
  `key4` char(1) default NULL COMMENT '扩展表',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COMMENT='文章表';

-- ----------------------------
-- Table structure for `hd_article_cat`
-- ----------------------------
DROP TABLE IF EXISTS `hd_article_cat`;
CREATE TABLE `hd_article_cat` (
  `id` int(10) unsigned NOT NULL auto_increment COMMENT '文章类型表主键',
  `name` char(20) NOT NULL COMMENT '类型名称',
  `keywords` varchar(100) default NULL COMMENT '关键字',
  `description` varchar(150) default NULL COMMENT '描述',
  `cid` int(10) unsigned default '0' COMMENT '类型父id',
  `sort` int(10) unsigned default '1' COMMENT '排序',
  `status` int(10) unsigned NOT NULL default '1' COMMENT '类型状态(1为可见，0为不可见)',
  `key1` char(1) default NULL COMMENT '扩展栏',
  `key2` char(1) default NULL COMMENT '扩展栏',
  `key3` char(1) default NULL COMMENT '扩展栏',
  `key4` char(1) default NULL COMMENT '扩展栏',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='文章类型表';

-- ----------------------------
-- Table structure for `hd_comment`
-- ----------------------------
DROP TABLE IF EXISTS `hd_comment`;
CREATE TABLE `hd_comment` (
  `id` int(10) unsigned NOT NULL auto_increment COMMENT '留言表主键',
  `title` char(40) NOT NULL COMMENT '标题',
  `content` text NOT NULL COMMENT '留言内容',
  `time` char(20) NOT NULL COMMENT '添加时间',
  `key1` char(1) default NULL COMMENT '扩展栏',
  `key2` char(1) default NULL COMMENT '扩展栏',
  `key3` char(1) default NULL COMMENT '扩展栏',
  `key4` char(1) default NULL COMMENT '扩展栏',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='留言表';

-- ----------------------------
-- Table structure for `hd_link`
-- ----------------------------
DROP TABLE IF EXISTS `hd_link`;
CREATE TABLE `hd_link` (
  `id` int(10) unsigned NOT NULL auto_increment COMMENT '友情链接表主键',
  `name` char(40) NOT NULL COMMENT '链接名称',
  `url` varchar(300) NOT NULL COMMENT '链接地址',
  `description` varchar(250) default NULL COMMENT '描述',
  `sort` int(10) unsigned default '1' COMMENT '排序',
  `status` int(10) unsigned NOT NULL default '1' COMMENT '链接状态(1为可见，0为不可见)',
  `key1` char(1) default NULL COMMENT '扩展栏',
  `key2` char(1) default NULL COMMENT '扩展栏',
  `key3` char(1) default NULL COMMENT '扩展栏',
  `key4` char(1) default NULL COMMENT '扩展栏',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='友情链接表';

-- ----------------------------
-- Table structure for `hd_nav`
-- ----------------------------
DROP TABLE IF EXISTS `hd_nav`;
CREATE TABLE `hd_nav` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(30) default NULL COMMENT '导航名称',
  `nid` int(10) unsigned default '0' COMMENT '导航id',
  `url` varchar(200) NOT NULL COMMENT '链接地址',
  `tid` int(10) unsigned NOT NULL default '1' COMMENT '导航类型id,1为顶部导航,2为底部导航',
  `sort` int(10) unsigned NOT NULL default '1' COMMENT '排序',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='导航表';

-- ----------------------------
-- Table structure for `hd_product`
-- ----------------------------
DROP TABLE IF EXISTS `hd_product`;
CREATE TABLE `hd_product` (
  `id` int(10) unsigned NOT NULL auto_increment COMMENT '产品表主键',
  `name` char(40) NOT NULL COMMENT '标题',
  `keywords` varchar(100) default NULL COMMENT '关键字',
  `description` varchar(250) default NULL COMMENT '描述',
  `price` int(10) unsigned NOT NULL COMMENT '价格',
  `content` text COMMENT '产品详细内容',
  `thumburl` varchar(200) default NULL COMMENT '缩略图url',
  `imgurl` varchar(10000) default NULL COMMENT '图片地址',
  `buypurl` varchar(300) default NULL COMMENT '购买的地址',
  `time` char(20) NOT NULL COMMENT '添加时间',
  `cid` int(10) unsigned NOT NULL COMMENT '产品类型id',
  `status` int(10) unsigned NOT NULL default '1' COMMENT '产品状态(1为可见，0为不可见)',
  `key1` char(1) default NULL COMMENT '扩展栏',
  `key2` char(1) default NULL COMMENT '扩展栏',
  `key3` char(1) default NULL COMMENT '扩展栏',
  `key4` char(1) default NULL COMMENT '扩展栏',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='产品表';

-- ----------------------------
-- Table structure for `hd_product_cat`
-- ----------------------------
DROP TABLE IF EXISTS `hd_product_cat`;
CREATE TABLE `hd_product_cat` (
  `id` int(10) unsigned NOT NULL auto_increment COMMENT '产品类型表主键',
  `name` char(20) NOT NULL COMMENT '类型名称',
  `keywords` varchar(100) default NULL COMMENT '关键字',
  `description` varchar(150) default NULL COMMENT '描述',
  `cid` int(10) unsigned default '0' COMMENT '类型父id',
  `sort` int(10) unsigned default '1' COMMENT '排序',
  `status` int(10) unsigned NOT NULL default '1' COMMENT '产品类型状态(1为可见，0为不可见)',
  `key1` char(1) default NULL COMMENT '扩展栏',
  `key2` char(1) default NULL COMMENT '扩展栏',
  `key3` char(1) default NULL COMMENT '扩展栏',
  `key4` char(1) default NULL COMMENT '扩展栏',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='产品类型表';

-- ----------------------------
-- Table structure for `hd_user`
-- ----------------------------
DROP TABLE IF EXISTS `hd_user`;
CREATE TABLE `hd_user` (
  `id` int(10) unsigned NOT NULL auto_increment COMMENT '网站用户表主键',
  `name` varchar(60) NOT NULL default '' COMMENT '用户名',
  `email` varchar(60) NOT NULL default '' COMMENT '邮箱',
  `password` varchar(32) NOT NULL default '' COMMENT '密码',
  `addtime` char(20) NOT NULL COMMENT '添加时间',
  `lastlogin` char(20) NOT NULL COMMENT '最后登陆时间',
  `lastip` varchar(15) NOT NULL COMMENT '最后登陆IP',
  `status` int(10) unsigned default '1' COMMENT '状态(1为启用,0为禁用)',
  `key1` char(1) default NULL COMMENT '扩展栏',
  `key2` char(1) default NULL COMMENT '扩展栏',
  `key3` char(1) default NULL COMMENT '扩展栏',
  `key4` char(1) default NULL COMMENT '扩展栏',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=utf8 COMMENT='网站用户表';

-- ----------------------------
-- Table structure for `hd_statistics`
-- ----------------------------
DROP TABLE IF EXISTS `hd_statistics`;
CREATE TABLE `hd_statistics` (
  `id` int(10) unsigned NOT NULL auto_increment COMMENT '主键',
  `ip` char(15) default NULL COMMENT 'ip',
  `host` varchar(100) default NULL COMMENT '用户的主机名',
  `port` char(5) default NULL COMMENT '使用的端口',
  `brower` varchar(250) default NULL COMMENT '浏览器信息',
  `accept` varchar(150) default NULL COMMENT '请求头中 Accept',
  `charset` char(15) default NULL COMMENT '请求头中 Accept-Charset',
  `encoding` char(15) default NULL COMMENT '请求头中 Accept-Encoding',
  `language` char(10) default NULL COMMENT '浏览器语言',
  `method` char(10) default NULL COMMENT '请求方法',
  `from` varchar(250) default NULL COMMENT '前一页面的 URL 地址',
  `go` varchar(250) default NULL COMMENT '此页面所需的 URI',
  `time` char(20) default NULL COMMENT '请求开始时的时间',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;