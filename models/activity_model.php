<?php
class activity_model extends main_model {
	protected $table = 'activity_user';
	
	public function createTable() {
		// sql to create table
		$sql = "CREATE TABLE activity_user (
			activity_id 		INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			user_id				INT(11) NOT NULL,
			event_type			ENUM('login','logoff','ask_advice','credit_added', 'credit_spent', 'email_open', 'email_click', 'email_unsubscribe',  'email_complain', 'email_bounce_hard', 'email_bounce_soft', 'reset_password') ,
			event_datetime 		DATETIME DEFAULT CURRENT_TIMESTAMP
		)";

		$result = $this->con->query($sql);
		return $result;
	}
}
?>
