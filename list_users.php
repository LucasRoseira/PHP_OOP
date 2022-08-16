<?php
	//including the archieve
	require './Users3.php';
	//instantiating and creating the object $listUsers
	$listUsers = new Users3();
	//instanciating the method list
	$result_users = $listUsers->list();
	
	foreach ($result_users as $row_user) {
		var_dump($row_user);
		extract($row_user);
	}
