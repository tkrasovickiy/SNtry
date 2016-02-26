<?php include "head.php" ?>
<h2>Регистрация:</h2>
<form action="save_user.php" method="post">
<table>
	<tr>
		<td>Имя пользователя:</td>
		<td><input type="text" name="user_name"></td>
	</tr>
	<tr>
		<td>Пароль:</td>
		<td><input type="password" name="user_pass"></td>
	</tr>
</table>
<input type="submit" value="Зарегистрироваться">
</form>
<?php include "back.php" ?>