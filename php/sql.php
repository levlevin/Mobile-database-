<?php

	$server = "localhost"; //Your MySQL Server
	$user = "root"; //Your MySQL username
	$pass = ""; //Password
	$name = "mobile";

	$conn = mysql_connect($server, $user, $pass); //Connect to ther server
	if($conn) {
		$db = mysql_select_db($name); //Select the database
/*
$dbConnection = new PDO('mysql:dbname=mobile;host=localhost;charset=utf8', 'root', '');

$dbConnection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
*/

		if(!$db) { //If it can't select the database
			echo "There was an error, sorry! :("; //Show an error message
			exit(); //Cancel any more PHP scripts
		}
	}
?>