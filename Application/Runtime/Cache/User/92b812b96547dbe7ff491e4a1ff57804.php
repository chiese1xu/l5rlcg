<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>main</title>
	<link rel="stylesheet" href="/tp/Public/css/bootstrap.min.css">
	<link rel="stylesheet" href="/tp/Public/css/tablemain.css">
	<script src="/tp/Public/js/jquery.1.11.3.min.js"></script>
	<script src="/tp/Public/js/bootstrap.min.js"></script>
</head>
<script>
function load()
{
	$("#breakfast_id option[value=<?php echo ($person["breakfastid"]); ?>]").attr("selected","true");
	$("#lunch_id option[value=<?php echo ($person["lunchid"]); ?>]").attr("selected","true");
	$("#supper_id option[value=<?php echo ($person["supperid"]); ?>]").attr("selected","true");

}
</script>
<body onload="load()">
<div class="main" >
<p>Welcome Home  !!! EDIT MEAL !!</p>
<table border="0" cellspacing="0" cellpadding="0"  class="table table-bordered">
<form action="/tp/index.php/User/Chief/modify" method="post" enctype="multipart/form-data">
<input type="hidden" name="eid" value="<?php echo ($person["eid"]); ?>" >
<input type="hidden" name="id" value="<?php echo ($person["id"]); ?>" >
<input type="hidden" name="chiefid" value="<?php echo ($person["chiefid"]); ?>" >
<tr><td style="width:20%">编号</td><td style="width:70%"><input type="text" value="<?php echo ($person["id"]); ?>" readonly></td></tr>
<tr><td>老人姓名</td><td><input type="text" name="name" placeholder="老人姓名" value="<?php echo ($person["pname"]); ?>" disabled></td></tr>
<tr><td>营养师</td><td><input type="text" name="chiefid" placeholder="营养师" value="<?php echo ($person["realname"]); ?>" readonly></td></tr>
<tr><td>早餐</td><td><select name="breakfast" id="breakfast_id">
		<option value="0"> </option>
		<?php if(is_array($breakfastlist)): $i = 0; $__LIST__ = $breakfastlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$breakfast): $mod = ($i % 2 );++$i;?><option value="<?php echo ($breakfast["id"]); ?>"><?php echo ($breakfast["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		</select></td></tr>
<tr><td>午餐</td><td><select name="lunch" id="lunch_id">
		<option value="0"> </option>
		<?php if(is_array($lunchlist)): $i = 0; $__LIST__ = $lunchlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lunch): $mod = ($i % 2 );++$i;?><option value="<?php echo ($lunch["id"]); ?>"><?php echo ($lunch["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		</select></td></tr>
<tr><td>晚餐</td><td><select name="supper" id="supper_id">
		<option value="0"> </option>
		<?php if(is_array($supperlist)): $i = 0; $__LIST__ = $supperlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$supper): $mod = ($i % 2 );++$i;?><option value="<?php echo ($supper["id"]); ?>"><?php echo ($supper["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		</select></td></tr>
<tr><td>日期</td><td><input type="text" name="date" value="<?php echo ($day); ?>" readonly></td></tr>
<tr><td colspan="2"><input id="input" type="submit" value="修改订餐信息" /></td></tr>
</form>
</table>
</div>
</body>