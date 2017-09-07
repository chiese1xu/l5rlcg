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
function edit()
{
	window.location.href="/tp/index.php/User/Dealer/modify?pid=<?php echo ($person["id"]); ?>"; 
}
</script>
<script>
function load()
{
	$("#care_level option[value=<?php echo ($person["carelevel"]); ?>]").attr("selected","true");//等carelevel表完成实现
	$("#doctor_id option[value=<?php echo ($person["doctorid"]); ?>]").attr("selected","true");
	$("#nurse_id option[value=<?php echo ($person["nurseid"]); ?>]").attr("selected","true");
	$("#chief_id option[value=<?php echo ($person["chiefid"]); ?>]").attr("selected","true");
	$("#coach_id option[value=<?php echo ($person["coachid"]); ?>]").attr("selected","true");
	$("#dealer_id option[value=<?php echo ($person["dealerid"]); ?>]").attr("selected","true");

}
</script>
<body onload="load()">
<div class="main" >
<p>Welcome Home  !!! EDIT PERSON !!</p>
<table border="0" cellspacing="0" cellpadding="0"  class="table table-bordered">
<form action="/tp/index.php/User/Dealer/modify" method="post" enctype="multipart/form-data">
<tr><td style="width:20%">编号</td><td style="width:70%"><input type="text" name="id" value="<?php echo ($person["id"]); ?>" readonly></td></tr>
<tr><td>姓名</td><td><input type="text" name="name" placeholder="姓名" value="<?php echo ($person["name"]); ?>"></td></tr>
<tr><td>年龄</td><td><input type="text" name="age" placeholder="年龄" value="<?php echo ($person["age"]); ?>" ></td></tr>
<tr><td>性别</td><td><input type="text" name="gender" placeholder="性别" value="<?php echo ($person["gender"]); ?>" ></td></tr>
<tr><td>护理级别</td><td><select name="carelevel" id="care_level">
		<?php if(is_array($carelevellist)): $i = 0; $__LIST__ = $carelevellist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$carelevel): $mod = ($i % 2 );++$i;?><option value="<?php echo ($carelevel["id"]); ?>"><?php echo ($carelevel["carename"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		</select></td></tr>
<tr><td>几号楼</td><td><input type="text" name="building" placeholder="几号楼" value="<?php echo ($person["building"]); ?>" ></td></tr>
<tr><td>房间号</td><td><input type="text" name="room" placeholder="房间号" value="<?php echo ($person["room"]); ?>" ></td></tr>
<tr><td>床位号</td><td><input type="text" name="bed" placeholder="床位号" value="<?php echo ($person["bed"]); ?>" ></td></tr>
<tr><td>业务管理员</td><td><select name="dealer" id="dealer_id" >
		<?php if(is_array($dealerlist)): $i = 0; $__LIST__ = $dealerlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dealer): $mod = ($i % 2 );++$i;?><option value="<?php echo ($dealer["id"]); ?>"><?php echo ($dealer["realname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		</select></td></tr>
<tr><td>医生</td><td><select name="doctor" id="doctor_id" >
		<?php if(is_array($doctorlist)): $i = 0; $__LIST__ = $doctorlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$doctor): $mod = ($i % 2 );++$i;?><option value="<?php echo ($doctor["id"]); ?>"><?php echo ($doctor["realname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		</select></td></tr>
<tr><td>护理员</td><td><select name="nurse" id="nurse_id">
		<?php if(is_array($nurselist)): $i = 0; $__LIST__ = $nurselist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nurse): $mod = ($i % 2 );++$i;?><option value="<?php echo ($nurse["id"]); ?>"><?php echo ($nurse["realname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		</select></td></tr>
<tr><td>营养师</td><td><select name="chief" id="chief_id">
		<?php if(is_array($chieflist)): $i = 0; $__LIST__ = $chieflist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$chief): $mod = ($i % 2 );++$i;?><option value="<?php echo ($chief["id"]); ?>"><?php echo ($chief["realname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		</select></td></tr>
<tr><td>康复师</td><td><select name="coach" id="coach_id">
		<?php if(is_array($coachlist)): $i = 0; $__LIST__ = $coachlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$coach): $mod = ($i % 2 );++$i;?><option value="<?php echo ($coach["id"]); ?>"><?php echo ($coach["realname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		</select></td></tr>
<tr><td>入住日期</td><td><input type="date" name="startdate" value="<?php echo ($person["startdate"]); ?>" ></td></tr>
<tr><td colspan="2"><input type="submit" value="修改用户信息" /></td></tr>
</form>
</table>
</div>
</body>