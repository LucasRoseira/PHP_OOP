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

	if(!empty($id)) {
		require 'User.php';

		$viewUser = new User();
		$viewUser->id = $id;
		
		echo "User ID: $id<br>";
	} else {
		$_SESSION['msg'] = "<p class='red'>User didn't found!</p>";
		header("Location: index.php");
	}


	?>
</body>
</html>