<?php 
$params = (isset($this->record))? array('id'=>$this->record['id']):'';
?>
<form method="post" enctype="multipart/form-data" action="<?php echo html_helpers::url(
		array('ctl'=>'products', 
			  'act'=>$this->action, 
			  'params'=>$params
)); ?>">
  <div class="row mb-3">
    <label for="fullname" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input name="data[<?php echo $this->controller; ?>][name]" type="text" class="form-control" id="name" placeholder="name" <?php echo (isset($this->record))? "value='".$this->record['name']."'":""; ?>>
    </div>
  </div>
  <div class="row mb-3">
    <label for="address" class="col-sm-2 col-form-label">Producer</label>
    <div class="col-sm-10">
      <input name="data[<?php echo $this->controller; ?>][producer]" type="text" class="form-control" id="producer" placeholder="producer" <?php echo (isset($this->record))? "value='".$this->record['producer']."'":""; ?>>
    </div>
  </div>
  <div class="row mb-3">
    <label for="phone" class="col-sm-2 col-form-label">Category</label>
    <div class="col-sm-10">
      <input name="data[<?php echo $this->controller; ?>][category]" type="text" class="form-control" id="category" placeholder="category" <?php echo (isset($this->record))? "value='".$this->record['category']."'":""; ?>>
    </div>
  </div>
  <div class="row mb-3">
    <label for="class" class="col-sm-2 col-form-label">Price</label>
    <div class="col-sm-10">
    <input name="data[<?php echo $this->controller; ?>][price]" type="text" class="form-control" id="price" placeholder="price" <?php echo (isset($this->record))? "value='".$this->record['price']."'":""; ?>>
    </div>
  </div>
  <div class="row mb-3">
    <label for="class" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-10">
      <input name="data[<?php echo $this->controller; ?>][description]" type="text" class="form-control" id="description" placeholder="description" <?php echo (isset($this->record))? "value='".$this->record['description']."'":""; ?>>
    </div>
  </div>
  <div class="row mb-3">
    <label for="photo" class="col-sm-2 col-form-label">Photo</label>
    <div class="col-sm-10 image-upload">
      <input name="image" type="file" class="form-control" id="photo" placeholder="photo">
	  <?php if (isset($this->record)): ?>
		<img src="<?php echo "media/upload/" .$this->controller.'/'.$this->record['photo']; ?>" alt="<?php echo $this->record['name']; ?>" class="img-thumbnail">
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
