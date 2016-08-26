<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html><html lang="zh-cn"><head><meta charset="UTF-8"><meta name="keywords" content="<?php echo (C("HD_keywords")); ?>" /><meta name="description" content="<?php echo (C("HD_description")); ?>" /><link type="image/x-icon" rel="shortcut icon" href="__ROOT__/favicon.ico" /><link rel="stylesheet" href="__CSS__/global.css" /><link rel="stylesheet" href="__CSS__/index.css" /><title><?php echo (C("HD_webtitle")); ?></title></head><body><div class="header"><div class="h-top"><div class="c-a"><span class="tel" title="电话"><?php echo (C("HD_phone")); ?></span><span class="fox" title="传真"><?php echo (C("HD_fox")); ?></span><span class="mail" title="邮箱"><?php echo (C("HD_email")); ?></span><span class="addr" title="地址"><?php echo (C("HD_address")); ?></span></div></div><div class="h-logo-search"><div class="c-a"><a class="logo" href="<?php echo (C("HD_weburl")); ?>"><img width="204" height="45" alt="<?php echo (C("HD_webname")); ?>" title="<?php echo (C("HD_webname")); ?>" src="__ROOT__/<?php echo (C("HD_logourl")); ?>" /></a><b class="web-name"><?php echo (C("HD_webname")); ?></b><div class="search"><p class="pl">搜索产品</p><div class="form"><input class="text" type="text" placeholder="输入关键字" /><input id="search_button" class="submit" type="button" value="" /></div></div></div></div><div class="h-nav"><div class="c-a"><ul class="nav-u"><li class="nav-l"><a class="index" href="<?php echo (C("HD_weburl")); ?>">首页</a></li><?php if(is_array($headNavList)): $i = 0; $__LIST__ = $headNavList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="nav-l"><a href="<?php echo ($vo["url"]); ?>"><?php echo ($vo["name"]); ?></a><?php if(!empty($vo["list"])): ?><ul class="nav-u"><?php if(is_array($vo["list"])): foreach($vo["list"] as $key=>$vo): ?><li class="nav-l <?php if(!empty($vo["list"])): ?>has-son<?php endif; ?>"><a href="<?php echo ($vo["url"]); ?>"><?php echo ($vo["name"]); ?></a><?php if(!empty($vo["list"])): ?><ul class="nav-u"><?php if(is_array($vo["list"])): foreach($vo["list"] as $key=>$vo): ?><li class="nav-l <?php if(!empty($vo["list"])): ?>has-son<?php endif; ?>"><a href="<?php echo ($vo["url"]); ?>"><?php echo ($vo["name"]); ?></a><?php if(!empty($vo["list"])): ?><ul class="nav-u"><?php if(is_array($vo["list"])): foreach($vo["list"] as $key=>$vo): ?><li class="nav-l <?php if(!empty($vo["list"])): ?>has-son<?php endif; ?>"><a href="<?php echo ($vo["url"]); ?>"><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; ?></ul><?php endif; ?></li><?php endforeach; endif; ?></ul><?php endif; ?></li><?php endforeach; endif; ?></ul><?php endif; ?></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></div></div></div><?php if(!empty($banner)): ?><div class="banner" id="banner"><div class="imgs"><?php if(is_array($banner)): $i = 0; $__LIST__ = $banner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo ($vo["url"]); ?>" title="<?php echo ($vo["title"]); ?>" target="<?php echo ($vo["target"]); ?>"><img class="img" width="1200" height="360" src="__ROOT__/<?php echo ($vo["src"]); ?>" /></a><?php endforeach; endif; else: echo "" ;endif; ?></div><span class="roll prev"></span><span class="roll next"></span></div><?php endif; ?><div class="block b-pro"><div class="c-a"><h2 class="par-t">产品展示</h2><p class="en-t"><span>Products Show</span></p><p class="sub-t"><a href="<?php echo U('Product/index');?>">全部</a><?php if(is_array($allProCatList)): $i = 0; $__LIST__ = array_slice($allProCatList,0,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>/<a href="<?php echo U('Product/lists?cid=' . $vo['id']);?>"><?php echo ($vo["name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?></p><div class="pro-rol"><div class="roll"><ul><?php if(is_array($proList)): $i = 0; $__LIST__ = $proList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Product/v?cid=' . $vo['cid'] . '&id=' . $vo['id']);?>"><img width="285" height="200" alt="<?php echo ($vo["name"]); ?>" title="<?php echo ($vo["name"]); ?>" src="__ROOT__/<?php echo ($vo["thumburl"]); ?>" /></a><div class="name"><?php echo ($vo["name"]); ?> &emsp;<?php echo ($vo['price']/100); ?>元</div></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></div><span class="btn btn-left"></span><span class="btn btn-right"></span></div></div></div><?php if(!empty($teamList)): ?><div class="block b-team"><div class="c-a"><h2 class="par-t">公司团队</h2><p class="en-t"><span>Our Team</span></p><p class="sub-t"><a href="<?php echo U('Article/lists?tid=2');?>">全部</a><?php if(is_array($teamList)): $i = 0; $__LIST__ = array_slice($teamList,0,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>/<a href="<?php echo U('Article/v?tid=2&id=' . $vo['id']);?>"><?php echo ($vo["title"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?></p><div class="tea-rol"><div class="roll"><ul><?php if(is_array($teamList)): $i = 0; $__LIST__ = $teamList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Article/v?tid=2&id=' . $vo['id']);?>"><img width="285" height="200" alt="<?php echo ($vo["title"]); ?>" title="<?php echo ($vo["title"]); ?>" src="__ROOT__/<?php echo ($vo['thumburl']); ?>" /></a><div class="name"><?php echo ($vo['title']); ?></div></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></div><span class="btn btn-left"></span><span class="btn btn-right"></span></div></div></div><?php endif; if(!empty($aboutList)): ?><div class="block b-com"><div class="c-a"><h2 class="par-t">关于公司</h2><p class="en-t"><span>About Us</span></p><p class="sub-t"><a href="<?php echo U('Article/lists?tid=3');?>">全部</a><?php if(is_array($aboutList)): $i = 0; $__LIST__ = array_slice($aboutList,0,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>/<a href="<?php echo U('Article/v?tid=2&id=' . $vo['id']);?>"><?php echo ($vo["title"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?></p><ul class="com-list"><?php if(is_array($aboutList)): $i = 0; $__LIST__ = $aboutList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><div class="com-img"><a href="<?php echo U('Article/v?tid=3&id=' . $vo['id']);?>"><img width="340" height="230" alt="<?php echo ($vo["title"]); ?>" title="<?php echo ($vo["title"]); ?>" src="__ROOT__/<?php echo ($vo['thumburl']); ?>" /></a></div><p class="item-t"><?php echo ($vo["title"]); ?></p><div class="desc"><?php echo (msubstr($vo["description"],0,90)); ?></div><a class="more" href="<?php echo U('Article/v?tid=3&id=' . $vo['id']);?>">MORE</a></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></div></div><?php endif; if(!empty($linkList)): ?><div class="block b-link"><div class="c-a"><h2 class="par-t">友情链接</h2><p class="en-t"><span>Friendly Link</span></p><dl class="fliks"><?php if(is_array($linkList)): $i = 0; $__LIST__ = $linkList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><dd><a href="<?php echo ($vo["url"]); ?>"><?php echo ($vo["name"]); ?></a></dd><?php endforeach; endif; else: echo "" ;endif; ?></dl></div></div><?php endif; ?><div class="footer"><div class="c-a"><div class="links"><img class="f-logo" width="204" height="45" alt="<?php echo (C("HD_webname")); ?>" title="<?php echo (C("HD_webname")); ?>" src="__ROOT__/<?php echo (C("HD_logourl")); ?>" /><?php if(is_array($footNavList)): $i = 0; $__LIST__ = array_slice($footNavList,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><dl><dt><a href="<?php echo ($vo["url"]); ?>"><?php echo ($vo["name"]); ?></a></dt><?php if(is_array($vo["list"])): foreach($vo["list"] as $key=>$vo): ?><dd><a href="<?php echo ($vo["url"]); ?>"><?php echo ($vo["name"]); ?></a></dd><?php endforeach; endif; ?></dl><?php endforeach; endif; else: echo "" ;endif; ?></div></div><div class="botttom"><div class="c-a"><p class="copy"><?php echo (C("HD_webname")); ?>&emsp;<?php echo (C("HD_beian")); ?>&emsp;<?php echo (C("HD_copyright")); ?> - <?php echo (msubstr(date('Y-m-d g:i a',time()),0,4)); ?></p></div></div></div><script>APP='__APP__';</script><script src="__JS__/jquery.js"></script><script src="__JS__/global.js"></script><script src="__JS__/roll.js"></script></body></html>