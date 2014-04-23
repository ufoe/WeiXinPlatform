<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html><head> <title><?php echo ($tpl["wxname"]); ?></title>
        <base href="." /><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<!--Declare page as mobile friendly --> 
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
<!-- Declare page as iDevice WebApp friendly -->
<meta name="apple-mobile-web-app-capable" content="yes">
<!-- iDevice WebApp Splash Screen, Regular Icon, iPhone, iPad, iPod Retina Icons -->
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://paultrifa.com/envato/themeforest/aufidius/images/splash/splash-icon.png"> 
<!-- iPhone 3, 3Gs -->
<link rel="apple-touch-startup-image" href="http://paultrifa.com/envato/themeforest/aufidius/images/splash/splash-screen.png" media="screen and (max-device-width: 320px)"> 
<!-- iPhone 4 -->
<link rel="apple-touch-startup-image" href="http://paultrifa.com/envato/themeforest/aufidius/images/splash/splash-screen@2x.png" media="(max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2)"> 
<!-- iPhone 5 -->
<link rel="apple-touch-startup-image" sizes="640x1096" href="http://paultrifa.com/envato/themeforest/aufidius/images/splash/splash-screen@3x.png">

<!-- Page Title -->
<title><?php echo ($tpl['wxname']); ?></title>

<!-- Stylesheet Load -->
<link href="<?php echo RES;?>/css/allcss/addnew61/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo RES;?>/css/allcss/addnew61/framework-style.css" rel="stylesheet" type="text/css">
<link href="<?php echo RES;?>/css/allcss/addnew61/framework.css" rel="stylesheet" type="text/css">
<link href="<?php echo RES;?>/css/allcss/addnew61/coach.css" rel="stylesheet" type="text/css">
<link href="<?php echo RES;?>/css/allcss/addnew61/bxslider.css" rel="stylesheet" type="text/css">
<link href="<?php echo RES;?>/css/allcss/addnew61/swipebox.css" rel="stylesheet" type="text/css">
<link href="<?php echo RES;?>/css/allcss/addnew61/icons.css" rel="stylesheet" type="text/css">
<link href="<?php echo RES;?>/css/allcss/addnew61/retina.css" rel="stylesheet" type="text/css" media="only screen and (-webkit-min-device-pixel-ratio: 2)">


<!--Page Scripts Load -->
<script src="<?php echo RES;?>/css/allcss/addnew61/jquery.min.js" type="text/javascript"></script>	
<script src="<?php echo RES;?>/css/allcss/addnew61/snap.js" type="text/javascript"></script>
<script src="<?php echo RES;?>/css/allcss/addnew61/hammer.js" type="text/javascript"></script>	
<script src="<?php echo RES;?>/css/allcss/addnew61/jquery-ui-min.js" type="text/javascript"></script>
<script src="<?php echo RES;?>/css/allcss/addnew61/subscribe.js" type="text/javascript"></script>
<script src="<?php echo RES;?>/css/allcss/addnew61/contact.js" type="text/javascript"></script>
<script src="<?php echo RES;?>/css/allcss/addnew61/jquery.swipebox.js" type="text/javascript"></script>
<script src="<?php echo RES;?>/css/allcss/addnew61/bxslider.js" type="text/javascript"></script>
<script src="<?php echo RES;?>/css/allcss/addnew61/colorbox.js" type="text/javascript"></script>
<script src="<?php echo RES;?>/css/allcss/addnew61/retina.js" type="text/javascript"></script>
<script src="<?php echo RES;?>/css/allcss/addnew61/custom.js" type="text/javascript"></script>
<script src="<?php echo RES;?>/css/allcss/addnew61/framework.js" type="text/javascript"></script>

</head>
<body class="">

<div id="preloader" style="display: none; ">
	<div id="status" style="display: none; ">
    	<p class="center-text">
			Loading the content...
            <em>Loading depends on your connection speed!</em>
        </p>
    </div>
</div>

