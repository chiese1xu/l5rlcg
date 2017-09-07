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
<h1><p class="centered">腹部</p></h1>
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
		<td class="col-xs-1">腹部：</td>
		<td class="col-xs-11">
		视诊：外形：正常<input type="radio" name="FuBuWaiXing" value="shuimaichong">
		饱满<input type="radio" name="FuBuWaiXing" value="baoman">
		膨隆<input type="radio" name="FuBuWaiXing" value="penglong">
		蛙腹<input type="radio" name="FuBuWaiXing" value="wafu">
		地平<input type="radio" name="FuBuWaiXing" value="diping">
		舟状<input type="radio" name="FuBuWaiXing" value="zhouzhuang">
		尖腹<input type="radio" name="FuBuWaiXing" value="jianfu">
		腹围<input type="radio" name="FuBuWaiXing" value="fuwei">  cm
		其他<input type="text" name="FuBuWaiXing_QiTa" value="">
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
		胃形：无<input type="radio" name="WeiXing" value="wu">
		可见<input type="radio" name="WeiXing" value="kejian">
		<br>
		肠形：无<input type="radio" name="ChangXing" value="wu">
		可见<input type="radio" name="ChangXing" value="kejian">
		<br>
		蠕动波：无<input type="radio" name="RuDongBo" value="wu">
		可见<input type="radio" name="RuDongBo" value="kejian">
		<br>
		腹式呼吸：正常<input type="radio" name="FuShiHuXi" value="zhengchang">
		消失<input type="radio" name="FuShiHuXi" value="xiaoshi">
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
		腹壁静脉曲张：无<input type="radio" name="FuBiJingMaiQuZhang" value="wu">
		隐<input type="radio" name="FuBiJingMaiQuZhang" value="yin">
		显见<input type="radio" name="FuBiJingMaiQuZhang" value="xianjian">
		充盈<input type="radio" name="FuBiJingMaiQuZhang" value="chongying">
		怒张<input type="radio" name="FuBiJingMaiQuZhang" value="nuzhang">
		<br>
		手术疤痕：无<input type="radio" name="ShouShuBaHen" value="wu">
		有<input type="radio" name="ShouShuBaHen" value="you">部位：<input type="text" name="ShouShuBaHen_BuWei" value="">
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
		脐：正常<input type="radio" name="Qi" value="zhengchang">
		突出<input type="radio" name="Qi" value="tuchu">
		分泌物<input type="radio" name="Qi" value="fenmiwu">
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
		触诊：腹肌：柔软<input type="radio" name="FuJi" value="rouruan">
		柔韧<input type="radio" name="FuJi" value="rouren">
		紧张<input type="radio" name="FuJi" value="jinzhang">
		<br>
		压缩：（无<input type="radio" name="YaSuo" value="wu"> 
		有<input type="radio" name="YaSuo" value="you"> ）
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
		反跳痛：（-<input type="radio" name="FanTiaoTong" value="fu"> +<input type="radio" name="FanTiaoTong" value="zheng"> ）<br>
		液波震颤：（-<input type="radio" name="YeBoZhenChan" value="fu"> +<input type="radio" name="YeBoZhenChan" value="zheng"> ）<br>
		腹部包块：无<input type="radio" name="FuBuBaoKuai" value="wu">
		有（大小<input type="text" name="FuBuBaoKuai_DaXiao" value="">
		表面光滑<input type="radio" name="FuBuBaoKuai_You" value="biaomianguanghua">
		结节状<input type="radio" name="FuBuBaoKuai_You" value="jiejiezhuang">
		软<input type="radio" name="FuBuBaoKuai_You" value="ruan">
		硬<input type="radio" name="FuBuBaoKuai_You" value="ying">
		移动<input type="radio" name="FuBuBaoKuai_You" value="yidong">
		良<input type="radio" name="FuBuBaoKuai_You" value="liang">
		差<input type="radio" name="FuBuBaoKuai_You" value="cha">）
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
		胃区振水声（-<input type="radio" name="WeiQuZhenShuiSheng" value="fu"> 
		+<input type="radio" name="WeiQuZhenShuiSheng" value="zheng"> ）
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
		肝：未触及<input type="radio" name="Gan" value="weichuji">
		右季肋下<input type="text" name="YouJiLeiXia" value="">cm
		剑突下<input type="text" name="JianTuXia" value="">cm
		边锐<input type="checkbox" name="Gan" value="bianrui">
		压痛（-<input type="radio" name="Gan_YaTong" value="fu"> 
		+<input type="radio" name="Gan_YaTong" value="zheng"> ）
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
		脾：未触及<input type="radio" name="Pi" value="weichuji">
		触及<input type="radio" name="Pi" value="chuji">肋下<input type="text" name="Pi_LeiXia" value="">cm
		<br>
		胆囊：未触及<input type="radio" name="DanNang" value="weichuji">
		可触及<input type="radio" name="DanNang" value="chuji">肋下<input type="text" name="DanNang_LeiXia" value="">cm
		压痛（-<input type="radio" name="DanNang_YaTong" value="fu"> +<input type="radio" name="DanNang_YaTong" value="zheng"> ）
		甲hy征（-<input type="radio" name="DanNang_Jia" value="fu"> +<input type="radio" name="DanNang_Jia" value="zheng"> ）
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
		肾脏：未触及<input type="radio" name="ShenZang" value="weichuji">
		可触及<input type="radio" name="ShenZang" value="kechuji">
		大小<input type="text" name="ShenZang_DaXiao" value="">
		移动度<input type="text" name="ShenZang_YiDongDu" value="">
		压痛（-<input type="text" name="ShenZang_YaTongFu" value=""> 
		+<input type="text" name="ShenZang_YaTongZheng" value=""> ）
		输尿管压痛点（-<input type="text" name="ShenZang_ShuNiaoGuanYaTongDian_Fu" value=""> 
		+<input type="text" name="ShenZang_ShuNiaoGuanYaTongDian_Zheng" value=""> ）
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
		叩诊：干浊音界（存在<input type="radio" name="GanRaoYinJie" value="cunzai">
		缩小<input type="radio" name="GanRaoYinJie" value="suoxiao">
		消失<input type="radio" name="GanRaoYinJie" value="xiaoshi"> ）
		<br>
		肝区叩痛（-<input type="radio" name="GanQuKouTong" value="fu">
		+<input type="radio" name="GanQuKouTong" value="zheng"> ）
		<br>
		肾区叩痛（-<input type="radio" name="ShenQuKouTong" value="fu"> 
		+<input type="radio" name="ShenQuKouTong" value="zheng"> ）
		<br>
		移动性浊音（-<input type="radio" name="YiDongXingZhuoYin" value="fu"> 
		+<input type="radio" name="YiDongXingZhuoYin" value="zheng"> ）
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
		听诊：肠鸣音：正常<input type="radio" name="ChangMingYin" value="zhengchang">
		亢进<input type="radio" name="ChangMingYin" value="kangjin">
		减弱<input type="radio" name="ChangMingYin" value="jianruo">
		消失<input type="radio" name="ChangMingYin" value="xiaoshi">
		<br>
		气过水声：无<input type="radio" name="QiGuoShuiSheng" value="wu">
		有<input type="radio" name="QiGuoShuiSheng" value="you">
		<br>
		血管杂音：无<input type="radio" name="XueGuanZaYin" value="wu">
		有（部位<input type="text" name="XueGuanZaYin_BuWei" value=""> ）
		</td>
	</tr>	
	</table>
	<input type="submit" value="提交方案" />
</form>