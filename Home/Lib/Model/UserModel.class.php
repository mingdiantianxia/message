<?php 

		class UserModel extends Model{
			protected $_validate=array(
				//array(验证字段,验证规则,错误提示,[验证条件,附加规则,验证时间]),
		           array('code','require','验证码必须填写！'),
		           array('code','checkCode','验证码错误！',0,'callback',1),
		           //array('username','require','用户名必须填写！'),
		           array('password','require','密码必须填写！'),
		           array('username','','用户已经存在',0,'unique',1),		           
		           array('username','/^[\s|\S]{1,}$/','用户名不能为空!!!',0,regex,1),
		           array('repassword','password','确认密码不正确',0,'confirm'), // 验证确认密码是否和密码一致
		       );

			protected function checkCode($code){
					
					if(md5($code)!=$_SESSION['code']){
						return  false;
			   	}else{
			   		return ture;
			   	}

			}
		}



 ?>