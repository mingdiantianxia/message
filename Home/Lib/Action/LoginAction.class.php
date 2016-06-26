<?php 
class LoginAction extends Action {
		public function login(){
			$this->display();
		}
		public function doLogin(){
			//接受值
				
			//存在   允许登陆
			//不存在     显示错误信息	
			$username=$_POST['username'];
			$password=$_POST['password'];
			$code=$_POST['code'];
			if(md5($code)!=$_SESSION['code']){
				$this->error('验证码不正确！');
			}

					$user=M('User');
					$where['username']=$username;
					$where['password']=$password;
					$arr=$user->field('id')->where($where)->find();//field(字段)取出单个字段
					
					if($arr){
						$_SESSION['username']=$username;
						$_SESSION['id']=$arr['id'];	
						$this->success('用户登陆成功',U('Index/index'));//U生成模块的URL地址
					}else {
						$this->error('该用户不存在或密码错误');
				}


		  }
		  //退出
		  public function doLogout(){
		  	$_SESSION=array();
				  	if(isset($_COOKIE[session_name()])){
				  		setcookie(session_name(),'',time()-1,'/');//删除cookie，setcookie(名称,值,有效期,服务器路径,域名,通过https)
				  	}
		  	session_destroy();//删除当前用户对应的session文件以及释放session
		  	$this->redirect('Index/index');


		  }



	}


?>