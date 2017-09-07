<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>main</title>
	<link rel="stylesheet" href="/tp/Public/css/bootstrap.css">
	<link rel="stylesheet" href="/tp/Public/css/tablemain.css">
	<link rel="stylesheet" href="/tp/Public/bootstrap-datepicker-1.4.0-dist/css/bootstrap-datepicker3.css">

</head>

<div class="main">
<p>Welcome Home  当日订餐情况!!!</p>
<div>
<form action="/tp/index.php/User/Chief/main" method="post">
	<input class="date-picker" type="text" name="day" value="<?php echo ($day); ?>">
	<input class="btn btn-default" type="submit" value="选择日期">
</form>
</div>
<table border="0" cellspacing="0" cellpadding="0" class="table table-bordered">
<tr>
	<td>编号</td>
	<td>老人姓名</td>
	<td>营养师</td>
	<td>早餐</td>
	<td>午餐</td>
	<td>晚餐</td>
	<td>日期</td>
	<td>编辑</td>
</tr>
<?php if(is_array($personlist)): foreach($personlist as $key=>$person): ?><tr>
	<td><?php echo ($person["id"]); ?></a></td>
	<td><a href="/tp/index.php/User/Chief/edit?pid=<?php echo ($person["id"]); ?>"><?php echo ($person["name"]); ?></a></td>
	<td><?php echo ($person["realname"]); ?></td>	
	<td>
		<?php if(is_array($meallist)): foreach($meallist as $key=>$meal): if(($meal["id"]) == $person["breakfastid"]): ?><a class="breakfast btn btn-success" rel="popover" 
				data-content="<?php echo ($meal["staple1"]); ?> <?php echo ($meal["staple2"]); ?> <?php echo ($meal["dish1"]); ?> <?php echo ($meal["dish2"]); ?> 
				<?php echo ($meal["dish3"]); ?> <?php echo ($meal["soup1"]); ?> <?php echo ($meal["other1"]); ?> <?php echo ($meal["other2"]); ?>" 
				data-original-title="早餐"><?php echo ($person["breakfast"]); ?></a><?php endif; endforeach; endif; ?>
	</td>
	<td>
		<?php if(is_array($meallist)): foreach($meallist as $key=>$meal): if(($meal["id"]) == $person["lunchid"]): ?><a class="breakfast btn btn-success" rel="popover" 
				data-content="<?php echo ($meal["staple1"]); ?> <?php echo ($meal["staple2"]); ?> <?php echo ($meal["dish1"]); ?> <?php echo ($meal["dish2"]); ?> 
				<?php echo ($meal["dish3"]); ?> <?php echo ($meal["soup1"]); ?> <?php echo ($meal["other1"]); ?> <?php echo ($meal["other2"]); ?>" 
				data-original-title="午餐"><?php echo ($person["lunch"]); ?></a><?php endif; endforeach; endif; ?>
	</td>
	<td>
		<?php if(is_array($meallist)): foreach($meallist as $key=>$meal): if(($meal["id"]) == $person["supperid"]): ?><a class="breakfast btn btn-success" rel="popover" 
				data-content="<?php echo ($meal["staple1"]); ?> <?php echo ($meal["staple2"]); ?> <?php echo ($meal["dish1"]); ?> <?php echo ($meal["dish2"]); ?> 
				<?php echo ($meal["dish3"]); ?> <?php echo ($meal["soup1"]); ?> <?php echo ($meal["other1"]); ?> <?php echo ($meal["other2"]); ?>" 
				data-original-title="晚餐"><?php echo ($person["supper"]); ?></a><?php endif; endforeach; endif; ?>
	</td>
	<td><input type="text" value="<?php echo ($day); ?>" disabled></td>
	<td><a href="/tp/index.php/User/Chief/edit?pid=<?php echo ($person["id"]); ?>&day=<?php echo ($day); ?>"><img src="/tp/Public/ico/edit.jpg" width="32" height="32"/></a></td>
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
<script src="/tp/Public/bootstrap-datepicker-1.4.0-dist/js/bootstrap-datepicker.js"></script>
<script src="/tp/Public/bootstrap-datepicker-1.4.0-dist/locales/bootstrap-datepicker.zh-CN.min.js"></script>
<script>
$('.date-picker').datepicker({
                language: 'zh-CN',
				orientation : 'top',
                autoclose: true,				
                todayHighlight: true,
				format: "yyyy-mm-dd"
            })
</script>
<script>
$(function ()
{ 
	$(".breakfast").popover();
});
</script>
</html>