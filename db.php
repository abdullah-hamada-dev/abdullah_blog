<?php

function new_php_db_connection(){
	// Enter your Host, username, password, database below.
	// I left password empty because i do not set password on localhost.
	$connection = mysqli_connect(NEW_PHP_DB_HOST, NEW_PHP_DB_USER, NEW_PHP_DB_PASSWORD, NEW_PHP_DB_NAME);
	// Check connection
	if (mysqli_connect_errno()){
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  die();
	}
	return $connection;
}

function new_php_db_query($query){
	$connection = new_php_db_connection();
	$result = $connection->query($query);
	$connection->close();
	return $result;
}
