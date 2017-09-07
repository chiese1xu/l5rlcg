<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
</head>
<style>
html,body{
	text-align:center;
	margin:0;
	padding:0;
}
#title{
	width:500px;
	margin:0 auto;
	margin-top:20%;
	font-size:40;
}
.login{
	background:url("/tp/Public/images/bg7.jpg") no-repeat;
	width:100%;
    height:100%;
    background-size:100% 100%;
    position:absolute;
}
form{
	margin-top:3%;
}
</style>
<body>
<div class="login">
	<div id="title">
		<p>哈尔滨第一福利院</p>
	</div>
	<form action="/tp/user/index/login" method="post">
	用户名：<input type="text" name="username">
	密  码：<input type="password" name="password">
	<input type="submit" value="登陆">
	</form>
</div>
</body>
</html>