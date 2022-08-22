<?php

class Conn {
	//we're creating the attributes to connect with MySql, it's a connection string

	public $host = "localhost";
	public $user = "root";
	public $pass = "";
	public $dbname = "lucas"; //public $dbaname = "lucas"; Notice: Undefined property: Conn::$dbname in C:\xampp\htdocs\poo php\Conn.phpon line 18
	public $port = 3306; //the port isn't required everytime
	public $connect = null; //by default, starts empty

	public function connect () {
		try {
			/*/*I'm using PDO(PHP Data Objects) to improve my skills, but it's better to use Laravel, Magento, Drupal, Zend, or WordPress for real projects or you can use any other languages and it's frameworks.
			*/
			$this->connect = new PDO("mysql:host=" . $this->host .";dbname="
			 . $this->dbname, $this->user, $this->pass); //the port was removed and it's working
	
			echo "Successful connection with database!<br>";
			return $this->connect;

		} catch (Exception $e) {
			echo "Error: Unsuccessful connection with database!";
			return false;
		}
	}
}
