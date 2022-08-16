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

			//third - how to create a class and the method to list registers from the database
			require 'list_users.php';

			//second - how to use methods and attributes with PHP
			die();
			require 'Users2.php';
			$users2 = new Users2();
			//we're passing the parameters to the method register and printing the result
			echo $users2->register("Lucas", "lucas.roseira@fatec.sp.gov.br", "IT support", 26);

			die();
			//I'm killing the page here just to reuse the structure because the below code is the first one.

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