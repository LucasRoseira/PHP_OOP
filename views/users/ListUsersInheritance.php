<?php 

class ListUsersInheritence extends Conn1 
{
	public object $conn;

	public function list() :array
	{
		$this->conn = $this->connectDb();
		$query_users = "SELECT id, name, email, created FROM users ORDER BY id DESC LIMIT 40";
		$result_users = $this->conn->prepare($query_users);
		$result_users->execute();
		$returned = $result_users->fetchAll(); //fetchAll : reading all values
		//print_r($returned);
		return $returned;
		//var_dump($this->conn);
	}
}
?>
