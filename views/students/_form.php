<?php 
$params = (isset($this->record))? array('id'=>$this->record['id']):'';
?>
<form method="post" enctype="multipart/form-data" action="<?php echo html_helpers::url(
		array('ctl'=>'students', 
			  'act'=>$this->action, 
			  'params'=>$params
)); ?>">
  <div class="row mb-3">
    <label for="fullname" class="col-sm-2 col-form-label">Full Name</label>
    <div class="col-sm-10">
      <input name="data[<?php echo $this->controller; ?>][fullname]" type="text" class="form-control" id="fullname" placeholder="fullname" <?php echo (isset($this->record))? "value='".$this->record['fullname']."'":""; ?>>
    </div>
  </div>
  <div class="row mb-3">
    <label for="address" class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-10">
      <input name="data[<?php echo $this->controller; ?>][address]" type="text" class="form-control" id="address" placeholder="address" <?php echo (isset($this->record))? "value='".$this->record['address']."'":""; ?>>
    </div>
  </div>
  <div class="row mb-3">
    <label for="phone" class="col-sm-2 col-form-label">Phone</label>
    <div class="col-sm-10">
      <input name="data[<?php echo $this->controller; ?>][phone]" type="text" class="form-control" id="phone" placeholder="phone" <?php echo (isset($this->record))? "value='".$this->record['phone']."'":""; ?>>
    </div>
  </div>
  <div class="row mb-3">
    <label for="class" class="col-sm-2 col-form-label">Class</label>
    <div class="col-sm-10">
      <input name="data[<?php echo $this->controller; ?>][classname]" type="text" class="form-control" id="class" placeholder="class" <?php echo (isset($this->record))? "value='".$this->record['classname']."'":""; ?>>
    </div>
  </div>
  <div class="row mb-3">
    <label for="photo" class="col-sm-2 col-form-label">Photo</label>
    <div class="col-sm-10 image-upload">
      <input name="image" type="file" class="form-control" id="photo" placeholder="photo">
	  <?php if (isset($this->record)): ?>
		<img src="<?php echo "media/upload/" .$this->controller.'/'.$this->record['photo']; ?>" alt="<?php echo $this->record['fullname']; ?>" class="img-thumbnail">
	  <?php endif; ?>
    </div>
  </div>
  <div class="row mb-3">
    <div class="offset-sm-2 col-sm-10">
      <button name="btn_submit" type="submit" class="btn btn-primary"><?php echo ucwords($this->action); ?></button>
    </div>
  </div>
</form>
<?php global $mediaFiles; ?>
<?php array_push($mediaFiles['js'], RootREL."media/js/jquery.min.js"); ?>
<?php array_push($mediaFiles['js'], RootREL."media/js/form.js"); ?>
