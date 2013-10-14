<?php
	include("sql.php"); //Connect to SQL

	session_start(); //Start session for writing

	function Fix($str) { //Clean the fields
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}

	$errmsg = array(); //Array to store errors
	
	$errflag = false; //Error flag

	$username = Fix($_POST['username']); //Username
	$password = Fix($_POST['password']); //Password

	//Check Username
	if($username == '') {
		$errmsg[] = 'Username missing';
		$errflag = true;
	}

	//Check Password
	if($password == '') {
		$errmsg[] = 'Password missing';
		$errflag = true;
	}


	//If there are input validations, redirect back to the registration form
	if($errflag) {
		$_SESSION['ERRMSG'] = $errmsg;
		session_write_close();
		header("location: /index.php");
		exit();
	}

	//Create SELECT query
	$query = "SELECT * FROM `users` WHERE `Username` = '$username' AND `Password` =  '" . md5($password) . "'";
	/*$query = "SELECT * FROM `users` WHERE `Username` = '$username' AND `Password` = '$password'";*/
	$result = mysql_query($query);
	
	
	//Check whether the query was successful or not
	if(mysql_num_rows($result) == 1) {
		while($row = mysql_fetch_assoc($result)) {
			/*$_SESSION['UID'] = $row['UID'];*/
			$_SESSION['USERNAME'] = $username;
			$_SESSION['TYPE'] = $row['Type'];
			session_write_close();
			switch($_SESSION['TYPE']) {
			case "client":
				header("location: /client.php#new");
				break;
			case "manager":
				header("location: /manage.php#new");
				break;
			}
		}
	} else {
		$errmsg[] = 'Invalid username or password';
		$_SESSION['ERRMSG'] = $errmsg;
		session_write_close();
		header("location: /index.php");
		exit();
	}
?>