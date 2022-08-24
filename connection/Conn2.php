<?php

class Conn2{
	public string $db = "mysql";
	public string $host = "localhost";
	public string $user = "root";
	public string $pass = "";
	public string $dbname = "lucas2";
	public object $connectDb;

	public function connectDb() 
	{
		try {
			$this->connectDb = new PDO($this->db . ':host=' . $this->host . ';dbname=' .
				$this->dbname, $this->user, $this->pass);
			return $this->connectDb;

		} catch (Exception $err) {
			echo "Error: Unsuccessful connection with database. Error: " . $err->getMessage();
		}
	}
}

?>