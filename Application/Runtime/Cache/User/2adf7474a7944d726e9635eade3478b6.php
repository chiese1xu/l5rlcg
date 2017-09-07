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
	$("#type_id option[value=<?php echo ($meal["type"]); ?>]").attr("selected","true");
	$("#staple1_id option[value=<?php echo ($meal["staple1"]); ?>]").attr("selected","true");
	$("#staple2_id option[value=<?php echo ($meal["staple2"]); ?>]").attr("selected","true");
	$("#dish1_id option[value=<?php echo ($meal["dish1"]); ?>]").attr("selected","true");
	$("#dish2_id option[value=<?php echo ($meal["dish2"]); ?>]").attr("selected","true");
	$("#dish3_id option[value=<?php echo ($meal["dish3"]); ?>]").attr("selected","true");
	$("#soup1_id option[value=<?php echo ($meal["soup1"]); ?>]").attr("selected","true");
	$("#other1_id option[value=<?php echo ($meal["other1"]); ?>]").attr("selected","true");
	$("#other2_id option[value=<?php echo ($meal["other2"]); ?>]").attr("selected","true");
	$("#staple1_id option[value=<?php echo ($meal["staple1"]); ?>]").attr("selected","true");
}
</script>
<body onload="load()">
<div class="main" >
<p>Welcome Home  !!! EDIT MEAL !!</p>
<table border="0" cellspacing="0" cellpadding="0"  class="table table-bordered">
<form action="/tp/index.php/User/Chief/mealmodify" method="post" enctype="multipart/form-data">
<tr><td style="width:20%">套餐编号</td><td style="width:70%"><input type="text" name="mid" value="<?php echo ($meal["id"]); ?>" readonly></td></tr>
<tr><td>套餐名称</td><td><input type="text" name="name" placeholder="套餐名称" value="<?php echo ($meal["name"]); ?>" ></td></tr>
<tr><td>类别</td><td><select name="type" id="type_id">
		<?php if(is_array($typelist)): $i = 0; $__LIST__ = $typelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($i % 2 );++$i;?><option value="<?php echo ($type); ?>"><?php echo ($type); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		</select></td></tr>
<tr><td>主食1</td><td><select name="staple1" id="staple1_id">
		<option value="0"> </option>
		<?php if(is_array($staplelist)): $i = 0; $__LIST__ = $staplelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$staple): $mod = ($i % 2 );++$i;?><option value="<?php echo ($staple["id"]); ?>"><?php echo ($staple["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		</select></td></tr>
<tr><td>主食2</td><td><select name="staple2" id="staple2_id">
		<option value="0"> </option>
		<?php if(is_array($staplelist)): $i = 0; $__LIST__ = $staplelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$staple): $mod = ($i % 2 );++$i;?><option value="<?php echo ($staple["id"]); ?>"><?php echo ($staple["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		</select></td></tr>
<tr><td>菜品1</td><td><select name="dish1" id="dish1_id">
		<option value="0"> </option>
		<?php if(is_array($dishlist)): $i = 0; $__LIST__ = $dishlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dish): $mod = ($i % 2 );++$i;?><option value="<?php echo ($dish["id"]); ?>"><?php echo ($dish["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		</select></td></tr>
<tr><td>菜品2</td><td><select name="dish2" id="dish2_id">
		<option value="0"> </option>
		<?php if(is_array($dishlist)): $i = 0; $__LIST__ = $dishlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dish): $mod = ($i % 2 );++$i;?><option value="<?php echo ($dish["id"]); ?>"><?php echo ($dish["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		</select></td></tr>
<tr><td>菜品3</td><td><select name="dish3" id="dish3_id">
		<option value="0"> </option>
		<?php if(is_array($dishlist)): $i = 0; $__LIST__ = $dishlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dish): $mod = ($i % 2 );++$i;?><option value="<?php echo ($dish["id"]); ?>"><?php echo ($dish["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		</select></td></tr>
<tr><td>汤粥1</td><td><select name="soup1" id="soup1_id">
		<option value="0"> </option>
		<?php if(is_array($souplist)): $i = 0; $__LIST__ = $souplist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$soup): $mod = ($i % 2 );++$i;?><option value="<?php echo ($soup["id"]); ?>"><?php echo ($soup["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		</select></td></tr>
<tr><td>其他1</td><td><select name="other1" id="other1_id">
		<option value="0"> </option>
		<?php if(is_array($otherlist)): $i = 0; $__LIST__ = $otherlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$other): $mod = ($i % 2 );++$i;?><option value="<?php echo ($other["id"]); ?>"><?php echo ($other["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		</select></td></tr>
<tr><td>其他2</td><td><select name="other2" id="other2_id">
		<option value="0"> </option>
		<?php if(is_array($otherlist)): $i = 0; $__LIST__ = $otherlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$other): $mod = ($i % 2 );++$i;?><option value="<?php echo ($other["id"]); ?>"><?php echo ($other["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		</select></td></tr>
<tr><td colspan="2"><input id="input" type="submit" value="修改套餐信息" /></td></tr>
</form>
</table>
</div>
</body>