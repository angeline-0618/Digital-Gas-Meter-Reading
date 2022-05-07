<?php 
session_start();

	include("connection.php");
	include("functions.php");

	//check if the user has clicked on the submit button
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$role = $_POST['role'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
			//read from database
			$query = "SELECT * FROM users WHERE user_name = '$user_name' LIMIT 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{
					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] == $password && $user_data['role'] == $role)
					{
						$_SESSION['user_id'] = $user_data['user_id'];
						if($role == "admin")
						{
							header("Location: admin.php");
							die;
						}
						elseif($role == "meter reader")
						{
							header("Location: meter_reader.php");
							die;
						}
					}
					else
					{
						alert_popup("Please enter the correct information");
					}
				}
			}
			else
			{
				alert_popup("error occurs");
			}
			
		}
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
	
	<!-- Login Form -->
	<div class="login-signup-box">
		<form action="login.php" method="post">
			<div>
				<h2>Login</h2>
			</div>

			<div class="login-signup-container">
				<input type="text" name="user_name" required>
				<label for="username"><b>Username</b></label>
			</div>

			<div class="login-signup-container">
				<input type="password" name="password" required>
				<label for="password"><b>Password</b></label>
			</div>

			<div>
				<label for="role">Please choose: </label>
				<br>
				<select name="role">
					<option value="admin">Admin</option>
					<option value="meter reader">Meter Reader</option>
					<option value="customer">Customer</option>
				</select>
			</div>

			<div>
				<button type="submit">Login</button>
			</div>

			<div>
				<p>Don't have an account? <a href="signup.php">Sign Up</a></p>
			</div>
		</form>
	</div>
	
</body>
	
<footer>
	<div class="footerbar">
		<a href="https://www.petroleumsarawak.com/e">Petros Official Website</a>
		<a href="feedback.html">Feedback</a>
		<a href="about.html">About</a>
		<a href="contact.hmtl">Contact</a>
	</div>
</footer>
</html>
