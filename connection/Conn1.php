<?php

class Conn1{
	public string $db = "mysql";
	public string $host = "localhost";
	public string $user = "root";
	public string $pass = "";
	public string $dbname = "lucas2";
	public int $port = 3306; //Verify with server if you need to use the port.
	public object $connect;

	public function connect() 
	{
		try {
			$this->connect = new PDO($this->db . ':host=' . $this->host . ';port=' . $this->port . ';dbname=' .
				$this->dbname, $this->user, $this->pass);
			//echo "Successful connection with database!<br>";
			return $this->connect;

		} catch (Exception $err) {
			//die("Error: please, try again. If the problem persist, contact the admin.");
			echo "Error: Unsuccessful connection with database. Error: " . $err->getMessage();
		}
	}
}

?>