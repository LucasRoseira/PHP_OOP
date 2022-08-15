<?php

class User {
	public String $name;
	public int $age;
	// public int $email;  just forcing an error, e-mail isn't an integer value
	public String $email;
	public $occupation; 

	public function register($name, $email, $occupation, $age) {
		//We used this because it's a pseudo class used to instanciate the attribute
		$this->name = $name;
		$this->age = $age;
		$this->email = $email;
		$this->occupation = $occupation;

		//We use . (dot) to concatenate strings in php, but we could use this form too = {this->} 
		return "The user <strong> &nbsp;" . 
		$this->name . "&nbsp;</strong> has the e-mail <strong> &nbsp; 
		{$this->email }&nbsp; </strong> and works like a(n) <strong> &nbsp;" . 
		$this->occupation ."</strong> and has {$this->age} years old"; 
	}
}