<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<meta name="description" content="">

<title><?php echo ($Dazpan["title"]); ?></title>
<link href="<?php echo RES;?>/css/guajiang/css/activity-style.css" rel="stylesheet" type="text/css">
<style>
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

</style>
</head>
<body class="activity-lottery-winning" >
<div  class="main" >
<script type="text/javascript">
if (typeof WeixinJSBridge== 'undefined'){
    //window.location.href='/alert.html';
}else{
    
}
var loadingObj = new loading(document.getElementById('loading'),{radius:20,circleLineWidth:8});   
    loadingObj.show();   
</script>

<?php if($Dazpan['end'] == 1): ?><div class="activity-lottery-end" >
    <div  class="main" >
    <div class="banner"><img src="<?php echo RES;?>/css/guajiang/images/activity-lottery-end2.jpg" /></div>
    <div class="content" style=" margin-top:10px">
        <div class="boxcontent boxyellow">
            <div class="box">
                <div class="title-red">活动结束说明：</div>
                <div class="Detail">
                <p> <?php echo ($Dazpan["endinfo"]); ?> </p>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
<?php else: ?>
    <div id="outercont"  >
        <div id="outer-cont">
            <div id="outer"><img src="<?php echo RES;?>/css/guajiang/images/activity-lottery-5.png"></div>
        </div>
        <div id="inner-cont">
            <div id="inner"><img src="<?php echo RES;?>/css/guajiang/images/activity-lottery-2.png"></div>
        </div>
    </div><?php endif; ?>
<div class="content">
    <div class="boxcontent boxyellow"  id="result"  style="display:none"  >
    <div class="box">
        <div class="title-orange"><span>恭喜您中奖了</span></div>
        <div class="Detail">    
            <p>你中了：<span class="red" id="prizetype" >   </span></p>
            <p>兑奖SN码：<span class="red" id="sncode" ></span></p>
            <p class="red" id="red"><?php echo ($Dazpan["sttxt"]); ?></p>
            <p>
            <input name=""  class="px" id="tel" value="" type="text" placeholder="请输入您的手机号">
            <input name=""  class="px" id="wechaname" value="" type="text" placeholder="请输入您的微信号">
            <input name=""  id="wechaid" value="<?php echo ($Dazpan["wecha_id"]); ?>" type="hidden">
            <input name=""  id="lid" value="<?php echo ($Dazpan["lid"]); ?>" type="hidden">
            <input name=""  id="winprize" value="" type="hidden">
            </p>
            <p>
            <input class="pxbtn" name="提 交"  id="save-btn" type="button" value="用户提交">
            </p>
        </div>
    </div>
</div>
<?php if($Dazpan['end'] == 5): ?><div  class="main" >
    <div class="content" style=" margin-top:10px">
        <div class="boxcontent boxyellow">
            <div class="box">
                <div class="title-red">恭喜:</div>
                <div class="Detail">
                <p> 尊敬的:<font color='red'><?php echo ($Dazpan["uname"]); ?> </font>,您已经中了<font color='red'> <?php echo ($Dazpan["prize"]); ?> </font> ,您的领奖序列号:<font color='red'> <?php echo ($Dazpan["sn"]); ?> </font>请您牢记及尽快与我们联系</p>
                </div>
            </div>
        </div>
    </div>
    </div><?php endif; ?>
