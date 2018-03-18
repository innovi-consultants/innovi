<!DOCTYPE HTML>
<html>
<head>
    <title>INNOVI人才项目管理系统</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="assets/css/dpl-min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/bui-min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/main-min.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div class="header">

    <div class="dl-title">
        <!--<img src="/chinapost/Public/assets/img/top.png">-->
    </div>
    <?php
	    session_start();
	    if(empty($_SESSION['username']))
		{
	?>
		<div class="dl-log">欢迎您!<span class="dl-log-user"></span><a href="login.html" title="登陆系统" class="dl-log-quit">[登陆]</a>
        </div>
	<?php
	} else{   
	?>
      <div class="dl-log">欢迎您，<span class="dl-log-user"><?php echo $_SESSION["username"];?></span><a href="logout.php?action=logout" title="退出系统" class="dl-log-quit">[退出]</a>
      </div>
	<?php
	}
	?>	
</div>
<div class="content">
    <div class="dl-main-nav">
        <div class="dl-inform"><div class="dl-inform-title"><s class="dl-inform-icon dl-up"></s></div></div>
        <ul id="J_Nav"  class="nav-list ks-clear">
            <li class="nav-item dl-selected" style="width:180px"><div  style="font-size:1px" class="nav-item-inner nav-home">INNOVI项目人才管理系统</div></li>	
			

        </ul>
    </div>
    <ul id="J_NavContent" class="dl-tab-conten">

    </ul>
</div>
<script type="text/javascript" src="assets/js/jquery-1.8.1.min.js"></script>
<script type="text/javascript" src="assets/js/bui-min.js"></script>
<script type="text/javascript" src="assets/js/common/main-min.js"></script>
<script type="text/javascript" src="assets/js/config-min.js"></script>
<script>
    BUI.use('common/main',function(){
        var config = [{id:'1',menu:[{text:'系统管理',items:[{id:'13',text:'人才库',href:'elite/index.php'},
		{id:'4',text:'项目库',href:'inventory/index.php'},{id:'5',text:'添加人才',href:'addelite/index.php'},{id:'6',text:'添加项目',href:'addproject/index.php'},{id:'7',text:'密码修改',href:'register.php'}]}]}
		
	];
        new PageUtil.MainPage({
            modulesConfig : config
        });
    });
</script>
</body>
</html>