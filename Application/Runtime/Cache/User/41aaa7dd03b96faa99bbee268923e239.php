<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>medic</title>
	<link rel="stylesheet" href="/tp/Public/css/bootstrap.min.css">
	<link rel="stylesheet" href="/tp/Public/css/tablemain.css">	
	<script src="/tp/Public/jquery.1.11.3.min.js"></script>
	<script src="/tp/Public/js/bootstrap.min.js"></script>
</head>
<div class="main">
<p>Welcome Home  !!! ADD MEDIC</p>
<table border="0" cellspacing="0" cellpadding="0" class="table table-bordered">
<form action="/tp/index.php/User/Doctor/savemedic" method="post" enctype="multipart/form-data">
<tr><td style="width:20%">编号</td><td style="width:70%"></td></tr>
<tr><td>药品名称</td><td><input type="text" name="name" placeholder="药品名称" ></td></tr>
<tr><td>类型</td><td><input type="text" name="type" placeholder="类型" ></td></tr>
<tr><td>生产商</td><td><input type="text" name="producer" placeholder="生产商" ></td></tr>
<tr><td>单位</td><td><input type="text" name="unit" placeholder="单位" ></td></tr>
<tr><td>量</td><td><input type="text" name="amount" placeholder="量" ></td></tr>
<tr><td>单价</td><td><input type="text" name="price" placeholder="单价" ></td></tr>
<tr><td>录入日期</td><td><input type="date" name="inputdate" placeholder="录入日期" ></td></tr>
<tr><td colspan="2"><input type="submit" /></td></tr>
</form>
</table>
</div>