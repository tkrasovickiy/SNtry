<?php include "head.php" ?>
<H2>Главная</H2>
<?php
	include "bd.php";
	
	//Создание базы данных
	/*$str_sql_query = "CREATE DATABASE SN_db";
	if (!mysql_query($str_sql_query, $link))
	{
		echo "<br>Не могу выполнить запрос<br>";
		exit();
	}
	echo "<br>Создание базы данных прошло успешно<br>";*/
	
	//Создание таблицы
	/*$str_sql_query = "CREATE TABLE messages (id INT NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (id),
	sender VARCHAR(20),
	receiver VARCHAR(20),
	date DATE,
	text TEXT)";
	if (!mysql_query($str_sql_query, $link))
	{
		echo "<br>Не могу выполнить запрос<br>";
		exit();
	}
	echo "<br>Таблица создана успешно<br>";*/
	
?>
<?php include "back.php" ?>