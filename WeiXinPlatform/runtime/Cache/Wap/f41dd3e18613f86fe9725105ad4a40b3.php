<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="zh-CN">
<head>
	<meta charset="utf-8" />
	<title><?php echo ($metaTitle); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" />
	<meta name="format-detection" content="telephone=no" />
	<link type="text/css" rel="stylesheet" href="<?php echo $staticFilePath;?>/css/style.css" />
	<script src="<?php echo $staticFilePath;?>/js/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo $staticFilePath;?>/js/main.js"></script>
</head>

<body>
	<!--头部-->
	<header class="ts1">
		<a class="u_back fl" href="javascript:history.go(-1)"></a>
		<ul class="topbar fr">
			<li>
				<a class="icon_user" href="<?php echo U('Product/my',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id'],'dining'=>$isDining));?>"> <i></i>
					我的
				</a>
			</li>
			<li>
				<a class="icon_shopping" href="<?php echo U('Product/cart',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id'],'dining'=>$isDining));?>"> <i></i>
					购物车
				</a>
			</li>
			<li>
				<a class="icon_class" href="<?php echo U('Product/cats',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id'],'dining'=>$isDining));?>">
					<i></i>
					分类
				</a>
			</li>
			<li>
				<a class="icon_index" href="<?php echo U('Product/index',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id'],'dining'=>$isDining));?>">
					<i></i>
					主页
				</a>
			</li>
		</ul>
	</header><!--主体-->
	<div class="p_floatbox">
    <div class="f_list_car p_buy clearfix" id="p_buy">
    	<span class="all_price">总价格：<font id="all_price">￥<?php echo ($totalProductFee); ?></font></span>
    	<span>总共<font id="all_numb"><?php echo ($totalProductCount); ?></font>件商品</span>
    	<a href="<?php echo U('Product/cart',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id'],'dining'=>$isDining));?>" class="p_btn_buy"><span class="ts1">进入购物车</span></a>
    </div>
</div>
<script src="<?php echo RES;?>/js/tel.js" type="text/javascript"></script> 
<div class="main">
	<div class="p_place">
		<h1><?php echo ($thisCompany["name"]); ?></h1>
		<span style="display:none"><?php echo ($branchStoreCount); ?>家分店</span>
	</div>
	
	<div class="p_mod">
		<h2 class="p_mod_title"><?php echo ($thisCompany["name"]); ?>&nbsp;</h2>
		<ul>
			
			<li class="p_phone">
				<a href="tel:<?php echo ($s["tel"]); ?>">
					<strong>电话：</strong>
					<font><?php echo ($thisCompany["tel"]); ?>&nbsp;</font>
					<span class="gt"></span>
				</a>
			</li>
			<li class="p_address">
				<a href="<?php echo U('Product/companyMap',array('token'=>$_GET['token'],'id'=>$_GET['id'],'wecha_id'=>$_GET['wecha_id']));?>">
					<strong>地址：</strong>
					<font><?php echo ($thisCompany["address"]); ?>&nbsp;</font>
					<span class="gt"></span>
				</a>
			</li>
		</ul>
	</div>
<?php if(is_array($branchStores)): $i = 0; $__LIST__ = $branchStores;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$s): $mod = ($i % 2 );++$i;?><div class="p_mod">
		<h2 class="p_mod_title"><?php echo ($s["name"]); ?>&nbsp;</h2>
		<ul>
			
			<li class="p_phone">
				<a href="tel:<?php echo ($s["tel"]); ?>">
					<strong>电话：</strong>
					<font><?php echo ($s["tel"]); ?>&nbsp;</font>
					<span class="gt"></span>
				</a>
			</li>
			<li class="p_address">
				<a href="<?php echo U('Product/companyMap',array('token'=>$_GET['token'],'id'=>$_GET['id'],'companyid'=>$s['id'],'wecha_id'=>$_GET['wecha_id']));?>">
					<strong>地址：</strong>
					<font><?php echo ($s["address"]); ?>&nbsp;</font>
					<span class="gt"></span>
				</a>
			</li>
		
		</ul>
	</div><?php endforeach; endif; else: echo "" ;endif; ?>
			
		<div class="p_mod p_seller_info p_tips ts2">
		<a href="<?php echo U('Product/product',array('token'=>$_GET['token'],'id'=>$_GET['id'],'wecha_id'=>$_GET['wecha_id']));?>">
			查看商品详情
			<span class="gt"></span>
		</a>
	</div>
	</div>
<script type="text/javascript">
window.onload = function(){
	//价格与抢购按钮浮动
	var f_obj = document.getElementById('p_buy');
	var f_y = f_obj.offsetTop;
	var f_class = f_obj.className;
	document.onscroll = function(){
		if(document.body.scrollTop>f_y){
			f_obj.className += " fixed_t";
		}else{
			f_obj.className = f_class;
		}
	}
}
</script>
<br>
</body>
</html>