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
<!doctype html>
<html>
	<head>
    
	<meta charset="UTF-8">
	<title>Login</title>

	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<link href="css/style-login.css" rel="stylesheet" type="text/css" />
    
    
	</head>
	<body>

<div class="menu-top">
	<a href="/index.php">&laquo; Домой</a>  		
  <span class="right">
        
	  <ul class="vert-nav">
  				<li class="current"><a href="#" style="width: 90%; height: 100%; display: block;">Мой аккаунт</a>
    				<!--<ul>
      					<li class="exit"><a href="/php/logout.php" style="width: 90%; height: 100%; display: block;">Выйти</a></li>
    				</ul>-->
  				</li>
			</ul>

    		</span> 
    	</div>


	<div id="wrapper">

	<form name="login-form" class="login-form" action="/php/log.php" method="post">

    	<div class="header">
    	<h1>Вход</h1>
    	<span>Пожалуйста, введите логин и пароль, предоставленный администратором.</span>
        <h2><?php if (isset($err)){ echo $err;} ?></h2>
    	</div>

    	<div class="content">
		<input name="username" type="text" class="input content" placeholder="Логин" />
    	<input name="password" type="password" class="input password" placeholder="Пароль" />
    	</div>

    	<div class="footer">
    	<input type="submit" name="submit" value="Войти" class="button" />
		<input type="button"  value="Забыли?" onclick="#dialog" class="forgot" /> 
    	</div>
	</form>


	</div>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
    	<script  src="js/sliding.js"></script>

	</body>
</html>