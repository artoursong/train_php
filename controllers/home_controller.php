<?php
class home_controller extends main_controller {
	public function index() {
		$user = user_model::getInstance();
		$this->tables = $user->getAllTables();
		$this->display();
	}
}
?>
