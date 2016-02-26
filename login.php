<?php include "head.php" ?>
<h3>Вход в систему</h3>
<form action="testreg.php" method="post">
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
	<input type="submit" value="Войти">
</form>
<?php include "back.php" ?>