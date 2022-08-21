<?php 

class Client {
	public $street;
	public $neighborhood;

	public function seeAdress() :string{
		// we can use the attributes anywhere in the class
		return "<p>Address: {$this->street} <br> Neighborhood: {$this->neighborhood}</p>";
		//don't forget semicolon... Parse error: syntax error, unexpected '}', expecting ';' in C:\xampp\htdocs\poo php\views\client\Client.php on line 10
	}
}

