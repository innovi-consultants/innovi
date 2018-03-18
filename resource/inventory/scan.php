<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../Css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="../Css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="../Css/style.css" />
    <script type="text/javascript" src="../Js/jquery.js"></script>
    <script type="text/javascript" src="../Js/jquery.sorted.js"></script>
    <script type="text/javascript" src="../Js/bootstrap.js"></script>
    <script type="text/javascript" src="../Js/ckform.js"></script>
    <script type="text/javascript" src="../Js/common.js"></script>

    <style type="text/css">
        body {
            padding-bottom: 40px;
        }
        .sidebar-nav {
            padding: 9px 0;
        }

        @media (max-width: 980px) {
            /* Enable use of floated navbar text */
            .navbar-text.pull-right {
                float: none;
                padding-left: 5px;
                padding-right: 5px;
            }
        }


    </style>
</head>
<body>
<form action="index.html" method="post" class="definewidth m20">
<input type="hidden" name="id" value="{$menu.id}" />
<table class="table table-bordered table-hover m10">
     <?php 
	    
	   $projectid=$_GET['projectid'];
	   include('../conn.php');
      //检测用户名及密码是否正确
      $result = mysql_query("select * from project where ProjectId='$projectid'");  //读取数据 
	  $row=mysql_fetch_array($result); 
	  $result_leader=mysql_query("select * from leader where ProjectId='$projectid'");
	  $row_leader=mysql_fetch_array($result_leader);
	  $result_member=mysql_query("select * from member where ProjectId='$projectid'"); 
	  $result_stage=mysql_query("select * from stage where ProjectId='$projectid' order by StageNumber");
	?>
	<tr>
        <td width="10%" class="tableleft">项目编号:</td>
		<td><?php echo $row['ProjectId'];?></td>
    </tr>
    <tr>
        <td width="10%" class="tableleft">项目名称:</td>
		<td><?php echo $row['ProjectName'];?></td>
    </tr>
	<tr>
	     <td width="10%" class="tableleft">开始时间:</td>
		<td><?php echo $row['StartTime'];?></td>
    </tr>
	<tr>
	     <td width="10%" class="tableleft">结束时间:</td>
		<td><?php echo $row['EndTime'];?></td>
    </tr>
	<tr>
	     <td width="10%" class="tableleft">所属行业:</td>
		 <td><?php echo $row['Industry'];?></td>
    </tr>
	
	<tr>
        <td width="10%" class="tableleft">项目负责人</td>
        <td>
		   <table>
			<tr>
				  <td width="10%" class="tableleft">名字:</td>
				  <td width="10%" class="tableleft">负责的内容:</td>
			</tr>
			<tr>
			     <td><a href="scan_worker.php?workid=<?php echo $row_leader['WorkId'];?>"><?php echo $row_leader['LeaderName'];?></a></td>
				 <td><?php echo $row_leader['Content'];?></td>
			</tr>
			</table>
		</td>
    </tr>
	
	<tr>
       <td width="10%" class="tableleft">项目组成员</td>
       <td>
		   <table>
			<tr>
				  <td width="10%" class="tableleft">名字:</td>
				  <td width="10%" class="tableleft">负责的内容:</td>
			</tr>
			<?php
			   while($row_result=mysql_fetch_array($result_member))
			   {
				 echo '<tr><td><a href="scan_worker.php?workid='.$row_result['WorkId'].'">'.$row_result['MemberName']."</a></td><td>".$row_result["MemberThing"]."</td></tr>";  
			   }
			 ?>
			</table>
		</td>
    </tr>
	<?php
	session_start();
    if(!empty($_SESSION['username']))
	{
		$result_customer=mysql_query("select * from customer where ProjectId='$projectid'");
		$row_cutomer=mysql_fetch_array($result_cutomer);
	?>
	<tr>
        <td width="10%" class="tableleft">客户信息</td>
        <td>
		   <table>
			<tr>
				  <td width="10%" class="tableleft">公司名称:</td>
				  <td><?php echo $row_cutomer['CompanyName'];?></td>
			</tr>
			<tr>
			      <td width="10%" class="tableleft">公司地址:</td>
				  <td><?php echo $row_cutomer['CompanyAddress'];?></td>
			</tr>
			<tr>
			      <td width="10%" class="tableleft">公司联系方式:</td>
				  <td><?php echo $row_cutomer['CompanyContact'];?></td>
			</tr>
			<tr>
			     <td width="10%" class="tableleft">公司联络人:</td>
				 <td><?php echo $row_cutomer['CompanyClient'];?></td>
			</tr>
			<tr>
			     <td width="10%" class="tableleft">联络人手机:</td>
				 <td><?php echo $row_cutomer['ClientPhone'];?></td>
			</tr>
			<tr>
			     <td width="10%" class="tableleft">联络人邮箱:</td>
				 <td><?php echo $row_cutomer['ClientEmail'];?></td>
			</tr>
			<tr>
			     <td width="10%" class="tableleft">联络人微信:</td>
				 <td><?php echo $row_cutomer['ClientWechate'];?></td>
			</tr>
			<tr>
			     <td width="10%" class="tableleft">联络人QQ:</td>
				 <td><?php echo $row_cutomer['ClientQQ'];?></td>
			</tr>
			<tr>
			     <td width="10%" class="tableleft">联络人备注:</td>
				 <td><?php echo $row_cutomer['Remark'];?></td>
			</tr>
			</table>
		</td>
    </tr>
	<?php 
	 }
	?>
	<tr>
        <td width="10%" class="tableleft">项目阶段</td>
        <td>
		   <table>
			<tr>
				  <td width="10%" class="tableleft">阶段:</td>
				  <td width="10%" class="tableleft">开始时间:</td>
				  <td width="10%" class="tableleft">结束时间:</td>
				  <td width="10%" class="tableleft">任务:</td>
			</tr>
			<?php 
			   $i=1;
			   while($row_stage=mysql_fetch_array($result_stage))
			   {
				   echo "<tr><td>第".$row_stage['StageNumber']."阶段</td><td>".$row_stage["StartTime"]."</td><td>".$row_stage["EndTime"]."</td><td>".$row_stage["Content"]."</td></tr>";
			   }
			?>
			</table>
		</td>
    </tr>
	<tr>
        <td width="10%" class="tableleft">项目概述</td>
        <td><?php echo $row["Description"];?></td>
    </tr>
	<tr>
        <td width="10%" class="tableleft">项目输出</td>
        <td><?php echo $row["ProjectInput"];?></td>
    </tr>
	<tr>
        <td width="10%" class="tableleft">项目心得</td>
        <td><?php echo $row["Experience"];?></td>
    </tr>
</table>
</form>
</body>
</html>
<script>
    $(function () {       
		$('#backid').click(function(){
				window.location.href="index.html";
		 });

    });
</script>