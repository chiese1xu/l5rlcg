<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>medic</title>
	<link rel="stylesheet" href="/tp/Public/css/bootstrap.min.css">
	<link rel="stylesheet" href="/tp/Public/css/tablemain.css">	
	<script src="/tp/Public/js/jquery.1.11.3.min.js"></script>
	<script src="/tp/Public/js/bootstrap.min.js"></script>
</head>
<script>
function edit()
{
	window.location.href="/tp/index.php/User/Waiter/modify?pid=<?php echo ($person["id"]); ?>"; 
}
</script>
<script>
function load()
{
	$("#person_id option[value=<?php echo ($visitor["personid"]); ?>]").attr("selected","true");
	$("#waiter_id option[value=<?php echo ($visitor["waiterid"]); ?>]").attr("selected","true");

}
</script>
<body onload="load()">
<div class="main">
<p>Welcome Home  !!! EDIT PERSON !!</p>
<table border="0" cellspacing="0" cellpadding="0"  class="table table-bordered">
<form action="/tp/index.php/User/Waiter/modify" method="post" enctype="multipart/form-data">
<tr><td style="width:20%">编号</td><td style="width:70%"><input type="text" name="id" value="<?php echo ($visitor["id"]); ?>" readonly></td></tr>
<tr><td>访客姓名</td><td><input type="text" name="name" placeholder="访客姓名" value="<?php echo ($visitor["name"]); ?>"></td></tr>
<tr><td>访客人数</td><td><input type="text" name="number" placeholder="访客人数" value="<?php echo ($visitor["number"]); ?>" ></td></tr>
<tr><td>联系电话</td><td><input type="text" name="telphone" placeholder="联系电话" value="<?php echo ($visitor["telphone"]); ?>" ></td></tr>
<tr><td>老人姓名</td><td><select name="personid" id="person_id">
		<?php if(is_array($personlist)): $i = 0; $__LIST__ = $personlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$person): $mod = ($i % 2 );++$i;?><option value="<?php echo ($person["id"]); ?>"><?php echo ($person["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		</select></td></tr>
<tr><td>与老人关系</td><td><input type="text" name="relation" placeholder="与老人关系" value="<?php echo ($visitor["relation"]); ?>" ></td></tr>
<tr><td>访问目的</td><td><input type="text" name="purpose" placeholder="访问目的" value="<?php echo ($visitor["purpose"]); ?>" ></td></tr>
<tr><td>到访日期</td><td><input type="date" name="comedate" value="<?php echo ($visitor["comedate"]); ?>" ></td></tr>
<tr><td>到访时间</td><td><input type="time" name="cometime" value="<?php echo ($visitor["cometime"]); ?>" ></td></tr>
<tr><td>离开日期</td><td><input type="date" name="leavedate" value="<?php echo ($visitor["leavedate"]); ?>" ></td></tr>
<tr><td>离开时间</td><td><input type="time" name="leavetime" value="<?php echo ($visitor["leavetime"]); ?>" ></td></tr>
<tr><td>接待人</td><td><select name="waiterid" id="waiter_id" >
		<?php if(is_array($waiterlist)): $i = 0; $__LIST__ = $waiterlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$waiter): $mod = ($i % 2 );++$i;?><option value="<?php echo ($waiter["id"]); ?>"><?php echo ($waiter["realname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		</select></td></tr>
<tr><td colspan="2"><input type="submit" value="修改用户信息" /></td></tr>
</form>
</table>
</div>
</body>