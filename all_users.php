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
<div class="panel panel-default">
	<div class="panel-heading">Список пользователей</div>
	<table class="table table-striped table-bordered">
		<tr>
			<td>#</td>
			<td>Ник</td>
			<td>Имя</td>
			<td>Фамилия</td>
		</tr>
		<?php
			$result = mysql_query("SELECT user_name, id FROM users ORDER BY user_name");
			$myrow = mysql_fetch_array($result);
			do
			{ $i=1;
			?>
				<tr>
					<td><?php echo $i; $i = $i+1; ?></td>
					<td>
						<a href="user_page.php?id=<?php echo $myrow['id']; ?>">
							<?php echo $myrow['user_name'];?></a>
					</td>
					<td></td>
					<td></td>
				</tr>
			<?php
			}
			while ($myrow = mysql_fetch_array($result));
		?>
	</table>
</div>
<?php include "back.php"?>