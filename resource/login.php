<?php
//登录

$username = htmlspecialchars($_POST['username']);
$password = MD5($_POST['password']);

//包含数据库连接文件
include('conn.php');
//检测用户名及密码是否正确
$check_query = mysql_query("select WorkId from user where UserName='$username' and password='$password' limit 1");
if($result = mysql_fetch_array($check_query)){
    //登录成功
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['workid'] = $result['WorkId'];
    header("Location:index.php");
} else {
    exit('登录失败！点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');
}

?>