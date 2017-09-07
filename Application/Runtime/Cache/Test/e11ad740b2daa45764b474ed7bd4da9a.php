<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>main</title>
	<link rel="stylesheet" href="/tp/Public/css/bootstrap.css">
	<link rel="stylesheet" href="/tp/Public/css/tablemain.css">
	<link rel="stylesheet" href="/tp/Public/bootstrap-datepicker-1.4.0-dist/css/bootstrap-datepicker.css">
</head>
<style>
#border{
	border:1px dashed red;
}
</style>
<div>
<form>
<table>
	<tr>
		<td>姓名</td><td><input type="text" value="xxxxx"></td>
		<td>删除</td>
	</tr>
</table>

<table id="table1">
	<tr>
		<td colspan="2"><input type="button" src="/tp/Public/ico/add.jpg" width="32" height="32" value="增加" id="addTable"/></td>
	</tr>
	<tr>
		<td>
		<table id="border">
			<tr>
				<td>编号</td><td>1</td>
			</tr>
			<tr>
				<td>药品</td><td><input type="text" value="xxxxx"></td>
			</tr>	
			<tr>
				<td>数量</td><td><input type="text" value="1"></td>
			</tr>	
			<tr>
				<td>医嘱</td><td colspan="2"><textarea cols="22" rows="8">医嘱bla	bla bla</textarea></td>
			</tr>
		</table>
		</td>
		<td>
			<input type="button" src="/tp/Public/ico/add.jpg" width="32" height="32" value="删除" onclick="deleterow(1)"/>
		</td>
	</tr>
</table>
<table id="medic">
</table>
</form>
</div>
<script src="/tp/Public/js/jquery.1.11.3.min.js"></script>
<script>
$(document).ready(function(){
	var tid =1;
    $("#addTable").click(function(){
		tid++;
       var tr='<table id=table'+tid+'><tr><td><table id="border"><tr><td>编号</td><td>'+tid+'</td></tr>'+
			'<tr><td>药品</td><td><input type="text" value="xxxxx"></td></tr>'+	
			'<tr><td>数量</td><td><input type="text" value="1"></td></tr><tr>'+
			'<td>医嘱</td><td colspan="2"><textarea cols="22" rows="8">医嘱bla	bla bla</textarea></td></tr></table></td>'+		
			'<td><input type="button" src="/tp/Public/ico/add.jpg" width="32" height="32" value="删除" onclick="deleterow('+tid+')"/></td></tr></table>';
　  　$("#medic").append(tr);　
    });

})

function deleterow(did){
	if(confirm("确认要删除？"))
	{
		$("#table"+did+" tr").remove();
	}
	
}
</script>
</html>