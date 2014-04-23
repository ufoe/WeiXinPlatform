<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo ($thisForm["name"]); ?></title>
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<link href="<?php echo RES;?>/css/style/css/hotels.css" rel="stylesheet" type="text/css">
<script src="<?php echo RES;?>/css/style/js/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo $staticFilePath;?>/js/main.js"></script>

</head>

<body id="wrap">

<div class="cardexplain">


<ul class="round">
<li class="title mb"><span class="none">信息</span></li>
<?php if(is_array($submitInfo)): $i = 0; $__LIST__ = $submitInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><li class="nob" style="height:35px;line-height:35px;">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="kuang">
<tr>
<th><?php echo ($item["displayname"]); ?></th>
<td><?php echo ($item["value"]); ?></td>
</tr>
</table>
</li><?php endforeach; endif; else: echo "" ;endif; ?>                                                          
</li>
</ul>

</div>
</body>
</html>