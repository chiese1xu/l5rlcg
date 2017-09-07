<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>main</title>
	<link rel="stylesheet" href="/tp/Public/css/bootstrap.css">
	<link rel="stylesheet" href="/tp/Public/css/tablemain.css">

</head>

<div class="main">
<p>Welcome Home  Meal!!!</p>
<table border="0" cellspacing="0" cellpadding="0" class="table table-bordered">
<tr>
	<td>编号</td>
	<td>套餐名</td>
	<td>类型</td>
	<td>主食1</td>
	<td>主食2</td>
	<td>菜品1</td>
	<td>菜品2</td>
	<td>菜品3</td>
	<td>汤粥1</td>
	<td>其他1</td>
	<td>其他2</td>
</tr>
<?php if(is_array($meallist)): foreach($meallist as $key=>$meal): ?><tr>
	<td><?php echo ($meal["id"]); ?></a></td>
	<td><a href="/tp/index.php/User/Chief/mealedit?mid=<?php echo ($meal["id"]); ?>"><?php echo ($meal["name"]); ?></a></td>
	<td><?php echo ($meal["type"]); ?></td>	
	<td><?php echo ($meal["staple1name"]); ?></td>
	<td><?php echo ($meal["staple2name"]); ?></td>
	<td><?php echo ($meal["dish1name"]); ?></td>
	<td><?php echo ($meal["dish2name"]); ?></td>
	<td><?php echo ($meal["dish3name"]); ?></td>
	<td><?php echo ($meal["soup1name"]); ?></td>
	<td><?php echo ($meal["other1name"]); ?></td>
	<td><?php echo ($meal["other2name"]); ?></td>
	<td><a href="/tp/index.php/User/Chief/mealedit?mid=<?php echo ($meal["id"]); ?>"><img src="/tp/Public/ico/edit.jpg" width="32" height="32"/></a></td>	
</tr><?php endforeach; endif; ?>
</table>
<div  class="pages">
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

<script src="/tp/Public/js/jquery.1.11.3.min.js"></script>
<script src="/tp/Public/twitter-bootstrap-v2/js/bootstrap-tooltip.js"></script>
<script src="/tp/Public/twitter-bootstrap-v2/js/bootstrap-popover.js"></script>
<script>
$(function ()
{ 
	$(".breakfast").popover();
});
</script>
</html>