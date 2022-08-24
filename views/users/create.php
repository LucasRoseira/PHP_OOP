<!DOCTYPE html>
<html>
<head>
	<title>Create User</title>
</head>
<body>
	<nav>	
		<a href="index.php">Listar</a><br>
		<a href="create.php">Cadastrar</a><br>

		<h1>Listar Usuários</h1>
	</nav>

	<?php 	

	require 'connection/Conn2.php';
	require 'views/users/Users.php';

	if (!empty($formData[SendAddUser])) {
		$formData = filter_input_array(INPUT_POST, FILTER_DEFAULT);
		//var_dump($formData);
		$createUser = new User();
		$createUser->formData = $formData;
		$value = $createUser->create();

		if($value){
			$_SESSION['msg'] = "<p style='color: green;'>User registered!</p>";
			header("Location: index.php");
		}else{
			echo "<p style='color: #f00;'>Erro: User not registered!</p>";
		}
	}
	

	?>

	<form name="CreateUser" method="POST" action="">	
		<label>Name:</label>
		<input type="text" name="name" placeholder="Full name" required /><br></br>
		<label>E-mail:</label>
		<input type="email" name="email" placeholder="Email" required /><br></br>

		<input type="submit" name="Register" name="SendAddUser" />
	</form>

</body>
</html>