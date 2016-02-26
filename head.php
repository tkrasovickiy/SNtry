<!DOCTYPE html>
<html lang="ru">
	<head>
		<title>SocialNetwork: try</title>
	</head>
	<body>
		<?php session_start(); ?>
		<table width="80%" align="center" border="black" cellspadding="0" cellspacing="0">
			<tr>
				<td width="20%">
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
					<a href="index.php">Главная</a><br>
					<a href="user_page.php">Страница пользователя</a>
				</td>
				<td align="center">