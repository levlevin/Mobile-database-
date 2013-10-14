<?php include("/php/auth.php"); ?>
<!doctype html>
<html>
	<head>

	<meta charset="UTF-8">
	<title>Домашняя страница менеджера</title>

	<link href="/css/style.css" rel="stylesheet" type="text/css" />
    

    
	</head>
	<body>

<div class="menu-top">
	<a href="/client.php">&laquo; Домой</a>  		
  <span class="right">
        
	  <ul class="vert-nav">
  				<li class="current"><a href="#" style="width: 90%; height: 100%; display: block;"><?php echo $_SESSION['TYPE']; ?></a>
    				<ul>
      					<li class="exit"><a href="php/logout.php" style="width: 90%; height: 100%; display: block;">Выйти</a></li>
    				</ul>
  				</li>
			</ul>

    		</span> 
    	</div>


<div id="main-container">


<div class="left-column">
		<div class="b-menu">
			<span class="m-dotted cur" data-tab="new">Новый клиент</span> 
            <span class="small" data-tab="new"><br>Ввод данных о новом клиенте</span>
			<span class="m-dotted" data-tab="unlock"><br><br>Разблокировка клиента</span> 
            <span class="small" data-tab="unlock"><br>Ввод данных о клиенте для разблокировки</span>
			<span class="m-dotted" data-tab="balance"><br><br>Обновление баланса</span> 
            <span class="small" data-tab="balance"><br>Ввод даты для обновления баланса</span>    
            <br><br>        
		</div>
</div>

<div class="right-column">
	<div id="contentBox" class="clearfix">
	<div class="b-body b-body-new">
		<h2>Новый клиент</h2>
		<div class="column">
			<h1><br>Введите фамилию</h1>
			<span>Кириллицей</span>
            	<br><br><br>
			<h1>Введите дату рождения</h1>
			<span>В формате ДД-ММ-ГГГГ</span>
            	<br><br><br>
			<h1>Введите дату подключения</h1>
			<span>В формате ДД-ММ-ГГГГ</span>
				<br><br><br>
			<h1>Введите профессию</h1>
			<span>Максимум N символов</span>
		</div>
               
		<div class="column">
			<form name="new-client" class="content-box" action="php/client.php" method="post">
				<div class="content">
                	<br>
				  <input name="surname" type="text" class="input content" placeholder="Фамилия"/>
				</div>
					<br><br><br>
				<div class="content">
                	<br>
				  <input name="date-birth" type="date" class="input content" placeholder="Дата рождения"/>
				</div>
					<br><br><br>
				<div class="content">
                	<br>
				  <input name="date-reg" type="date" class="input content" placeholder="Дата подключения"/>
				</div>
					<br><br><br>
				<div class="content">
                	<br>
				  <input name="prof" type="text" class="input content" placeholder="Профессия"/>
				</div>
			</form>
		</div>
	</div>


	<div class="b-body b-body-unlock">
		<h2>Разблокировка клиента</h2>
		<div class="column">
			<h1><br>Введите фамилию</h1>
			<span>Кириллицей</span>
            	<br><br><br>
			<h1>Введите дату рождения</h1>
			<span>В формате ДД-ММ-ГГГГ</span>
            	<br><br><br>
			<h1>Введите номер телефона</h1>
			<span>10 цифр без +7 </span>
		</div>
        
		<div class="column">
			<form name="unlock" class="content-box" action="php/client.php" method="post">
				<div class="content">
                	<br>
					<input name="surname" type="text" class="input content" placeholder="Фамилия"/>
				</div>
					<br><br><br>
				<div class="content">
                	<br>
					<input name="date-birth" type="date" class="input content" placeholder="Дата рождения"/>
				</div>
					<br><br><br>
				<div class="content">
                	<br>
					<input name="phone" type="text" class="input content" placeholder="9260001122"/>
				</div>
			</form>
		</div>
	</div>

    <div class="b-body b-body-balance">
    	<h2>Обновление баланса</h2>
		<div class="column">
			<h1><br>Введите сегодняшнюю дату</h1>
			<span>В формате ДД-ММ-ГГГГ</span>
            	<br><br><br>
        </div>
        
		<div class="column">
			<form name="date-update" class="content-box" action="php/client.php" method="post">
				<div class="content">
                	<br>
					<input name="date-update" type="date" class="input content" placeholder="Дата"/>
				</div>
			</form>
		</div>
	</div>        
        
        
	</div>
    
    <div class="footer">
    	<div class="b-body b-body-new"><input type="submit" name="submit" value="Добавить нового клиента" class="button"  form="new-client"/>
        </div>
        
    	<div class="b-body b-body-unlock"><input type="submit" name="submit" value="Разблокировать клиента" class="button"  form="unlock"/>
        </div>
        
    	<div class="b-body b-body-balance"><input type="submit" name="submit" value="Обновить баланс" class="button"  form="date-update"/>
        </div>
        
    </div>
    
</div>
</div>
    
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
    	<script  src="js/sliding.js"></script>
		<!--<script> location="client.html#new"</script>-->

    
</body>
</html>
