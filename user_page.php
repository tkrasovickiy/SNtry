<?php include "head.php" ?>
<?php
	include "bd.php";
	if (isset($_GET['id'])) {$id = $_GET['id'];}
	else {exit ("Вы зашли на страницу без параметра!");}
	if (!preg_match("|^[\d]+$|", $id)) {exit ("<p>Неверный формат запроса! Проверьте URL</p>");}
	if (!empty($_SESSION['user_name']) and !empty($_SESSION['user_pass']))
	{
		if (empty($myrow2['id']))
		{
			exit ("Вход только для заргеистрированных пользователей");
		}
	}
	else
	{
		exit ("Вход только для зарегистрированных пользователей");
	}
	$result = mysql_query("SELECT * FROM users WHERE id='$id'");
	$myrow = mysql_fetch_array($result);
	if (empty($myrow['user_name']))
	{
		exit ("Пользователя не существует!");
	}
?>
<H2>Страница пользователя</H3>
<?php
	echo "<br><a href='user_page.php?id=$myrow2[id]'>Моя страница</a><br>";
	if ($myrow['user_name']==$user_name)
	{
		echo "Это моя страница!";
	}
	else
	{
		echo "Это страница пользователя ".$myrow['user_name'];
	}
?>
<?php include "back.php" ?>