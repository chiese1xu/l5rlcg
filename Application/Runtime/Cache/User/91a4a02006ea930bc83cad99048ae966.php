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
<div class="main">
<div class="main">
<p>Welcome Home  !!! ADD PERSON</p>
<table border="0" cellspacing="0" cellpadding="0"  class="table table-bordered">
<form action="/tp/index.php/User/Dealer/save" method="post" enctype="multipart/form-data">
<tr><td style="width:20%">编号</td><td style="width:70%"></td></tr>
<tr><td>姓名</td><td><input type="text" name="name" placeholder="姓名" required></td></tr>
<tr><td>年龄</td><td><input type="text" name="age" placeholder="年龄" ></td></tr>
<tr><td>性别</td><td><input type="text" name="gender" placeholder="性别" ></td></tr>
<tr><td>护理级别</td><td><select name="carelevel">
		<?php if(is_array($carelevellist)): $i = 0; $__LIST__ = $carelevellist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$carelevel): $mod = ($i % 2 );++$i;?><option value="<?php echo ($carelevel["id"]); ?>"><?php echo ($carelevel["carename"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		</select></td></tr>
<tr><td>几号楼</td><td><input type="text" name="building" placeholder="几号楼" ></td></tr>
<tr><td>房间号</td><td><input type="text" name="room" placeholder="房间号" ></td></tr>
<tr><td>床位号</td><td><input type="text" name="bed" placeholder="几号床" ></td></tr>
<tr><td>业务管理员</td><td><input type="text" value="<?php echo ($username); ?>" readonly><input type="hidden" name="uid" value="<?php echo ($uid); ?>"></td></tr>
<tr><td>医生</td><td><select name="doctor">
		<?php if(is_array($doctorlist)): $i = 0; $__LIST__ = $doctorlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$doctor): $mod = ($i % 2 );++$i;?><option value="<?php echo ($doctor["id"]); ?>"><?php echo ($doctor["realname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		</select></td></tr>
<tr><td>护理员</td><td><select name="nurse">
		<?php if(is_array($nurselist)): $i = 0; $__LIST__ = $nurselist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nurse): $mod = ($i % 2 );++$i;?><option value="<?php echo ($nurse["id"]); ?>"><?php echo ($nurse["realname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		</select></td></tr>
<tr><td>营养师</td><td><select name="chief">
		<?php if(is_array($chieflist)): $i = 0; $__LIST__ = $chieflist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$chief): $mod = ($i % 2 );++$i;?><option value="<?php echo ($chief["id"]); ?>"><?php echo ($chief["realname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		</select></td></tr>
<tr><td>康复师</td><td><select name="coach">
		<?php if(is_array($coachlist)): $i = 0; $__LIST__ = $coachlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$coach): $mod = ($i % 2 );++$i;?><option value="<?php echo ($coach["id"]); ?>"><?php echo ($coach["realname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		</select></td></tr>
<tr><td>入住日期</td><td><input type="date" name="startdate"></td></tr>
<tr><td colspan="2"><input type="submit" /></td></tr>
</form>
</table>
</div>