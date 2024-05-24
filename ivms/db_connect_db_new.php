<?php

	$server = "localhost";
	$user = "yelloya2_test";
	$pass = "RP#Obav845ya";
	$dbName = "yelloya2_test";
	
	$link = mysqli_connect($server, $user, $pass, $dbName);
	
	if(!$link)
		die("Error".mysqli_error());
	

?>