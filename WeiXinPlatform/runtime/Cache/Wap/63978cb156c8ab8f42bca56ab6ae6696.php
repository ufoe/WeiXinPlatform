<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<meta name="description" content="">
<title>消费记录</title>
<link href="<?php echo RES;?>/css/guajiang/css/activity-style.css" rel="stylesheet" type="text/css">
<style type="text/css">
#txt {
  color: #000000;
}
.footFix{width:100%;text-align:center;position:fixed;left:0;bottom:0;z-index:99;}
#footReturn a, #footReturn2 a {
display: block;
line-height: 41px;
color: #fff;
text-shadow: 1px 1px #282828;
font-size: 14px;
font-weight: bold;
}
#footReturn, #footReturn2 {
z-index: 89;
display: inline-block;
text-align: center;
text-decoration: none;
vertical-align: middle;
cursor: pointer;
width: 100%;
outline: 0 none;
overflow: visible;
Unknown property name.-moz-box-sizing: border-box;
box-sizing: border-box;
padding: 0;
height: 41px;
opacity: .95;
border-top: 1px solid #181818;
box-shadow: inset 0 1px 2px #b6b6b6;
background-color: #515151;
Invalid property value.background-image: -ms-linear-gradient(top,#838383,#202020);
background-image: -webkit-linear-gradient(top,#838383,#202020);
Invalid property value.background-image: -moz-linear-gradient(top,#838383,#202020);
Invalid property value.background-image: -o-linear-gradient(top,#838383,#202020);
background-image: -webkit-gradient(linear,0% 0,0% 100%,from(#838383),to(#202020));
Invalid property value.filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#838383',endColorstr='#202020');
Unknown property name.-ms-filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#838383',endColorstr='#202020');
}
.thistr{
  background-color: #EEE;
}
</style>
</head> 

<body data-role="page" >

<div class="main">
<div class="cover">
 <?php if($cardset['shopping'] != false): ?><img src="<?php echo $cardset['shopping'];?>">
 <?php else: ?>
   <img src="<?php echo RES;?>/images/cart_info/shopping.jpg"><?php endif; ?>

</div>

<div class="content"> 
  <div class="boxcontent boxwhite">
    <div class="box">
      <table border="0"  align="center" cellSpacing="0" cellPadding="0" width="100%" >
        <thead >
          <tr align="middle" class="thistr">
            <th><strong>总积分</strong></th>
            <th><strong>签到积分</strong></th>
            <th><strong>消费积分</strong></th>
          </tr>
        </thead>
        <tbody>
          <tr align="middle">
            <td><?php echo ($userinfo['sign_score']+$userinfo['expend_score']); ?></td>
            <td><?php echo ($userinfo['sign_score']); ?></td>
            <td><?php echo ($userinfo['expend_score']); ?></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="boxcontent boxwhite">
    <div class="box">
      <div class="day-brown">查看每月消费及积分情况</div>
      <div class="Detail">
        <table border="0" cellSpacing="0" cellPadding="0" width="100%"  align="center" >
        <thead >
          <tr align="middle" class="thistr">
            <th><strong>日期</strong></th>
            <th><strong>消费金额</strong></th>
            <th><strong>积分</strong></th>
          </tr>
        </thead>
        <tbody>
          <?php if(is_array($sign)): $i = 0; $__LIST__ = $sign;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><tr align="middle">
              <td><?php if($list["sign_time"] != false): echo (date("Y-m-d",$list["sign_time"])); else: ?>无<?php endif; ?></td>
              <td><?php echo ($list["sell_expense"]); ?> 元</td>
              <td><?php echo ($list["expense"]); ?></td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
        <!--
        <tbody>           
            <tr align="middle">
              <td>本月</td>
              <td><?php echo ($list["sell_expense"]); ?> 元</td>
              <td>+ <?php echo ($list["expense"]); ?></td>
            </tr>          
        </tbody>
        -->
      </table>      
              
      </div>
    </div>
  </div>
</div>
<div style="clear:both;"></div>
</div>  

<div style="height:20px;"></div>
<div class="footFix" id="footReturn"><a href="javascript:void(0)" onClick="location.href='<?php echo U('Wap/Index/index',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id']));?>';"><span>返回3G网站</span></a></div>

 
</body></html>