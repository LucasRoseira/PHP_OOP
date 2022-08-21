<?php

class LegalEntity extends Client
{
	public int $cnpj;
	public string $fantasyName;

	public function seeCompanyInfo(){
		$data = "Company adress<br>";		
		$data .= "Adress:{$this->street}<br>";
		$data .= "Neighborhood{$this->neighborhood}<br>";
		$data .= "Fantasy Name:{$this->fantasyName}<br>";
		$data .= "CNPJ:{$this->cnpj}<br>";

		 //Fatal error: Uncaught Error: Typed property LegalEntity::$fantasyName must not be accessed before initialization in C:\xampp\htdocs\poo php\views\client\LegalEntity.php:12 Stack trace: #0 C:\xampp\htdocs\poo php\index.php(46): LegalEntity->seeCompanyInfo() #1 {main} thrown in C:\xampp\htdocs\poo php\views\client\LegalEntity.php on line 12

		return "<p>$data</p>";
	}
}

?>