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
<p>Welcome Home  !!!</p>
<table border="0" cellspacing="0" cellpadding="0" class="table table-bordered">
<tr>
	<td>编号</td>
	<td>访客姓名</td>
	<td>访客人数</td>
	<td>联系电话</td>
	<td>老人姓名</td>
	<td>与老人关系</td>
	<td>访问目的</td>
	<td>到访日期</td>
	<td>到访时间</td>
	<td>离开日期</td>
	<td>离开时间</td>
	<td>接待人</td>
	<td>删除</td>
</tr>
<?php if(is_array($visitorlist)): $i = 0; $__LIST__ = $visitorlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$visitor): $mod = ($i % 2 );++$i;?><tr>
	<td><?php echo ($visitor["id"]); ?></a></td>
	<td><a href="/tp/index.php/User/Waiter/edit?vid=<?php echo ($visitor["id"]); ?>"><?php echo ($visitor["name"]); ?></a></td>
	<td><?php echo ($visitor["number"]); ?></td>
	<td><?php echo ($visitor["telphone"]); ?></td>
	<td><?php echo ($visitor["personname"]); ?></td>
	<td><?php echo ($visitor["relation"]); ?></td>
	<td><?php echo ($visitor["purpose"]); ?></td>	
	<td><?php echo ($visitor["comedate"]); ?></td>
	<td><?php echo ($visitor["cometime"]); ?></td>
	<td><?php echo ($visitor["leavedate"]); ?></td>
	<td><?php echo ($visitor["leavetime"]); ?></td>
	<td><?php echo ($visitor["waitername"]); ?></td>
	<td><a href="/tp/index.php/User/Waiter/remove?vid=<?php echo ($visitor["id"]); ?>"><img src="/tp/Public/ico/del.jpg" width="32" height="32"/></a></td>	
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