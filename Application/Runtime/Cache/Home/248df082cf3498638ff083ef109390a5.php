<?php if (!defined('THINK_PATH')) exit();?><head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
</head>
<style>
#navList{
	list-style-type:none;
}
#navList li{
	float:left;
	width:10%;
	font-size:40px;
	margin:50px;
}
#navList li a:link{
	text-decoration:none;  
}
</style>

<ul id="navList">
	<li><a href="/tp/Home/Index/index"  target="_top">首页</a></li>
	<li><a href="/tp/Medic/Index/index" target="_top">医</a></li>
	<li><a href="/tp/Food/Index/index" target="_top">食</a></li>
	<li><a href="/tp/Live/Index/index" target="_top">住</a></li>
	<li><a href="/tp/Move/Index/index" target="_top">行</a></li>
	<li><a href="/tp/Play/Index/index" target="_top">乐</a></li>	
</ul>
<p>
	<span><?php echo ($username); ?></span>
	<span><a href="/tp/User/Index/logout" target="_top">注销</a></span>
</p>