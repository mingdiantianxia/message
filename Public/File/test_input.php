<?php
//定义输入检查函数

function test_input($data) {
	//（通过 PHP trim() 函数）去除用户输入数据中不必要的字符（多余的空格、制表符、换行）
	$data = trim($data);
	//（通过 PHP stripslashes() 函数）删除用户输入数据中的反斜杠（\）
	$data = stripslashes($data);
	//htmlspecialchars() 函数把特殊字符转换为 HTML 实体。防止被攻击
	$data = htmlspecialchars($data);
	//htmlspecialchars_decode()函数把预定义的 HTML 实体转换为字符。与上面的互为反函数
	//$data=htmlspecialchars_decode($data) ;
	return $data;

}
?>