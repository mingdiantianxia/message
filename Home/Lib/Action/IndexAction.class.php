<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends CommonAction {
    public function index(){
    		$this->display();
    	}
    
    public function top(){
    	// $this->assign('name',$_SESSION['username']);
    	$this->display();
    }
    public function left(){
    	//获取message表中的所有数据
    	$message = D('Message');
    	import('ORG.Util.Page');// 导入分页类
    	$count=$message->count();//获取数据的总数
    	$page=new Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数

    	$page->setConfig('header','条信息');//分页样式定制
    	$show=$page->show();//返回分页信息

    	$arr=$message->relation(true)->limit($page->firstRow.','.$page->listRows)->select();
        for ($i=0; $i <2 ; $i++) { 
         $arr[$i]['content']=htmlspecialchars_decode($arr[$i]['content']);
        }
 
    	$this->assign('list',$arr);
    	$this->assign('show',$show);
    	$this->display();
    }
    public function right(){
    	$this->display();
    }
}