<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo ($tpl['wxname']); ?></title>
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<meta charset="utf-8">
<link href="<?php echo RES;?>/css/mr/news.css" rel="stylesheet" type="text/css" />
<script src="<?php echo RES;?>/js/mr/iscroll.js" type="text/javascript"></script>
<script type="text/javascript">
var myScroll;

function loaded() {
myScroll = new iScroll('wrapper', {
snap: true,
momentum: false,
hScrollbar: false,
onScrollEnd: function () {
document.querySelector('#indicator > li.active').className = '';
document.querySelector('#indicator > li:nth-child(' + (this.currPageX+1) + ')').className = 'active';
}
 });
 
 setInterval(function(){
myScroll.scrollToPage('next', 0,400,0);
},3500 );
}

document.addEventListener('DOMContentLoaded', loaded, false);
</script>
<style type="text/css">
#scroller {
width:0px;
}
</style>
</head>

<body id="cate7">
<div class="banner"><img src="<?php echo ($flash[0]['img']); ?>" /></div>




<ul class="cateul">

<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="li0 ">
<a href="<?php if($vo['url'] == ''): echo U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token'])); else: echo (htmlspecialchars_decode($vo["url"])); endif; ?>">
<div class="menubtn">
<div class="menuimg"><img src="<?php echo ($vo["img"]); ?>" /></div>
<div class="menutitle"><?php echo ($vo["name"]); ?></div>
</div>
</a>
</li><?php endforeach; endif; else: echo "" ;endif; ?>
 
 	
<div class="clr"></div>
</ul>
<?php if(($copyright) == "0"): ?><div class="copyright"  >
<?php echo htmlspecialchars_decode(C('copyright')) ?>
</div><?php endif; ?>
<div style="display:none"><?php echo (htmlspecialchars_decode($tpl["tongji"])); ?></div>
</body>
</html>