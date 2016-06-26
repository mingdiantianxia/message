<?php 
class PublicAction extends Action{
    public function code(){
		    	$w=isset($_GET['w'])?$_GET['w']:54;
		    	$h=isset($_GET['h'])?$_GET['h']:34;
		    	$l=isset($_GET['l'])?$_GET['l']:4;
    			import('ORG.Util.Image');
    			Image::buildImageVerify($l,1,'png',$w,$h,'code');

    }

}


 ?>
