<?php include "head.php" ?>
<?php
	if (isset($_POST['user_name']))
	{
		$user_name=$_POST['user_name'];
		if ($user_name=='') {unset($user_name);}
	}
	if (isset($_POST['user_pass']))
	{
		$user_pass=$_POST['user_pass'];
		if ($user_pass=='') {unset($user_pass);}
	}
	if (empty($user_name) or empty($user_pass))
	{
		exit ("<h4>Не введено имя пользователя или пароль!</h4>");
	}
	$user_name = stripslashes($user_name);
	$user_pass = stripslashes($user_pass);
	$user_name = htmlspecialchars($user_name);
	$user_pass = htmlspecialchars($user_pass);
	$user_name = trim($user_name);
	$user_pass = trim($user_pass);
	
	if (strlen($user_name)<3 or strlen($user_name)>15)
	{
		exit("<h4>Ограничение на имя пользователя: от 3 до 15 символов.</h4>");
	}
	if (strlen($user_pass)<3 or strlen($user_pass)>15)
	{
		exit("<h4>Ограничение на пароль: от 3 до 15 символов.</h4>");
	}
	
	$user_pass = md5($user_pass);
	$user_pass = strrev($user_pass);
	$user_pass = $user_pass."tpO5REv";
	
	include "bd.php";
	
	$result = mysql_query("SELECT id FROM users WHERE user_name='$user_name'");
	$myrow = mysql_fetch_array($result);
	if (!empty($myrow['id']))
	{
		exit ("<h4>Пользователь с таким именем уже существет!</h4>");
	}
	
	if (!mysql_query("INSERT INTO users (user_name, user_pass) VALUES ('$user_name','$user_pass')"))
	{
		echo "<h4>Ошибка регистрации!</h4>";
		exit();
	}
	echo "<h4>Пользователь успешно добавлен! Вы можете <a href='login.php'>войти на сайт</a>.</h4>";
?>
<?php include "back.php" ?>