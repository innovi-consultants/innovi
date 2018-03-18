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
<div id="classhead">

<form class="form-inline definewidth m20" action="search.php" method="get" >

  <label style="float:left">分类查询：</label><select name="select" id="select"  style="float:left">
  <option value="项目名称">项目名称</option>
  <option value="负责人">负责人</option>
  <option value="行业">行业</option>
</select>
	<input  style="float:left;margin-left:10px" name="searchKey"></input>							                         
    <button type="submit" class="btn btn-primary"  style="float:left;margin-left:10px">查询</button>
</form></div>
<table class="table table-bordered table-hover definewidth m10">
    <thead>
    <tr>  
		<th>项目名称</th>
		<th>开始时间</th>
		<th>结束时间</th>
		<th>项目负责人</th>
		<th>详细信息</th>
    </tr>
    </thead>	

     <?php 
	   include('../conn.php');
      //检测用户名及密码是否正确
      $result = mysql_query("select ProjectName,StartTime,EndTime,Leader,ProjectId from project");  //读取数据 
	  while ($row=mysql_fetch_array($result)) 
      {     
	?>	
            <tr>
                <td><?php echo $row['ProjectName'];?></td>
                <td><?php echo $row['StartTime'];?></td>
                <td><?php echo $row['EndTime'];?></td>
				<td><?php echo $row['Leader'];?></td>
				<td><a href="scan.php?projectid=<?php echo $row['ProjectId'];?>">详细信息...</a></td>
            </tr>		
    <?php 
       }
	?>	
</table>

</body>
</html>
<script>
    $(function () {
        

		$('#addnew').click(function(){

				window.location.href="add.html";
		 });


    });
	
</script>