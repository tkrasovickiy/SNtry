<?php
	session_start();
	if (empty($_SESSION['user_name']) or empty($_SESSION['user_pass']))
	{
		exit ("Доступ только авторизованным пользователям!<br><a href='index.php'>Главная</a>");
	}
	unset($_SESSION['user_pass']);
	unset($_SESSION['user_name']);
	unset($_SESSION['id']);
	exit("<html><head><meta http-equiv='Refresh' content='0; URL=index.php'></head></html>");
?>