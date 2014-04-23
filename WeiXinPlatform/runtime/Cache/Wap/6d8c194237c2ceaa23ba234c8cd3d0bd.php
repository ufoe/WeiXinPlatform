<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"><HTML 
xmlns="http://www.w3.org/1999/xhtml"><HEAD><title><?php echo ($tpl["wxname"]); ?></title>
        <base href="." />
<META content="text/html; charset=UTF-8" http-equiv=Content-Type>
<META name=viewport 
content=width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;>
<META name=apple-mobile-web-app-capable content=yes>
<META name=apple-mobile-web-app-status-bar-style content=black>
<META name=format-detection content=telephone=no><LINK rel=stylesheet 
type=text/css href="<?php echo RES;?>/w54/w59.css">
<SCRIPT type=text/javascript src="<?php echo RES;?>/w54/jquery-1.7.2.min.js"></SCRIPT>

<SCRIPT type=text/javascript src="<?php echo RES;?>/w54/rotate.js"></SCRIPT>

<SCRIPT type=text/javascript src="<?php echo RES;?>/w54/jquery.transform.js"></SCRIPT>

<SCRIPT type=text/javascript src="<?php echo RES;?>/w54/iscroll.js"></SCRIPT>

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

<META name=GENERATOR content="MSHTML 9.00.8112.16446"></HEAD>
<BODY id=cate6>
<DIV class=banner>
<DIV style="OVERFLOW: hidden" id=wrapper>
<DIV id=scroller>
<UL id=thelist>
<?php if(is_array($flash)): $i = 0; $__LIST__ = $flash;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$so): $mod = ($i % 2 );++$i;?><LI style="height:50%">
  <P><?php echo ($so["name"]); ?></P><A href="<?php echo ($so["url"]); ?>"><IMG 
  src="<?php echo ($so["img"]); ?>"></A> </LI><?php endforeach; endif; else: echo "" ;endif; ?>
 </UL></DIV></DIV>
<div id="nav">
			<div id="prev" onClick="myScroll.scrollToPage('prev', 0,400,3);return false">&larr; prev</div>
			<ul id="indicator">
			<?php if(is_array($flash)): $i = 0; $__LIST__ = $flash;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$so): $mod = ($i % 2 );++$i;?><li   <?php if($i == 1): ?>class="active"<?php endif; ?>  ><?php echo ($i); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
			 
			</ul>
			<div id="next" onClick="myScroll.scrollToPage('next', 0);return false">next &rarr;</div>
		</div>
		<div class="clr"></div>
		</div>
<UL class=mainmenu>
<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><LI class=li0><A class=menumesg 
  href="<?php if($vo['url'] == ''): echo U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token'])); else: echo (htmlspecialchars_decode($vo["url"])); endif; ?>">
  <DIV class=menubtn>
  <DIV class=menutitle><?php echo ($vo["name"]); ?></DIV></DIV><SPAN class=menuico></SPAN></A>
  <DIV class=menuimg><IMG 
  src="<?php echo ($vo["img"]); ?>"> 
  <SPAN class=menutext><?php echo ($vo["name"]); ?></SPAN> </DIV></LI><?php endforeach; endif; else: echo "" ;endif; ?>
  </UL>
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
<?php if(($copyright) == "0"): ?><div class="copyright"  >
<?php echo htmlspecialchars_decode(C('copyright')) ?>
</div><?php endif; ?>
<div style="display:none"><?php echo (htmlspecialchars_decode($tpl["tongji"])); ?></div>
</BODY></HTML>