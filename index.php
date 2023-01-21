<?php

session_start();


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="assets/css/index.css">
	<script type="text/javascript" src="assets/js/index.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  
	<title> Celke - Classes, Objects, Methods and Attributes</title>
</head>

<body>
	<header>

	</header>
	<main>
		<div>

			<?php

			/*we've to call the other file that contains our class*/
			require 'connection/Conn2.php';
			require 'views/users/User.php';

			/*'new' is a reserved word so you can't use it.*/
			echo '
			<a href="views/users/create.php">
				<button>Register</button>
			</a><br>';

			if (isset($_SESSION['msg'])) {
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}

			/*when we call the method it'll simply return the phrase*/

			?>
			<?php
			//eight - creating records from the database using inheritance

			//seven - how to use inheritance to create records (I need to create another index for this)
			// require 'views/users/User.php';

			// $result_users = $listUsers->list();

			// foreach ($result_users as $row_user) {
			// 	//var_dump($row_user);
			// 	extract($row_user);

			// 	//echo "ID: " . $row_user['id'] . "<br>";
			// 	echo "ID: $id <br>";

			// 	//echo "Nome: " . $row_user['name'] . "<br>";
			// 	echo "Nome: $name <br>";

			// 	//echo "E-mail: " . $row_user['email'] . "<br>";
			// 	echo "E-mail: $email <br>";

			// 	echo "<a href='views/users/view.php?id=$id'> View </a></br>";
			// 	echo "<hr>";
			// }

			//six - how to use inheritance to list database records
			require 'connection/Conn1.php';
			require 'views/users/ListUsersInheritance.php';

			$listUsers = new User();
			$listUsers->list();
			$result_users = $listUsers->list();

			foreach ($result_users as $row_user) {
				//var_dump($row_user);
				extract($row_user);

				//echo "ID: " . $row_user['id'] . "<br>";
				echo "ID: $id <br>";

				//echo "Name: " . $row_user['name'] . "<br>";
				echo "Name: $name <br>";

				//echo "E-mail: " . $row_user['email'] . "<br>";
				echo "E-mail: $email <br>";

				//echo "Created: " . $row_user['created'] . "<br>";
				echo "Created: $created <br>";

				echo "<a href='views/users/view.php?id=$id'>Visualizar</a><br>";

				echo "<hr>";
			}

			die();
			//five - abastract class
			require 'views/check/Check.php';
			require 'views/check/RegularCheck.php';
			require 'views/check/Overdraft.php';

			//Abstract class cannot be instantiated
			//$check = new Check(207.27, "regular");
			//$msg = $check->seeValue();
			//echo $msg;

			$regularCheck = new RegularCheck(307.90, 'regular');
			$msgRegularCheck = $regularCheck->calculateInterest();
			echo $msgRegularCheck;

			$overdraft = new Overdraft(407.80, 'overdraft');
			$msgOverdraft = $overdraft->calculateInterest();
			echo $msgOverdraft;


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
			require 'views/users/user4.php';

			//second - how to use methods and attributes with PHP

			require 'views/users/Users2.php';
			$users2 = new Users2();
			//we're passing the parameters to the method register and printing the result
			echo $users2->register("Lucas", "lucas.roseira@fatec.sp.gov.br", "IT support", 26);

			?>


		</div>
	</main>
	<footer>
		<p>Lucas Gomes Roseira, <?php echo date("Y"); ?> </p>
	</footer>

</body>

</html>