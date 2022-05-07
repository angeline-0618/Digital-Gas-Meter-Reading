<?php
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

	if(!empty($user_data))
	{
		$user = $user_data['user_name'];
		
	}else
	{
		$user = "User";
	}

?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="keywords" content="PETROS, digital meter reading, Petroleum">
	<meta name="description" content="Digital Meter Reading">
	<meta name="author" content="Angeline">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Digital Meter Reading</title>
	<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<!-- Navigation bar -->
	<div class="navbar">
		<img src="images/logo-petros.png" id="logo" alt="logo">
		<div class="dropdown">
			<button class="dropdown_btn">Dropdown Menu</button>
			<div class="dropdown-content">
				<a href="login.php">Login</a>
				<a href="signup.php">Sign Up</a>
				<a href="logout.php">Logout</a>	
			</div>
		</div>
		<a href="index.php">Home</a>
	</div>
	
    <h1>Meter Reader</h1>
</body>
	
<footer>
	<!-- Footer Bar -->
	<div class="footerbar">
		<a href="https://www.petroleumsarawak.com/e">Petros Official Website</a>
		<a href="feedback.html">Feedback</a>
		<a href="about.html">About</a>
		<a href="contact.hmtl">Contact</a>
	</div>
</footer>
</html>