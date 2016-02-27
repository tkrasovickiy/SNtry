<?php include "head.php" ?>
<h2>Регистрация:</h2>
<form action="save_user.php" method="post" class="form-inline">
	<div class="form-group">
		<label class="sr-only">Имя пользователя</label>
		<input type="text" name="user_name" class="form-control" placeholder="Имя пользователя">
	</div>
	<div class="form-group">
		<label class="sr-only">Пароль</label>
		<input type="password" name="user_pass" class="form-control" placeholder="Пароль">
	</div>
	<input type="submit" class="btn btn-default" value="Зарегистрироваться">
</form>
<?php include "back.php" ?>