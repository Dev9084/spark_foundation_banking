<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "Indian_bank";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("you are not connected to Database ".mysqli_connect_error());
	}

?>