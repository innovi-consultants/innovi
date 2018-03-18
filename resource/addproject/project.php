<?php
header("Content-type:text/html;charset=utf-8");  

//登录

$projectId=$_POST['projectId'];
$projectName=$_POST['projectName'];
$startTime=$_POST['startTime'];
$EndTime=$_POST['EndTime'];
$Industry=$_POST['Industry'];
$experience=$_POST['experience'];
$description=$_POST['description'];
$projectInput=$_POST['projectInput'];
$leaderName=$_POST['leaderName'];
$leaderTask=$_POST['leaderTask'];
$leaderId=$_POST['leaderId'];

include('../conn.php');
$sql="insert into project values('$projectId','$projectName','$startTime','$EndTime','$leaderName','$Industry','$description','$experience','$projectInput')";
if(!mysql_query($sql)){
    exit('项目信息添加失败！点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');
}

$sql="insert into leader(LeaderName,WorkId,Content,ProjectId) values('$leaderName','$leaderId','$leaderTask','$projectId')";
if(!mysql_query($sql)){
    exit('负责人信息添加失败！点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');
}



$memberName=$_POST["memberName"];
$memberId=$_POST['memberId'];
$memberTask=$_POST["memberTask"];
for($i=0;$i<count($memberName);$i++){
	
	$sql="insert into member values('','$projectId','$memberName[$i]','$memberId[$i]','$memberTask[$i]')";
	mysql_query($sql);
}

$companyName=$_POST['companyName'];
$companyAddress=$_POST['companyAddress'];
$companyContact=$_POST['companyContact'];
$companyClient=$_POST['companyClient'];
$clientPhone=$_POST['clientPhone'];
$clientEmail=$_POST['clientEmail'];
$clientWechat=$_POST['clientWechat'];
$clientQQ=$_POST['clientQQ'];
$remark=$_POST['remark'];

$sql="insert into customer values('','$projectId','$companyName','$companyAddress','$companyContact','$companyClient','$clientPhone','$clientEmail','$clientWechat','$clientQQ','$remark')";
if(!mysql_query($sql)){
    exit('客户信息添加失败！点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');
}

$stageName=$_POST['stageName'];
$stageStart=$_POST['stageStart'];
$stageEnd=$_POST['stageEnd'];
$jobName=$_POST['jobName'];

for($i=0,$j=1;$i<count($stageName);$i++,$j++){
	
	$sql="insert into stage values('','$projectId',$j,'$stageStart[$i]','$stageEnd[$i]','$jobName[$i]')";
	mysql_query($sql);
}

exit('添加成功！点击此处 <a href="javascript:history.back(-1);">继续添加</a> <a href="index.php">返回首页</a>');


?>