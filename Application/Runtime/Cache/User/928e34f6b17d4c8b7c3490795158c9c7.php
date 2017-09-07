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

<div class="main">
<p>Welcome Home  !!! ADD VISITOR</p>
<table border="0" cellspacing="0" cellpadding="0" class="table table-bordered">
<form action="/tp/index.php/User/Waiter/save" method="post" enctype="multipart/form-data">
<tr><td style="width:20%">编号</td><td style="width:70%"></td></tr>
<tr><td>访客姓名</td><td><input type="text" name="name" placeholder="访客姓名" required></td></tr>
<tr><td>访客人数</td><td><input type="text" name="number" placeholder="访客人数" ></td></tr>
<tr><td>关系</td><td><input type="text" name="relation" placeholder="关系" ></td></tr>
<tr><td>目的</td><td><input type="text" name="purpose" placeholder="目的" ></td></tr>
<tr><td>联系方式</td><td><input type="text" name="telphone" placeholder="联系方式" ></td></tr>
<tr><td>老人姓名</td><td><select name="personid">
		<?php if(is_array($personlist)): $i = 0; $__LIST__ = $personlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$person): $mod = ($i % 2 );++$i;?><option value="<?php echo ($person["id"]); ?>"><?php echo ($person["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		</select></td></tr>
<tr><td>接待员</td><td><input type="text" value="<?php echo ($username); ?>" readonly><input type="hidden" name="uid" value="<?php echo ($uid); ?>"></td></tr>
<tr><td>到达日期</td><td><input type="date" name="comedate"></td></tr>
<tr><td>到达时间</td><td><input type="time" name="cometime"></td></tr>
<tr><td>离开日期</td><td><input type="date" name="leavedate"></td></tr>
<tr><td>离开时间</td><td><input type="time" name="leavetime"></td></tr>
<tr><td colspan="2"><input type="submit" /></td></tr>
</form>
</table>
</div>