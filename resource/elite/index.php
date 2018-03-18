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
	  <label style="float:left">分类查询：</label>
	  <select name="select" id="select"  style="float:left">
		  <option value="工号">工号</option>
		  <option value="姓名">姓名</option>
	  </select>
	  <input  name="searchKey" style="float:left;margin-left:10px"></input>							                         
	  <button type="submit" class="btn btn-primary"  style="float:left;margin-left:10px">查询</button>
    </form>
</div>
<table class="table table-bordered table-hover definewidth m10">
    <thead>
    <tr>  
		<th>工号</th>
		<th>姓名</th>
		<th>就职时间</th>
        <th>所在部门</th>
		<th>更多</th>
    </tr>
    </thead>
	<?php 
	   include('../conn.php');
      //检测用户名及密码是否正确
      $result = mysql_query("select WorkId,Name,Duration,Section from worker");  //读取数据 
	  while ($row=mysql_fetch_array($result)) 
      {     
	?>
    <tr>
		<td><?php echo $row["WorkId"];?> </td>
		<td><?php echo $row["Name"];?> </td>
		<td><?php echo $row["Duration"];?> </td>
		<td><?php echo $row["Section"];?> </td>
		<td><a href="scan.php?workid=<?php echo $row['WorkId'];?>">更多...</a></td>
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