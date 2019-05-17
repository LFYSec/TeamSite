<?php
class MainController extends BaseController {
	// 首页
	function actionIndex(){
		$this->checkLogin();
		$this->jump("/admin/main/index");
	}

	function actionLogin(){
		$this->layout = "";
		if($_POST){
			$username = arg('username');
			$password = arg('password');
			
			$member = new Member();
			$condition = array("Name = :Name AND Password = :Password",
				":Name"=>$username,
				":Password"=>$password,
			);
			$res = $member->find($condition);
			//dump($res);
			if(empty($res)){
				$this->tips("Password error!","/main/login");
			}else{
				$_SESSION['username'] = $username;
				$_SESSION['role'] = $res['MemberType'];
				$this->jump("/admin/main/index");
			}
		}
	}
}
?>