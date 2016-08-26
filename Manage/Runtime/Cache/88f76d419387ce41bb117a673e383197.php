<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html><html><head><meta charset="UTF-8" /><link type="image/x-icon" rel="shortcut icon" href="__ROOT__/favicon.ico" /><link rel="stylesheet" type="text/css" href="__CSS__/global.css" /><link rel="stylesheet" type="text/css" href="__CSS__/comment.css" /><title>留言反馈-HDCWS后台管理系统</title></head><body><div id="dcWrap"><div id="dcHead"><div id="head"><div class="logo"><img height="25" src="__IMAGES__/logo.png" alt="logo"></div><div class="nav"><ul><li class="M"><a href="JavaScript:void(0);" class="topAdd">新建</a><div class="drop mTopad"><a href="<?php echo U('Article/add');?>">文章</a><a href="<?php echo U('Product/add');?>">产品</a><a href="<?php echo U('Nav/add');?>">导航</a><a href="<?php echo U('Link/add');?>">友情链接</a></div></li><li><a href="<?php echo (C("HD_weburl")); ?>" target="_blank">查看前台页面</a></li><li><a href="<?php echo U('Web/clearcache');?>">清除缓存</a></li></ul><ul class="navRight"><li class="M noLeft"><a href="JavaScript:void(0);">您好，<?php echo ($_SESSION['hd_user']['name']); ?></a><div class="drop mUser"><a href="<?php echo U('Pub/editself');?>">修改资料</a></div></li><li class="noRight"><a href="<?php echo U('Pub/logout');?>">退出</a></li></ul></div></div></div><div id="dcLeft"><div id="menu"><ul class="top"><li class="index"><a href="<?php echo U('Index/index');?>"><i class="home"></i><em>管理首页</em></a></li></ul><ul class="menu-ul"><li class="article-index"><a href="<?php echo U('Article/index');?>"><i class="articleCat"></i><em>文章管理</em></a></li><li class="article-cat"><a href="<?php echo U('Article/cat');?>"><i class="article"></i><em>文章分类</em></a></li></ul><ul class="menu-ul"><li class="product-index"><a href="<?php echo U('Product/index');?>"><i class="product"></i><em>产品管理</em></a></li><li class="product-cat"><a href="<?php echo U('Product/cat');?>"><i class="productCat"></i><em>产品分类</em></a></li></ul><ul class="menu-ul"><?php if(($_SESSION['hd_user']['isSuper']) == "1"): ?><li class="user"><a href="<?php echo U('User/index');?>"><i class="manager"></i><em>用户管理</em></a></li><?php endif; ?><li class="link"><a href="<?php echo U('Link/index');?>"><i class="link"></i><em>友情链接</em></a></li><li class="nav"><a href="<?php echo U('Nav/index');?>"><i class="nav"></i><em>导航管理</em></a></li><li class="banner"><a href="<?php echo U('Banner/index');?>"><i class="show"></i><em>首页Banner</em></a></li><li class="comment"><a href="<?php echo U('Comment/index');?>"><i class="guestbook"></i><em>留言反馈</em></a></li></ul><?php if(($_SESSION['hd_user']['isSuper']) == "1"): ?><ul class="menu-ul bot"><li class="webset"><a href="<?php echo U('Web/index');?>"><i class="system"></i><em>网站设置</em></a></li></ul><?php endif; ?></div></div><div id="dcMain"><div id="urHere">管理中心<b>&gt;</b><strong>留言列表</strong></div><div id="mainBox"><h3>留言列表</h3><div class="filter"><form action="<?php echo U('Comment/index');?>"><input name="key" type="text" class="inpMain" value="" size="20" placeholder="输入标题或关键词" /><input name="submit" class="btnGray" type="submit" value="搜索" /></form></div><div id="list"><form name="action" action="<?php echo U('Comment/del');?>" onsubmit="if(!confirm('确定删除吗?')) return false;"><table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic"><tr><th width="22" align="center"><input name="chkall" type="checkbox" id="chkall" onclick="selectcheckbox(this.form)" value="check"></th><th align="left">标题</th><th width="120" align="center">留言时间</th><th width="80" align="center">操作</th></tr><?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr><td align="center"><input type="checkbox" name="id[]" value="<?php echo ($vo["id"]); ?>"></td><td><?php echo ($vo["title"]); ?></td><td><?php echo ($vo["time"]); ?></td><td align="center"><a href="<?php echo U('Comment/viewcomment?id='. $vo['id']);?>">查看</a>&nbsp;|&nbsp;
				           		<a href="javascript:void(0)" data-href="<?php echo U('Comment/del?id='. $vo['id']);?>" onclick="if(confirm('确定删除吗?')) top.location.href=this.getAttribute('data-href')">删除</a></td></tr><?php endforeach; endif; else: echo "" ;endif; ?></table><div class="action"><input name="submit" class="btn" type="submit" value="删除"></div></form></div><div class="clear"></div><div class="pager"><?php echo ($pageLink); ?></div></div></div><div class="clear"></div><div id="dcFooter"><div id="footer"><div class="line"></div><ul><li>版权所有 © 2014 <a href="http://www.hidoger.com" target="_blank">HDCWS</a>，并保留所有权利。</li></ul></div></div><div class="clear"></div><script>ROOT='__ROOT__/';URL='__URL__/';</script><script src="__JS__/jquery.js"></script><script src="__JS__/global.js"></script></div></body></html>