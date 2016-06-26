<?php 
class RegisterAction extends Action{	
					public function reg(){
						$this->display();
						}	
						//检查用户是否注册过
					public function checkName(){
						$username=$_GET['username'];
						$user=M('User');
						$where['username']=$username;
						$count=$user->where($where)->count();
						if($count){
							echo '不允许';
						}
						else if($username==''){
							echo '错误';
						}else{
							echo "允许";
						}

				}
				//注册
				public function doReg(){
					include './Public/File/test_input.php';//自定义输入检查函数
					$username=test_input($_POST['username']);
					$password=test_input($_POST['password']);
					// $repassword=$_POST['repassword'];
					// $sex=$_POST['sex'];
			/*$code=$_POST['code'];
			if(md5($code)!=$_SESSION['code']){
				$this->error('验证码不正确！');
			}*/
			if($username!=''&&$password!=''){
					$user=D('User');
					if(!$user->create()){
						$this->error($user->getError());
					};
					$user->username=$username;
					$user->password=$password;
					// $data['sex']=$sex;
					$lastId=$user->add();//add($data);//$user->data($data)->add()
					if($lastId){
						$this->redirect('Index/index');
					}else{
						$this->error('用户注册失败');
					}

					}else{
						$this->error('用户注册失败');
					}
				}



			}

 ?>