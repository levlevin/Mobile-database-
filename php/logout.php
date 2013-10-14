<?php
	session_start();

	unset($_SESSION['UID']);
	unset($_SESSION['USERNAME']);
	unset($_SESSION['TYPE']);
	header("location: /index.php");
?>