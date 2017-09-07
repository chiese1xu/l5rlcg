<?php if (!defined('THINK_PATH')) exit();?><head>
	<meta charset="utf-8"> 
	<title>main</title>
	<link rel="stylesheet" href="/tp/Public/css/bootstrap.min.css">
	<link rel="stylesheet" href="/tp/Public/css/tablemain.css">    
	<script src="/tp/Public/jquery.1.11.3.min.js"></script>
	<script src="/tp/Public/js/bootstrap.min.js"></script>
<script>
	function edit()
	{
		window.location.href="/tp/index.php/User/Doctor/modify?pid=<?php echo ($person["id"]); ?>"; 
	}
</script>
<script>
	function load()
	{
		
	}
</script>
</head>
<body onload="load()">
<div class="main" >
<p>Welcome Home  !!! EDIT HEALTH !!</p>
<table border="0" cellspacing="0" cellpadding="0" class="table table-bordered">
<form action="/tp/index.php/User/Doctor/modify" method="post" enctype="multipart/form-data">
<tr><td style="width:20%">健康编号</td><td style="width:70%"><input type="text" name="hid" value="<?php echo ($health["id"]); ?>" readonly></td></tr>
<tr><td>老人姓名</td><td><input type="text" value="<?php echo ($health["personname"]); ?>" disabled></td></tr>
<tr><td>身高</td><td><input type="text" name="height" value="<?php echo ($health["height"]); ?>" placeholder="身高" ></td></tr>
<tr><td>体重</td><td><input type="text" name="weight" value="<?php echo ($health["weight"]); ?>" placeholder="体重" ></td></tr>
<tr><td>视力</td><td><input type="text" name="sight" value="<?php echo ($health["sight"]); ?>" placeholder="视力" ></td></tr>
<tr><td>听力</td><td><input type="text" name="hear" value="<?php echo ($health["hear"]); ?>" placeholder="听力" ></td></tr>
<tr><td>慢性病</td><td><input type="text" name="disease" value="<?php echo ($health["disease"]); ?>" placeholder="慢性病" ></td></tr>
<tr><td>精神疾病</td><td><input type="text" name="mental" value="<?php echo ($health["mental"]); ?>" placeholder="精神疾病" ></td></tr>
<tr><td>血压</td><td><input type="text" name="bloodpresure" value="<?php echo ($health["bloodpresure"]); ?>" placeholder="血压" ></td></tr>
<tr><td>过敏源</td><td><input type="text" name="allergy" value="<?php echo ($health["allergy"]); ?>" placeholder="过敏源" ></td></tr>
<tr><td>检查日期</td><td><input type="date" name="examdate" value="<?php echo ($health["examdate"]); ?>" placeholder="检查日期" ></td></tr>
<tr><td colspan="2"><input type="submit" value="修改体检信息" /></td></tr>
</form>
</table>
</div>
</body>