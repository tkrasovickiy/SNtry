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
		exit ("Не введено имя пользователя или пароль!");
	}
	$user_name = stripslashes($user_name);
	$user_pass = stripslashes($user_pass);
	$user_name = htmlspecialchars($user_name);
	$user_pass = htmlspecialchars($user_pass);
	$user_name = trim($user_name);
	$user_pass = trim($user_pass);
	
	if (strlen($user_name)<3 or strlen($user_name)>15)
	{
		exit("Ограничение на имя пользователя: от 3 до 15 символов");
	}
	if (strlen($user_pass)<3 or strlen($user_pass)>15)
	{
		exit("Ограничение на пароль: от 3 до 15 символов");
	}
	
	$user_pass = md5($user_pass);
	$user_pass = strrev($user_pass);
	$user_pass = $user_pass."tpO5REv";
	
	include "bd.php";
	
	$result = mysql_query("SELECT id FROM users WHERE user_name='$user_name'");
	$myrow = mysql_fetch_array($result);
	if (!empty($myrow['id']))
	{
		exit ("Пользователь с таким именем уже существет!");
	}
	
	if (!mysql_query("INSERT INTO users (user_name, user_pass) VALUES ('$user_name','$user_pass')"))
	{
		echo "Ошибка регистрации!";
		exit();
	}
	echo "<h3>Пользователь успешно добавлен! Вы можете войти на сайт.</h3>";
	
	/*if (mysql_query("SELECT * FROM users WHERE user_name like '" . $_POST['user_name'] . "'"))
	{
		echo "<h3>Пользователь с таким именем уже существует</h3>";
		exit;
	}
	if (!mysql_query("INSERT INTO users (user_name, user_pass) VALUES ('" . $_POST['user_name'] . "', '" . $_POST['user_pass'] . "')"))
	{
		echo "<br>Ошибка добавления пользователя<br>";
		echo mysql_errno();
		echo mysql_error();
		exit;
	}
	echo "<h3>Пользователь добавлен успешно</h3>";*/
?>
<?php include "back.php" ?>