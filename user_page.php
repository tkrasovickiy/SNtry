<?php include "head.php" ?>
<?php
	include "bd.php";
	if (isset($_GET['id'])) {$id = $_GET['id'];}
	else {exit ("Вы зашли на страницу без параметра!");}
	if (!preg_match("|^[\d]+$|", $id)) {exit ("<p>Неверный формат запроса! Проверьте URL</p>");}
	if (!empty($_SESSION['user_name']) and !empty($_SESSION['user_pass']))
	{
		$user_name = $_SESSION['user_name'];
		$user_pass = $_SESSION['user_pass'];
		$result2 = mysql_query("SELECT id FROM users WHERE user_name='$user_name' AND user_pass='$user_pass'");
		$myrow2 = mysql_fetch_array($result2);
		if (empty($myrow2['id'])) {exit ("Вход только для зарегистрированных пользователей");}}
	else {exit ("Вход только для зарегистрированных пользователей");}
	$result = mysql_query("SELECT * FROM users WHERE id='$id'");
	$myrow = mysql_fetch_array($result);
	if (empty($myrow['user_name'])) {exit ("Пользователя не существует!");}
?>
<?php
	if ($myrow['user_name']==$user_name)
	{
		echo "<h3>Это моя страница!<h3>";
	}
	else
	{
		echo "<h3>Это страница пользователя ".$myrow['user_name']."</h3>";
	}
?>
<h2>Личные сообщения</h2>
<?php
	$tmp = mysql_query("SELECT * FROM messages WHERE reciever='$user_name' ORDER BY id DESC");
	$messages = mysql_fetch_array($tmp);
	if (!empty($messages['id']))
	{
		do
		{
			$sender = $messages['sender'];
			$result4= mysql_query("SELECT ")
		}
	}
?>
<?php include "back.php" ?>