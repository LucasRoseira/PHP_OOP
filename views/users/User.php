<?php 

class User extends Conn2 
{
	public object $conn;
	public array $formData;
	public int $id;

	public function list() :array
	{
		$this->conn = $this->connectDb();
		$query_users = "SELECT id, name, email FROM users ORDER BY id DESC LIMIT 40";
		$result_users = $this->conn->prepare($query_users);
		$result_users->execute();
		$returned = $result_users->fetchAll();
		return $returned;

	}

	public function createUser() 
	{
		var_dump($this->formData);
		$this->coonn = $this->connectDb();
		$query_user = "INSERT INTO users (name, email, created) VALUES (:name, :email, NOW())";
		$$add_user = $this->conn->prepare($query_user);
		$addu_user->bindParam(':name', $this->formData['name']);
		$add_user->bindParam(':email', $this->formData['email']);
		$add_user->execute();

		if($add_user->rowCount()) {
			return true;
		} else {
			return false;
		}
	}
}

?>
