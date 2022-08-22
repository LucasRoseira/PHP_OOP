<?php 

class Overdraft extends Check 
{
	public function calculateInterest(): string 
	{
		$amountWithInterest = (0.40 * $this->amount) + $this->amount;
		$amountConvReal = $this->convertReal($amountWithInterest);
		return ("Check amount {$this->type} without interest US$ {$this->convertReal($this->amount)} and with ".
			"amount US$ {$amountWithInterest} <br>");
	}


}
?>
