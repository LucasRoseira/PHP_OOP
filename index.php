<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset = "UTF-8">
	<link rel="stylesheet" type="text/css" href="assets/index.css">

	<title> Celke - Classes and Objects</title>
</head>

<body> 
	<header></header>
	<main>
		<div>
			<?php

			require 'user2.php';
			$user = new User();
			//we're passing the parameters to the method register and printing the result
			echo $user->register("Lucas","lucas.roseira@fatec.sp.gov.br","IT support", 26);
		

			//I'm killing the page here just to reuse the structure because the below code is the first one.
			die();
			?>

			<?php 
			/*we've to call the other file that contains our class*/
			require 'user.php';

			/*'new' is a reserved word so you can't use it.*/
			$user = new User();

			/*when we call the method it'll simply return the phrase*/
			$msg = $user->register();
			echo $msg;
			?>
		</div>
	</main>

</body>
</html>
