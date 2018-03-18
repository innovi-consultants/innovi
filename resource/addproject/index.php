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
<form action="project.php" method="post" class="definewidth m20">
<table class="table table-bordered table-hover m10">
    <tr>
        <td width="10%" class="tableleft">项目编号:</td>
		<td><input type="text" name="projectId" value=""/></td>
    </tr>
     <tr>
        <td width="10%" class="tableleft">项目名称:</td>
		<td><input type="text" name="projectName" value=""/></td>
    </tr>
	<tr>
	     <td width="10%" class="tableleft">开始时间:</td>
		 <td><input type="text" name="startTime" value=""/></td>
    </tr>
	 <tr>
	     <td width="10%" class="tableleft">结束时间:</td>
		 <td><input type="text" name="EndTime" value=""/></td>
    </tr>
	 <tr>
	     <td width="10%" class="tableleft">所属行业:</td>
		 <td><input type="text" name="Industry" value=""/></td>
    </tr>
	<tr>
        <td width="10%" class="tableleft">项目负责人</td>
        <td>
		   <table>
			<tr>
				  <td width="10%" class="tableleft">名字:</td>
				  <td width="10%" class="tableleft">工号:</td>
				  <td width="10%" class="tableleft">负责的内容:</td>
			</tr>
			<tr>
			    <td><input type="text" name="leaderName" value=""/></td>
				<td><input type="text" name="leaderId" value=""/></td>
				<td><input type="text" name="leaderTask" value=""/></td>
			</tr>
			</table>
		</td>
    </tr>
	
	<tr>
        <td width="10%" class="tableleft">项目组成员</td>
       <td>
		   <table id="MememberStructure"> 
			<tr> 
			<td width="30%">名字</td> 
		    <td width="30%">工号</td> 
			<td width="30%"> 负责内容</strong> </td> 
			</tr> 
			<tr id="StructureRight"> 
			<td> <input type="text" name="memberName[]" /></td> 
			<td><input type="text" name="memberId[]" /></td> 
			<td> 
			<input type="text" name="memberTask[]"/><input id="btnAddRow" class="btn" 
			onclick="AddRow1()" type="button" value="+" /> 
			</td> 
			</tr> 
        </table> 
		</td>
    </tr>
	
	<tr>
        <td width="10%" class="tableleft">客户信息</td>
        <td>
		   <table>
			<tr>
				  <td width="10%" class="tableleft">公司名称:</td>
				  <td><input type="text" name="companyName" value=""/></td>
			</tr>
			<tr>
			      <td width="10%" class="tableleft">公司地址:</td>
				  <td><input type="text" name="companyAddress" value=""/></td>
			</tr>
			<tr>
			      <td width="10%" class="tableleft">公司联系方式:</td>
				  <td><input type="text" name="companyContact" value=""/></td>
			</tr>
			<tr>
			     <td width="10%" class="tableleft">公司联络人:</td>
				 <td><input type="text" name="companyClient" value=""/></td>
			</tr>
			<tr>
			     <td width="10%" class="tableleft">联络人手机:</td>
				<td><input type="text" name="clientPhone" value=""/></td>
			</tr>
			<tr>
			     <td width="10%" class="tableleft">联络人邮箱:</td>
				 <td><input type="text" name="clientEmail" value=""/></td>
			</tr>
			<tr>
			     <td width="10%" class="tableleft">联络人微信:</td>
				 <td><input type="text" name="clientWechat" value=""/></td>
			</tr>
			<tr>
			     <td width="10%" class="tableleft">联络人QQ:</td>
				 <td><input type="text" name="clientQQ" value=""/></td>
			</tr>
			<tr>
			     <td width="10%" class="tableleft">联络人备注:</td>
				 <td><input type="text" name="remark" value=""/></td>
			</tr>
			</table>
		</td>
    </tr>
	<tr>
        <td width="10%" class="tableleft">项目阶段:</td>
        <td>
		    <table id="StageStructure"> 
			<tr> 
			<td width="15%">阶段</td> 
			<td width="15%">开始时间 </td> 
			<td width="15%">结束时间</td> 
			<td width="15%">任务 </td> 
			</tr> 
			<tr id="StructureRight"> 
			<td> 
			<input type="text" name="stageName[]"/></td> 
			<td> 
			<input type="text" name="stageStart[]"/></td> 
			<td> 
			<input type="text" name="stageEnd[]"/></td> 
			<td> 
			<input type="text" name="jobName[]"/><input id="btnAddRow" class="btn" onclick="AddRow2()" type="button" value="+" /> 
			</td> 
			</tr> 
           </table> 
		</td>
    </tr>
	<tr>
        <td width="10%" class="tableleft">项目概述</td>
        <td><input type="text" name="description" value=""/></td>
    </tr>
	<tr>
        <td width="10%" class="tableleft">项目输出</td>
        <td><input type="text" name="projectInput" value=""/></td>
    </tr>
	<tr>
        <td width="10%" class="tableleft">项目心得</td>
        <td><input type="text" name="experience" value=""/></td>
    </tr>
	 <tr>
        <td ></td>
        <td>
            <input type="submit" value="add" class="btn btn-success">
      </td>
    </tr>
