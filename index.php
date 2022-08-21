<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="assets//css/index.css">
	<script type="text/javascript" src="assets/js/index.js"></script>

	<title> Celke - Classes, Objects, Methods and Attributes</title>
</head>

<body>
	<header></header>
	<main>
		<div>
			<?php

			//four - how to use oop inheritance 
			require 'views/client/Client.php';
			require 'views/client/PhysicalClient.php';
			require 'views/client/LegaLEntity.php';

			$client = new Client();
			$client->street = "Birmingham street";
			$client->neighborhood = "Kingston";
			$msg = $client->seeAdress();
			echo $msg;
			echo '<hr>';

			$physicalC = new PhisicalClient();
			$physicalC->street = "Birmingham street 2";
			$physicalC->neighborhood = "Kingston";
			$physicalC->name = "jonas";
			$physicalC->cpf = 12345678;
			$msgPc = $physicalC->seeUserInfo();
			echo $msgPc;

			//Don't forget to require the file class ---> Fatal error: Uncaught Error: Class 'PshysicalClient' not found in C:\xampp\htdocs\poo php\index.php:27 Stack trace: #0 {main} thrown in C:\xampp\htdocs\poo php\index.php on line 27
			echo '<hr>';


			$legalEntity = new LegalEntity();
			$legalEntity->street = "Birmingham street 3";
			$legalEntity->neighborhood = "Kingston 3";
			$legalEntity->fantasyName = "jonas";
			$legalEntity->cnpj = 1204894100002;
			$msgLe = $legalEntity->seeCompanyInfo();
			echo $msgLe;

			echo '<hr>';

		 	// $legalEntity->name = "jonas"; ----->   Fatal error: Uncaught Error: Typed property LegalEntity::$fantasyName must not be accessed before initialization in C:\xampp\htdocs\poo php\views\client\LegalEntity.php:12 Stack trace: #0 C:\xampp\htdocs\poo php\index.php(46): LegalEntity->seeCompanyInfo() #1 {main} thrown in C:\xampp\htdocs\poo php\views\client\LegalEntity.php on line 12


			//third - how to create a class and the method to list registers from the database
			require 'views/users/list_users.php';

			//second - how to use methods and attributes with PHP

			require 'views/users/Users2.php';
			$users2 = new Users2();
			//we're passing the parameters to the method register and printing the result
			echo $users2->register("Lucas", "lucas.roseira@fatec.sp.gov.br", "IT support", 26);


			//I'm killing the page here just to reuse the structure because the below code is the first one.

			?>

			<?php
			/*we've to call the other file that contains our class*/
			require 'views/users/Users.php';

			/*'new' is a reserved word so you can't use it.*/
			$users = new Users();

			/*when we call the method it'll simply return the phrase*/
			$msg = $users->register();
			echo $msg;

			?>
		</div>
	</main>
	<footer>
		<p>Lucas Gomes Roseira, <?php echo date("Y"); ?> </p>
	</footer>

</body>

</html>