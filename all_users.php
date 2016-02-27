<?php include "head.php"; ?>
<?php
	include "bd.php";
	if (!empty($_SESSION['user_name']) and !empty($_SESSION['user_pass']))
	{
		$user_name = $_SESSION['user_name'];
		$user_pass = $_SESSION['user_pass'];
		$result2 = mysql_query("SELECT id FROM users WHERE user_name='$user_name' AND user_pass='$user_pass'");
		$myrow2 = mysql_fetch_array($result2);
		if (empty($myrow2['id']))
		{
			exit("<h3>Страница доступна только авторизованным пользователям.</h3>");
		}
	}
	else
	{
		exit("<h3>Страница доступна только авторизованным пользователям.</h3>");
	}
?>
<h2>Список пользователей</h2>
<div class="list-group">
	<?php
		$result = mysql_query("SELECT user_name, id FROM users ORDER BY user_name");
		$myrow = mysql_fetch_array($result);
		do
		{
			printf("<a href='user_page.php?id=".$myrow['id']."' class='list-group-item'>".$myrow['user_name']."</a>");
		}
		while ($myrow = mysql_fetch_array($result));
	?>
</div>
<?php include "back.php"?>