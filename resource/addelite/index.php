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
<form action="worker.php" method="post" class="definewidth m20">
<table class="table table-bordered table-hover m10">
   <tr>
        <td width="10%" class="tableleft">工号:</td>
		<td><input type="text" name="workId" value=""/></td>
    </tr>
	<tr>
        <td width="10%" class="tableleft">姓名:</td>
        <td><input type="text" name="name" value=""/></td>
    </tr>
	<tr>
        <td width="10%" class="tableleft">就职时间:</td>
        <td><input type="text" name="duration" value=""/></td>
    </tr>
	<tr>
        <td width="10%" class="tableleft">所在部门:</td>
        <td><input type="text" name="sectorName" value=""/></td>
    </tr>
	<tr>
        <td width="10%" class="tableleft">研究方向：</td>
        <td><input type="text" name="research" value=""/></td>
    </tr>
	<tr>
        <td width="10%" class="tableleft">曾参与的项目:</td>
        <td>
		   <table  id="ProjectStructure"> 
			<tr> 
			<td width="30%">项目名称</td> 
			<td width="30%">项目编号</strong> </td> 
			</tr> 
			<tr id="StructureRight"> 
			<td> 
			<input type="text" name="projectName[]"/></td> 
			<td> 
			<input type="text" name="projectId[]"/><input id="btnAddRow" class="btn" 
			onclick="AddRow3()" type="button" value="+" /> 
			</td> 
			</tr> 
        </table> 
		</td>
    </tr>
	<tr>
        <td width="10%" class="tableleft">教育经历:</td>
        <td>
		  <table  id="EducationStructure"> 
			<tr> 
			<td width="25%">学位</td> 
			<td width="25%">学校 </td> 
			<td width="25%">专业</td> 
			<td width="25%">就读时间 </td> 
			</tr> 
			<tr id="StructureRight"> 
			<td> 
			<input type="text" name="degree[]" /></td> 
			<td> 
			<input type="text" name="schoolName[]"/></td> 
			<td> 
			<input type="text" name="major[]" /></td> 
			<td> 
			<input type="text" name="schoolTime[]" /><input id="btnAddRow" class="btn" 
			onclick="AddRow2()" type="button" value="+" /> 
			</td> 
			</tr> 
        </table> 
		</td>
    </tr>
	<tr>
        <td width="10%" class="tableleft">曾就职机构</td>
		<td>
        <table id="OwnershipStructure"> 
			<tr> 
			<td width="30%">公司名称</td> 
			<td width="30%"> 职务</strong> </td> 
			<td width="30%"> 工作时间</strong> </td> 
			</tr> 
			<tr id="StructureRight"> 
			<td> 
			<input type="text" name="companyName[]" /></td> 
			<td> 
			<input type="text" name="jobTitle[]"/></td><td>
			<input type="text" name="jobTime[]"/>
			<input id="btnAddRow" class="btn" 
			onclick="AddRow1()" type="button" value="+" /> 
			</td> 
			</tr> 
        </table> 
		</td>
    </tr>
	<tr>
        <td width="10%" class="tableleft">特长:</td>
        <td><input type="text" name="specialty" value=""/></td>
    </tr>
	<tr>
        <td width="10%" class="tableleft">兴趣爱好:</td>
        <td><input type="text" name="hobby" value=""/></td>
    </tr>
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
	function AddRow3() 
	{ 
	var obj=document.getElementById("ProjectStructure"); 
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
	td0.innerHTML = "<input type='text' name='projectName[]'/> "; 
	var td1 = tr.insertCell(1); 
	td1.setAttribute("align","left"); 
	//td1.setAttribute("colSpan","3"); 
	td1.innerHTML = "<input type='text' name='projectId[]'/><input id='btnDelRow' class='btn' type='button' value='-' onclick='DelRow3("+tr.rowIndex+")'/>"; 
	} 
	function DelRow3(rowIndex) 
	{ 
	var obj=document.getElementById("ProjectStructure"); 
	obj.deleteRow(rowIndex); 
	//var count=document.getElementById("StructureLeft1").getAttribute("rowspan"); 
	//document.getElementById("StructureLeft1").setAttribute("rowSpan",parseInt(count)-1); //rowSpan 不要写成rowspan，因为在IE6 与IE7下会有问题 
	//document.getElementById("StructureLeft2").setAttribute("rowSpan",parseInt(count)-1); 
	} 
	//End---股东出资人表单操作 
</script> 
<script language="javascript" type="text/javascript"> 
	//表单操作 
	function AddRow1() 
	{ 
	var obj=document.getElementById("OwnershipStructure"); 
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
	td0.innerHTML = "<input type='text' name='companyName[]'/> "; 
	var td1 = tr.insertCell(1); 
	td1.setAttribute("align","left"); 
	td1.innerHTML = "<input type='text' name='jobTitle[]'/> "; 
	
	var td2 = tr.insertCell(2); 
	td2.setAttribute("align","left"); 
	
	//td1.setAttribute("colSpan","3"); 
	td2.innerHTML = "<input type='text' name='jobTime[]'/><input id='btnDelRow' class='btn' type='button' value='-' onclick='DelRow1("+tr.rowIndex+")'/>"; 
	} 
	function DelRow1(rowIndex) 
	{ 
	var obj=document.getElementById("OwnershipStructure"); 
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
	var obj=document.getElementById("EducationStructure"); 
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
	td0.innerHTML = "<input type='text' name='degree[]'/> "; 
	var td1 = tr.insertCell(1); 
	td1.setAttribute("align","left"); 
	//td0.setAttribute("colSpan","4"); 
	td1.innerHTML = "<input type='text' name='schoolName[]'/> "; 
	var td2 = tr.insertCell(2); 
	td2.setAttribute("align","left"); 
	//td0.setAttribute("colSpan","4"); 
	td2.innerHTML = "<input type='text' name='major[]'/> "; 
	
	var td3 = tr.insertCell(3); 
	td3.setAttribute("align","left"); 
	//td1.setAttribute("colSpan","3"); 
	td3.innerHTML = "<input type='text' name='schoolTime[]'/><input id='btnDelRow' class='btn' type='button' value='-' onclick='DelRow2("+tr.rowIndex+")'/>"; 
	} 
	function DelRow2(rowIndex) 
	{ 
	var obj=document.getElementById("EducationStructure"); 
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