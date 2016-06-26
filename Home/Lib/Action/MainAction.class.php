<?php
// 本类由系统自动生成，仅供测试用途
class MainAction extends Action {
    public function main(){
        $message=D('Message');
        $arr=$message->relation(true)->where('filename<>""')->select();
        $count=$message->where('filename<>""')->count();
        $this->assign('list',$arr);
        $this->assign('count',$count);
    	$this->display();
    	}
    

}