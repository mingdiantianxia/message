<?php 
class CommonAction extends Action{

	public function _initialize(){// _initialize方法会在所有操作方法调用之前首先执行
		//初始化的时候检查用户权限     判断用户是否登陆过，通过session
		if (!isset($_SESSION['adminName'])&&$_SESSION['adminName']=='') {
				$this->redirect('Login/login');
		}
	}
}


 ?>