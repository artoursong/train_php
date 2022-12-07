<?php 
	global $mediaFiles;
	array_push($mediaFiles['css'], "media/css/about.css");
?>
<?php include_once 'views/layout/'.$this->layout.'header.php'; ?>

<div class="jumbotron clearfix">
	<h1>This is about page of management students system</h1>
	<p>At Website.com, we believe everyone deserves to have a website or online store. Innovation and simplicity makes us happy: our goal is to remove any technical or financial barriers that can prevent business owners from making their own website. We're excited to help you on your journey!</p>
	<div id="animation"> </div>
</div>
<?php array_push($mediaFiles['js'], "media/js/jquery.min.js"); ?>
<?php array_push($mediaFiles['js'], "media/js/about.js"); ?>
<?php include_once 'views/layout/'.$this->layout.'footer.php'; ?>
