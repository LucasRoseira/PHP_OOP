<!DOCTYPE html>
<html>

<head>
	<title>Create User</title>
</head>

<body>
	<nav>
		<a href="../../index.php">List</a><br>

		<h1>List Users</h1>
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
			echo "<p>User registered!</p>";
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

</body>

</html>