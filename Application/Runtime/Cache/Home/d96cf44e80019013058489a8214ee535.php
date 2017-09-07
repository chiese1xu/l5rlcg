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
<h1><p class="centered">脊柱</p></h1>
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
		<td class="col-xs-1">脊柱四肢：</td>
		<td class="col-xs-11">
		脊柱：正常<input type="radio" name="jiZhu" value="正常">
		畸形<input type="radio" name="jiZhu" value="畸形">（<input type="text" name="jiZhuInfo" value="">）
		<br>
		下肢水肿：无<input type="radio" name="XiaZhiShuiZhong" value="wu">
		轻<input type="radio" name="XiaZhiShuiZhong" value="qing">
		中<input type="radio" name="XiaZhiShuiZhong" value="zhong">
		重度<input type="radio" name="XiaZhiShuiZhong" value="zhongdu">
		<br>
		下肢静脉曲张：无<input type="radio" name="XiaZhiJingMaiQuZhang" value="wu">
		有 （见专科情况）<input type="radio" name="XiaZhiJingMaiQuZhang" value="you">
		<br>
		活动度：正常<input type="radio" name="HuoDongWu" value="zhengchang">
		受限<input type="radio" name="HuoDongWu" value="shouxian">
		<br>
		关节：正常<input type="radio" name="GuanJie" value="zhengchang">
		异常<input type="radio" name="GuanJie" value="yichang">		
		</td>
	</tr>
	<tr>
		<td>肛门及外生殖器：</td>
		<td>
		未查<input type="radio" name="GangMen" value="weicha">
		正常<input type="radio" name="GangMen" value="zhengchang">
		异常<input type="radio" name="GangMen" value="yichang"> （见专科情况）		
		</td>
	</tr>
	<tr>
		<td>神经系统：</td>
		<td>
		生理反射：无<input type="radio" name="ShengLiFanShe" value="wu">
		存在<input type="radio" name="ShengLiFanShe" value="cunzai">
		<br>
		病理反射：未引出<input type="radio" name="BingLiFanShe" value="weiyinchu">
		引出<input type="radio" name="BingLiFanShe" value="yinchu">
		<br>
		肌力：正常<input type="radio" name="JiLi" value="zhengchang">
		异常<input type="radio" name="BingLiFanShe" value="yichang">
		</td>
	</tr>	
	</table>
	<input type="submit" value="提交方案" />
</form>