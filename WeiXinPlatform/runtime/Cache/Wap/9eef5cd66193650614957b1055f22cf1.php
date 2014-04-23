<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>{weixn:$tpl.wxname}</title>
        <base href="." />
        <meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <meta name="format-detection" content="telephone=no" />
        <link href="{weixn::RES}/css/dingzhi1/dingzhi1.css" rel="stylesheet" type="text/css" />
        <link href="{weixn::RES}/css/dingzhi1/iscroll.css" rel="stylesheet" type="text/css" />
        <script src="{weixn::RES}/css/dingzhi1/iscroll.js" type="text/javascript"></script>
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

    </head>

    <body id="cate10">
        <div class="banner">
		<div id="wrapper">
			<div id="scroller">
				<ul id="thelist"> 
				<?php if(is_array($flash)): $i = 0; $__LIST__ = $flash;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$so): $mod = ($i % 2 );++$i;?><li><p>{weixn:$so.info}</p><a href="{weixn:$so.url}"><img src="{weixn:$so.img}" /></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
		</div>
		<div id="nav">
			<div id="prev" onclick="myScroll.scrollToPage('prev', 0,400,3);return false">&larr; prev</div>
			<ul id="indicator">
			<?php if(is_array($flash)): $i = 0; $__LIST__ = $flash;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$so): $mod = ($i % 2 );++$i;?><li   <?php if($i == 1): ?>class="active"<?php endif; ?>  >{weixn:$i}</li><?php endforeach; endif; else: echo "" ;endif; ?>
			 
			</ul>
			<div id="next" onclick="myScroll.scrollToPage('next', 0);return false">next &rarr;</div>
		</div>
		<div class="clr"></div>
		</div>

        <div id="insert1"></div>

        <div class="catemenu">
            <ul> 
                <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php if($vo['url'] == ''): ?>{weixn::U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token']))}<?php else: ?>{weixn:$vo.url|htmlspecialchars_decode}<?php endif; ?>">
                        <img src="{weixn:$vo.img}" />
						<span>{weixn:$vo.name}</span>
                    </a><?php endforeach; endif; else: echo "" ;endif; ?>

                <div class="clr"></div>
            </ul>
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
		function showShareBox(){
			document.getElementById('shareBox').style.display='block';
		}

        </script>
        <div id="insert2"></div>
        <div style="display:none"> </div>
<div class="foot" id="foot">
	<ul>
		<?php if(is_array($plugmenus)): $i = 0; $__LIST__ = $plugmenus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="{weixn:$vo.url}">
			<li>
				<div class="ft-ct">
					<div class="ft-pic">
						<div class="pic-sz">
							<img src="{weixn::RES}/css/flash/images/img/{weixn:$vo.name}.png">
						</div>
						<div class="ft-ft">
							主页
						</div>
					</div>
					<div class="xixian">
						<img src="{weixn::RES}/images/dingzhi1/xixian1.jpg">
					</div>
					<div class="clr">
					</div>
				</div>
			</li>
		</a><?php endforeach; endif; else: echo "" ;endif; ?>
		<a href="javascript:showShareBox();">
			<li>
				<div class="ft-ct">
					<div class="ft-pic">
						<div class="pic-sz">
							<img src="{weixn::RES}/images/dingzhi1/share.png">
						</div>
						<div class="ft-ft">
							分享
						</div>
					</div>
					<div class="clr">
					</div>
				</div>
			</li>
		</a>
	</ul>
	<div class="clr">
	</div>
</div>
<div id="shareBox" onclick="this.style.display='none';" class="bg-tm" style="display:none;">
	<div class="fc-0">
		<div class="top-ft">
			<img src="{weixn::RES}/images/dingzhi1/ft.png" width="720" height="55">
		</div>
		<div class="xxk">
			<div class="tzjj">
				<div class="ydtb">
					<p>
						<img src="{weixn::RES}/images/dingzhi1/as_share.png" width="118" height="118">
					</p>
					<p>
						发送给朋友
					</p>
				</div>
				<div class="ydtb">
					<p>
						<img src="{weixn::RES}/images/dingzhi1/as_moment.png" width="118" height="118">
					</p>
					<p>
						分享到朋友圈
					</p>
				</div>
				<div class="clr">
				</div>
			</div>
			<div class="jtzx">
				<img src="{weixn::RES}/images/dingzhi1/xjt.png">
			</div>
		</div>
	</div>
</div>
<script src="{weixn::RES}/css/flash/js/zepto.min.js" type="text/javascript"></script>
<div class="copyright">
<?php if($iscopyright == 1): ?>{weixn:$homeInfo.copyright}
<?php else: ?>
{weixn:$siteCopyright}<?php endif; ?>
</div>
</body>
</html>