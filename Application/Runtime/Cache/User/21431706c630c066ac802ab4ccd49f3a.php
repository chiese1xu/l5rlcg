<?php if (!defined('THINK_PATH')) exit();?><head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>menu</title>
	<link rel="stylesheet" href="/tp/Public/css/bootstrap.min.css">
	<link rel="stylesheet" href="/tp/Public/css/menu.css">   
	<script src="/tp/Public/js/jquery.1.11.3.min.js"></script>
	<script src="/tp/Public/js/bootstrap.min.js"></script>
</head>
<div id="menu">
	<ul id="menuList">
		<h2>
			<li><a href="/tp/User/Waiter/main"  target="main"  class="label label-default">管理首页</a></li>
			<li><a href="/tp/User/Waiter/add?uid=<?php echo ($uid); ?>&username=<?php echo ($username); ?>"  target="main"  class="label label-default">访客登记</a></li>
		</h2>
	</ul>
</div>