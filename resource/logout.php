<?php

//注销登录
if($_GET['action'] == "logout"){
	session_start();
    unset($_SESSION['workid']);
    unset($_SESSION['username']);
    echo '注销登录成功！点击此处 <a href="login.html">登录</a>';
    exit;
}

?>