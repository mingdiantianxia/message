<?php 
class MessageAction extends Action{

	public function message(){
    	$message=D('Message');
    	$arr=$message->relation(true)->select();
    	$this->assign('list',$arr);
    	$this->display();
    }
       public function messageSearch(){
    	$title=$_GET['title'];
    	$message=D('Message');
    	$where['title']=array('like',$title.'%');
    	$arr=$message->relation(true)->where($where)->select();
    	$this->assign('list',$arr);
    	$this->display('message');
    }
    public function delMess(){
    	$id=$_GET['id'];
    	$message=M('Message');
    	$where['id']=$id;
    	$filename=$message->field('filename')->where($where)->find();
    	$url = './Public/Uploads/';
    	$dir=$url.$filename['filename'];
       	if(file_exists($dir)){
       		unlink($dir);//删除文件
       	   		}
       	$changeRow=$message->where($where)->delete();
    	if($changeRow){
    		echo "成功";
    	}else{
    		echo "失败";
    	}
    }
	public function upMess(){
 		$id=$_GET['id']+0;
    	$message=D('Message');
    	$arr=$message->relation(true)->find($id);
      $arr['content']=htmlspecialchars_decode($arr['content']);
    	$this->assign('list',$arr);
    	$this->display();
	}

 public function doUpMess(){
   include './Public/File/test_input.php';//自定义输入检查函数
    $title=test_input($_POST['title']);
 		$content=test_input($_POST['content']);
   		$data['content']=$_POST['content'];
    	// $data['filename']=$_POST['file'];
    	// $uname=$_POST['uname'];
    	$id=$_POST['id']+0;
    	// $data['time']=time();
 		$where['id']=$id;
    	$message=D('Message');
    	$filename=$message->field('filename')->where($where)->find();
    	$url = './Public/Uploads/';
    	$dir=$url.$filename['filename'];//文件路径
  if($title!=''&&$content!=''){
		      if(!$message->create()){
			$this->error($message->getError());
		};
    	import('ORG.Net.UploadFile');
		$upload = new UploadFile();// 实例化上传类
    // $upload->maxSize  = 3145728 ;// 设置附件上传大小
    $upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->savePath =  './Public/Uploads/';// 设置附件上传目录

		if($upload->upload()){
			$info =  $upload->getUploadFileInfo();
          if(file_exists($url.$info[0]['savename'])){
            if(file_exists($dir)){
            unlink($dir);//删除文件
              }
            $message->filename=$info[0]['savename'];
          }

		}else {
      if(file_exists($dir)){
       			$message->filename=$filename['filename'];
       	   		}else{
       	   			$message->filename='';
       	   		}
		}
      $message->time=time();
      $message->title=$title;
			$message->content=$content;
    	$listId=$message->where($where)->save();
    	if($listId){
    		$this->success('留言保存成功');
    	}else{
    		echo '<h1>修改失败</h1>
 		<p>错误原因：'.mysql_errno().'</p>';
    	}
      }else{
        $this->error('修改失败');
      }
	}

    
 
  

}



 ?>