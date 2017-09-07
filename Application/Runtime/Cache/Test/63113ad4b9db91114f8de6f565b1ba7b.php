<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>main</title>
	<link rel="stylesheet" href="/tp/Public/css/bootstrap.css">
	<link rel="stylesheet" href="/tp/Public/css/tablemain.css">
	<link rel="stylesheet" href="/tp/Public/bootstrap-datepicker-1.4.0-dist/css/bootstrap-datepicker.css">
</head>
<body>
<table class="table table-stripe">	
<form role="form" method="get" enctype="multipart/form-data" action="/tp/index.php/Test/Survey/submit">
	<div class="form-group">
		<label>
			<?php echo ($datalist[0]["surveymain"]["name"]); ?>
		</label>
	</div>
	<?php if(is_array($datalist)): $i = 0; $__LIST__ = $datalist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><div class="form-group">
			<label><?php echo ($data["number"]); ?></label>
			<label><?php echo ($data["title"]); ?></label>
		</div>
		<?php if($data["type"] == '单选'): ?><div class="form-group">
				<?php if(is_array($data["surveyoption"])): $i = 0; $__LIST__ = $data["surveyoption"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$op): $mod = ($i % 2 );++$i;?><label class="checkbox-inline">
						<input type="radio" name="q<?php echo ($data["id"]); ?>" value="<?php echo ($op["optionid"]); ?>"><?php echo ($op["option"]); ?>
					</label><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		<?php elseif($data["type"] == '多选'): ?>
			<div class="form-group">
				<?php if(is_array($data["surveyoption"])): $i = 0; $__LIST__ = $data["surveyoption"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$op): $mod = ($i % 2 );++$i;?><label class="checkbox-inline">
						<input type="checkbox" name="q<?php echo ($data["id"]); ?>" value="<?php echo ($op["optionid"]); ?>"><?php echo ($op["option"]); ?>
					</label><?php endforeach; endif; else: echo "" ;endif; ?>			
			</div>
		<?php else: ?>
			<div class="form-group">
				<label class="checkbox-inline">答：<input type="text" name="q<?php echo ($data["id"]); ?>"></label>
			</div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
	<div class="form-group">
		<label>
			<input type="submit" value="提交答案">
		</label>
	</div>
</form>
</table>
</body>
</html>