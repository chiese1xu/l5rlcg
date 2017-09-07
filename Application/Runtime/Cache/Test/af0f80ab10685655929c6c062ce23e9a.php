<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>main</title>
	<link rel="stylesheet" href="/tp/Public/css/bootstrap.css">
	<link rel="stylesheet" href="/tp/Public/css/tablemain.css">
	<link rel="stylesheet" href="/tp/Public/bootstrap-datepicker-1.4.0-dist/css/bootstrap-datepicker.css">
	<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
</head>
<form>
<input type="button" value="提交" onclick="ajax()">
</form>
<script>
function ajax(){
	var url="/tp/index.php/Test/Index/test1";
	var data=('id',1);
	$.post(url,data,function(result){
			alert(result['name']);
	});
}
</script>
</html>