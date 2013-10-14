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
	<a href="/manage.html">&laquo; Домой</a>  		
  <span class="right">
        
	  <ul class="vert-nav">
  				<li class="current"><a href="#" style="width: 90%; height: 100%; display: block;"><?php echo $_SESSION['USERNAME']; ?></a>
    				<ul>
      					<li class="exit"><a href="/php/logout.php" style="width: 90%; height: 100%; display: block;">Выйти</a></li>
    				</ul>
  				</li>
			</ul>

    		</span> 
    	</div>


<div id="main-container">


<div class="left-column-big">
		<div class="b-menu">
			<span class="m-dotted cur" data-tab="new">Информация об услугах</span> 
            <span class="small" data-tab="new"><br>1 опция</span>
			<span class="m-dotted" data-tab="unlock"><br><br>Информация о клиентах</span> 
            <span class="small" data-tab="unlock"><br>3 опции</span>
			<span class="m-dotted" data-tab="balance"><br><br>Информация об абонентах</span> 
            <span class="small" data-tab="balance"><br>1 опции</span>    
            <br><br>        
		</div>
</div>

<div class="right-column">
	<div id="contentBox" class="clearfix">
	<div class="b-body b-body-new">
		<h2>Информация об услугах</h2>
		<li class="options"><a href="#">Показать, сколько дней в среднем была включена каждая из услуг у всех абонентов в 2012 году</a></li>
	</div>


	<div class="b-body b-body-unlock">
		<h2>Информация о клиентах</h2>
		<li class="options"><a href="#">Составить отчет о балансе клиентов в марте 2012 года по форме:
        <br><span style="font-style:italic">Фамилия клиента, среднее значение баланса за месяц</span></a></li>
        <li class="options"><a href="#">Показать все сведения о самом молодом (по возрасту) клиенте</a></li>
        <li class="options"><a href="#">Показать все сведения о клиенте, баланс которого чаще всего пополнялся в 2012 году</a></li>
	</div>

    <div class="b-body b-body-balance">
		<h2>Информация об абонентах</h2>
        <li class="options"><a href="#">Показать все сведения об абонентах, которые ни разу не включали никаких услуг</a></li>
	</div>        
        
        
	</div>
    
</div>


</div>
    
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
    	<script  src="js/sliding.js"></script>
		<!--<script> location="manage.html#new"</script>-->

    
</body>
</html>
