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
		
		return "<p>$data</p>";
	}
}

?>