<?php 
 $conn = mysql_connect("127.0.0.1","root","vertrigo") or die("���ݿ����Ӵ���".mysql_error());
 mysql_select_db("innovi",$conn) or die("���ݿ���ʴ���".mysql_error());
 mysql_query("SET NAMES UTF8");
?>