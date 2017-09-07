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
<h1><p class="centered">体格检查</p></h1>
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
		<td class="col-xs-1"></td>
		<td class="col-xs-11">体格检查</td>
	</tr>
	<tr>
		<td></td>
		<td>
			体温<input type="text" name="tiWen" value="">摄氏度<br>
			脉搏<input type="text" name="maiBo" value="">次/分<br>
			呼吸<input type="text" name="huXi" value="">次/分<br>
			血压<input type="text" name="xueYaDi" value="">/<input type="text" name="xueYaGao" value="">mmHg
		</td>
	</tr>
	<tr>
		<td>一般情况</td>
		<td>
			营养：良好<input type="checkbox" name="yingYang" value="良好" style="zoom:200%;">
							中等<input type="checkbox" name="yingYang" value="中等">
							肥胖<input type="checkbox" name="yingYang" value="肥胖">
							不良<input type="checkbox" name="yingYang" value="不良">
							恶体质<input type="checkbox" name="yingYang" value="恶体质">
							<br>
			体位：自如<input type="checkbox" name="tiWei" value="自如">
					被动<input type="checkbox" name="tiWei" value="被动">
					其他<input type="text" name="tiWeiQiTa" value="">
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
			面容：正常<input type="checkbox" name="mianRong" value="正常">
					急性<input type="checkbox" name="mianRong" value="急性">
					慢性<input type="checkbox" name="mianRong" value="慢性">
					贫血<input type="checkbox" name="mianRong" value="贫血">
					肝病面容<input type="checkbox" name="mianRong" value="肝病面容">
					<br>
			表情：自然<input type="checkbox" name="biaoQing" value="自然">
					痛苦<input type="checkbox" name="biaoQing" value="痛苦">
					忧虑<input type="checkbox" name="biaoQing" value="忧虑">
					恐惧<input type="checkbox" name="biaoQing" value="恐惧">
					淡漠<input type="checkbox" name="biaoQing" value="淡漠">
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
			神志：清醒<input type="checkbox" name="shenZhi" value="清醒">
					嗜睡<input type="checkbox" name="shenZhi" value="嗜睡">
					模糊<input type="checkbox" name="shenZhi" value="模糊">
					昏睡<input type="checkbox" name="shenZhi" value="昏睡">
					昏迷<input type="checkbox" name="shenZhi" value="昏迷">
					谵妄<input type="checkbox" name="shenZhi" value="谵妄">
					<br>
			配合检查：合作<input type="radio" name="peiHeJianCha" value="合作">
					不合作<input type="radio" name="peiHeJianCha" value="不合作">
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
			步态：正常<input type="radio" name="buTai" value="正常">
					异常<input type="radio" name="buTai" value="异常">
		</td>
	</tr>
	<tr>
		<td>皮肤黏膜</td>
		<td>
			色泽：正常<input type="checkbox" name="seZe" value="正常">
							潮红<input type="checkbox" name="seZe" value="潮红">
							苍白<input type="checkbox" name="seZe" value="苍白">
							紫绀<input type="checkbox" name="seZe" value="紫绀">
							黄染<input type="checkbox" name="seZe" value="黄染">
							色素沉着<input type="checkbox" name="seZe" value="色素沉着">
							<br>
			弹性：正常<input type="radio" name="tanXing" value="正常">
					减退<input type="radio" name="tanXing" value="减退">
					<br>
			皮疹：无<input type="radio" name="piZhen" value="无">
					有<input type="radio" name="piZhen" value="有">
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
			水肿：无<input type="radio" name="shuiZhong" value="无">
					有<input type="radio" name="shuiZhong" value="有">
					<br>
			出血：无<input type="radio" name="chuXue" value="无">
					有<input type="radio" name="chuXue" value="有">
					类型及分布<input type="text" name="chuXueLeiXing" value="">
					<br>
			肝掌：无<input type="radio" name="ganZhang" value="无">
					有<input type="radio" name="ganZhang" value="有">
					<br>
			蜘蛛痣：无<input type="radio" name="zhiZhuZhi" value="无">
					有<input type="radio" name="zhiZhuZhi" value="有">
		</td>
	</tr>
	<tr>
		<td>全身浅表淋巴结</td>
		<td>
			无肿大<input type="checkbox" name="quanShenQianBiaoLinBaJie" value="无肿大">
					肿大<input type="checkbox" name="quanShenQianBiaoLinBaJie" value="肿大">
					部位及特征<input type="text" name="quanShenQianBiaoLinBaJieBuWei" value="">
		</td>
	</tr>	
	</table>
	<input type="submit" value="提交方案" />
</form>