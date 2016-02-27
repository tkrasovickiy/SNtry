<?php
	session_start();
	if (empty($_SESSION['user_name']) or empty($_SESSION['user_pass']))
	{
		exit("<html><head><meta http-equiv='Refresh' content='0; URL=index.php'></head></html>");
	}
	unset($_SESSION['user_pass']);
	unset($_SESSION['user_name']);
	unset($_SESSION['id']);
	exit("<html><head><meta http-equiv='Refresh' content='0; URL=index.php'></head></html>");
?>