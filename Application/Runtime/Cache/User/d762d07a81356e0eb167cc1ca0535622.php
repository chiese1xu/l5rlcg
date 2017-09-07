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
<tr><td>编号</td><td>姓名</td><td>年龄</td><td>性别</td>
<td>护理级别</td><td>几号楼</td><td>房间号</td>
<td>床位号</td><td>业务管理员</td><td>医生</td>
<td>护理员</td><td>营养师</td><td>康复师</td><td>入住日期</td>
<td>删除</td></tr>
<?php if(is_array($personlist)): $i = 0; $__LIST__ = $personlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$person): $mod = ($i % 2 );++$i;?><tr>
	<td><?php echo ($person["id"]); ?></a></td>
	<td><a href="/tp/index.php/User/Dealer/edit?pid=<?php echo ($person["id"]); ?>"><?php echo ($person["name"]); ?></a></td>
	<td><?php echo ($person["age"]); ?></td>
	<td><?php echo ($person["gender"]); ?></td>
	<td><?php echo ($person["carename"]); ?></td>
	<td><?php echo ($person["building"]); ?></td>
	<td><?php echo ($person["room"]); ?></td>
	<td><?php echo ($person["bed"]); ?></td>
	<td><?php echo ($person["dealername"]); ?></td>
	<td><?php echo ($person["doctorname"]); ?></td>
	<td><?php echo ($person["nursename"]); ?></td>
	<td><?php echo ($person["chiefname"]); ?></td>
	<td><?php echo ($person["coachname"]); ?></td>
	<td><?php echo ($person["startdate"]); ?></td>
	<td><a href="/tp/index.php/User/Dealer/remove?pid=<?php echo ($person["id"]); ?>"><img src="/tp/Public/ico/del.jpg" width="32" height="32"/></a></td>	
</tr><?php endforeach; endif; else: echo "" ;endif; ?>
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
</html>