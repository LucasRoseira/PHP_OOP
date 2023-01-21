<?php
session_start();
ob_start();

//Receiving user ID
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>View User</title>
</head>

<body>
	<nav>
		<a href="../../index.php">List</a><br>
		<a href="create.php">Register</a><br>

		<h1>User Details</h1>
	</nav>

	<?php
	if (isset($_SESSION['msg'])) {
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
	}

	if (!empty($id)) {
		require '../../connection/Conn2.php';
		require 'User.php';

		$viewUser = new User();
		$viewUser->id = $id;
		$valueUser = $viewUser->view();

		//Para ter o visual mais amigável com quebras de linha
		echo '<pre>';
		// var_dump($valueUser);
		print_r($valueUser);
		extract($valueUser);

		echo '</pre>';

		echo "User ID: $id<br>";
		echo "User nome: $name<br>";
		echo "User email: $email<br>";
		echo "User Data de Cadastro:". date('d/m/Y H:i:s', strtotime($created)). " <br>";
		echo "User Editado:" . date('d/m/Y H:i:s', strtotime($modified)). "<br>";
	} else {
		$_SESSION['msg'] = "<p class='red'>User not found!</p>";
		header("Location: index.php");
	}


	?>
</body>

</html>