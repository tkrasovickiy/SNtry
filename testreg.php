<?php include "head.php" ?>
<?php
	if (isset($_POST['user_name']))
	{
		$user_name = $_POST['user_name'];
		if ($user_name=='') {unset($user_name);}
	}
	if (isset($_POST['user_pass']))
	{
		$user_pass = $_POST['user_pass'];
		if ($user_pass=='') {unset($user_pass);}
	}
	if (empty($user_name) or empty($user_pass))
	{
		exit ("Не введено имя пользователя или пароль");
	}
	{
	$user_name = stripslashes($user_name);
	$user_pass = stripslashes($user_pass);
	$user_name = htmlspecialchars($user_name);
	$user_pass = htmlspecialchars($user_pass);
	$user_name = trim($user_name);
	$user_pass = trim($user_pass);
	$user_pass = md5($user_pass);
	$user_pass = strrev($user_pass);
	$user_pass = $user_pass."tpO5REv";
	}
	include "bd.php";
	
	$result = mysql_query("SELECT * FROM users WHERE user_name='$user_name'");
	$myrow = mysql_fetch_array($result);
	if (empty($myrow['user_pass']))
	{
		exit ("Введенная пара логин-пароль не существует.");
	}
	else
	{
		if ($myrow['user_pass']==$user_pass)
		{
			$_SESSION['user_name'] = $myrow['user_name'];
			$_SESSION['id'] = $myrow['id'];
			$_SESSION['user_pass'] = $myrow['user_pass'];
			echo "Вы успешно вошли на сайт!";
			exit("<html><head><meta http-equiv='Refresh' content='0; URL=index.php'></head></html>");
		}
		else
		{
			exit ("Извините, введенное имя пользователя или пароль неверны.");
		}
	}
?>
<?php include "back.php" ?>