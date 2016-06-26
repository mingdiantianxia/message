<?php 

		class MessageModel extends RelationModel{
			protected $_validate=array(
									//array(验证字段,验证规则,错误提示,[验证条件,附加规则,验证时间]),
							           array('title','require','留言题目必须填写!'),
							           array('title','1,50','留言题目50个字以内!',0,'length'),
							           array('content','require','留言内容必须填写!'),
		       );
			protected $_auto=array(
									//array(填充字段,填充规则,[填充时间,附加规则]),
									// array('uid','getId',1,'callback'),
									array('time','time',1,'function'),
				);
			protected $_link=array(
							'User'=> array(  
									     	'mapping_type'=>BELONGS_TO,//关联关系
									          'class_name'=>'User',//关联的模型类名
									          'foreign_key'=>'uid',//关联的外键名称
									          'mapping_name'=>'user123',//关联的映射名称，用于获取数据用
									          'mapping_fields'=>'username',//关联只要查询的个别字段
									          'as_fields'=>'username:uname',//直接把关联字段值映射成当前数据对象中新的uname字段
					),
			);
			// 	protected function getId(){
			// 	return $_SESSION['id'];
			// }
		}

 ?>