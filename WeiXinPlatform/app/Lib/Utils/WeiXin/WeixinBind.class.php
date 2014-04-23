<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 14-4-20
 * Time: 下午2:26
 */
require "/../../../Extend/simple_html_dom.php";
class WeiXinBind {
    const APP_ID_STR = "AppId";
    const APP_SECRET_STR = "AppSecret";
    private static  $curl,
                    $wxUsername,
                    $wxPassword,
                    $cookie_file,
                    $token,
                    $config = array(
                            "LOGIN"                 => array("URL" => "https://mp.weixin.qq.com/cgi-bin/login?lang=zh_CN",
                                                             "HEADER" => array( "Accept:application/json, text/javascript, */*",
                                                                                "Content-Type:application/x-www-form-urlencoded",
                                                                                "Referer:https://mp.weixin.qq.com/")
                                                             ),
                            "EDIT_MODE"             => array("URL" => "https://mp.weixin.qq.com/misc/skeyform?form=advancedswitchform&lang=zh_CN",
                                                             "HEADER" => array( "Accept:application/json, text/javascript, */*",
                                                                                "Content-Type:application/x-www-form-urlencoded",
                                                                                "Referer:https://mp.weixin.qq.com/advanced/advanced?action=edit&t=advanced/edit&token={token}lang=zh_CN")
                                                            ),
                            "SET_BINDURL_TOKEN"     => array("URL" => "https://mp.weixin.qq.com/advanced/callbackprofile?t=ajax-response&lang=zh_CN",
                                                             "HEADER" => array( "Accept:application/json, text/javascript, */*",
                                                                                "Content-Type:application/x-www-form-urlencoded",
                                                                                "Referer:https://mp.weixin.qq.com/advanced/advanced?action=edit&t=advanced/edit&token={token}lang=zh_CN")
                                                            ),
                            "GET_INFO"              => array("URL" => "https://mp.weixin.qq.com/advanced/advanced?action=dev&t=advanced/dev&token={token}&lang=zh_CN",
                                                             "HEADER" => array()
                                                            )
                    );

    private static function init($username, $password){
        self::$wxUsername = $username;
        self::$wxPassword = md5($password);

        self::$curl = curl_init();

        self::$cookie_file = tempnam('./','cookie');

        self::setCurlOpt(CURLOPT_SSL_VERIFYPEER, false);
        self::setCurlOpt(CURLOPT_SSL_VERIFYHOST, false);
        self::setCurlOpt(CURLOPT_SSLVERSION, 3);
        self::setCurlOpt(CURLOPT_RETURNTRANSFER,true);//关闭直接输出
        self::setCurlOpt(CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.69 Safari/537.36');//设置用户代理
        self::setCurlOpt(CURLOPT_COOKIEJAR, self::$cookie_file);
    }

    public function __destruct() {
        curl_close(self::$curl);
    }
    
    public static function smartBind($username, $password, $bindUrl, $bindToken) {
        self::init($username, $password);
        //登录
        self::login();
        //关闭编辑者模式
        self::setWxMode("0","1");
        //关闭开发者模式
        self::setWxMode("0","2");
        //设置URL 和 Token
        self::setUrlToken($bindUrl, $bindToken);
        //开启开发者模式
        self::setWxMode("1","2");

        curl_close(self::$curl);
    }

    public static function getInfo($username, $password) {
        self::init($username, $password);
        //登录
        self::login();

        $wxAppParam = self::parseHtmlGetAppInfo();

        var_dump($wxAppParam);
//        echo $result;
        curl_close(self::$curl);
    }

    private static function parseHtmlGetAppInfo(){

        $url = self::replaceToken(self::getConfig("GET_INFO", "URL"), self::$token);

        $header = self::getConfig("GET_INFO", "HEADER");

        $result = self::curlExec($url, "", $header, 0);

        $html = new simple_html_dom();
        // 从url中加载
        $html->load($result);

        $developer_info = $html->find(".developer_info");

        $wxAppParam = array();

        foreach($developer_info as $info){
            $frms = $info->find(".frm_label");
            foreach($frms as $frm){
                if($frm->innertext == self::APP_ID_STR){
                    $wxAppParam[self::APP_ID_STR] = trim($frm->next_sibling()->plaintext);
//                    echo $frm->next_sibling()->plaintext;
                }
                if($frm->innertext == self::APP_SECRET_STR){
                    $wxAppParam[self::APP_SECRET_STR] = trim($frm->next_sibling()->plaintext);
//                    echo $frm->next_sibling()->plaintext;
                }
            }
        }

//        echo var_dump($wxAppParam);
        return $wxAppParam;
    }

    private static function login(){
        $param = array( "username" => self::$wxUsername,
                        "pwd" => self::$wxPassword,
                        "f" => "json",
                        "imgcode" => "");

        $post = http_build_query($param);

        $loginData = self::curlExec(self::getConfig('LOGIN', 'URL'), $post, self::getConfig('LOGIN', 'HEADER'));//这里会返回token，需要处理一下。

        $loginData = json_decode($loginData,true);

        $targetStr = $loginData['redirect_url'];
//        echo $targetStr;

        $findStr = "token=";
        $start = strripos($targetStr, $findStr) + strlen($findStr);

        self::$token = substr($targetStr, $start);

//        $token = str_replace('/cgi-bin/home?t=home/index&lang=zh_CN&token=','', $loginData['redirect_url']);

        echo "login ok = ".self::$token."<br />";
    }

    /**
     *
     * @param $flag 开关标志 0-关闭   1-打开
     * @param $type 模式类型 1-编辑者模式    2-开发者模式
     */
    private static function setWxMode($flag, $type){
        $param = array( "flag" => $flag,
                        "type" => $type,
                        "token" => self::$token);

        $header = self::replaceToken(self::getConfig("EDIT_MODE", "HEADER"), self::$token);

        $result = self::curlExec(self::getConfig("EDIT_MODE", "URL"), http_build_query($param), $header);

        echo "$result<br />";
    }

    private static function setUrlToken($bindUrl, $bindToken){
        $param = array( "url" => $bindUrl,
                        "callback_token" => $bindToken,
                        "token" => self::$token);

        $header = self::replaceToken(self::getConfig("SET_BINDURL_TOKEN", "HEADER"), self::$token);

        $result = self::curlExec(self::getConfig("SET_BINDURL_TOKEN", "URL"), http_build_query($param), $header);

        echo "$result<br />";
    }

    private static function curlExec($url, $postData, $header, $method = 1){

        if($method == 1){
            self::setCurlOpt(CURLOPT_POST, 1);//使用post提交数据
        } elseif($method == 0) {
            self::setCurlOpt(CURLOPT_HTTPGET, 1);//使用get方式获取
        }

        self::setCurlOpt(CURLOPT_URL, $url);

        if($postData != ""){
            self::setCurlOpt(CURLOPT_POSTFIELDS, $postData);//设置 post提交的数据
        }

        self::setCurlOpt(CURLOPT_HTTPHEADER, $header);//设置头信息

        return curl_exec(self::$curl);
    }

    /**
     * @param $str 字符串
     * @param $replaceStr 替换为
     * @return mixed
     */
    private static function replaceToken($str, $replaceStr){
        return str_replace("{token}",$replaceStr ,$str);
    }

    private static function setCurlOpt($optName, $value){
        curl_setopt(self::$curl, $optName, $value);
    }

    private static function getConfig($name, $item=""){
        if($item != ""){
            return self::$config[$name][$item];
        } else {
            return self::$config[$name];
        }
    }
}