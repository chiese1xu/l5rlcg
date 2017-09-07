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
<p>Welcome Home  !!!</p>
<table border="0" cellspacing="0" cellpadding="0" class="table table-bordered">
<tr>
	<td>编号</td>
	<td>姓名</td>
	<!--
	<td>慢性病</td>
	<td>精神疾病</td>
	<td>血压</td>
	<td>过敏史</td>
	-->	
	<td>药品名称</td>
	<td>单位</td>
	<td>量</td>
	<td>数量</td>
	<td>当前价格</td>	
	<td>医嘱</td>
	<td>诊断日期</td>
	<td>诊断时间</td>
	<td>删除</td>
</tr>
<?php if(is_array($recipelist)): $i = 0; $__LIST__ = $recipelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$recipe): $mod = ($i % 2 );++$i;?><tr>
	<td><?php echo ($recipe["id"]); ?></a></td>
	<td><a href="/tp/index.php/User/Doctor/editmedic?mid=<?php echo ($medic["id"]); ?>"><?php echo ($recipe["name"]); ?></a></td>
	<!--
	<td><?php echo ($recipe["disease"]); ?></td>
	<td><?php echo ($recipe["mental"]); ?></td>
	<td><?php echo ($recipe["bloodpresure"]); ?></td>
	<td><?php echo ($recipe["allergy"]); ?></td>
	-->	
	<td><?php echo ($recipe["medicname"]); ?></td>
	<td><?php echo ($recipe["unit"]); ?></td>	
	<td><?php echo ($recipe["amount"]); ?></td>
	<td><?php echo ($recipe["quantity"]); ?></td>
	<td><?php echo ($recipe["cprice"]); ?></td>
	<td><?php echo ($recipe["advice"]); ?></td>
	<td><?php echo ($recipe["date"]); ?></td>
	<td><?php echo ($recipe["time"]); ?></td>	
	<td><a href="/tp/index.php/User/Doctor/removemedic?mid=<?php echo ($medic["id"]); ?>"><img src="/tp/Public/ico/del.jpg" width="32" height="32"/></a></td>	
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