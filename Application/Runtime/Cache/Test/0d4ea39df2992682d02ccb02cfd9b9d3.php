<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>print</title>
	<link rel="stylesheet" href="/tp/Public/css/bootstrap.css">
	<link rel="stylesheet" href="/tp/Public/bootstrap-datepicker-1.4.0-dist/css/bootstrap-datepicker.css">
	<script src="/tp/Public/js/jquery.1.11.3.min.js"></script>
</head>
<body>
<form>
金额：<input id="in" type="text" onchange="caculate();" onkeyup="clearNoNum(this)" size="20"/><br>
金额大写：<input id="out" type="text"  size="50" readonly="true">
</form>
<script>
function clearNoNum(obj){
	obj.value = obj.value.replace(/[^\d.]/g,""); //清除"数字"和"."以外的字符
	obj.value = obj.value.replace(/^\./g,""); //验证第一个字符是数字而不是
	obj.value = obj.value.replace(/\.{2,}/g,"."); //只保留第一个. 清除多余的
	obj.value = obj.value.replace(".","$#$").replace(/\./g,"").replace("$#$",".");
	obj.value = obj.value.replace(/^(\-)*(\d+)\.(\d\d).*$/,'$1$2.$3'); //只能输入两个小数
}
function caculate(){	
	var n =$("#in").val();
	$("#out").val(DX(n));
}

function DX(n) {
	if (!/^(0|[1-9]\d*)(\.\d+)?$/.test(n))

		return "数据非法";

	var unit = "千百拾亿千百拾万千百拾元角分", str = "";

		n += "00";

	var p = n.indexOf('.');

	if (p >= 0)

		n = n.substring(0, p) + n.substr(p+1, 2);

		unit = unit.substr(unit.length - n.length);

	for (var i=0; i < n.length; i++)

		str += '零壹贰叁肆伍陆柒捌玖'.charAt(n.charAt(i)) + unit.charAt(i);

	return str.replace(/零(千|百|拾|角)/g, "零").replace(/(零)+/g, "零").replace(/零(万|亿|元)/g, "$1").replace(/(亿)万|壹(拾)/g, "$1$2").replace(/^元零?|零分/g, "").replace(/元$/g, "元整");

}
</script>
</body>
</html>