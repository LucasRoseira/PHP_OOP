<?php 

class Client {
	public $street;
	public $neighborhood;

	public function seeAdress() :string{
		// we can use the attributes any place in the class
		return "<p>Address: {$this->street} <br> Neighborhood: {$this->neighborhood}</p>";
		//Don't forget the semicolon... Parse error: syntax error, unexpected '}', expecting ';' in C:\xampp\htdocs\poo php\views\client\Client.php on line 10
	}
}

