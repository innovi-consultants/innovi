<?php  
header("Content-type:text/html;charset=utf-8");  
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />  
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
	    
	   $workid=$_GET['workid'];
	   include('../conn.php');
      //检测用户名及密码是否正确
      $result = mysql_query("select * from worker where WorkId='$workid'");  //读取数据 
	  $row=mysql_fetch_array($result); 
	?>
    <tr>
        <td width="10%" class="tableleft">工号:</td>
		<td><?php echo $row['WorkId'];?></td>
    </tr>
	<tr>
        <td width="10%" class="tableleft">姓名:</td>
        <td><?php echo $row['WorkId'];?></td>
    </tr>
	<tr>
        <td width="10%" class="tableleft">就职时间:</td>
        <td><?php echo $row['Duration'];?></td>
    </tr>
	<tr>
        <td width="10%" class="tableleft">所在部门:</td>
        <td><?php echo $row['Section'];?></td>
    </tr>
	<tr>
        <td width="10%" class="tableleft">曾参与的项目:</td>
        <td>
		   <table>
		    <?php 					  
               $project_result=mysql_query("select * from worker_project where WorkId='$workid'");			
			   while($row_project=mysql_fetch_array($project_result))
			   {
			
					echo "<tr><td>".$row_project['ProjectName']."(".$row_project['ProjectId'].")"."</td></tr>";
			   }
			   
			?>
			</table>
		</td>
    </tr>
    </tr>
	<tr>
        <td width="10%" class="tableleft">研究方向：</td>
        <td><?php echo $row["Research"];?></td>
    </tr>
	<?php
	session_start();
    if(!empty($_SESSION['username']))
	{
	?>
	<tr>
        <td width="10%" class="tableleft">教育经历:</td>
        <td>
		   <table>
			<tr>
			     <td>学位</td>
				 <td>学校</td>
				 <td>专业</td>
				 <td>就读时间</td>
			</tr>
			 <?php
              $education_result=mysql_query("select * from education where WorkId='$workid'");
		      $row_education=mysql_fetch_array($education_result);
			  if(!empty($row_education["BachelorSchool"]))
			  {
				 echo "<tr><td>本科</td><td>".$row_education["BachelorSchool"]."</td><td>".$row_education["BachelorMajor"]."</td><td>".$row_education["BachelorTime"]."</td></tr>";
			  }
			  if(!empty($row_education["MasterSchool"]))
			  {
				echo "<tr><td>硕士</td><td>".$row_education["MasterSchool"]."</td><td>".$row_education["MasterMajor"]."</td><td>".$row_education["MasterTime"]."</td></tr>";  
			  }
			  if(!empty($row_education["DoctorSchool"]))
			  {
				  echo "<tr><td>博士</td><td>".$row_education["DoctorSchool"]."</td><td>".$row_education["DoctorMajor"]."</td><td>".$row_education["DoctorTime"]."</td></tr>";
			  }
		     ?>
			</table>
		</td>
    </tr>
	<tr>
        <td width="10%" class="tableleft">曾就职机构</td>
		<td>
        <table>
		     <tr>
			     <td>公司名称</td>
				 <td>职位</td>
				 <td>工作时间</td>
			</tr>
		    <?php 
			   $company_result=mysql_query("select * from worker_company where WorkId='$workid'");
			   while($row_company=mysql_fetch_array($company_result))
			   {
				   echo "<tr><td>".$row_company["CompanyName"]."</td><td>".$row_company["JobTitle"]."</td><td>".$row_company["JobTime"]."</td><tr>";
			   }
			?>
		</table>
		</td>
    </tr>
    <?php 
	}
    ?>
	<tr>
        <td width="10%" class="tableleft">特长:</td>
        <td><?php echo $row["Specialty"];?></td>
    </tr>
	<tr>
        <td width="10%" class="tableleft">兴趣爱好:</td>
        <td><?php echo $row["Hobby"];?></td>
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