<?php
class UserAction extends BaseAction{
	public $userGroup;
	protected function _initialize(){
		parent::_initialize();
		$userinfo=M('User_group')->where(array('id'=>session('gid')))->find();
		$this->userGroup=$userinfo;
		$users=M('Users')->where(array('id'=>$_SESSION['uid']))->find();
		$this->assign('thisUser',$users);
		//dump($users);
		$this->assign('viptime',$users['viptime']);
		if(session('uid')){
			if($users['viptime']<time()){
				session(null);
				session_destroy();
				unset($_SESSION);
				$this->error('您的帐号已经到期，请充值后再使用');
			}
		}
		$wecha=M('Wxuser')->field('wxname,weixin,wxid,headerpic')->where(array('token'=>session('token'),'uid'=>session('uid')))->find();
		$this->assign('wecha',$wecha);
		$this->assign('token',session('token'));
		//
		$this->assign('userinfo',$userinfo);
		if(session('uid')==false){
			$this->redirect('Home/Index/login');
		}
		/****************upyun*********************/
		define('UNYUN_BUCKET',C('up_bucket'));
		define('UNYUN_USERNAME',C('up_username'));
		define('UNYUN_PASSWORD',C('up_password'));
		define('UNYUN_FORM_API_SECRET',C('up_form_api_secret'));
		define('UNYUN_DOMAIN',C('up_domainname'));
		$this->assign('upyun_domain','http://'.UNYUN_DOMAIN);
		$this->assign('upyun_bucket',UNYUN_BUCKET);
		//
		$token=$this->_session('token');
		if (!$token){
			$token='admin';
		}
		//
		$options = array();
		$now=time();
		$options['bucket'] = UNYUN_BUCKET; /// 空间名
		$options['expiration'] = $now+3600*24*365; /// 授权过期时间
		$options['save-key'] = '/'.$token.'/{year}/{mon}/{day}/'.$now.'_{random}{.suffix}'; /// 文件名生成格式，请参阅 API 文档
		$options['allow-file-type'] = C('up_exts'); /// 控制文件上传的类型，可选
		$options['content-length-range'] = '0,'.intval(C('up_size'))*1000; /// 限制文件大小，可选
		if (intval($_GET['width'])){
			$options['x-gmkerl-type'] = 'fix_width';
			$options['fix_width '] = $_GET['width'];
		}
		//$options['return-url'] = C('site_url').'/index.php?g=User&m=Upyun&a=editorUploadReturn'; /// 页面跳转型回调地址
		$policy = base64_encode(json_encode($options));
		$sign = md5($policy.'&'.UNYUN_FORM_API_SECRET); /// 表单 API 功能的密匙（请访问又拍云管理后台的空间管理页面获取）
		$this->assign('editor_upyun_sign',$sign);
		$this->assign('editor_upyun_policy',$policy);
	}
}