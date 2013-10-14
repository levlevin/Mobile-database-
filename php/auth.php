<?php
	include("sql.php");
	session_start();

	function Destroy() {
		/*unset($_SESSION['UID']);*/
		unset($_SESSION['USERNAME']);
		header("location: /index.php");
	}

	if(isset($_SESSION['TYPE']) && isset($_SESSION['USERNAME'])) {
	/*if(isset($_SESSION['USERNAME'])) {*/
		$username = $_SESSION['USERNAME'];
		$type = $_SESSION['TYPE'];
		$qry = mysql_query("SELECT * FROM `users` WHERE `Username` = '$username'");		
		if(mysql_num_rows($qry) != 1) { Destroy(); }
	} else { Destroy(); }

?>