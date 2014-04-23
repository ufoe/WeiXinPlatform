<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<!-- saved from url=(0085)http://www.changxiao.cn/index.php -->
<!--模版8--><HTML 
xmlns="http://www.w3.org/1999/xhtml"><HEAD>        <title><?php echo ($tpl["wxname"]); ?></title>
        <base href="." />
<META content="text/html; charset=UTF-8" http-equiv=Content-Type>
<META name=viewport 
content=width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;>
<META name=apple-mobile-web-app-capable content=yes>
<META name=apple-mobile-web-app-status-bar-style content=black>
<META name=format-detection content=telephone=no><LINK rel=stylesheet 
type=text/css href="<?php echo RES;?>/w54/w57.css">
<SCRIPT type=text/javascript src="<?php echo RES;?>/w54/jquery-1.7.2.min.js"></SCRIPT>

<SCRIPT type=text/javascript src="<?php echo RES;?>/w54/rotate.js"></SCRIPT>

<SCRIPT type=text/javascript src="<?php echo RES;?>/w54/jquery.transform.js"></SCRIPT>

<META name=GENERATOR content="MSHTML 9.00.8112.16446"></HEAD>
<BODY id=cate8>
<UL class=cateul>
<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($i == '1') OR ($i == '6') OR ($i == '7') OR ($i == '8') OR ($i == '17') OR ($i == '18') OR ($i == '23') OR ($i == '24') OR ($i == '29')): ?><LI class=li0><A 
  href="<?php if($vo['url'] == ''): echo U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token'])); else: echo (htmlspecialchars_decode($vo["url"])); endif; ?>">
  <DIV class=menubtn>
  <DIV class=menuimg><IMG 
  src="<?php echo ($vo["img"]); ?>"> 
  </DIV>
  <DIV class=menutitle><?php echo ($vo["name"]); ?></DIV></DIV></A></LI>
  <?php else: ?>
  <LI class=li1><A 
  href="<?php if($vo['url'] == ''): echo U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token'])); else: echo (htmlspecialchars_decode($vo["url"])); endif; ?>">
  <DIV class=menubtn>
  <DIV class=menuimg><IMG src="<?php echo ($vo["img"]); ?>"> </DIV>
  <DIV class=menutitle></DIV></DIV></A></LI><?php endif; endforeach; endif; else: echo "" ;endif; ?>
  </UL>
<?php if(($copyright) == "0"): ?><div class="copyright"  >
<?php echo htmlspecialchars_decode(C('copyright')) ?>
</div><?php endif; ?>
<div style="display:none"><?php echo (htmlspecialchars_decode($tpl["tongji"])); ?></div>
</BODY></HTML>