<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>main</title>
	<link rel="stylesheet" href="/tp/Public/css/bootstrap.css">
	<link rel="stylesheet" href="/tp/Public/css/tablemain.css">
	<link rel="stylesheet" href="/tp/Public/bootstrap-datepicker-1.4.0-dist/css/bootstrap-datepicker.css">
</head>
<style>
.red{
	color:red;
}
</style>
<body>
<table class="table table-stripe">	
<form role="form" method="get" enctype="multipart/form-data" action="/tp/index.php/Test/Survey/submit">
	<div class="form-group text-center">
		<label >
			<h1><?php echo ($datalist[0]["surveymain"]["name"]); ?></h1>
		</label>
	</div>
	<div class="form-group">	
		<label>
			起始时间：<?php echo ($datalist[0]["surveymain"]["startdate"]); ?>
		</label>
	</div>
	<div class="form-group">
		<label>
			截止时间：<?php echo ($datalist[0]["surveymain"]["enddate"]); ?>
		</label>
	</div>
	<?php if(is_array($datalist)): $i = 0; $__LIST__ = $datalist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><div class="form-group">
			<label><?php echo ($data["number"]); ?>、</label>
			<label><?php echo ($data["title"]); ?></label>
		</div>
		<?php switch($data["type"]): case "单选": ?><div class="form-group">
				<?php if(is_array($data["surveyoption"])): $i = 0; $__LIST__ = $data["surveyoption"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$op): $mod = ($i % 2 );++$i; if(is_array($answerlist)): $i = 0; $__LIST__ = $answerlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$answer): $mod = ($i % 2 );++$i; if(($answer['questionid'] == $data['id'])): if(($answer['optionid'] == $op['optionid'])): ?><label class="checkbox-inline red">
									<input type="radio" name="q<?php echo ($data["id"]); ?>" value="<?php echo ($op["optionid"]); ?>" checked="true"><?php echo ($op["option"]); ?>
								</label>
							<?php else: ?>
								<label class="checkbox-inline">
									<input type="radio" name="q<?php echo ($data["id"]); ?>" value="<?php echo ($op["optionid"]); ?>"><?php echo ($op["option"]); ?>					
								</label><?php endif; ?>
						<?php else: endif; endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
			</div><?php break;?>
		<?php case "多选": ?><div class="form-group">				
				<?php if(is_array($data["surveyoption"])): $i = 0; $__LIST__ = $data["surveyoption"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$op): $mod = ($i % 2 );++$i; $issame = '0'; ?>
					<?php if(is_array($answerlist)): $i = 0; $__LIST__ = $answerlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$answer): $mod = ($i % 2 );++$i; if(($answer['questionid'] == $data['id']) AND ($answer['optionid'] == $op['optionid'])): $issame = '1'; ?>
							<label class="checkbox-inline red">
								<input type="checkbox" name="q<?php echo ($data["id"]); ?>" value="<?php echo ($op["optionid"]); ?>" checked="true"><?php echo ($op["option"]); ?>					
							</label>											
						<?php elseif(($answer['questionid'] == $data['id']) AND ($issame == '0')): ?>
							<?php $issame = '-1'; ?>	
						<?php else: endif; endforeach; endif; else: echo "" ;endif; ?>
					<?php if($issame == '-1'): ?><label class="checkbox-inline">
							<input type="checkbox" name="q<?php echo ($data["id"]); ?>" value="<?php echo ($op["optionid"]); ?>"><?php echo ($op["option"]); ?>					
						</label>							
					<?php else: endif; endforeach; endif; else: echo "" ;endif; ?>
			</div><?php break;?>
		<?php default: ?><!--文字-->
			<div class="form-group">
				<?php if(is_array($answerlist)): $i = 0; $__LIST__ = $answerlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$answer): $mod = ($i % 2 );++$i; if(($answer['questionid'] == $data['id'])): ?><label class="checkbox-inline red">答：<?php echo ($answer["text"]); ?></label>
					<?php else: endif; endforeach; endif; else: echo "" ;endif; ?>
			</div><?php endswitch; endforeach; endif; else: echo "" ;endif; ?>
	<div class="form-group">
		<label>
			<input type="submit" value="提交答案">
		</label>
	</div>
</form>
</table>
</body>
</html>
								<!--
								<label class="checkbox-inline red">
									<input type="checkbox" name="q<?php echo ($data["id"]); ?>" value="<?php echo ($op["optionid"]); ?>" checked="true"><?php echo ($op["option"]); ?>A
								</label>
								-->