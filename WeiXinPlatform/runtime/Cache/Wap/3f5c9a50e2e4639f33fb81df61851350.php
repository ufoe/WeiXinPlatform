<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo ($tpl['wxname']); ?></title>
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/allcss/addnew63/iscroll.css" />
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/allcss/addnew63/wz07.css" />
<script src="<?php echo RES;?>/css/allcss/addnew62/iscroll.js" type="text/javascript"></script>
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
 
            }
            document.addEventListener('DOMContentLoaded', loaded, false);
        </script>

<style type="text/css">
html,body {
	color: #ffffff;
	font-family: Microsoft YaHei, Helvitica, Verdana, Tohoma, Arial,
		san-serif;
	margin: 0;
	padding: 0;
	text-decoration: none;
}

* {
	margin: 0;
	padding: 0;
}

li {
	list-style-type: none;
}

a{
	text-decoration:none;
}
</style>

</head>
<body>
	<div class="banner">
		<div id="wrapper">
			<div id="scroller">
				<ul id="thelist"> 
				<?php if(is_array($flash)): $i = 0; $__LIST__ = $flash;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$so): $mod = ($i % 2 );++$i;?><li><p><?php echo ($so["info"]); ?></p><a href="<?php echo ($so["url"]); ?>"><img src="<?php echo ($so["img"]); ?>" /></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
		</div>
		<div id="nav">
			<div id="prev" onclick="myScroll.scrollToPage('prev', 0,400,3);return false">&larr; prev</div>
			<ul id="indicator">
			<?php if(is_array($flash)): $i = 0; $__LIST__ = $flash;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$so): $mod = ($i % 2 );++$i;?><li   <?php if($i == 1): ?>class="active"<?php endif; ?>  ><?php echo ($i); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			<div id="next" onclick="myScroll.scrollToPage('next', 0);return false">next &rarr;</div>
		</div>
		<div class="clr"></div>
	</div>
	<div id="insert1"></div>
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
	<div id="insert2"></div>
	<div style="display:none"> </div>
	<div style="display:none"><script language="javascript" type="text/javascript" src=""></script></div>

<div class="content">
<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php if($vo['url'] == ''): echo U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token'])); else: echo ($vo["url"]); endif; ?>">
	      <div class="ul01" style="background-image: url('<?php echo RES;?>/css/allcss/addnew62/wz_05_007.png');padding-bottom: 0;">
             <div class="ul01_left">
				 <img src="<?php echo RES;?>/css/allcss/addnew62/wz_05_13.png" width="11" height="95" />
             </div>
             <div class="ul01_cont">
			      <div class="circle">
				       <div class="semicircle"></div>
					   <div class="imgchange" style="background-image: url(<?php echo ($vo["img"]); ?>);"></div>
				  </div>
				 
				  <div class="ul01_cont_nr">
				      <h4><?php echo ($vo["name"]); ?></h4>
					  <p><?php echo ($so["info"]); ?></p>
				  </div>
				  <div class="arrow_right"><img src="<?php echo RES;?>/css/allcss/addnew62/button_20.png" />
				  </div>	  
			 </div>
           
        
             <div class="ul01_right">
			 	<img src="<?php echo RES;?>/css/allcss/addnew62/wz_05_16.png" width="11" height="95" />
             </div>
        
             <div class="clr"></div>
        </div>
		</a><?php endforeach; endif; else: echo "" ;endif; ?>
		      </div>

<div class="copyright">
<?php if($iscopyright == 1): echo ($homeInfo["copyright"]); ?>
<?php else: ?>
<?php echo ($siteCopyright); endif; ?>
</div>
</body>
</html>