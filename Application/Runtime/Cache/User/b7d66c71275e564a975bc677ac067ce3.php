<?php if (!defined('THINK_PATH')) exit();?><head>
	<meta charset="utf-8"> 
	<title>main</title>
	<link rel="stylesheet" href="/tp/Public/css/bootstrap.min.css">
	<link rel="stylesheet" href="/tp/Public/css/tablemain.css">    
	<script src="/tp/Public/js/jquery.1.11.3.min.js"></script>
	<script src="/tp/Public/js/bootstrap.min.js"></script>
</head>
<div class="main">
<p>Welcome Home  !!! ADD HEALTH</p>
<table border="0" cellspacing="0" cellpadding="0" class="table table-bordered">
<form action="/tp/index.php/User/Doctor/save" method="post" enctype="multipart/form-data">
<tr><td style="width:20%">编号</td><td style="width:70%"></td></tr>
<tr><td>老人姓名</td><td><select name="personid">
		<?php if(is_array($personlist)): $i = 0; $__LIST__ = $personlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$person): $mod = ($i % 2 );++$i;?><option value="<?php echo ($person["id"]); ?>"><?php echo ($person["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		</select></td></tr>
<tr><td>身高</td><td><input type="text" name="height" placeholder="身高" value="<?php echo ($person["height"]); ?>"></td></tr>
<tr><td>体重</td><td><input type="text" name="weight" placeholder="体重" value="<?php echo ($person["weight"]); ?>" ></td></tr>
<tr><td>视力</td><td><input type="text" name="sight" placeholder="视力" value="<?php echo ($person["sight"]); ?>" ></td></tr>
<tr><td>听力</td><td><input type="text" name="hear" placeholder="听力" value="<?php echo ($person["hear"]); ?>" ></td></tr>
<tr><td>慢性病</td><td><input type="text" name="disease" placeholder="慢性病"  value="<?php echo ($person["disease"]); ?>"></td></tr>
<tr><td>精神疾病</td><td><input type="text" name="mental" placeholder="精神疾病"  value="<?php echo ($person["mental"]); ?>"></td></tr>
<tr><td>血压</td><td><input type="text" name="bloodpresure" placeholder="血压" ></td></tr>
<tr><td>过敏源</td><td><input type="text" name="allergy" placeholder="过敏源" ></td></tr>
<tr><td>检查日期</td><td><input type="date" name="examdate" placeholder="检查日期" value="<?php echo ($examdate); ?>"></td></tr>
<tr><td colspan="2"><input type="submit" /></td></tr>
</form>
</table>
</div>