</table>
</form>
<script language="javascript" type="text/javascript"> 
	//表单操作 
	function AddRow1() 
	{ 
	var obj=document.getElementById("MememberStructure"); 
	var tr= obj.rows["StructureRight"]; 
	//alert(tr.rowIndex); 
	//var count=document.getElementById("StructureLeft1").getAttribute("rowspan"); 
	//document.getElementById("StructureLeft1").setAttribute("rowSpan",parseInt(count)+1); 
	//document.getElementById("StructureLeft2").setAttribute("rowSpan",parseInt(count)+1); 
	//插入行 code form www.jb51 .net 
	var tr =obj.insertRow(tr.rowIndex+1); 
	//var trId="trStructure"+tr.rowIndex; 
	//tr.setAttribute("id",trId); 
	var td0 = tr.insertCell(0); 
	td0.setAttribute("align","left"); 
	//td0.setAttribute("colSpan","4"); 
	td0.innerHTML = "<input type='text' name='memberName[]'/> "; 
	var td1 = tr.insertCell(1); 
	td1.setAttribute("align","left"); 
	//td0.setAttribute("colSpan","4"); 
	td1.innerHTML = "<input type='text' name='memberId[]'/> "; 
	var td2 = tr.insertCell(2); 
	td2.setAttribute("align","left"); 
	//td1.setAttribute("colSpan","3"); 
	td2.innerHTML = "<input type='text' name='memberTask[]'/><input id='btnDelRow' class='btn' type='button' value='-' onclick='DelRow1("+tr.rowIndex+")'/>"; 
	} 
	function DelRow1(rowIndex) 
	{ 
	var obj=document.getElementById("MememberStructure"); 
	obj.deleteRow(rowIndex); 
	//var count=document.getElementById("StructureLeft1").getAttribute("rowspan"); 
	//document.getElementById("StructureLeft1").setAttribute("rowSpan",parseInt(count)-1); //rowSpan 不要写成rowspan，因为在IE6 与IE7下会有问题 
	//document.getElementById("StructureLeft2").setAttribute("rowSpan",parseInt(count)-1); 
	} 
	//End---股东出资人表单操作 
</script> 
<script language="javascript" type="text/javascript"> 
	//表单操作 
	function AddRow2() 
	{ 
	var obj=document.getElementById("StageStructure"); 
	var tr= obj.rows["StructureRight"]; 
	//alert(tr.rowIndex); 
	//var count=document.getElementById("StructureLeft1").getAttribute("rowspan"); 
	//document.getElementById("StructureLeft1").setAttribute("rowSpan",parseInt(count)+1); 
	//document.getElementById("StructureLeft2").setAttribute("rowSpan",parseInt(count)+1); 
	//插入行 code form www.jb51 .net 
	var tr =obj.insertRow(tr.rowIndex+1); 
	//var trId="trStructure"+tr.rowIndex; 
	//tr.setAttribute("id",trId); 
	var td0 = tr.insertCell(0); 
	td0.setAttribute("align","left"); 
	//td0.setAttribute("colSpan","4"); 
	td0.innerHTML = "<input type='text' name='stageName[]'/> "; 
	var td1 = tr.insertCell(1); 
	td1.setAttribute("align","left"); 
	//td0.setAttribute("colSpan","4"); 
	td1.innerHTML = "<input type='text' name='stageStart[]'/> "; 
	var td2 = tr.insertCell(2); 
	td2.setAttribute("align","left"); 
	//td0.setAttribute("colSpan","4"); 
	td2.innerHTML = "<input type='text' name='stageEnd[]'/> "; 
	
	var td3 = tr.insertCell(3); 
	td3.setAttribute("align","left"); 
	//td1.setAttribute("colSpan","3"); 
	td3.innerHTML = "<input type='text' name='jobName[]'/><input id='btnDelRow' class='btn' type='button' value='-' onclick='DelRow2("+tr.rowIndex+")'/>"; 
	} 
	function DelRow2(rowIndex) 
	{ 
	var obj=document.getElementById("StageStructure"); 
	obj.deleteRow(rowIndex); 
	//var count=document.getElementById("StructureLeft1").getAttribute("rowspan"); 
	//document.getElementById("StructureLeft1").setAttribute("rowSpan",parseInt(count)-1); //rowSpan 不要写成rowspan，因为在IE6 与IE7下会有问题 
	//document.getElementById("StructureLeft2").setAttribute("rowSpan",parseInt(count)-1); 
	} 
	//End---股东出资人表单操作 
</script>
</body>
</html>
<script>
    $(function () {       
		$('#backid').click(function(){
				window.location.href="index.html";
		 });

    });
</script>