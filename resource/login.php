<?php
//��¼

$username = htmlspecialchars($_POST['username']);
$password = MD5($_POST['password']);

//�������ݿ������ļ�
include('conn.php');
//����û����������Ƿ���ȷ
$check_query = mysql_query("select WorkId from user where UserName='$username' and password='$password' limit 1");
if($result = mysql_fetch_array($check_query)){
    //��¼�ɹ�
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['workid'] = $result['WorkId'];
    header("Location:index.php");
} else {
    exit('��¼ʧ�ܣ�����˴� <a href="javascript:history.back(-1);">����</a> ����');
}

?>