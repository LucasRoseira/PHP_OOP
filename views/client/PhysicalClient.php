<?php 

//Extends -> this is a child class, thus, inherit everything of the parent class
class PhisicalClient extends Client 
{ //PSR recommends that you put the bracket in the next line https://www.php-fig.org/psr/
	public string $name;
	public string $cpf;

	//Using lower case for function and using capital letter for the class
	public function seeUserInfo() {

	}
}

?>