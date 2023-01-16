<?php

session_start();
ob_start();

?>
<!DOCTYPE html>
<html>

<head>
	<title>Create User</title>
	<link rel="stylesheet" type="text/css" href="../../assets/css/index.css">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

</head>

<body>


	<main>
		<div>
			<nav>
				<a href="../../index.php"><button>List</button></a><br>
				<h1>Create Users</h1>
			</nav>
			<?php

			$formData = filter_input_array(INPUT_POST, FILTER_DEFAULT);
			require '../../connection/Conn2.php';
			require 'User.php';
			$createUser = new User();

			//Don't forget the single quotes --> Fatal error: Uncaught Error: Undefined constant "SendAddUser" in C:\xampp\htdocs\poo php\views\users\create.php:25 Stack trace: #0 {main} thrown in C:\xampp\htdocs\poo php\views\users\create.php on line 25
			if (!empty($formData['SendAddUser'])) {
				var_dump($formData);

				$createUser->formData = $formData;
				$value = $createUser->create();

				if ($value) {
					$_SESSION['msg'] = "<p>User registered!</p>";
					header("Location: ../../index.php");
				} else {
					echo "<p class='red'>Erro: User not registered!</p>";
				}
			}

			?>

			<!-- action is empty because we're sending data to the same page.-->
			<form name="CreateUser" method="POST" action="">
				<label>Name:</label>
				<input type="text" name="name" placeholder="Full Name" required /><br></br>
				<label>E-mail:</label>
				<input type="email" name="email" placeholder="Best Email" required /><br></br>
				<input type="submit" value="register" name="SendAddUser" />
			</form>

		</div>
	</main>

</body>

</html>