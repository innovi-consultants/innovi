<?php

//ע����¼
if($_GET['action'] == "logout"){
	session_start();
    unset($_SESSION['workid']);
    unset($_SESSION['username']);
    echo 'ע����¼�ɹ�������˴� <a href="login.html">��¼</a>';
    exit;
}

?>