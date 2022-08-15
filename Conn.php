<?php

class Conn {
	//we're creating the attributes to connect with MySql, it's a connection string

	public $host = "localhost";
	public $user = "root";
	public $pass = "";
	public $dbaname = "lucas";
	public $port = 3306 //the port isn't required everytime
	public $connect = null; //by default, it starts empty

	public function connect () {
		try {
			/*I'm using PDO(PHP Data Objects) to improve my skills, but it's better to use Laravel, Magento, Drupal, Zend, Wordpress for real projects.
			*/
			$this->connect = new PDO("mysql:host=" . $this->host . ";" . ";port=" . $this->port. ";dbname=" . 
				$this->dbname, $this->user, $this->pass);

			echo "Successful connection with database!";
		} catch (Exception $e) {
			echo "Error: Unuseful connection with database!";
		}
	}
}
?>