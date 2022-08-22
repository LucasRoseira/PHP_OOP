<?php

class RegularCheck extends Check 
{
	public function calculateInterest(): string
	{
		$amountWithInterest = (0.20 * $this->amount) + $this->amount;
		$amountConvReal = $this->convertReal($amountWithInterest);

		//Array and string offset access syntax with curly braces is no longer supported in C:
		return ("Check amount {$this->type} without interest US$ {$this->convertReal($this->amount)} and with ".
			"amount US$ {$amountWithInterest} <br>");
	}
}

?>