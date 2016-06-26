<?php 
class LoginAction extends Action {
		public function login(){
			$this->display();
		}
		public function doLogin(){
			//接受值		
			//存在   允许登陆
			//不存在     显示错误信息	
			$adminName=$_POST['adminName'];
			$adminPassword=$_POST['adminPassword'];
			$code=$_POST['code'];
			$online=$_POST['online'];

			if(md5($code)!=$_SESSION['code']){
				$this->error('验证码不正确！');
			}

					$admin=M('Admin');
					$where['adminname']=$adminName;
					$where['password']=$adminPassword;
					$arr=$admin->field('id')->where($where)->find();//field(字段)取出单个字段 find()单条数据

					if($arr){
						$_SESSION['adminName']=$adminName;
						$_SESSION['adminId']=$arr['id'];	
						$this->success('管理员登陆成功',U('Index/index'));//U生成模块的URL地址
					}else {
						$this->error('该管理员不存在或密码错误');
				}


		  }
		//   //退出
		  public function doLogout(){
		  	$_SESSION=array();
				  	if(isset($_COOKIE[session_name()])){//session_name()当前session名称
				  		setcookie(session_name(),'',time()-1,'/');//删除cookie，setcookie(名称,值,有效期,服务器路径,域名,通过https)
				  	}
		  	session_destroy();//删除当前用户对应的session文件以及释放session
		  	$this->redirect('Index/index');


		  }



	}


?>