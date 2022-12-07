<?php
global $mediaFiles;
array_push($mediaFiles['css'], RootREL.'media/fontawesome/css/all.css');
?>
<?php include_once 'views/layout/'.$this->layout.'header.php'; ?>
<div class="row row-offcanvas row-offcanvas-right">
  <div class="col-xs-12 col-sm-9">
	<div class="table-responsive">
	  <table class="table table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Producer</th>
            <th>Category</th>
            <th>Photo</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
        <?php if($this->records) { ?>
			<?php while($row = mysqli_fetch_array($this->records)) : ?>
			  <tr>
				<td width="5%" scope="row"><?php echo $row['id']; ?></td>
				<td width="15%"><?php echo $row['name']; ?></td>
				<td width="20%"><?php echo $row['producer']; ?></td>
				<td width="20%"><?php echo $row['category']; ?></td>
				<td width="20%"><img src="<?php echo "media/upload/" .$this->controller.'/'.$row['photo']; ?>" alt="<?php echo $row['fullname']; ?>" class="img-thumbnail"></td>
				<td width="20%">
				  <a class="btn btn-outline-info table-link" role="button" href="<?php echo html_helpers::url(
								['ctl'=>'products', 
									  'act'=>'view', 
									  'params'=>array(
										'id'=>$row['id']
										)
								]); ?>">
					<i class="fa fa-eye" aria-hidden="true"></i>
				  </a>
				  <a class="btn btn-outline-warning" role="button" href="<?php echo html_helpers::url(
								array('ctl'=>'products', 
									  'act'=>'edit', 
									  'params'=>array(
										'id'=>$row['id']
								))); ?>">
					<i class="fas fa-edit"></i>
				  </a>
				  <a class="btn btn-outline-danger table-link danger delete" role="button" href="<?php echo html_helpers::url(
								array('ctl'=>'products', 
									  'act'=>'del', 
									  'params'=>array(
										'id'=>$row['id']
								))); ?>" >
					<i class="fas fa-trash"></i>
				  </a>
				</td>
			  </tr>
			<?php endwhile; ?>
		<?php } else { ?>
			  <tr>
				<td colspan="7" scope="row">There are no record!</td>
			  </tr>
		<?php }  ?>
        </tbody>
      </table>
	</div>
  </div>
  <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
	<?php include_once 'views/products/sidebar.php'; ?>
  </div>
</div>

<?php array_push($mediaFiles['js'], RootREL."media/js/jquery.min.js"); ?>
<?php array_push($mediaFiles['js'], RootREL."media/js/products.js"); ?>
<?php include_once 'views/layout/'.$this->layout.'footer.php'; ?>
