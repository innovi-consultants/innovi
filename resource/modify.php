<?php  
header("Content-type:text/html;charset=utf-8");  
?>
<?php
//登录

$username = htmlspecialchars($_POST['username']);
$password = MD5($_POST['password']);
session_start();
if(!empty($_SESSION['username']))
{
	//包含数据库连接文件
	include('conn.php');
	//检测用户名及密码是否正确
	$workId=$_SESSION['workid'];
	$check_query = mysql_query("update user set Password='$password',UserName='$username' where WorkId='$workId'");
	if($check_query){
		//修改成功
		 unset($_SESSION['workid']);
         unset($_SESSION['username']);
		 exit('修改成功!');
	}
	else {
		exit('修改失败！点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');
	}
}else{
	exit('还未登录！点击此处登录后再修改 <a href="login.html">返回</a> 重试');
}

?>