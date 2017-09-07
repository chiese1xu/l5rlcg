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
<h1><p class="centered">疾病史</p></h1>
<form action="" method="post" role="form">
	<table border=1 class="table table-bordered centered" id="maintable">
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
		<td class="col-xs-1">主诉</td>
		<td class="col-xs-11">
		<input type="text" name="zhuSu"  size="100">
		</td>
	</tr>
	<tr>
		<td>现病史</td>
		<td>
		<textarea name="xianBingShi"  rows="8" cols="100" >
		</textarea> 
		</td>
	</tr>
	<tr>
		<td>既往史</td>
		<td>
		健康：（是<input type="radio" name="jianKang" value="是"> 否<input type="radio" name="jianKang" value="否">）<br>
		糖尿病史：（无<input type="checkbox" name="tangNiaoBingShi" value="无"><input type="text" name="tangNiaoBingShiNian" > 年）<br>
		高血压史：（无<input type="checkbox" name="gaoXueYaShi" value="无"><input type="text" name="gaoXueYaShiNian" > 年）<br>
		心脏病史：（无<input type="checkbox" name="xinZangBingShi" value="无"><input type="text" name="xinZangBingShiNian" > 年）
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
		传染病史：(无<input type="checkbox" name="chuanRanBingShi" value="无"> <input type="text" name="chuanRanBingShiNian" >年）<br>
		预防接种史：(无<input type="checkbox" name="yuFangJieZhongShi" value="无"> <input type="text" name="yuFangJieZhongShiNian" >）年）<br>
		药物过敏史：（无<input type="checkbox" name="guoMinShi" value="无">过敏源： <input type="text" name="guoMinYuan">临床表现：<input type="text" name="linChuangBiaoXian"> <br>
		输血史：(无<input type="radio" name="shuXueShi" value="无">
			有<input type="radio" name="shuXueShi" value="有">
			不详<input type="radio" name="shuXueShi" value="不详">	)
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
		手术史：(无<input type="checkbox" name="shouShuShi" value="无"><input type="text" name="shouShuShiNian"> 年）<br>
		外伤史：(无<input type="checkbox" name="waiShangShi" value="无"><input type="text" name="waiShangShiNian"> 年）
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
		系统回顾：<input type="text" name="xiTongHuiGu" size="100">		
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
		呼吸系统：<input type="text" name="huXiXiTong"  size="100">		
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
		循环系统：<input type="text" name="xunHuanXiTong"  size="100">		
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
		消化系统：<input type="text" name="xiaoHuaXiTong"  size="100">		
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
		泌尿生殖系统：<input type="text" name="miNiaoShengZhiXiTong"  size="100">		
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
		神经系统：<input type="text" name="shenJingXiTong"  size="100">		
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
		造血系统：<input type="text" name="zaoXueXiTong"  size="100">		
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
		内分泌与代谢系统：<input type="text" name="neiFenMiYuDaiXieXiTong"  size="100">		
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
		运动系统：<input type="text" name="yunDongXiTong"  size="100">		
		</td>
	</tr>
	<tr>
		<td>个人史</td>
		<td>
		出生地：<input type="text" name="chuShengDi" ><br>
		地方病地区居住情况：<input type="text" name="diFangBingDiQuJuZhuQingKuang" ><br>
		冶游史：<input type="text" name="yeYouShi" >		
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
		嗜烟：（无<input type="checkbox" name="shiYan" value="无">
		<input type="text" name="shiYanRi"  size="3">支/日
		<input type="text" name="shiYanNian"  size="3">年)<br>
		嗜酒：（无<input type="checkbox" name="shiJiu" value="无" >
		<input type="text" name="shiJiuRi"  size="3">两/日
		<input type="text" name="shiJiuNian"  size="3">年)
		结婚年龄：<input type="text" name="jieHunNianLing" >
		配偶情况：<input type="text" name="peiOuQingKuang" >
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
		生育史：（无<input type="checkbox" name="shengYuShi" value="无">
		孕<input type="checkbox" name="shengYuShi"  value="孕">
		产<input type="checkbox" name="shengYuShi"  value="产">
		月经：（无<input type="checkbox" name="yueJing" value="无" >
		有<input type="checkbox" name="yueJing"  value="有">）
		</td>
	</tr>
	<tr>
		<td>家族史</td>
		<td>
		家族性遗传病史：（无<input type="checkbox" name="jiaZuXingYiChuanBingShi" value="无" >
		<input type="text" name="jiaZuXingYiChuanBingShiYou" >）
		家族性传染病史：（无<input type="checkbox" name="jiaZuXingChuanRanBingShi" value="无">
		<input type="text" name="jiaZuXingChuanRanBingShiYou" >）
		</td>
	</tr>
	<tr>
		<td colspan="2">
		供史者签字：（经对上述内容核对，我确认上述内容真实有效）签字：___________________________		
		</td>
	</tr>
</table>
<input type="submit" value="提交方案" />
</form>