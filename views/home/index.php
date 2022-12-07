<?php include_once 'views/layout/'.$this->layout.'header.php'; ?>
<div class="content">
	<h1>This is home page of Fountain test</h1><br/>
	<p>You will be asked to answer the following questions when submitting a proposal:<br/><br/>
	<ol>
		<li>Please create the first 2 tables of the attached brief by using Object-oriented PHP. DO NOT WRITE SQL CODE. Write the php OOP class that will enable to get/set every property of the table. Applications without this question answered will not be considererd</li>
		<li>Do you have suggestions to make this project run successfully?</li>
	</ol>
	</p>
	<hr>
	<h2>List tables</h2>
	<?php $usertables = [];  ?>
	<?php if(count($this->tables)) { ?>
		<ol>
		<?php foreach($this->tables as $table) { ?>
			<li><a href="<?php echo html_helpers::url(['ctl'=>'tables', 'act'=>'getfields', 'params'=>['table'=>$table]]); ?>"><?php echo $table ?></a></li>
			<?php if($table == 'users' || $table == 'activity_user') array_push($usertables,$table);	; ?>
		<?php } ?>
		</ol>
		<?php if(!count($usertables)) { ?>
			<p> There are no users & activity_user tables added, please <a href="<?php echo html_helpers::url(['ctl'=>'tables', 'act'=>'create']); ?>">click here</a> to add 2 tables <strong>users</strong> & <strong>user_activity</strong> </p>
		<?php } ?>
	<?php } else {?>
		<p> There are no table added, please <a href="<?php echo html_helpers::url(['ctl'=>'tables', 'act'=>'create']); ?>">click here</a> to add 2 tables <strong>users</strong> & <strong>user_activity</strong> </p>
	<?php } ?>
</div>
<?php include_once 'views/layout/'.$this->layout.'footer.php'; ?>
