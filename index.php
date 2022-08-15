<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset = "UTF-8">
	<link rel="stylesheet" type="text/css" href="assets/index.css">

	<title> Celke - Classes, Objects, Methods and Attributes</title>
</head>

<body> 
	<header></header>
	<main>
		<div>

			<?php

			//third
			require 'index2.php';
			die();

			//second.
			require 'Users2.php';
			$users2 = new Users2();
			//we're passing the parameters to the method register and printing the result
			echo $user2->register("Lucas","lucas.roseira@fatec.sp.gov.br","IT support", 26);
			

			//I'm killing the page here just to reuse the structure because the below code is the first one.
			die();
			?>

			<?php 
			/*we've to call the other file that contains our class*/
			require 'Users.php';

			/*'new' is a reserved word so you can't use it.*/
			$users = new Users();

			/*when we call the method it'll simply return the phrase*/
			$msg = $users->register();
			echo $msg;
			?>
		</div>
	</main>
	<footer>
		
	</footer>
</body>
</html>