<?php if($Dazpan['On'] == 1): ?><div class="boxcontent boxyellow">
    <div class="box">
    <div class="title-green"><span>奖项设置：</span></div>
         <div class="Detail">
		 <p>每人最多允许抽奖次数:<?php echo ($Dazpan["canrqnums"]); if($Dazpan["usenums"] > 0): ?>- 已抽取 <span class="red" id="usenums"><?php echo ($Dazpan["usenums"]); ?></span> 次<?php endif; ?></p>
            <p>一等奖: <?php echo ($Dazpan["fist"]); ?>  <?php if($Dazpan['displayjpnums']){ ?>奖品数量: <?php echo ($Dazpan["fistnums"]); } ?></p>
              <?php if($Dazpan['second'] != ''): ?><p>二等奖: <?php echo ($Dazpan["second"]); ?> <?php if($Dazpan['displayjpnums']){ ?>奖品数量: <?php echo ($Dazpan["secondnums"]); } ?></p><?php endif; ?>             
            <?php if($Dazpan['third'] != ''): ?><p>三等奖: <?php echo ($Dazpan["third"]); ?> <?php if($Dazpan['displayjpnums']){ ?>奖品数量: <?php echo ($Dazpan["thirdnums"]); } ?></p><?php endif; ?>
            <?php if($Dazpan['four'] != ''): ?><p>四等奖: <?php echo ($Dazpan["four"]); ?>  <?php if($Dazpan['displayjpnums']){ ?>奖品数量: <?php echo ($Dazpan["fournums"]); } ?></p><?php endif; ?>
            <?php if($Dazpan['five'] != ''): ?><p>五等奖: <?php echo ($Dazpan["five"]); ?>  <?php if($Dazpan['displayjpnums']){ ?>奖品数量: <?php echo ($Dazpan["fivenums"]); } ?></p><?php endif; ?>
            <?php if($Dazpan['six'] != ''): ?><p>六等奖: <?php echo ($Dazpan["six"]); ?>   <?php if($Dazpan['displayjpnums']){ ?>奖品数量: <?php echo ($Dazpan["sixnums"]); } ?></p><?php endif; ?>
        </div>
</div>
</div>
<div class="boxcontent boxyellow">
    <div class="box">
        <div class="title-green">活动说明：</div>
        <div class="Detail">
        <p><?php echo ($Dazpan["info"]); ?></p>
        <p>活动时间:<?php echo (date("Y-m-d",$Dazpan["statdate"])); ?>至<?php echo (date("Y-m-d",$Dazpan["enddate"])); ?></p>		
        <p><strong><?php echo ($Dazpan["txt"]); ?></strong></p>  
        </div>
    </div>
</div><?php endif; ?>
</div>
</div>
<div style="height:60px;"></div>
<div class="footFix" id="footReturn"><a href="javascript:void(0)" onClick="location.href='<?php echo U('Wap/Index/index',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id']));?>';"><span>返回3G网站</span></a></div>
<script src="<?php echo RES;?>/css/guajiang/js/jquery.js" type="text/javascript"></script> 
<script src="<?php echo RES;?>/css/guajiang/js/alert.js" type="text/javascript"></script> 
<script type="text/javascript">

