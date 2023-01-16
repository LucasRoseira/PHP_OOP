<?php
//including the file
require './views/users/Users3.php';

//instantiating and creating the object $listUsers
$listUsers = new Users3();

//instanciating the method list
$result_users = $listUsers->list();

foreach ($result_users as $row_user) {
	//var_dump($row_user);
	extract($row_user);
	echo "<strong>User ID </strong>" . $id . " <br> ";
	echo "<strong>Name </strong>" . $name . " <br> ";
	echo "<strong>Email </strong>" . $email . " <br> ";
	echo "<strong>Occupation </strong>" . $occupation . " <br> ";
	echo "<hr>";
}
