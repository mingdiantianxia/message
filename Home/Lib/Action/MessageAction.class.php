<?php 
class MessageAction extends Action{
	public function doMess(){
		$message=D('Message');
		if(!$message->create()){
						$this->error($message->getError());
					};

		import('ORG.Net.UploadFile');
		$upload = new UploadFile();// 实例化上传类
		// $upload->maxSize  = 3145728 ;// 设置附件上传大小
    	$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->savePath =  './Public/Uploads/';// 设置附件上传目录
	// 	if(!$upload->upload()) {// 上传错误提示错误信息
	// 	$this->error($upload->getErrorMsg());
	// 	}else{// 上传成功 获取上传文件信息
	// 	$info =  $upload->getUploadFileInfo();
	// }

	if($upload->upload()){
		$info =  $upload->getUploadFileInfo();
	}else{
		$info[0]['savename']='';
	}
 
 	$message->filename=$info[0]['savename'];
 	// $message->time=time();
 	// $message->uid=$_SESSION['id'];
 	$lastId = $message->add();
 	if($lastId){
 		$this->success('留言成功');
       }else{
       	$dir=$info[0]['savepath'].$info[0]['savename'];
       	if(file_exists($dir)){
       		unlink($dir);//删除文件
       	   					};
       	$this->error('留言失败');
       }
 	}
 }
 ?>