$(function() {
    window.requestAnimFrame = (function() {
        return window.requestAnimationFrame ||
        window.webkitRequestAnimationFrame ||
        window.mozRequestAnimationFrame ||
        window.oRequestAnimationFrame ||
        window.msRequestAnimationFrame ||
        function(callback) {
            window.setTimeout(callback, 1000 / 60)
        }
    })();

    var totalDeg = 360 * 3 + 0;
    var steps = []; 
    var lostDeg = [36, 96, 156, 216, 276,336];
    var prizeDeg = [6, 66, 126,186,246,306];
    var prize, sncode;
	var usenums = 0;
    var count = 0; 
    var now = 0;
    var a = 0.01;
    var outter, inner, timer, running = false;

    function countSteps() {
        var t = Math.sqrt(2 * totalDeg / a);
        var v = a * t;
        for (var i = 0; i < t; i++) {
            steps.push((2 * v * i - a * i * i) / 2)
        }
        steps.push(totalDeg)
    }
     
    function step() {
        outter.style.webkitTransform = 'rotate(' + steps[now++] + 'deg)';
        outter.style.MozTransform = 'rotate(' + steps[now++] + 'deg)';
        if (now < steps.length) { 
            running = true;
            requestAnimFrame(step) 
        } else { 
            running = false;            
             
            setTimeout(function() {
                if (prize != null) {  //中奖
                    $("#sncode").text(sncode);
                    var type = "";
                    if (prize == 1) {
                        type = "一等奖"
                    } else if (prize == 2) {
                        type = "二等奖"
                    } else if (prize == 3) {
                        type = "三等奖"
                    }
                    else if (prize == 4) {
                        type = "四等奖"
                    }
                    else if (prize == 5) {
                        type = "五等奖"
                    }
                    else if (prize == 6) {
                        type = "六等奖"
                    }
                    $("#prizetype").text(type);
                    $("#winprize").val(type);
                    $("#result").slideToggle(500);  
                    $("#outercont").slideUp(500)
                } else { //不中奖
					$("#usenums").text(usenums);
                    alert("Oh,亲，继续努力哦！^_^.")
                }
            }, 200)
        } //if
    } //setps()
    
    function start(deg) {       
        deg = deg || lostDeg[parseInt(lostDeg.length * Math.random())];
        running = true;
        clearInterval(timer);
        totalDeg = 360 * 5 + deg;
        steps = [];
        now = 0;
        countSteps();
        requestAnimFrame(step)
    }
    
    window.start = start;
    outter = document.getElementById('outer'); 
    inner = document.getElementById('inner'); 
    i = 10;
    var end = 0;
    $("#inner").click(function() {

        if (running) return;
        if (count >= <?php echo ($Dazpan["canrqnums"]); ?>) {
            alert("Oh~No~您已经抽了<?php echo ($Dazpan["canrqnums"]); ?> 次奖,不能再抽了,下次再来吧!");
            return
        }

        if (prize != null) {
            alert("亲，你不能再参加本次活动了喔！下次再来吧^_^");
            return
        }

       $.ajax({
         url     : "index.php?g=Wap&m=Lottery&a=getajax",
         dataType: "json",
         type    : "POST",
         data    : {
            token  : "<?php echo ($Dazpan["token"]); ?>",
            oneid  : "<?php echo ($Dazpan["wecha_id"]); ?>",
            id     : <?php echo ($Dazpan["lid"]); ?>,
            rid    : <?php echo ($Dazpan["rid"]); ?> 
         },
         beforeSend : function(){
            running = true;
            timer = setInterval(function() {
                i += 5;
                outter.style.webkitTransform = 'rotate(' + i + 'deg)';
                outter.style.MozTransform = 'rotate(' + i + 'deg)'
            },1)
         },
         success    : function(backdata){
            if (backdata.norun == 1) {      
                    alert(backdata.msg);
                    count = 5; //原来是 5 
                    clearInterval(timer);
                    return
            }
            if (backdata.norun == 2) {  
                    alert("您已经抽了"+backdata.canrqnums+"次奖,不能再抽了,下次再来吧!");
                    count = backdata.canrqnums;
                    clearInterval(timer);
                    return
            }
            if (backdata.norun == 3) {
                    alert("请您向公众平台发送抽奖指令，参与抽奖!");
                    clearInterval(timer);
                    return
            }
            
            if (backdata.success) { 
                prize = backdata.prizetype;
                 if(prize!=''){
                    sncode = backdata.sn;
                    start(prizeDeg[backdata.prizetype - 1])
                 }else{
                    prize = null;
					usenums=backdata.usenums;
                    start()
                }                    
        
            } else {

                    prize = null;
					usenums=backdata.usenums;
                    start()
            }
            running = false;
            count++;
         },
         error      : function(){
                prize = null;
				usenums=backdata.usenums;
                start();
                running = false;
                count++;
         },
         complete   : function(XMLHttpRequest, textStatus){
            //console.log('当请求完成之后调用这个函数，无论成功或失败.  请求类型:'+textStatus);  
         },
         timeout    : 3000       
        
       })//ajax
    }) //#inner click function;
});

//中奖提交
$("#save-btn").bind("click",
function() {
    var btn = $(this);
    var tel = $("#tel").val();
    var wxname  = $("#wechaname").val();
    var wechaid = $("#wechaid").val();
    var lid     = $("#lid").val();
    var prizetype = $("#winprize").val();
    if (tel == '') {
        alert("请认真输入手机号");
        return
    }
    
    if (wxname == '') {
        alert("请认真输入微信号");
        return
    }
   
    var submitData = {
        lid: lid,
        sncode: $("#sncode").text(),
        tel: tel,
        wxname: wxname,
        wechaid:wechaid,
        prizetype:prizetype,
        action: "add"
    };
    $.post('index.php?g=Wap&m=Lottery&a=add', submitData,
    function(data) {
        if (data.success == true) {
            alert(data.msg);
            $("#result").hide("slow");
            return
        } else {}
    },
    "json")
});
</script>
</body>
</html>