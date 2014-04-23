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
<link href="<?php echo RES;?>/css/115/cate5.css" rel="stylesheet" type="text/css" />
<script src="<?php echo RES;?>/js/115/iscroll.js" type="text/javascript"></script>
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
myScroll.scrollToPage('next', 0,400,<?php echo ($num); ?>);
},3500 );
}

document.addEventListener('DOMContentLoaded', loaded, false);
</script>
<style type="text/css">
#scroller {
width:2240px;
}
</style>
</head>
<body id="cate5">

<div class="banner">
<div id="wrapper">
<div id="scroller">
<ul id="thelist">
   <?php if(is_array($flash)): $i = 0; $__LIST__ = $flash;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$so): $mod = ($i % 2 );++$i;?><li><p><?php echo ($so["info"]); ?></p><a href="<?php echo ($so["url"]); ?>"><img src="<?php echo ($so["img"]); ?>" /></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
</div>
</div>
<div id="nav">
<div id="prev" onclick="myScroll.scrollToPage('prev', 0,400,<?php echo ($num); ?>);return false">&larr; prev</div>
<ul id="indicator">
<li   class="active"  >1</li>
<?php $a=2; for($i=0;$i<$num-1;$i++){ echo '<li>'.$a.'</li>'; $a++; } ?>
</ul>
<div id="next" onclick="myScroll.scrollToPage('next', 0);return false">next &rarr;</div>
</div>
<div class="clr"></div>
</div>
<script>


var count = document.getElementById("thelist").getElementsByTagName("img").length;	


for(i=0;i<count;i++){
 document.getElementById("thelist").getElementsByTagName("img").item(i).style.cssText = " width:"+document.body.clientWidth+"px";

}

document.getElementById("scroller").style.cssText = " width:"+document.body.clientWidth*count+"px";


 setInterval(function(){
myScroll.scrollToPage('next', 0,400,count);
},3500 );

window.onresize = function(){ 
for(i=0;i<count;i++){
document.getElementById("thelist").getElementsByTagName("img").item(i).style.cssText = " width:"+document.body.clientWidth+"px";

}

 document.getElementById("scroller").style.cssText = " width:"+document.body.clientWidth*count+"px";
} 

</script>
<ul class="mainmenu">

<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
<a href="<?php if($vo['url'] == ''): echo U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token'])); else: echo ($vo["url"]); endif; ?>">
<div class="menubtn">
<div class="menumesg">
<div class="menuimg"><div class="menuimg2"><img src="<?php echo ($vo["img"]); ?>" /></div></div>
<div class="menutitle"><?php echo ($vo["name"]); ?></div>
<div class="menutext"><?php echo ($vo["info"]); ?></div>
</div>
</div>
</a>
</li><?php endforeach; endif; else: echo "" ;endif; ?>
 	
<div class="clr"></div>
</ul>
<?php if(($copyright) == "0"): ?><div class="copyright"  >
<?php echo htmlspecialchars_decode(C('copyright')) ?>
</div><?php endif; ?>


<!--<div class="plug-div">
        <div class="plug-phone">
            <div class="plug-menu themeStyle"><span class="close"></span></div> 
               
                        <div class="themeStyle plug-btn plug-btn1 close"><a href="tel:13625008888"><span style="background-image: url(<?php echo RES;?>/btn/plugmenu1.png);"></span></a></div>
                  
                        <div class="themeStyle plug-btn plug-btn2 close"><a href="http://j.map.baidu.com/b7vfM"><span style="background-image: url(<?php echo RES;?>/btn/plugmenu3.png);"></span></a></div>
                  
                        <div class="themeStyle plug-btn plug-btn3 close"><a href="http://wxapi.cn/wx/wxapi.php?ac=cate9&amp;tid=650&amp;c=o7MB9jsGSEnQmTFoxicPMNdLFN5Y"><span style="background-image: url(<?php echo RES;?>/btn/plugmenu6.png);"></span></a></div>
                  
                        <div class="themeStyle plug-btn plug-btn4 close"><a href="http://wxapi.cn/wx/wxapi.php?ac=photo&amp;tid=650"><span style="background-image: url(<?php echo RES;?>/btn/plugmenu7.png);"></span></a></div>
                         
<div class="plug-btn plug-btn5 close"></div>
                    </div>
</div>
<script src="<?php echo RES;?>/btn/zepto.js" type="text/javascript"></script>
<script src="<?php echo RES;?>/btn/plugmenu.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo RES;?>/btn/plugmenu.css">
<style>
#cate6 .mainmenu li.li0:nth-child(5) .menumesg {
    background-color: #990000;
}
#cate6 .mainmenu li.li0:nth-child(1) .menumesg {
    background-color: #01AA0A;
}
#cate6 .mainmenu li.li0:nth-child(9) .menumesg {
    background-color: #8B4500;
}

#cate8 .mainmenu li .menubtn {
    border-radius: 5px;
}
#cate8 .mainmenu li div img {
    border-radius: 5px;
}

 .themeStyle{background:#DE0C04}  
</style>
<div style="display:none"><?php echo (htmlspecialchars_decode($tpl["tongji"])); ?></div>-->
</body>
</html>