<!DOCTYPE html>
<html lang="ru">
	<head>
		<title>SocialNetwork: try</title>
		<meta http-equiv="Content-Type" content="text/html; charset=cp1251">
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<?php session_start(); ?>
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand" href="index.php">Главная</a>
					</div>
					<ul class="nav navbar-nav">
						<li><a href="all_users.php">Пользователи</a></li>
						<li><a href="#">Новости</a></li>
					</ul>
					<?php
						if (empty($_SESSION['user_name']) or empty($_SESSION['id']))
						{ ?>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="login.php">Вход</a></li>
							<li><a href="reg.php">Регистрация</a></li>
						</ul>
						<?php
						}
						else
						{ ?>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#">Настройки</a></li>
							<li><a href="exit.php">Выход</a></li>
						</ul>
						<p class="navbar-text navbar-right">Вы вошли на сайт как <?php echo "<a href='user_page.php?id=".$_SESSION['id']."'>".$_SESSION['user_name']."</a>"; ?></p>
						<?php
						}
					?>
				</div>
			</nav>
			<div class="col-md-12">
			