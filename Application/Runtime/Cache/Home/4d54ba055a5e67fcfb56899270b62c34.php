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
<h1><p class="centered">胸部</p></h1>
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
		<td class="col-xs-1">胸部：</td>
		<td class="col-xs-11">
			胸廓：正常<input type="checkbox" name="xiongKuo" value="正常">
						桶状胸<input type="checkbox" name="xiongKuo" value="桶状胸">
						扁平胸<input type="checkbox" name="xiongKuo" value="扁平胸">
						鸡胸<input type="checkbox" name="xiongKuo" value="鸡胸">
						漏斗胸<input type="checkbox" name="xiongKuo" value="漏斗胸">
						胸廓凹陷（左<input type="checkbox" name="xiongKuo" value="凹陷左">，右<input type="checkbox" name="xiongKuo" value="凹陷右">）
						胸骨叩痛（无<input type="checkbox" name="xiongKuo" value="叩痛无">，有<input type="checkbox" name="xiongKuo" value="叩痛有">）
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
			乳房：发育正常<input type="radio" name="ruFang" value="正常">
				异常<input type="radio" name="ruFang" value="异常">
		</td>
	</tr>
	<tr>
		<td>肺脏：</td>
		<td>
			视诊：呼吸系统：正常<input type="checkbox" name="huXiXiTong" value="正常">
									增强<input type="checkbox" name="huXiXiTong" value="增强">
									减弱<input type="checkbox" name="huXiXiTong" value="减弱">
									受限<input type="checkbox" name="huXiXiTong" value="受限">
									<br>
						肋间隙：正常<input type="checkbox" name="leiJianXi" value="正常">
								增宽<input type="checkbox" name="leiJianXi" value="增宽">
								变窄<input type="checkbox" name="leiJianXi" value="变窄">
								部位<input type="text" name="leiJianXiBuWei" value="">
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
				触诊：语颤：正常<input type="checkbox" name="yuChan" value="正常">
							增强<input type="checkbox" name="yuChan" value="增强">
							减弱<input type="checkbox" name="yuChan" value="减弱">
							消失（左<input type="checkbox" name="yuChan" value="消失左">，右<input type="checkbox" name="yuChan" value="消失右">）
							<br>
					胸膜摩擦感：无<input type="radio" name="xiongMoMoCaGan" value="无">
								有<input type="radio" name="xiongMoMoCaGan" value="有">
								部位<input type="text" name="xiongMoMoCaGanBuWei">
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
				叩诊：清音<input type="checkbox" name="kouZhen" value="清音">
						浊音<input type="checkbox" name="kouZhen" value="浊音">
						鼓音<input type="checkbox" name="kouZhen" value="鼓音">
						过清音<input type="checkbox" name="kouZhen" value="过清音">
						实音<input type="checkbox" name="kouZhen" value="实音">
						部位<input type="text" name="kouZhenBuWei" value="">
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
					肺肝界：右锁中线第<input type="text" name="feiGanJie" value="">肋间
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
				听诊：正常<input type="checkbox" name="tingZhen" value="正常">
					干啰音<input type="checkbox" name="tingZhen" value="干啰音">
					湿罗音<input type="checkbox" name="tingZhen" value="湿罗音">
					部位<input type="text" name="tingZhenBuWei" value="">
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
					胸膜摩擦音：无<input type="radio" name="xiongMoMoCaYin" value="无">
								有<input type="radio" name="xiongMoMoCaYin" value="有">
		</td>
	</tr>
	<tr>
		<td>心脏：</td>
		<td>
			视诊：心前区隆起：无<input type="checkbox" name="xinQianQuLongQi" value="无">
									有（部位<input type="text" name="xinQianQuLongQiBuWei">）
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
			心尖搏动：正常<input type="checkbox" name="xinJianBoDong" value="正常">
						未见<input type="checkbox" name="xinJianBoDong" value="未见">
						增强<input type="checkbox" name="xinJianBoDong" value="增强">
						弥散<input type="checkbox" name="xinJianBoDong" value="弥散">
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
			心尖搏动位置：正常<input type="radio" name="xinJianBoDongWeiZhi" value="正常">
							移位（距左锁骨中线内<input type="text" name="xinJianBoDongWeiZhiNei" value="">
							外<input type="text" name="xinJianBoDongWeiZhiWai" value="">  cm）
		</td>
	</tr>
	<tr>
		<td></td>
		<td>触诊：心尖搏动：增强<input type="checkbox" name="xinJianBoDong" value="增强">
							抬举感<input type="checkbox" name="xinJianBoDong" value="抬举感">
							触不清<input type="checkbox" name="xinJianBoDong" value="触不清">
					震颤：无<input type="radio" name="zhenChan" value="无">
						有<input type="radio" name="zhenChan" value="有">
						（部位<input type="text" name="zhenChanBuWei" value="">  
						时间<input type="text" name="zhenChanShiJian" value="">）
		</td>
	</tr>
	<tr>
		<td></td>
		<td>叩诊：相对浊音界：正常<input type="checkbox" name="xiangDuiZhuoYinJie" value="正常">
								缩小<input type="checkbox" name="xiangDuiZhuoYinJie" value="缩小">
								扩大<input type="checkbox" name="xiangDuiZhuoYinJie" value="扩大">
								（左<input type="checkbox" name="xiangDuiZhuoYinJie" value="左"> 
								右<input type="checkbox" name="xiangDuiZhuoYinJie" value="右"> ）
								右侧<input type="checkbox" name="xiangDuiZhuoYinJie" value="右侧">
								肋间<input type="checkbox" name="xiangDuiZhuoYinJie" value="肋间">
								左侧<input type="checkbox" name="xiangDuiZhuoYinJie" value="左侧">
								心浊音界如图示<input type="text" name="xiangDuiZhuoYinJieTuShi" value="">（cm）								
		</td>
	</tr>
	<tr>
		<td></td>
		<td>听诊：心率：<input type="text" name="xinLv1" value="">次/分
				心律：齐<input type="radio" name="xinLv2" value="齐">
						不齐<input type="radio" name="xinLv2" value="不齐">
		</td>
	</tr>
	<tr>
		<td></td>
		<td>病理性杂音：无<input type="radio" name="bingLiXingZaYin" value="无">
						部位：<input type="text" name="bingLiXingZaYinBuWei" value="">
						级：<input type="text" name="bingLiXingZaYinJi" value="">
						期<input type="text" name="bingLiXingZaYinQi" value="">   样杂音
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
			其他：<input type="text" name="BingLiXingZaYin_QiTa" value="">	
			注：左锁骨中线距正中线<input type="text" name="BingLiXingZaYin_JuLi" value="">  cm
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
		周围血管征：无<input type="radio" name="ZhouWeiXueGuanZheng" value="wu">
				有（水冲脉<input type="radio" name="ZhouWeiXueGuanZheng" value="shuimaichong">
				枪击音<input type="radio" name="ZhouWeiXueGuanZheng" value="qiangjiyin">
				毛细血管异常博动<input type="radio" name="ZhouWeiXueGuanZheng" value="maoxixueguanyichangbodong">
				奇脉<input type="radio" name="ZhouWeiXueGuanZheng" value="qimai">
				脉搏短绌<input type="radio" name="ZhouWeiXueGuanZheng" value="maiboduanchuo">
				交替脉<input type="radio" name="ZhouWeiXueGuanZheng" value="jiaotimai">
				其他<input type="text" name="ZhouWeiXueGuanZheng_QiTa" value="">
				）		
		</td>
	</tr>	
	</table>
	<input type="submit" value="提交方案" />
</form>