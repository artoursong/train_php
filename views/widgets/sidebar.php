<?php 
	global $obMediaFiles;
	array_push($obMediaFiles['css'], "media/css/sidebar.css");
?>
<div class="list-group">
	<a href="#" class="list-group-item active">
		<h4 class="list-group-item-heading">Management students</h4>
	</a>
	<a href="<?php echo html_helpers::url(array('ctl'=>'students')); ?>" class="list-group-item">List all students</a>
	<a href="<?php echo html_helpers::url(array('ctl'=>'students', 'act'=>'add')); ?>" class="list-group-item">Add new student</a>
</div>
