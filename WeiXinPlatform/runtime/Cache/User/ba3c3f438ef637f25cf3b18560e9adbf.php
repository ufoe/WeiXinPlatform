<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script>var SITEURL='';</script>
<title> <?php echo C('site_title');?> <?php echo C('site_name');?></title>
<link href="<?php echo RES;?>/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo RES;?>/css/stylet.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo RES;?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/main.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/common.js"></script>


<script type="text/javascript">
function ying(){
	 document.getElementById('tiduser').style.display="none";
	 document.getElementById('quit').style.display="block";
}
function xian(){
	 document.getElementById('tiduser').style.display="block";
	 document.getElementById('quit').style.display="none";
}
setTimeout(xian,5000);
</script>
</head>

<body>
<div id="herder" >
	<div id="top">
		<img src="<?php echo RES;?>/images/logo.png" />
		<a href="/" >首页</a>
		<a href="<?php echo U('Home/Index/fc');?>" >功能介绍</a>
		<a href="<?php echo U('Home/Index/about');?>" >关于我们</a>
		<a href="<?php echo U('Home/Index/price');?>" >资费说明</a>
		<a href="<?php echo U('Home/Index/common');?>" >微信导航</a>
		<a href="<?php echo U('User/Index/index');?>" >管理中心</a>
        <a href="<?php echo U('Home/Index/help');?>" >帮助中心</a>
		<a class="line" ></a>
        <a href="#" class="a" id="tiduser" onmouseover="ying();" >您好：<span><?php echo (session('uname')); ?></span></a>
		<a href="#" class="a1" id="quit" onclick="Javascript:window.open('<?php echo U('System/Admin/logout');?>')" onLoad=setTimeout("abc.style.display='none'",5000) >安全退出</a>
	</div>
