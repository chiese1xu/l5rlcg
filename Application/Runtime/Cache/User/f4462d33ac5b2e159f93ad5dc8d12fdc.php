<?php if (!defined('THINK_PATH')) exit();?><head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>nav</title>
	<link rel="stylesheet" href="/tp/Public/css/bootstrap.min.css"> 
	<link rel="stylesheet" href="/tp/Public/css/nav.css">    
	<script src="/tp/Public/js/jquery.1.11.3.min.js"></script>
	<script src="/tp/Public/js/bootstrap.min.js"></script>
</head>
<div id="nav">
	<p id="logout">
		<span class="glyphicon glyphicon-user"><?php echo ($username); ?></span>
		<span><a href="/tp/User/Index/logout" target="_top" class="glyphicon glyphicon-log-out">注销</a></span>
	</p>
	<div id="title">
		<h1>哈尔滨第一福利院</h1>
	</div>
</div>