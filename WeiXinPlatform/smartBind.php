<?php
$username = '2105266200@qq.com';
$password = md5('741qwe852asd');
$post = "username={$username}&pwd={$password}&f=json&imgcode=";
$loginUrl = "https://mp.weixin.qq.com/cgi-bin/login?lang=zh_CN";

$headerArray = array(
    'Accept:application/json, text/javascript, */*',
    'Content-Type:application/x-www-form-urlencoded',
    'Referer:https://mp.weixin.qq.com/'
);

$cookie_file = tempnam('./','cookie');


$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$loginUrl);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt ( $ch, CURLOPT_SSLVERSION, 3);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);//关闭直接输出
curl_setopt($ch,CURLOPT_POST,1);//使用post提交数据
curl_setopt($ch,CURLOPT_POSTFIELDS,$post);//设置 post提交的数据
curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.69 Safari/537.36');//设置用户代理
curl_setopt($ch,CURLOPT_HTTPHEADER,$headerArray);//设置头信息
curl_setopt($ch,CURLOPT_COOKIEJAR,$cookie_file);//设置cookie的保存目录，这里很重要，你懂的（cookie你都不存，你以为你是麻花腾啊！）

$loginData = curl_exec($ch);//这里会返回token，需要处理一下。

//获取到token的值
$loginData = json_decode($loginData,true);
$token = str_replace('/cgi-bin/home?t=home/index&lang=zh_CN&token=','', $loginData['redirect_url']);
//	$token = explode("=",$loginData['token']);
//	$token = array_pop($token);
echo "login ok = $token<br />";

$headerArray = array(
    'Accept:application/json, text/javascript, */*',
    'Content-Type:application/x-www-form-urlencoded',
    "Referer:https://mp.weixin.qq.com/advanced/advanced?action=edit&t=advanced/edit&token={$token}&lang=zh_CN"
);


$editModel = 'https://mp.weixin.qq.com/misc/skeyform?form=advancedswitchform&lang=zh_CN';


//关闭编辑者模式
$post1 = "flag=0&type=1&token={$token}";
curl_setopt($ch,CURLOPT_URL,$editModel);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);//关闭直接输出
curl_setopt($ch,CURLOPT_POST,1);//使用post提交数据
curl_setopt($ch,CURLOPT_POSTFIELDS,$post1);//设置 post提交的数据
curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.69 Safari/537.36');//设置用户代理
curl_setopt($ch,CURLOPT_HTTPHEADER,$headerArray);//设置头信息
curl_setopt($ch,CURLOPT_COOKIEJAR,$cookie_file);//设置cookie的保存目录，这里很重要，你懂的（cookie你都不存，你以为你是麻花腾啊！）
$setEditerModelData = curl_exec($ch);
echo "$setEditerModelData<br />";

//关闭开发者模式
$post2 = "flag=0&type=2&token={$token}";
curl_setopt($ch,CURLOPT_URL,$editModel);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);//关闭直接输出
curl_setopt($ch,CURLOPT_POST,1);//使用post提交数据
curl_setopt($ch,CURLOPT_POSTFIELDS,$post2);//设置 post提交的数据
curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.69 Safari/537.36');//设置用户代理
curl_setopt($ch,CURLOPT_HTTPHEADER,$headerArray);//设置头信息
curl_setopt($ch,CURLOPT_COOKIEJAR,$cookie_file);//设置cookie的保存目录，这里很重要，你懂的（cookie你都不存，你以为你是麻花腾啊！）
$setDeverModelData = curl_exec($ch);
echo "$setDeverModelData<br />";





//设置URL 和 Token
$setURLAndTokenURL = "https://mp.weixin.qq.com/advanced/callbackprofile?t=ajax-response&token={$token}&lang=zh_CN";
$post4 = "url=http://fl.act.qq.com/59522/addev/weixin&callback_token=c94696d4ffb63792b8517862dad0c6c3";
curl_setopt($ch,CURLOPT_URL,$setURLAndTokenURL);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);//关闭直接输出
curl_setopt($ch,CURLOPT_POST,1);//使用post提交数据
curl_setopt($ch,CURLOPT_POSTFIELDS,$post4);//设置 post提交的数据
curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.69 Safari/537.36');//设置用户代理
curl_setopt($ch,CURLOPT_HTTPHEADER,$headerArray);//设置头信息
curl_setopt($ch,CURLOPT_COOKIEJAR,$cookie_file);//设置cookie的保存目录，这里很重要，你懂的（cookie你都不存，你以为你是麻花腾啊！）
$setURLAndTokenURLData = curl_exec($ch);
echo "$setURLAndTokenURLData<br />";

//开启开发者模式
$post3 = "flag=1&type=2&token={$token}";
curl_setopt($ch,CURLOPT_URL,$editModel);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);//关闭直接输出
curl_setopt($ch,CURLOPT_POST,1);//使用post提交数据
curl_setopt($ch,CURLOPT_POSTFIELDS,$post3);//设置 post提交的数据
curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.69 Safari/537.36');//设置用户代理
curl_setopt($ch,CURLOPT_HTTPHEADER,$headerArray);//设置头信息
curl_setopt($ch,CURLOPT_COOKIEJAR,$cookie_file);//设置cookie的保存目录，这里很重要，你懂的（cookie你都不存，你以为你是麻花腾啊！）
$setDeverModelData = curl_exec($ch);
echo "$setDeverModelData<br />";



curl_close($ch);

?>