</div>
<div id="Frame" class="shadow">
	<div id="nav">
		<img src="<?php echo ($wecha["headerpic"]); ?>" width="50" height="50" />
		<ul class="ul">
			<li><strong><?php echo ($wecha["wxname"]); ?></strong><img src="<?php echo RES;?>/images/vip.png" /></li>
			<li>微信号：<?php echo ($wecha["weixin"]); ?></li>
		</ul>
		<ul class="ul2">
			<li>VIP有效时间：<?php if($_SESSION['viptime'] != 0): echo (date("Y-m-d",$thisUser["viptime"])); else: ?>vip0不限时间<?php endif; ?></li>
			<li>图文自定义：<?php echo ($thisUser["diynum"]); ?>/<?php echo ($userinfo["diynum"]); ?></li>
		</ul>
		<ul>
			<li>活动创建数：<?php echo ($thisUser["activitynum"]); ?>/<?php echo ($userinfo["activitynum"]); ?></li>
			<li>请求数：<?php echo ($thisUser["connectnum"]); ?>/<?php echo ($userinfo["connectnum"]); ?></li>
		</ul>
		<ul>
			<li>请求数剩余：<?php echo ($userinfo['connectnum']-$_SESSION['connectnum']); ?></li>
			<li>已使用：<?php echo $_SESSION['diynum']; ?></li>
		</ul>
		<ul>
			<li>当月赠送请求数：<?php echo ($userinfo["connectnum"]); ?></li>
			<li>当月剩余请求数：<?php echo $userinfo['connectnum']-$_SESSION['connectnum']; ?></li>
		</ul>
	</div>
    <div id="floatline"></div>
	<div id="Menu">
		<div class="top">
        	
            <?php if(in_array(MODULE_NAME,array('Function','Areply','Text','Voiceresponse','Index','Company','Other'))){ ?>
                <img src="<?php echo RES;?>/images/TwoMenu-ico-006.png" />
            <?php } ?>
            <?php if(in_array(MODULE_NAME,array('Home','Tmpls','Classify','Img','Diymen','Flash','Photo','plugmenu'))){ ?>
                <img src="<?php echo RES;?>/images/TwoMenu-ico-001.png" />
            <?php } ?>
            <?php if(in_array(MODULE_NAME,array('Lottery','Coupon','Guajiang','Wedding','Research'))){ ?>
                <img src="<?php echo RES;?>/images/TwoMenu-ico-003.png" />
            <?php } ?>
            <?php if(in_array(MODULE_NAME,array('Product','Groupon','orders','Host','Selfform','Adma','Panorama','Reply_info'))){ ?>
                <img src="<?php echo RES;?>/images/TwoMenu-ico-002.png" />
            <?php } ?>
            <?php if(in_array(MODULE_NAME,array('info','Member_card','privilege','create','exchange','Member'))){ ?>
                <img src="<?php echo RES;?>/images/TwoMenu-ico-004.png" />
            <?php } ?>
            <?php if(in_array(MODULE_NAME,array('Taobao','Api','Liuyan'))){ ?>
                <img src="<?php echo RES;?>/images/TwoMenu-ico-005.png" />
            <?php } ?>
                <!--<img src="<?php echo RES;?>/images/AMenu-Ico.png" />-->
            <a>
            	<?php if(in_array(MODULE_NAME,array('Function','Areply','Text','Voiceresponse','Index','Company','Other','Requerydata','Alipay_config','Alipay_m_config'))){ ?>基础功能<?php } ?>
                <?php if(in_array(MODULE_NAME,array('Home','Tmpls','Classify','Img','Diymen','Flash','Photo','plugmenu'))){ ?>微网站<?php } ?>
                <?php if(in_array(MODULE_NAME,array('Lottery','Coupon','Guajiang','Research','Zadan','Wedding','Weidiaoyan'))){ ?>营销功能<?php } ?>
                <?php if(in_array(MODULE_NAME,array('Product','Groupon','orders','Host','Selfform','Adma','Research','Reply_info','Panorama'))){ ?>微商务<?php } ?>
                <?php if(in_array(MODULE_NAME,array('info','Member_card','privilege','create','exchange','Member'))){ ?>微会员<?php } ?>
                <?php if(in_array(MODULE_NAME,array('Taobao','Api','Liuyan'))){ ?>互动模块<?php } ?>
            </a>
            <span>
            	<?php if(MODULE_NAME == 'Function'): ?>- 功能管理<?php endif; ?>
                <?php if(MODULE_NAME == 'Areply'): ?>- 关注回复<?php endif; ?>
                <?php if(MODULE_NAME == 'Text'): ?>- 文本回复<?php endif; ?>
                <?php if(MODULE_NAME == 'Voiceresponse'): ?>- 语音回复<?php endif; ?>
                <?php if(MODULE_NAME == 'Index'): ?>- 短信邮箱<?php endif; ?>
                <?php if(MODULE_NAME == 'Index'): ?>- 短信邮箱<?php endif; ?>
                <?php if(MODULE_NAME == 'Alipay_config'): ?>- 支付宝设置<?php endif; ?>
                <?php if(MODULE_NAME == 'Alipay_m_config'): ?>- 支付宝设置<?php endif; ?>
                <?php if(MODULE_NAME == 'Requerydata'): ?>- 统计分析<?php endif; ?>
                <?php if(MODULE_NAME == 'Company'): ?>- LBS回复<?php endif; ?>
                <?php if(MODULE_NAME == 'Home'): ?>- 首页设置<?php endif; ?>
                <?php if(MODULE_NAME == 'Tmpls'): ?>- 模版管理<?php endif; ?>
                <?php if(MODULE_NAME == 'Classify'): ?>- 分类管理<?php endif; ?>
                <?php if(MODULE_NAME == 'Img'): ?>- 图文回复<?php endif; ?>
                <?php if(MODULE_NAME == 'Diymen'): ?>- 自定义菜单<?php endif; ?>
                <?php if(MODULE_NAME == 'Flash'): ?>- 幻灯片<?php endif; ?>
                <?php if(MODULE_NAME == 'Photo'): ?>- 相册<?php endif; ?>
                <?php if(MODULE_NAME == 'plugmenu'): ?>- 相册<?php endif; ?>
                <?php if(MODULE_NAME == 'Panorama'): ?>- 360全景<?php endif; ?>
                <?php if(MODULE_NAME == 'Reply_info'): ?>- 回复配置<?php endif; ?>
                <?php if(MODULE_NAME == 'Lottery'): ?>- 大转盘<?php endif; ?>
                <?php if(MODULE_NAME == 'Coupon'): ?>- 优惠券<?php endif; ?>
                <?php if(MODULE_NAME == 'Guajiang'): ?>- 刮刮卡<?php endif; ?>
                <?php if(MODULE_NAME == 'Zadan'): ?>- 砸金蛋<?php endif; ?>
                <?php if(MODULE_NAME == 'Wedding'): ?>- 微喜帖<?php endif; ?>
                <?php if(MODULE_NAME == 'Research'): ?>- 微调研<?php endif; ?>
                <?php if(MODULE_NAME == 'Weidiaoyan'): ?>- 微调研<?php endif; ?>
                <?php if(MODULE_NAME == 'Product'): ?>- 微商城<?php endif; ?>
                <?php if(MODULE_NAME == 'Groupon'): ?>- 微团购<?php endif; ?>
                <?php if(MODULE_NAME == 'orders'): ?>- 无线订餐<?php endif; ?>
                <?php if(MODULE_NAME == 'Host'): ?>- 通用订单<?php endif; ?>
                <?php if(MODULE_NAME == 'Selfform'): ?>- 万能表单<?php endif; ?>
                <?php if(MODULE_NAME == 'Adma'): ?>- DIY宣传<?php endif; ?>
                <?php if(MODULE_NAME == 'info'): ?>- 商家设置<?php endif; ?>
                <?php if(MODULE_NAME == 'Member_card'): ?>- 会员卡<?php endif; ?>
                <?php if(MODULE_NAME == 'privilege'): ?>- 会员特权<?php endif; ?>
                <?php if(MODULE_NAME == 'create'): ?>- 在线开卡<?php endif; ?>
                <?php if(MODULE_NAME == 'exchange'): ?>- 积分设置<?php endif; ?>
                <?php if(MODULE_NAME == 'Member'): ?>- 资料管理<?php endif; ?>
                <?php if(MODULE_NAME == 'Taobao'): ?>- 淘宝天猫<?php endif; ?>
                <?php if(MODULE_NAME == 'Api'): ?>- 第三方<?php endif; ?>
                <?php if(MODULE_NAME == 'Liuyan' ): ?>- 留言板<?php endif; ?>
            </span>
		</div>
		<div class="TwoMenu">
			<a href="<?php echo U('Function/index',array('token'=>$token,'id'=>session('wxid')));?>" >
            	<img src="<?php echo RES;?>/images/TwoMenu-ico-06.png" />
            	<span>基础</span>
            </a>
			<div id="TwoMenu-01" <?php if(in_array(MODULE_NAME,array('Function','Areply','Text','Img','Voiceresponse','Index','Company','Other','Requerydata','Alipay_config','Alipay_m_config'))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
            	<img src="<?php echo RES;?>/images/TwoMenu-ico-006.png" /><a class="a">基础</a>
            </div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
			<a href="<?php echo U('Home/set',array('token'=>$token));?>" >
            	<img src="<?php echo RES;?>/images/TwoMenu-ico-01.png" />
                <span>3G站</span>
            </a>
			<div id="TwoMenu-02" <?php if(in_array(MODULE_NAME,array('Home','Tmpls','Classify','Diymen','Flash','Photo'))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
            	<img src="<?php echo RES;?>/images/TwoMenu-ico-001.png" /><a class="a">3G站</a>
            </div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
			<a href="<?php echo U('Lottery/index',array('token'=>$token));?>" >
            	<img src="<?php echo RES;?>/images/TwoMenu-ico-03.png" /><span>营销</span>
            </a>
			<div id="TwoMenu-03" <?php if(in_array(MODULE_NAME,array('Lottery','Coupon','Guajiang','Wedding','Zadan','Wedding'))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
            	<img src="<?php echo RES;?>/images/TwoMenu-ico-003.png" /><a class="a">营销</a>
            </div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
			<a href="<?php echo U('Product/index',array('token'=>$token));?>" >
            	<img src="<?php echo RES;?>/images/TwoMenu-ico-02.png" /><span>商务</span>
            </a>
			<div id="TwoMenu-04" <?php if(in_array(MODULE_NAME,array('Product','Groupon','orders','Host','Selfform','Adma','Panorama','Reply_info'))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
            	<img src="<?php echo RES;?>/images/TwoMenu-ico-002.png" /><a class="a">商务</a>
            </div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
			<a href="<?php echo U('Member_card/index',array('token'=>$token));?>" >
            	<img src="<?php echo RES;?>/images/TwoMenu-ico-04.png" /><span>会员</span>
            </a>
			<div id="TwoMenu-05" <?php if(in_array(MODULE_NAME,array('info','Member_card','privilege','create','exchange','Member'))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
            	<img src="<?php echo RES;?>/images/TwoMenu-ico-004.png" /><a class="a">会员</a>
            </div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
			<a href="<?php echo U('Taobao/index',array('token'=>$token));?>" >
            	<img src="<?php echo RES;?>/images/6-0.png" /><span>互动</span>
            </a>
			<div id="TwoMenu-06" <?php if(in_array(MODULE_NAME,array('Taobao','Api','Liuyan'))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
            	<img src="<?php echo RES;?>/images/6-00.png" /><a class="a">互动</a>
            </div>
		</div>
		<div class="ThreeMenu">
        	<div class="contab" <?php if(in_array(MODULE_NAME,array('Function','Areply','Text','Img','Voiceresponse','Index','Company','Other','Requerydata','Alipay_config','Alipay_m_config'))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
                <a href="<?php echo U('Function/index',array('token'=>$token,'id'=>session('wxid')));?>" class="Red" >
                	<img src="<?php echo RES;?>/images/1-0.png" /><span>功能管理</span>
                </a>
                <a href="<?php echo U('Areply/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/1-1.png" /><span>关注回复</span>
                </a>
                <a href="<?php echo U('Text/index',array('token'=>$token));?>" class="Navy" >
                    <img src="<?php echo RES;?>/images/1-2.png" /><span>文本回复</span>
                </a>
                <a href="<?php echo U('Img/index',array('token'=>$token));?>" class="LightPurple" >
                    <img src="<?php echo RES;?>/images/2-3.png" /><span>图文回复</span>
                </a>
                <a href="<?php echo U('Voiceresponse/index',array('token'=>$token));?>" class="DarkGreen" >
                    <img src="<?php echo RES;?>/images/1-3.png" /><span>语音回复</span>
                </a>
                <a href="<?php echo U('Index/editsms',array('id'=>session('wxid'),'token'=>$token));?>" class="LightBlue" >
                    <img src="<?php echo RES;?>/images/1-4.png" /><span>短信设置</span>
                </a>
                <a href="<?php echo U('Index/editemail',array('id'=>session('wxid'),'token'=>$token));?>" class="Orange" >
                    <img src="<?php echo RES;?>/images/ThreeMenu-ico-07.png" /><span>邮箱设置</span>
                </a>
                <a href="<?php echo U('Company/index',array('token'=>$token));?>" class="Brown" >
                    <img src="<?php echo RES;?>/images/1-5.png" /><span>LBS回复</span>
                </a>
                <a href="<?php echo U('Alipay_m_config/index',array('token'=>$token));?>" class="LightPurple" >
                    <img src="<?php echo RES;?>/images/2-6.png" /><span>支付宝</span>
                </a>
                <a href="<?php echo U('Requerydata/index',array('token'=>$token));?>" class="LightRed" >
                    <img src="<?php echo RES;?>/images/TwoMenu-ico-05.png" /><span>统计分析</span>
                </a>
            </div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
        	<div class="contab" <?php if(in_array(MODULE_NAME,array('Home','Tmpls','Classify','Diymen','Flash','Photo','plugmenu'))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
                 <a href="<?php echo U('Home/set',array('token'=>$token));?>" class="Red" >
                     <img src="<?php echo RES;?>/images/2-0.png" /><span>首页设置</span>
                 </a>
                <a href="<?php echo U('Tmpls/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/2-1.png" /><span>模版管理</span>
                </a>
                <a href="<?php echo U('Classify/index',array('token'=>$token));?>" class="Navy" >
                    <img src="<?php echo RES;?>/images/2-2.png" /><span>分类管理</span>
                </a>
                <a href="<?php echo U('Diymen/index',array('token'=>$token));?>" class="LightBlue" >
                    <img src="<?php echo RES;?>/images/2-4.png" /><span>DIY菜单</span>
                </a>
                <a href="<?php echo U('Flash/index',array('token'=>$token));?>" class="Orange" >
                    <img src="<?php echo RES;?>/images/2-5.png" /><span>幻灯片</span>
                </a>
                <a href="<?php echo U('Photo/index',array('token'=>$token));?>" class="Brown" >
                    <img src="<?php echo RES;?>/images/2-6.png" /><span>相册</span>
                </a>
                <a href="<?php echo U('Home/plugmenu',array('token'=>$token));?>" class="LightPurple" >
                    <img src="<?php echo RES;?>/images/2-6.png" /><span>拨号版权</span>
                </a>
                <a href="<?php echo U('Yulan/index',array('token'=>$token));?>" target="_blank" class="Highland" >
                    <img src="<?php echo RES;?>/images/2-1.png" /><span>在线预览</span>
                </a>
            </div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
            <div class="contab" <?php if(in_array(MODULE_NAME,array('Lottery','Coupon','Guajiang','Research','Zadan','Wedding','Weidiaoyan'))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
                <a href="<?php echo U('Lottery/index',array('token'=>$token));?>" class="Red"  >
                    <img src="<?php echo RES;?>/images/3-0.png" /><span>大转盘</span>
                </a>
                <a href="<?php echo U('Coupon/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/3-1.png" /><span>优惠券</span>
                </a>
                <a href="<?php echo U('Guajiang/index',array('token'=>$token));?>" class="Navy" >
                    <img src="<?php echo RES;?>/images/3-2.png" /><span>刮刮卡</span>
                </a>
                 <a href="<?php echo U('Zadan/index',array('token'=>$token));?>" class="DarkGreen">
                    <img src="<?php echo RES;?>/images/3-3.png" /><span>砸金蛋</span>
                </a>
                <a href="<?php echo U('Wedding/index',array('token'=>$token));?>" class="LightBlue">
                    <img src="<?php echo RES;?>/images/3-3.png" /><span>微喜帖</span>
                </a>
                <a href="<?php echo U('Weidiaoyan/index',array('token'=>$token));?>" class="Orange" >
                    <img src="<?php echo RES;?>/images/3-4.png" /><span>微调研</span>
                </a>
            </div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
            <div class="contab" <?php if(in_array(MODULE_NAME,array('Product','Groupon','orders','Host','Selfform','Adma','Panorama','Reply_info'))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
                <a href="<?php echo U('Product/index',array('token'=>$token));?>" class="Red"  >
                    <img src="<?php echo RES;?>/images/5-0.png" /><span>微商城</span>
                </a>
                <a href="<?php echo U('Groupon/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/5-1.png" /><span>微团购</span>
                </a>
                <a href="<?php echo U('Product/orders',array('token'=>$token,'dining'=>1));?>" class="Navy" >
                    <img src="<?php echo RES;?>/images/5-2.png" /><span>无线订餐</span>
                </a>
                <a href="<?php echo U('Host/index',array('token'=>$token));?>"  class="DarkGreen" >
                    <img src="<?php echo RES;?>/images/ThreeMenu-ico-09.png" /><span>通用订单</span>
                </a>
                <a href="<?php echo U('Selfform/index',array('token'=>$token));?>" class="LightBlue" >
                    <img src="<?php echo RES;?>/images/ThreeMenu-ico-09.png" /><span>万能表单</span>
                </a>
                <a href="<?php echo U('Adma/index',array('token'=>$token));?>"  class="Orange" >
                    <img src="<?php echo RES;?>/images/ThreeMenu-ico-09.png" /><span>DIY宣传</span>
                </a>
                <a href="<?php echo U('Panorama/index',array('token'=>$token));?>" class="LightPurple" >
                    <img src="<?php echo RES;?>/images/2-6.png" /><span>360全景</span>
                </a>
            </div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
            <div class="contab" <?php if(in_array(MODULE_NAME,array('info','Member_card','privilege','create','exchange','Member'))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
                <a href="<?php echo U('Member_card/info',array('token'=>$token));?>"  class="Red"  >
                    <img src="<?php echo RES;?>/images/4-1.png" /><span>商家设置</span>
                </a>
                <a href="<?php echo U('Member_card/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/4-1.png" /><span>会员卡</span>
                </a>
                <a href="<?php echo U('Member_card/privilege',array('token'=>$token));?>" class="Navy" >
                    <img src="<?php echo RES;?>/images/4-1.png" /><span>会员特权</span>
                </a>
                <a href="<?php echo U('Member_card/create',array('token'=>$token));?>" class="DarkGreen" >
                    <img src="<?php echo RES;?>/images/4-1.png" /><span>在线开卡</span>
                </a>
                <a href="<?php echo U('Member_card/exchange',array('token'=>$token));?>" class="LightBlue" >
                    <img src="<?php echo RES;?>/images/4-1.png" /><span>积分设置</span>
                </a>
                <a href="<?php echo U('Member/index',array('token'=>$token));?>" class="Orange" >
                    <img src="<?php echo RES;?>/images/4-1.png" /><span>资料管理</span>
                </a>
            </div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
            <div class="contab" <?php if(in_array(MODULE_NAME,array('Taobao','Api','Liuyan'))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
                <a href="<?php echo U('Taobao/index',array('token'=>$token));?>"  class="Red"  >
                    <img src="<?php echo RES;?>/images/ThreeMenu-ico-04.png" /><span>淘宝天猫</span>
                </a>
                <a href="<?php echo U('Api/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/ThreeMenu-ico-04.png" /><span>第三方</span>
                </a>
                <a href="<?php echo U('Liuyan/index',array('token'=>$token));?>" class="Navy" >
                    <img src="<?php echo RES;?>/images/ThreeMenu-ico-04.png" /><span>留言板</span>
                </a>
            </div>
		</div>
	</div>
	<div id="Content" >
	</div>  
<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>
<script src="<?php echo RES;?>/js/cart/jscolor.js" type="text/javascript"></script>
<style type="text/css">
.vipcard{
margin: 0 auto;
position: relative;
height: 159px;
text-align: left;
width: 267px;
}
#cardbg{
height: 159px;
width: 267px;
position:absolute;
border-radius: 8px;
-webkit-border-radius:8px;
-moz-border-radius:8px;
box-shadow: 0 0 4px rgba(0, 0, 0, 0.6);
-moz-box-shadow:0 0 4px rgba(0, 0, 0, 0.6);
-webkit-box-shadow:0 0 8px rgba(0, 0, 0, 0.6);
top:0;
left:0;
z-index:1;
}
.vipcard .logo {
max-height:70px;
position:absolute;
top:8px;
left:5px;
z-index:2;
}
.vipcard .verify {
display:inline-block;
height:40px;
top:105px;
right:12px;
text-align:right;
line-height:24px;
color:#000;
font-size:20px;
text-shadow:0 1px rgba(255, 255, 255, 0.2);
z-index:2;
}

.vipcard h1 {
position:absolute;
right:10px;
top:7px;
text-shadow:0 1px rgba(255, 255, 255, 0.2);
color:#000;
font-size:11px;
line-height:25px;
text-align:right;
font-weight: normal;
z-index:2;
}
.vipcard .verify span {
display:inline-block;
text-align:left;
}
.vipcard .verify em {
display:block;
line-height:13px;
font-size:10px;
font-weight:normal;
font-style:normal;
}
.pdo {
position:absolute;
top:0;
left:0;
display:inline-block;
}
.userinfoArea td {
    padding: 0px 0px 0px 10px;
}
#tishi{
text-align: center;display: block;
}
.banner{
display:block; width:213px;height: 278px;overflow: hidden;
}
.banner img{
display:block; width:213px; border:0;
}
.bannerbtn{ position:relative; display:block}
.bannerbtn .qiaodaobtn{ position: absolute; display:block; bottom:0}

</style>
  <form class="form" method="post" action="" target="_top" enctype="multipart/form-data">
        <div class="content" style="width:920px; background:none; margin-left:275px; border:none; margin-bottom:30px;" >

          <div class="cLineB">
         <h4>会员卡版面设置<span class="FAQ">开始DIY你的会员卡吧，logo、背景以及字体颜色都可以自由调整。</span></h4><a href="javascript:history.go(-1);" class="right btnGrayS vm" style="margin-top:-25px">返回</a></div>  
<div class="msgWrap bgfc" style="padding:10px;">
 
<table class="userinfoArea" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%"><tbody>
<tr>
<th width="303" rowspan="5" valign="top">
	<div class="vipcard">
		<img id="cardbg" src="<?php echo ($card["diybg"]); ?>">
		<img id="cardlogo" class="logo" src="<?php echo ($card["logo"]); ?>">
		<h1 id="vipname" style="color:<?php echo ($card["vipnamecolor"]); ?>"><?php echo ($card["cardname"]); ?>会员卡</h1>
		<strong class="pdo verify" id="number" style="color:<?php echo ($card["vipnamecolor"]); ?>"><span><em>会员卡号</em>2188 5539</span></strong>
	</div>
</th>
<td colspan="2">会员卡的名称：
<input type="text" name="cardname" value="<?php echo ($card["cardname"]); ?>" id="cardname" class="px" style="width:200px;" onkeyup="DivFollowingText()"> 
<script type="text/javascript">
function DivFollowingText()
{
document.getElementById("vipname").innerHTML=document.getElementById("cardname").value;
}
</script>
颜色：
<input type="text" name="vipnamecolor" id="vipnamecolor" value="<?php echo ($card["vipnamecolor"]); ?>" class="px color" style="width: 55px; background-image: none; background-color:<?php echo ($card["vipnamecolor"]); ?>; color: rgb(255, 255, 255);" onblur="document.getElementById(&#39;vipname&#39;).style.color=document.getElementById(&#39;vipnamecolor&#39;).value;">
</td>
</tr>

<tr>
<td colspan="2">会员卡的图标：
<input type="text" name="logo" id="logo" value="<?php echo ($card["logo"]); ?>" class="px" style="width:200px;"> 
<input type="button" onclick="document.getElementById(&#39;cardlogo&#39;).src=document.getElementById(&#39;logo&#39;).value;" value="显示效果" class="btnGrayS"> <script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('logo',1000,600,'<?php echo ($token); ?>')" class="a_upload">上传</a> <a href="###" onclick="viewImg('logo')">预览</a></td></tr>
<tr>
<td colspan="2">会员卡的背景：
	<select name="bg" onchange="document.getElementById(&#39;cardbg&#39;).src=this.options[this.selectedIndex].value;" class="pt" style="width:210px;"> 
	<option selected="">请选择会员卡背景图</option>
		<?php  for($i=1;$i<=23;$i++){ $i=$i<10?'0'.$i:$i; $str='./tpl/User/default/common/images/card/card_bg'.$i.'.png'; if($card['bg']==$str){ echo $str='<option value="'.$str.'" selected="selected" >'.$i.'</option>'; }else{ echo $str='<option value="'.$str.'">'.$i.'</option>'; } } ?>
		
	</select>
</td>
</tr>
<tr>
<td colspan="2">自己设计背景：
	<input type="text" name="diybg" id="bg" class="px" value="<?php echo ($card["diybg"]); ?>" style="width:200px;"> 
	<input type="button" onclick="document.getElementById(&#39;cardbg&#39;).src=document.getElementById(&#39;bg&#39;).value;" value="显示效果" class="btnGrayS"> 
	  <script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('bg',1000,600,'<?php echo ($token); ?>')" class="a_upload">上传</a> <a href="###" onclick="viewImg('bg')">预览</a>
</td>
</tr>
<tr>
<td colspan="2">卡号文字颜色：
<input type="text" name="numbercolor" id="numbercolor" value="<?php echo ($card["numbercolor"]); ?>" class="px color" style="width: 55px; background-image: none; background-color: rgb(0, 0, 0); color: rgb(255, 255, 255);" onblur="document.getElementById(&#39;number&#39;).style.color=document.getElementById(&#39;numbercolor&#39;).value;"> </td>
</tr>
<tr>
<td><span id="tishi">微时代会员卡，方便携带收藏，永不挂失</span></td>
<td colspan="2">首页提示文字：
<input type="text" name="msg" value="<?php echo ($card["msg"]); ?>" id="tishi2" class="px" style="width:287px;" onkeyup="DivFollowingText2()"> 请不要超过20个字。
<script type="text/javascript">
function DivFollowingText2()
{
document.getElementById("tishi").innerHTML=document.getElementById("tishi2").value;
}
</script></td>
</tr>
<tr>
<th valign="top" height="40"></th>
<td colspan="2"><span class="red">备注：Logo宽370px高170px，图案上下左右居中，背景图宽534px高318px，图片类型png。</span><a href="<?php echo RES;?>/images/cart_info/template.rar" class="green">请下载模板</a></td>
</tr>
<tr>
<th>&nbsp;</th>
<td width="70">&nbsp;</td>
<td><button type="submit" name="button" class="btnGreen">保存</button></td>
</tr>
</tbody>
</table>
  </div> 
  
<div class="cLineB">
          	<h4>各内容页头部Benner图片设置<span class="FAQ">根据你企业的特色设计内容页头部图片，完全展示出不同的会员卡风格。</span></h4></div> 
<div class="msgWrap bgfc" style="padding:15px 5px 10px 5px;">
 
  	<table class="userinfoArea" style=" margin: 0;padding:0px;" border="0" cellspacing="0" cellpadding="0" width="100%"><tbody>
	 <tr>
		<td align="center" valign="top">
			<div class="banner">
				<img src="<?php echo RES;?>/images/cart_info/news-2.jpg">
				<img id="news" src="<?php echo ($card["Lastmsg"]); ?>">
				<img src="<?php echo RES;?>/images/cart_info/news-3.jpg">
			</div>
		</td>
		<td align="center" valign="top">
			<div class="banner">
				<img src="<?php echo RES;?>/images/cart_info/vippower-2.jpg">
				<img id="vippower" src="<?php echo ($card["vip"]); ?>">
				<img src="<?php echo RES;?>/images/cart_info/vippower-3.jpg"></div>
		</td>
		<td align="center" valign="top">
			<div class="banner">
				<img src="<?php echo RES;?>/images/cart_info/qiandao-2.jpg">
				<img id="qiandao" src="<?php echo ($card["qiandao"]); ?>">
				<div class="bannerbtn">
					<img src="<?php echo RES;?>/images/cart_info/qiandao-3.jpg">
					<img class="qiaodaobtn" src="<?php echo RES;?>/images/cart_info/qiandao-4.png">
				</div>
			</div>
		</td>
		<td align="center" valign="top">
			<div class="banner">
				<img src="<?php echo RES;?>/images/cart_info/shopping-2.jpg">
				<img id="shopping" src="<?php echo ($card["shopping"]); ?>">
				<img src="<?php echo RES;?>/images/cart_info/shopping-3.jpg">
			</div>
		</td>
	</tr>
<tr>
<td align="center">上传或填写外链地址查看效果</td>
<td align="center">上传或填写外链地址查看效果</td>
<td align="center">上传或填写外链地址查看效果</td>
<td align="center">上传或填写外链地址查看效果</td>
</tr>
<tr>
	<td align="center">
		<textarea name="Lastmsg" class="px" id="news2" style="width:200px; height:36px" onblur="document.getElementById(&#39;news&#39;).src=document.getElementById(&#39;news2&#39;).value;"><?php echo ($card["Lastmsg"]); ?></textarea><br><script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('news2',700,420,'<?php echo ($token); ?>')" class="a_upload">上传</a> <a href="###" onclick="viewImg('news2')">预览</a>
	</td>
	<td align="center">
		<textarea name="vip" class="px" id="vippower2" style="width:200px; height:36px" onblur="document.getElementById(&#39;vippower&#39;).src=document.getElementById(&#39;vippower2&#39;).value;"><?php echo ($card["vip"]); ?></textarea><br><script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('vippower2',700,420,'<?php echo ($token); ?>')" class="a_upload">上传</a> <a href="###" onclick="viewImg('vippower2')">预览</a>
	</td>
	<td align="center">
		<textarea name="qiandao" class="px" id="qiandao2" style="width:200px; height:36px" onblur="document.getElementById(&#39;qiandao&#39;).src=document.getElementById(&#39;qiandao2&#39;).value;"><?php echo ($card["qiandao"]); ?></textarea><br><script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('qiandao2',700,420,'<?php echo ($token); ?>')" class="a_upload">上传</a> <a href="###" onclick="viewImg('qiandao2')">预览</a>
	</td>
	<td align="center">
		<textarea name="shopping" class="px" id="shopping2" style="width:200px; height:36px" onblur="document.getElementById(&#39;shopping&#39;).src=document.getElementById(&#39;shopping2&#39;).value;"><?php echo ($card["shopping"]); ?></textarea><br><script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('shopping2',700,420,'<?php echo ($token); ?>')" class="a_upload">上传</a> <a href="###" onclick="viewImg('shopping2')">预览</a>
	</td>
 </tr>
<tr>
<td></td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td align="center" valign="top">
	<div class="banner">
		<img src="<?php echo RES;?>/images/cart_info/user-2.jpg">
		<img id="user" src="<?php echo ($card["memberinfo"]); ?>">
		<img src="<?php echo RES;?>/images/cart_info/user-3.jpg">
	</div>
</td>
<td align="center" valign="top">
	<div class="banner">
		<img src="<?php echo RES;?>/images/cart_info/info-2.jpg">
		<img id="info" src="<?php echo ($card["membermsg"]); ?>">
		<img src="<?php echo RES;?>/images/cart_info/info-3.jpg">
	</div>
</td>
<td align="center" valign="top">
	<div class="banner">
		<img src="<?php echo RES;?>/images/cart_info/addr-2.jpg">
		<img id="addr" src="<?php echo ($card["contact"]); ?>">
		<img src="<?php echo RES;?>/images/cart_info/addr-3.jpg">
	</div>
</td>
<td align="center" valign="middle">
	<span class="red">备注：图片宽640px高109px或者更高，但是不要高太多；图片类型为jpg，签到图片外与其他图片高度不同，尽量根据模板图片修改。</span>
	<a href="<?php echo RES;?>/images/cart_info/template.rar" class="green">请下载模板</a>
</td>
</tr>
<tr>
<td align="center">上传或填写外链地址查看效果</td>
<td align="center">上传或填写外链地址查看效果</td>
<td align="center">上传或填写外链地址查看效果</td>
<td>&nbsp;</td>
</tr>
<tr>
<td align="center">
	<textarea name="memberinfo" class="px" id="user2" style="width:200px; height:36px" onblur="document.getElementById(&#39;user&#39;).src=document.getElementById(&#39;user2&#39;).value;"><?php echo ($card["memberinfo"]); ?></textarea><br><script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('user2',700,420,'<?php echo ($token); ?>')" class="a_upload">上传</a> <a href="###" onclick="viewImg('user2')">预览</a>
</td>
<td align="center">
	<textarea name="membermsg" class="px" id="info2" style="width:200px; height:36px" onblur="document.getElementById(&#39;info&#39;).src=document.getElementById(&#39;info2&#39;).value;"><?php echo ($card["membermsg"]); ?></textarea><br><script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('info2',700,420,'<?php echo ($token); ?>')" class="a_upload">上传</a> <a href="###" onclick="viewImg('info2')">预览</a>
</td>
<td align="center">
	<textarea name="contact" class="px" id="addr2" style="width:200px; height:36px" onblur="document.getElementById(&#39;addr&#39;).src=document.getElementById(&#39;addr2&#39;).value;"><?php echo ($card["contact"]); ?></textarea><br><script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('addr2',700,420,'<?php echo ($token); ?>')" class="a_upload">上传</a> <a href="###" onclick="viewImg('addr2')">预览</a>
</td>
<td><button type="submit" name="button" class="btnGreen">保存</button></td>
</tr>
</tbody>
</table>
  </div> 
        </div>
</form>
        
      
        <div class="clr"></div>
		
	<div style="clear:both;"></div>
</div>



</body>
</html>
      </div>
    </div>
  </div>