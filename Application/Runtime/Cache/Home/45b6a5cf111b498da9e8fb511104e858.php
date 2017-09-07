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
<h1><p class="centered">专科情况</p></h1>
<form action="" method="post" role="form">
	<table border=1 class="table table-bordered" id="maintable">
	<tr>
		<td colspan="2">
			科别<select name="keBie">
				  <option value ="科室1">科室1</option>
				  <option value ="科室2">科室2</option>
				  <option value ="科室3">科室3</option>
				  <option value ="科室4">科室4</option>
				</select>
			姓名<input type="text" name="xingMing" value="">
			病室<input type="text" name="bingShi" value="">
			床号<input type="text" name="chuangHao" value="">
			住院号<input type="text" name="zhuYuanHao" value="">
		</td>
	</tr>
	<tr>
		<td>
			专科情况：<br>
			<textarea name="zhuanKeQingKuang"  rows="8" cols="100" >
			</textarea> 
		</td>
	</tr>
	<tr>
		<td>
		实验室检查及其他特殊检查（包括门诊）：<br>
			<textarea name="shiYanShiJianCha"  rows="8" cols="100" >
			</textarea> 		
		</td>
	</tr>	
	<tr>
		<td>
		辅助检查：<br>
			<textarea name="fuZhuJianCha"  rows="8" cols="100" >
			</textarea> 		
		</td>
	</tr>
	<tr>
		<td>
		病案小结：<br>
			<textarea name="bingAnXiaoJie"  rows="8" cols="100" >
			</textarea> 		
		</td>
	</tr>
	<tr>
		<td>
		临床确定诊断：<br>
			<textarea name="linChuangQueDingZhenDuan"  rows="8" cols="100" >
			</textarea> 		
		</td>
	</tr>
	<tr>
		<td>
		临床初步诊断：<br>
			<textarea name="linChuangChuBuZhenDuan"  rows="8" cols="100" >
			</textarea> 		
		</td>
	</tr>
	<tr>
		<td>
			日期：<input type="date" name="riQi">
		</td>
	</tr>
	</table>
	<input type="submit" value="提交方案" />
</form>