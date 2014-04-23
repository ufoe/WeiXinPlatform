<?php
$api['appid'] = 'wxb1a73168e6078bd3';
$api['appsecret'] = 'd0922d6e0a843cd2057c87bfdc2ae419';
$url_get = (('https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=' . $api['appid']) . '&secret=') . $api['appsecret'];
$json = json_decode(file_get($url_get));
if($json->errcode=="40001"){
echo "\r\n json= \r\n";
print_r($json);}
//$del = file_get_contents('https://api.weixin.qq.com/cgi-bin/menu/delete?access_token=' . $json->access_token);
$url = 'https://api.weixin.qq.com/cgi-bin/menu/create?access_token=' . $json->access_token;
$data = '{"button":[{"name":"互动推广","sub_button":[{"type":"click","name":"大转盘","key":"大转盘"},{"type":"click","name":"刮刮卡","key":"刮刮卡"},{"type":"click","name":"360全景","key":"全景"},{"type":"click","name":"优惠券","key":"优惠"}]},{"name":"行业模块","sub_button":[{"type":"click","name":"体验指南","key":"指南"},{"type":"click","name":"微房产","key":"房产"},{"type":"click","name":"微汽车","key":"汽车"},{"type":"click","name":"微餐馆","key":"餐馆"}]},{"name":"加盟代理","sub_button":[{"type":"click","name":"代理支持","key":"支持"},{"type":"click","name":"代理优势","key":"优势"},{"type":"click","name":"联系我们","key":"联系"},{"type":"click","name":"关于我们","key":"关于"},{"type":"click","name":"企业资质","key":"资质"}]}]}';
$result = socket_post($url, $data);
echo "\r\n result= \r\n";
print_r($result);

function file_get($url)
{
	$temp = file_get_contents($url);
	return $temp;
}

function socket_post($url,$data) {
	$urlarr = parse_url($url);
	echo "\r\n url= \r\n";
	print_r($urlarr);
	$errno      = "";
	$errstr     = "";
	$transports = "";
	if($urlarr["scheme"] == "https") {
		$transports = "ssl://";
		$urlarr["port"] = "443";
	} else {
		$transports = "tcp://";
		$urlarr["port"] = "80";
	}
	$newurl = $transports . $urlarr['host'];
	$postdata =$data;
	echo "\r\n postdata= \r\n";
	print_r($postdata);

	$fp = @fsockopen($newurl, $urlarr['port'], $errno, $errstr, 60);
	if(!$fp) {
		die("ERROR: $errno - $errstr<br />\n");
	} else {
		fputs($fp, "POST ".$urlarr["path"]."?".$urlarr["query"]." HTTP/1.1\r\n");
		fputs($fp, "Host: ".$urlarr["host"]."\r\n");
		fputs($fp, "Content-type: application/x-www-form-urlencoded\r\n");
		fputs($fp, "Content-length: ".strlen($postdata)."\r\n");
		fputs($fp, "Connection: close\r\n\r\n");
		fputs($fp, $postdata . "\r\n\r\n");
		while(!feof($fp)) {
			$receive[] = @fgets($fp, 1024);
		}
		fclose($fp);
		echo "\r\n receive= \r\n";
		print_r($receive);
		$result = $receive[count($receive) - 1];
		return $result;
	}
}
?>