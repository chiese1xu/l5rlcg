<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache">
    <title>哈尔滨市第一社会福利院老年医院</title>
    <script language="javascript"
      src="https://wximg.gtimg.com/shake_tv/include/js/lib/jquery.2.1.1.min.js"></script>
    <link rel="stylesheet"
      href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet"
      href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <script
      src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/Public/css/main.css">
</head>	
<span style="float:left"><a href="/index.php/Home/Index/index">返回首页</a></span>
<h3><p class="centered">哈尔滨市第一社会福利院老年医院</p></h3>
<h1><p class="centered">基础信息</p></h1>
<form action="" method="post" role="form">
	<table border=1 class="table table-bordered" id="maintable">
	<tr>
		<td colspan="2">
			科别<select name="KeBie">
				  <option value ="科室1">科室1</option>
				  <option value ="科室2">科室2</option>
				  <option value ="科室3">科室3</option>
				  <option value ="科室4">科室4</option>
				</select>
			姓名<input type="text" name="xingMing" >
			病室<input type="text" name="bingShi" >
			床号<input type="text" name="chuangHao" >
			住院号<input type="text" name="zhuYuanHao" >
		</td>
	</tr>
	<tr>
		<td class="col-xs-1"></td>
		<td class="col-xs-11">
		姓名<input type="text" name="xingMing" >
		籍贯<input type="text" name="jiGuan" >
		性别<input type="text" name="xingBie" >
		年龄<input type="text" name="nianLing" >
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
		民族<input type="text" name="minZu" >
		地址<input type="text" name="diZhi" >
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
		婚姻<input type="text" name="hunYin" >
		入院日期<input type="text" name="ruYuanRiQi" >
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
		职业<input type="text" name="zhiYe" >
		记录日期<input type="text" name="jiLuRiQi" >
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
		供史者<input type="text" name="gongShiZhe" >
		与患者关系<input type="text" name="yuHuanZheGuanXi" >
		</td>
	</tr>
	</table>
	<input type="submit" value="提交方案" />
</form>