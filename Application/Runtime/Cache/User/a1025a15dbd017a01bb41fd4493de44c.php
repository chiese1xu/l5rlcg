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
	<td>药品名</td>
	<td>药品类型</td>
	<td>生产厂家</td>
	<td>单位</td>
	<td>数量</td>
	<td>单价</td>
	<td>删除</td>
</tr>
<?php if(is_array($mediclist)): $i = 0; $__LIST__ = $mediclist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$medic): $mod = ($i % 2 );++$i;?><tr>
	<td><?php echo ($medic["id"]); ?></a></td>
	<td><a href="/tp/index.php/User/Doctor/editmedic?mid=<?php echo ($medic["id"]); ?>"><?php echo ($medic["name"]); ?></a></td>
	<td><?php echo ($medic["type"]); ?></td>
	<td><?php echo ($medic["producer"]); ?></td>
	<td><?php echo ($medic["unit"]); ?></td>
	<td><?php echo ($medic["amount"]); ?></td>
	<td><?php echo ($medic["price"]); ?></td>	
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