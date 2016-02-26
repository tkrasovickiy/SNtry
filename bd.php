<?php
	$server = "localhost";
	$user = "root";
	$password = "";
	$db = "SN_db";
	@$link=mysql_connect($server, $user, $password);
	
	if (!$link)
	{
		echo "<br>Ошибка подключения к серверу MySQL<br>";
		exit;
	}
	//echo "<br>Подключение к серверу MySQL " . $server . " прошло успешно<br>";
	if (!mysql_select_db($db))
	{
		echo "<br>Ошибка выбора базы данных<br>";
		exit;
	}
	//echo "<br>Подключение к базе данных " . $db . " прошло успешно<br>";
?>