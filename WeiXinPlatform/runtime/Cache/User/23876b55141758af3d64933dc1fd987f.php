<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<title>多用户微信营销平台3G网站预览</title>
<script src="<?php echo RES;?>/js/jquery.min.js" type="text/javascript"></script>
</head>
<style>
.mask{ background:url(<?php echo RES;?>/images/bg.jpg); height:100%; width:100%; position:fixed; top:0; left:0;z-index:999; overflow:scroll;}
.mask .phone{ background:url(<?php echo RES;?>/images/phone.png) no-repeat; width:800px; height:746px; position:relative; margin:0 auto; z-index:1000;}
.mask .phone_right{background:url(<?php echo RES;?>/images/phone.png) no-repeat right; width:50px; height:746px; position:absolute; right:400px; top:0; z-index:2222;}
.mask .preview{ position:absolute; left:45px; top:156px; z-index:1234; background:#fff;}
.mask .right{ width:316px;  overflow:hidden; position:absolute; right:50px; top:180px;}
.mask .right h1{ color: #F5F5F5; font-size: 26px;font-weight: normal; margin: 35px 0 25px;text-align: center;text-shadow: 0 1px 3px #111111;}
.mask .right p{ color:#B4B7BC; text-align:center;text-shadow: 0 -1px 0 #111112; font-size:12px;}
.mask .r_top{ background:url(<?php echo RES;?>/images/r_top.png) no-repeat; height:25px; display:block;}
.mask .r_center{background:url(<?php echo RES;?>/images/r_center.png) repeat-y;  display:block; text-align:left; color:#fff; text-shadow: 0 -1px 0 #111112;color: #B4B7BC; padding:0 20px; width:276px; font-size:14px;}
.mask .r_bottom{background:url(<?php echo RES;?>/images/r_bottom.png) no-repeat; height:25px; display:block;}
</style>
<body>

<div class="mask">
    <div class="phone">
    	<div class="phone_right"></div>
        <div class="close"></div>
        <iframe class="preview" src="<?php echo U('Wap/Index/index',array('token'=>$_GET['token']));?>" width="337" height="454" frameborder="0" scrolling="auto"></iframe>
		
        <div class="right">
        	<h1>微网站 在线预览</h1>
            <span class="r_top"></span>
            <span class="r_center">为了能正常显示，请在高版本浏览器上查看</span>
            <span class="r_bottom"></span>
            <p>多用户微信营销平台</p>
        </div>
    </div>
</div>

</body>
</html>