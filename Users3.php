<?php

require 'Conn.php';

class Users3 {
	public $connect;

	public function list() {
		$conn = new Conn();

		$this->connect = $conn->connect();
		return "List users";
	}
}

?>