<?php include "head.php" ?>
<?php
	include "bd.php";
	if (isset($_GET['id'])) {$id = $_GET['id'];}
	else {exit ("Вы зашли на страницу без параметра!");}
	if (!preg_match("|^[\d]+$|", $id)) {exit ("<p>Неверный формат запроса! Проверьте URL</p>");}
	if (!empty($_SESSION['user_name']) and !empty($_SESSION['user_pass']))
?>
<H2>Страница пользователя</H3>
<?php include "back.php" ?>