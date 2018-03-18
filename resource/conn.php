<?php 
 $conn = mysql_connect("127.0.0.1","root","vertrigo") or die("数据库链接错误".mysql_error());
 mysql_select_db("innovi",$conn) or die("数据库访问错误".mysql_error());
 mysql_query("SET NAMES UTF8");
?>