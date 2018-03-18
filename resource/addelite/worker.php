<?php
header("Content-type:text/html;charset=utf-8");  

//登录
$workId=$_POST["workId"];
$name=$_POST["name"];
$duration=$_POST["duration"];
$sectorName=$_POST["sectorName"];
$research=$_POST["research"];
$specialty=$_POST["specialty"];
$hobby=$_POST["hobby"];
include('../conn.php');
$sql="insert into worker values('$workId','$name','$duration','$sectorName','$research','$specialty','$hobby')";
if(!mysql_query($sql)){
    exit('添加失败！点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');
}
$password=MD5("123");
$sql="insert into user values('$workId','$password','$workId')";
if(!mysql_query($sql)){
    exit('添加登陆用户信息失败！点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');
}
$projectName=$_POST["projectName"];
$projectId=$_POST["projectId"];
for($i=0;$i<count($projectName);$i++){
	
	$sql="insert into worker_project values('','$workId','$projectName[$i]','$projectId[$i]')";
	mysql_query($sql);
}

$degree=$_POST["degree"];
$schoolName=$_POST["schoolName"];
$major=$_POST["major"];
$schoolTime=$_POST["schoolTime"];

switch (count($degree))
{
case 1:
  $sql="insert into education(WorkId,BachelorSchool,BachelorMajor,BachelorTime) values('$workId','$schoolName[0]','$major[0]','$schoolTime[0]')";
  break;  
case 2:
  $sql="insert into education(WorkId,BachelorSchool,BachelorMajor,BachelorTime,MasterSchool,MasterMajor,MasterTime) values('$workId','$schoolName[0]','$major[0]','$schoolTime[0]','$schoolName[1]','$major[1]','$schoolTime[1]')";
  break;
case 3:
  $sql="insert into education values('$workId','$schoolName[0]','$major[0]','$schoolTime[0]','$schoolName[1]','$major[1]','$schoolTime[1]','$schoolName[2]','$major[2]','$schoolTime[2]')";
  break;
default:
  $sql="insert into education(WorkId) values('$workId')";
}

if(!mysql_query($sql)){
    exit('添加失败！点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');
}

$companyName=$_POST['companyName'];
$jobTitle=$_POST['jobTitle'];
$jobTime=$_POST['jobTime'];
for($i=0;$i<count($companyName);$i++){
	//$sql="insert into worker_company values('','$workId','$companyName[$i]','$jobTitle[$i]','$jobTime[$i]')";
	$sql="insert into worker_company values('','$workId','$companyName[$i]','$jobTitle[$i]','$jobTime[$i]')";
	if(!mysql_query($sql)){
    exit('adddd添加失败！点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');
	}
	//mysql_query("insert into worker_company values('','0025','高盛','MA','4555')");
}
	


exit('添加成功！点击此处 <a href="javascript:history.back(-1);">继续添加</a> <a href="index.php">返回首页</a>');


?>