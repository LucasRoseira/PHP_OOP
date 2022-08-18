<?php

require 'connection/Conn.php';

class Users3
{
	public $connect;

	public function list()
	{
		//establishing the connection with our database
		$conn = new Conn();
		$this->connect = $conn->connect();

		//We mix PHP commands with SQL here to get data from database
		$query_users = "SELECT id, name, email, occupation FROM users ORDER BY id DESC LIMIT 10";
		$result_users = $this->connect->prepare($query_users);
		$result_users->execute();
		return $result_users->fetchAll();

	}
}
