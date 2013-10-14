<?php
	session_start();
	if(isset($_SESSION['ERRMSG']) && is_array($_SESSION['ERRMSG']) && count($_SESSION['ERRMSG']) >0 ) {
		$err = "<table>";
		foreach($_SESSION['ERRMSG'] as $msg) {
			$err .= "<tr><td>" . $msg . "</td></tr>"; 
		}
		$err .= "</table>";
		unset($_SESSION['ERRMSG']);
	}
?>
<html>
	<head>
		<title>MY Login Form</title>
	</head>
	<body>
		<form action='log.php' method='post'>
			<table align="center">
				<tr>
					<td><?php echo $err; ?></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type='text' name='username'></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type='password' name='password'></td>
				</tr>
				<tr>
					<td><input type='submit' value='Login'></td>
					<td><a href="register.php">Register</a></td>
				</tr>
			</table>
		</form>
	</body>
</html>