<div class="page-coach" style="display: none; ">
	<div class="portrait-coach">
        <span style="top:40px; left:28px;" class="coach-arrow arrow1">
        	<h3 style="padding-top:35px; padding-left:100px; margin-bottom:-5px;">TAP THE ICON!</h3>
            <p style="padding-top:0px; padding-left:100px;">TO OPEN NAVIGATION!</p>
        </span>
        
        <span style="top:170px; left:90px; width:320px;" class="coach-arrow arrow2">
        	<h3 style="padding-top:45px; padding-right:55px;  margin-bottom:-5px;">SWIPE THE SLIDER</h3>
            <p style="padding-top:00px; padding-right:55px;">SWIPE LEFT OR RIGHT!</p>
        </span>
        
        <span style="top:310px; left:20px;" class="coach-arrow arrow9">
        	<h3 style="padding-top:15px; padding-left:110px;  margin-bottom:-5px;">SWIPE THE PAGE!</h3>
            <p style="padding-top:0px; padding-left:110px;">TO SEE THE NAVIGATION!</p>
        </span>
       
        <span style="top:400px; left:120px;" class="coach-arrow arrow16">
        	<h3 style="margin-left:-50px; padding-top:15px;  margin-bottom:-5px;">TAP ANYWHERE TO CLOSE!</h3>
            <p style="margin-left:-162px; padding-left:110px;">CLOSE THE COACH, TAP THE PAGE!</p>
        </span>
       
    </div>    
    <div class="landscape-coach">        
        <span style="left:47%; top:15%;" class="coach-arrow arrow12">
            <p style="text-align:center; padding-top:100px; margin-left:-160px;">
            	This page has a lot of responsive features!<br>
                That means they expand when the device is in landscape!<br>
				Flip your device back in portrait mode to continue the tutorial!<br>      
            </p>
        </span>
    </div>
</div>



<div class="all-elements">
    
    <div id="sidebar" class="page-sidebar">
        <div class="page-sidebar-scroll">
			<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div align="center">
			  <p><a href="<?php if($vo['url'] == ''): echo U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token']));?>
              <?php else: ?>
              <?php echo ($vo["url"]); endif; ?>">
              <p><img src="<?php echo ($vo["img"]); ?>" width="40" height="40" /><?php echo ($vo["name"]); ?></a>
                      </div><?php endforeach; endif; else: echo "" ;endif; ?>
      </div>
    </div>
       
    <div id="content" class="page-content" style="">
    	<div class="page-header">
    		<em class="deploy-sidebar"></em>
        	<img class="logo" src="<?php echo RES;?>/css/allcss/addnew61/logo.png" alt="img" width="85">
   		</div>
        
        <div class="decoration"></div>
        
       
        <div class="bxslider-wrapper" data-snap-ignore="true">
            <div class="bx-wrapper" style="max-width: 100%; ">
			<div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 350px; ">
			<div class="bxslider" style="width: 430%; position: relative; -webkit-transition: 0s; -webkit-transform: translate3d(0px, 0px, 0px); ">
			<?php if(is_array($flash)): $i = 0; $__LIST__ = $flash;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$so): $mod = ($i % 2 );++$i;?><div style="float: left; list-style: none; position: relative; width: 1622px; " class="bx-clone">
					<?php echo ($so["info"]); ?></p><a href="<?php echo ($so["url"]); ?>"><img src="<?php echo ($so["img"]); ?>" /></a>
             	</div><?php endforeach; endif; else: echo "" ;endif; ?>
</div></div><div class="bx-controls bx-has-controls-direction"><div class="bx-controls-direction"><a class="bx-prev" href="">Prev</a><a class="bx-next" href="">Next</a></div></div></div>
		</div>
       
        
        <div class="container no-bottom">
        	<h1 class="center-text"><?php echo ($tpl['wxname']); ?></h1>
        	<p>您可以用手指左右滑动来切换图片滚动，也可以点击左上角的功能菜单查看分类栏目。也可以在最上方手指左右滑动来打开、关闭菜单功能!</p>
        </div>
        
		<div class="container">
            
        </div> 
        
    
    <div class="container">
      <p class="center-text"><?php if($iscopyright == 1): echo ($homeInfo["copyright"]); ?>
<?php else: ?>
<?php echo ($siteCopyright); endif; ?></p>
    </div>
               
	</div>   
</div>
<div id="cboxOverlay" style="display: none; "></div><div id="colorbox" class="" style="display: none; "><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left; "></div><div id="cboxTopCenter" style="float: left; "></div><div id="cboxTopRight" style="float: left; "></div></div><div style="clear: left; "><div id="cboxMiddleLeft" style="float: left; "></div><div id="cboxContent" style="float: left; "><div id="cboxTitle" style="float: left; "></div><div id="cboxCurrent" style="float: left; "></div><div id="cboxNext" style="float: left; "></div><div id="cboxPrevious" style="float: left; "></div><div id="cboxSlideshow" style="float: left; "></div><div id="cboxClose" style="float: left; "></div></div><div id="cboxMiddleRight" style="float: left; "></div></div><div style="clear: left; "><div id="cboxBottomLeft" style="float: left; "></div><div id="cboxBottomCenter" style="float: left; "></div><div id="cboxBottomRight" style="float: left; "></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none; "></div></div></body></html>