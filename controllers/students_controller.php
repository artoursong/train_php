<?php
class students_controller extends main_controller
{
	//public $components = array('SimpleImage');
	public function index() {
		$students = student_model::getInstance();
		$this->records = $students->getAllRecords();
		$this->display();
	} 

	public function add() {
		if(isset($_POST['btn_submit'])) {
			$studentData = $_POST['data'][$this->controller];
			if(!empty($studentData['fullname']))  {
				$studentData['photo'] = SimpleImage_Component::uploadImg($_FILES, $this->controller);
				$student = student_model::getInstance();
				if($student->addRecord($studentData))
					header( "Location: ".html_helpers::url(array('ctl'=>'students')));
			}
		}
		$this->display();
	}

	public function edit($id) {
		$student = student_model::getInstance();
		$record = $student->getRecord($id);
		$this->setProperty('record',$record);
		if(isset($_POST['btn_submit'])) {
			$studentData = $_POST['data'][$this->controller];
			if(!empty($studentData['fullname']))  {
				if(isset($_FILES) and $_FILES["image"]["name"]) {
					if(file_exists(UploadREL .$this->controller.'/'.$record['photo']))
						unlink(UploadREL .$this->controller.'/'.$record['photo']);
					$studentData['photo'] = SimpleImage_Component::uploadImg($_FILES, $this->controller);
				}
				if($student->editRecord($id, $studentData))
					header( "Location: ".html_helpers::url(array('ctl'=>'students')));
			}
		}
		$this->display();
	}
	
	public function view($id) 
	{
		$student = student_model::getInstance();
		$record = $student->getRecord($id);
		$this->setProperty('record',$record);
		$this->display();
	}
	
	public function del($id) 
	{
		$student = student_model::getInstance();
		$record = $student->getRecord($id);
		if(file_exists(RootURI."/media/upload/" .$this->controller.'/'.$record['photo'])) unlink(RootURI."/media/upload/" .$this->controller.'/'.$record['photo']);
		echo $student->delRecord($id);
		exit();
	}
}
?>
