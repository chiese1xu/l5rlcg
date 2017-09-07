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
<p>Welcome Home  物品登记</p>
<table border="0" cellspacing="0" cellpadding="0" class="table table-bordered">
<tr>
	<td>编号</td>
	<td>名称</td>
	<td>品牌</td>
	<td>型号</td>
	<td>单位</td>
	<td>修改</td>
	<td>删除</td>
</tr>
<?php if(is_array($supplylist)): foreach($supplylist as $key=>$supply): ?><tr>
	<td><?php echo ($supply["id"]); ?></td>
	<td><?php echo ($supply["name"]); ?></td>
	<td><?php echo ($supply["brand"]); ?></td>	
	<td><?php echo ($supply["type"]); ?></td>
	<td><?php echo ($supply["unit"]); ?></td>
	<td><a href="/tp/index.php/User/Supply/edit?sid=<?php echo ($supply["id"]); ?>"><img src="/tp/Public/ico/edit.jpg" width="32" height="32"/></a></td>	
	<td><a href="/tp/index.php/User/Supply/del?sid=<?php echo ($serson["id"]); ?>"><img src="/tp/Public/ico/edit.jpg" width="32" height="32"/></a></td>
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
</html>