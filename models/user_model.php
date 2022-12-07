<?php
class user_model extends main_model {

	public function createTable() {
		// sql to create table
		$sql = "CREATE TABLE users (
			user_id 			INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			nickname			VARCHAR(255) NOT NULL,
			email				VARCHAR(555) NOT NULL,
			facebook_token 		VARCHAR(255) NOT NULL,
			google_token		VARCHAR(255) NOT NULL,
			hashed_password		VARCHAR(555) NOT NULL,
			signup_url	 		VARCHAR(255) NOT NULL,
			signup_referer_url	VARCHAR(63) NOT NULL,
			signup_device		VARCHAR(63) NOT NULL,
			signup_ip		 	VARCHAR(63) NOT NULL,
			credit				BIGINT(16)	DEFAULT	0,
			account_enabled		BOOLEAN NOT NULL DEFAULT FALSE,
			account_creation 	DATETIME DEFAULT CURRENT_TIMESTAMP
		)";

		$result = $this->con->query($sql);
		return $result;
	}
}
?>
