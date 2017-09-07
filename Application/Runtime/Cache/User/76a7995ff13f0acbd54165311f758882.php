<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>medic</title>
	<link rel="stylesheet" href="/tp/Public/css/bootstrap.min.css">
	<link rel="stylesheet" href="/tp/Public/css/tablemain.css">	
	<script src="/tp/Public/js/jquery.min.js"></script>
	<script src="/tp/Public/js/bootstrap.min.js"></script>
</head>
<script>
function edit()
{
	window.location.href="/tp/index.php/User/Doctor/modify?pid=<?php echo ($person["id"]); ?>"; 
}
</script>
<script>
function load()
{
	
}
</script>
<body onload="load()">
<div class="main" >
<p>Welcome Home  !!! EDIT MEDIC !!</p>
<table border="0" cellspacing="0" cellpadding="0" class="table table-bordered">
<form action="/tp/index.php/User/Doctor/modifymedic" method="post" enctype="multipart/form-data">
<tr><td style="width:20%">编号</td><td style="width:70%"><input type="text" name="id" value="<?php echo ($medic["id"]); ?>" readonly></td></tr>
<tr><td>药品名称</td><td><input type="text" name="name" value="<?php echo ($medic["name"]); ?>" placeholder="药品名称"></td></tr>
<tr><td>类型</td><td><input type="text" name="type" value="<?php echo ($medic["type"]); ?>" placeholder="类型" ></td></tr>
<tr><td>生产厂家</td><td><input type="text" name="producer" value="<?php echo ($medic["producer"]); ?>" placeholder="生产厂家" ></td></tr>
<tr><td>单位</td><td><input type="text" name="unit" value="<?php echo ($medic["unit"]); ?>" placeholder="单位" ></td></tr>
<tr><td>量</td><td><input type="text" name="amount" value="<?php echo ($medic["amount"]); ?>" placeholder="量" ></td></tr>
<tr><td>单价</td><td><input type="text" name="price" value="<?php echo ($medic["price"]); ?>" placeholder="单价" ></td></tr>
<tr><td>输入日期</td><td><input type="date" name="inputdate" value="<?php echo ($medic["inputdate"]); ?>" placeholder="输入日期" ></td></tr>
<tr><td colspan="2"><input type="submit" value="修改药品信息" /></td></tr>
</form>
</table>
</div>
</body>