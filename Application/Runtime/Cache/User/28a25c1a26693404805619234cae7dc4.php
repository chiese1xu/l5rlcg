<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>main</title>
	<link rel="stylesheet" href="/tp/Public/css/bootstrap.min.css">
	<link rel="stylesheet" href="/tp/Public/css/tablemain.css">
	<script src="/tp/Public/jquery.1.11.3.min.js"></script>
	<script src="/tp/Public/js/bootstrap.min.js"></script>
</head>
<div class="main">
<p>Welcome Home  !!!</p>
<table border="0" cellspacing="0" cellpadding="0" class="table table-bordered">
<tr>
	<td>编号</td>
	<td>老人姓名</td>
	<td>生日/年龄</td>
	<td>身高</td>
	<td>体重</td>
	<td>视力</td>
	<td>听力</td>
	<td>慢性病</td>
	<td>精神疾病</td>
	<td>血压</td>
	<td>过敏源</td>
	<td>检查日期</td>
	<td>删除</td>
</tr>
<?php if(is_array($healthlist)): $i = 0; $__LIST__ = $healthlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$health): $mod = ($i % 2 );++$i;?><tr>
	<td><?php echo ($health["id"]); ?></a></td>
	<td><a href="/tp/index.php/User/Doctor/edithealth?hid=<?php echo ($health["id"]); ?>"><?php echo ($health["name"]); ?></a></td>
	<td><?php echo ($health["age"]); ?></td>
	<td><?php echo ($health["height"]); ?></td>
	<td><?php echo ($health["weight"]); ?></td>
	<td><?php echo ($health["sight"]); ?></td>
	<td><?php echo ($health["hear"]); ?></td>	
	<td><?php echo ($health["disease"]); ?></td>
	<td><?php echo ($health["mental"]); ?></td>
	<td><?php echo ($health["bloodpresure"]); ?></td>
	<td><?php echo ($health["allergy"]); ?></td>
	<td><?php echo ($health["examdate"]); ?></td>
	<td><a href="/tp/index.php/User/Doctor/remove?hid=<?php echo ($health["id"]); ?>"><img src="/tp/Public/ico/del.jpg" width="32" height="32"/></a></td>	
</tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
	<div class="pages">
		<nav aria-label="Page navigation">
		  <ul class="pagination">
			<li>
			  <a href="?page=1" aria-label="First">
				<span aria-hidden="true">&laquo;</span>
			  </a>
			</li>
			<?php  for ($p=1; $p<=$maxpage; $p++) { echo "<li><a href='?page=$p'>$p</a></li>"; } ?>
			<li>
			  <a href="?page=<?php echo ($maxpage); ?>" aria-label="Last">
				<span aria-hidden="true">&raquo;</span>
			  </a>
			</li>
		  </ul>
		</nav>
	</div>
</div>
</html>