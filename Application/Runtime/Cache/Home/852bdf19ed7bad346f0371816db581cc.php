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
<h1><p class="centered">头部颈部</p></h1>
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
		<td class="col-xs-1">头部：</td>
		<td class="col-xs-11">
			头颅：正常<input type="checkbox" name="touLu" value="正常">
						畸形<input type="checkbox" name="touLu" value="畸形">
						压痛<input type="checkbox" name="touLu" value="压痛">
						包块<input type="checkbox" name="touLu" value="包块">
						凹陷<input type="checkbox" name="touLu" value="凹陷">
						<br>
			毛发：正常<input type="checkbox" name="maoFa" value="正常">
					稀疏<input type="checkbox" name="maoFa" value="稀疏">
					密集<input type="checkbox" name="maoFa" value="密集">
					<br>
			色泽：黑<input type="checkbox" name="seZe" value="黑">
					花<input type="checkbox" name="seZe" value="花">
					白<input type="checkbox" name="seZe" value="白">
		</td>
	</tr>
	<tr>
		<td>眼：</td>
		<td>
			眼睑：正常<input type="checkbox" name="yanJian" value="正常">
						水肿<input type="checkbox" name="yanJian" value="水肿">
						下垂<input type="checkbox" name="yanJian" value="下垂">
						倒睫<input type="checkbox" name="yanJian" value="倒睫">
						<br>
			结膜：正常<input type="checkbox" name="jieMo" value="正常">
					充血<input type="checkbox" name="jieMo" value="充血">
					水肿<input type="checkbox" name="jieMo" value="水肿">
					出血<input type="checkbox" name="jieMo" value="出血">
					苍白<input type="checkbox" name="jieMo" value="苍白">
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
			眼球：正常<input type="checkbox" name="yanQiu" value="正常">
					凸出<input type="checkbox" name="yanQiu" value="凸出">
					凹陷<input type="checkbox" name="yanQiu" value="凹陷">
					震颤<input type="checkbox" name="yanQiu" value="震颤">
					运动<input type="checkbox" name="yanQiu" value="运动">
					障碍（左<input type="checkbox" name="yanQiu" value="障碍左">右<input type="checkbox" name="yanQiu" value="障碍右">）
					<br>
			角膜：正常<input type="checkbox" name="jiaoMo" value="正常">
					异常（左<input type="checkbox" name="jiaoMo" value="异常左">右<input type="checkbox" name="jiaoMo" value="异常右">）
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
			巩膜：正常<input type="checkbox" name="gongMo" value="正常">
					黄染<input type="checkbox" name="gongMo" value="黄染">
					<br>
			瞳孔：等圆<input type="checkbox" name="tongKong" value="等圆">
					等大<input type="checkbox" name="tongKong" value="等大">
					不等（左<input type="text" name="tongKongBuDengZuo" >mm 右<input type="text" name="tongKongBuDengYou" >mm）
					<br>
			对光反射：无<input type="radio" name="duiGuangFanShe" value="无">
						有<input type="radio" name="duiGuangFanShe" value="有">
		</td>
	</tr>
	<tr>
		<td>耳：</td>
		<td>
			耳廓：正常<input type="radio" name="erKuo" value="正常">
					畸形<input type="radio" name="erKuo" value="畸形">
					<br>
			外耳道分泌物：（无<input type="radio" name="waiErFenMiWu" value="无"> 
							有<input type="radio" name="waiErFenMiWu" value="有">）
			<br>
			乳突压痛：
				无<input type="radio" name="ruTuYaTong" value="无">
				有<input type="radio" name="ruTuYaTong" value="有">
				<br>
			异常分泌物：
				无<input type="radio" name="yiChangFenMiWu" value="无"> 
				有<input type="radio" name="yiChangFenMiWu" value="有">
		</td>
	</tr>
	<tr>
		<td>鼻：</td>
		<td>
			外观：正常<input type="radio" name="waiGuan" value="正常">
				畸形<input type="radio" name="waiGuan" value="畸形">
				<br>
			鼻旁窦压痛：
				无<input type="radio" name="biPangDouYaTong" value="无">
				有<input type="radio" name="biPangDouYaTong" value="有">
				<br>
			异常分泌物：
				无<input type="radio" name="yiChangFenMiWu" value="无">
				有<input type="radio" name="yiChangFenMiWu" value="有">
		</td>
	</tr>
	<tr>
		<td>口：</td>
		<td>
			口唇：红润<input type="checkbox" name="kouChun" value="红润">
				发绀<input type="checkbox" name="kouChun" value="发绀">
				苍白<input type="checkbox" name="kouChun" value="苍白">
				疱疹<input type="checkbox" name="kouChun" value="疱疹">
				<br>
			粘膜：正常<input type="checkbox" name="nianMo" value="正常">
				异常（苍白<input type="checkbox" name="nianMo" value="苍白"> 
				出血点<input type="checkbox" name="nianMo" value="出血点">  
				溃疡<input type="checkbox" name="nianMo" value="溃疡"> ）
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
			舌：正常<input type="checkbox" name="she" value="正常">
				异常（<input type="text" name="sheYiChang" value="">）
				<br>
			舌苔：正常<input type="checkbox" name="sheTai" value="正常">
				异常（<input type="text" name="sheTaiYiChang" value="">）
				<br>
			伸舌：居中<input type="checkbox" name="shenShe" value="居中">
				偏（左<input type="checkbox" name="shenShe" value="偏左"> 右<input type="checkbox" name="shenShe" value="偏右">）			
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
			咽：正常<input type="checkbox" name="yan" value="正常">
				充血<input type="checkbox" name="yan" value="充血">
				血肿<input type="checkbox" name="yan" value="血肿">
				<br>
			扁桃体：正常<input type="checkbox" name="bianTaoTi" value="正常">
					红肿1<input type="checkbox" name="bianTaoTi" value="红肿1"> 
					红肿2<input type="checkbox" name="bianTaoTi" value="红肿2"> 
					红肿3<input type="checkbox" name="bianTaoTi" value="红肿3">
					化脓<input type="checkbox" name="bianTaoTi" value="化脓">
		</td>
	</tr>
	<tr>
		<td>颈部：</td>
		<td>
			颈：柔软<input type="checkbox" name="jing" value="柔软">
						强直<input type="checkbox" name="jing" value="强直">
						<br>
					气管位置：正中<input type="checkbox" name="qiGuan" value="正中">
								向左<input type="checkbox" name="qiGuan" value="向左">
								向右<input type="checkbox" name="qiGuan" value="向右">
								<br>
					颈静脉怒张：无<input type="radio" name="jingJingMaiNuZhang" value="无">
								有<input type="radio" name="jingJingMaiNuZhang" value="有">
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
			颈动脉：正常<input type="radio" name="jingDongMai" value="正常">
					异常<input type="radio" name="jingDongMai" value="异常">搏动
					<br>
			甲状腺：正常<input type="checkbox" name="jiaZhuangXian" value="正常">
					异常<input type="checkbox" name="jiaZhuangXian" value="异常">
					见专科情况<input type="checkbox" name="jiaZhuangXian" value="见专科情况">
					<br>
			肝颈静脉回流征：（-<input type="text" name="ganJingJingMaiHuiLiuZhengFu" > 
								+<input type="text" name="ganJingJingMaiHuiLiuZhengZheng" >）
		</td>
	</tr>	
	</table>
	<input type="submit" value="提交方案" />
</form>