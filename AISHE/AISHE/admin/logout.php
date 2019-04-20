<?php
session_start();
unset($_SESSION['login']);

	if($_SESSION['login']==NULL)
	{
	
	header("Location:index.php");
	}
?>