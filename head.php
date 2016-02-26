<!DOCTYPE html>
<html lang="ru">
	<head>
		<title>SocialNetwork: try</title>
		<link href="bootstrap.min.css" rel="stylesheet" media="screen">
	</head>
	<body>
		<?php session_start(); ?>
		<div class="container">
			<div class="row">
				<div class="span2">
					<ul class="nav nav-pills pull-left nav-stacked">
						<li><a href="index.php">Главная</a></li>
						<li><a href="#">Ссылка 1</a></li>
						<li><a href="#">Ссылка 2</a></li>
					</ul>
				</div>
			<div class="span3">
			<?php
				if (empty($_SESSION['user_name']) or empty($_SESSION['id']))
				{
					echo "Вы вошли на сайт как гость.<br>
					<a href='login.php'>Вход</a><br>
					<a href='reg.php'>Регистрация</a><br>";
				}
				else
				{
					echo "Вы вошли на сайт как ".$_SESSION['user_name'].". <a href='exit.php'>(Выход)</a><br>";
				}
			?>