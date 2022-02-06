<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">		
	<meta name="viewport" content="width=960">	
	<title>Title</title>
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="--css/style.css">
</head>
<body>
	<div class="wrapper">
		<header class="header">
			<div class="wrp">
				<nav class="two">	
					<ul>
						<li><a href="#"><i class="fa fa-home fa-fw"></i>Home</a></li>
						<li><a href="#">Work</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Aboutus</a></li>
					</ul>
				</nav>
			</div>
		</header>
		<main class="content">
			<div class="wrp">
				<?php
        if (isset($message))print $message;
        if (isset($_REQUEST['page'])){
            require_once $_REQUEST['page'].".php";//contact.php
        }else{
            require_once "main.php";
        }
        ?>
			</div>
		</main>
	</div>
	<footer class="footer">
		<div class="footertxt">
			<p><a href="https://github.com/HarryPotterDead">HarryPotterDead</a>  <a href="https://himkol.ru/">INHTK</a></p>
		</div>
	</footer>
</body>
</html>