<?php 
class TagLibMessage extends TagLib{
	protected $tags = array(
		//定义标签
		'code'=>array('attr'=>'width,height,length','close'=>0),//code标签  'close'=>0闭合
			);
	public function _code($attr){
		$tag =$this->parseXmlAttr($attr,'code');//解析标签属性，返回数组
				$width=$tag['width'];
				$height =$tag['height'];
				$length =$tag['length'];
		$str="<img src='__APP__/Public/code?w={$width}&h={$height}&l={$length}'  onclick='this.src=this.src+\"?\"+Math.random()'/>";
		return $str;
	}
}


 ?>