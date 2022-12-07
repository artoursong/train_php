<?php
class products_controller extends main_controller
{
	//public $components = array('SimpleImage');
	public function index() {
		$products = products_model::getInstance();
		$this->records = $products->getAllRecords();
		$this->display();
	} 

	public function add() {
		if(isset($_POST['btn_submit'])) {
			$productData = $_POST['data'][$this->controller];
			if(!empty($productData['name']))  {
				$productData['photo'] = SimpleImage_Component::uploadImg($_FILES, $this->controller);
				$product = products_model::getInstance();
				if($product->addRecord($productData))
					header( "Location: ".html_helpers::url(array('ctl'=>'products')));
			}
		}
		$this->display();
	}

	public function edit($id) {
		$product = products_model::getInstance();
		$record = $product->getRecord($id);
		$this->setProperty('record',$record);
		if(isset($_POST['btn_submit'])) {
			$productData = $_POST['data'][$this->controller];
			if(!empty($productData['name']))  {
				if(isset($_FILES) and $_FILES["image"]["name"]) {
					if(file_exists(UploadREL .$this->controller.'/'.$record['photo']))
						unlink(UploadREL .$this->controller.'/'.$record['photo']);
					$productData['photo'] = SimpleImage_Component::uploadImg($_FILES, $this->controller);
				}
				if($product->editRecord($id, $productData))
					header( "Location: ".html_helpers::url(array('ctl'=>'products')));
			}
		}
		$this->display();
	}
	
	public function view($id) 
	{
		$products = products_model::getInstance();
		$record = $products->getRecord($id);
		$this->setProperty('record',$record);
		$this->display();
	}
	
	public function del($id) 
	{
		$product = products_model::getInstance();
		$record = $product->getRecord($id);
		if(file_exists(RootURI."/media/upload/" .$this->controller.'/'.$record['photo']))
			unlink(RootURI."/media/upload/" .$this->controller.'/'.$record['photo']);
			
		echo $product->delRecord($id);
		exit();
		//$product->delRecord($id);
		//header( "Location: ".html_helpers::url(array('ctl'=>'products')));
	}
}
?>
