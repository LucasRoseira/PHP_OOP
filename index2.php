<?php
	//including the archieve
	require './Users3.php';
	//instantiating and creating the object $listUsers
	$listUsers = new Users3();
	//instanciating the method list
	$result_users = $listUsers->list();

	echo $result_users;

?>