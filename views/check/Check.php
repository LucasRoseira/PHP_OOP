<?php 
/* 
Abstract methods are declared in a class, but the code for those methods isn't defined in the class.
When an abstract method is declared, the child classes are required to use.
When an abstract method is declared, the class must also be declared as abstract. 
*/

// abastract class Check  --> Parse error: syntax error, unexpected 'class' (T_CLASS) in C:\xampp\htdocs\poo php\views\check\Check.php on line 8

abstract class Check 
{
	//I need to upgrade my PHP version to use __construct.
	public function __construct(public float $amount, public string $type)
	{

	}

	abstract function calculateInterest();

	public function convertReal(float $amount):string
	{
		return number_format($amount, '2', ',', '.');
	}
}
?>
