<?php
session_start();

	include("functions.php");

	if(isset($_SESSION['user_id']))
	{
		unset($_SESSION['user_id']);
		alert_popup("You are now logged out");

	}

	//redirect to login page
	header("Location: index.php");
	die;

?>