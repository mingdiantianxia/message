<?php
// 本类由系统自动生成，仅供测试用途
class MemberlistAction extends CommonAction {
    public function memberlist(){
    	$user=M('User');
    	$arr=$user->select();
    	for ($i =0,$len = count($arr);$i < $len;$i++ ){
    	if($arr[$i]['sex']==1){
    		$arr[$i]['sex']='男';
    	}else{
    		$arr[$i]['sex']='女';
    	}
    	}
    	$this->assign('list',$arr);
    	$this->display();
    }
    public function deleteMember(){
    	$id=$_GET['id'];
    	$user=M('User');
    	$where['id']=$id;
    	$changeRow=$user->where($where)->delete();
    	if($changeRow){
    		echo "成功";
    	}else{
    		echo "失败";
    	}
    }
    public function upMember(){
    	$id=$_GET['id']+0;
    	$user=M('User');
    	$arr=$user->find($id);
    	$this->assign('list',$arr);
    	$this->display();
    }
    public function doUpMember(){
   include './Public/File/test_input.php';//自定义输入检查函数
    	$username=test_input($_POST['username']);
    	// $data['sex']=$_POST['sex'];
    	$id=$_POST['id']+0;
    	$where['id']=$id;
        if($username!=''){
    	$user=M('User');
        // $count=$user->where($data)->count();
        if(!$user->create()){
            $this->error($user->getError());
        };
        $user->username=$username;
        // if ($count) {
        //     $this->error('用户名已存在!');
        // }else{
        $listId=$user->where($where)->save();
        if($listId){
            $this->success('用户修改成功');
        }else{
        echo '<h1>修改失败</h1>
        <p>错误原因：'.mysql_errno().'</p>';
        }
      }else{
             $this->error('用户修改失败');
                    }
        // }


    }
public function changePassword(){
	$user=M('User');
	$id= $_GET['id']+0;
	$arr=$user->find($id);
	$this->assign('list',$arr);
	$this->display();
}
public function doChangePassword(){
   include './Public/File/test_input.php';//自定义输入检查函数
	$data['password']=test_input($_POST['newpassword']);
	$newpassword2=$_POST['newpassword2'];
	$id=$_POST['id']+0;
	$user=M('User');
	$where['id']=$id;
	if($data['password']!=''&&$data['password']===$newpassword2){
	$lastId=$user->where($where)->save($data);
				if($lastId){
					$this->success('密码修改成功');
				}else{
					echo '<h1>修改失败</h1>
			 		<p>错误原因：'.mysql_errno().'</p>';
				}
	}else{
			$this->error('验证密码不正确!');
		}
		
}

public function memberAdd(){
    $this->display();
}

public function doMemberAdd(){
   include './Public/File/test_input.php';//自定义输入检查函数
   $username=test_input($_POST['username']);
   $password=test_input($_POST['password']);
   if($username!=''&&$password!=''){
    $user=D('User');
    if(!$user->create()){
        $this->error($user->getError());
    };
    $user->username=$username;
    $user->password=$password;
    $lastId=$user->add();
    if($lastId){
        $this->success('用户添加成功');
    }else{
        $this->error('用户添加失败');
    }
        }else{
            $this->error('用户添加失败');
        }
}

     public function memberSearch(){
        $username=$_GET['username'];
        $user=M('User');
        $where['username']=array('like',$username.'%');
        $arr=$user->where($where)->select();
        $this->assign('list',$arr);
        $this->display('memberlist');
    }



}