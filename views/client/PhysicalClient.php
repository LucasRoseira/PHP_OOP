<?php 

//Extends -> this is a child class, thus, inherit everything of the parent class
class PhisicalClient extends Client 
{ //PSR recommends that you put the bracket in the next line https://www.php-fig.org/psr/
	public string $name;
	public int $cpf;

	//Using lower case for function and using capital letter for the class
	public function seeUserInfo() {
		$data = "Physical client adress<br>";
		$data .= "Adress:{$this->street}<br>";
		$data .= "Neighborhood{$this->neighborhood}<br>";
		$data .= "Name:{$this->name}<br>";
		$data .= "CPF:{$this->cpf}<br>";

		return "<p>$data</p>";
	}
}

?>