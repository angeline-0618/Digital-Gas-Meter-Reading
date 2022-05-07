<?php
session_start();

	include("connection.php");
	include("functions.php");

	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		if(isset($_POST['submit_btn']))
		{
			//something was posted
			$user_name = $_POST['user_name'];
			$gender = $_POST['gender'];
			$ic_num = $_POST['ic_num'];
			$phone_num = $_POST['phone_num'];
			$email = $_POST['email'];
			$address = $_POST['address'];

			if(!empty($user_name))
			{
				//read from database
				$query = "UPDATE customers SET user_name = '$user_name' WHERE id = 1";
				$result = mysqli_query($con, $query);

				if($result)
				{
					if($result && mysqli_num_rows($result) > 0)
					{
						alert_popup("Updated successfully");
					}
					else
					{
						alert_popup("Failed to update username");
					}
				}
			}

			if(!empty($gender))
			{
				//read from database
				$query = "UPDATE customers SET gender = '$gender' WHERE id = 1";
				$result = mysqli_query($con, $query);

				if($result)
				{
					if($result && mysqli_num_rows($result) > 0)
					{
						alert_popup("Updated successfully");
					}
					else
					{
						alert_popup("Failed to update gender");
					}
				}
			}

			if(!empty($ic_num))
			{
				//read from database
				$query = "UPDATE customers SET ic_num = '$ic_num' WHERE id = 1";
				$result = mysqli_query($con, $query);

				if($result)
				{
					if($result && mysqli_num_rows($result) > 0)
					{
						alert_popup("Updated successfully");
					}
					else
					{
						alert_popup("Failed to update ic number");
					}
				}
			}

			if(!empty($phone_num))
			{
				//read from database
				$query = "UPDATE customers SET phone_num = '$phone_num' WHERE id = 1";
				$result = mysqli_query($con, $query);

				if($result)
				{
					if($result && mysqli_num_rows($result) > 0)
					{
						alert_popup("Updated successfully");
					}
					else
					{
						alert_popup("Failed to update phone number");
					}
				}
				else
				{
					alert_popup("Failed to update");
				}
			}

			if(!empty($email))
			{
				//read from database
				$query = "UPDATE customers SET email = '$email' WHERE id = 1";
				$result = mysqli_query($con, $query);

				if($result)
				{
					if($result && mysqli_num_rows($result) > 0)
					{
						alert_popup("Updated successfully");
					}
					else
					{
						alert_popup("Failed to update email");
					}
				}
			}

			if(!empty($address))
			{
				//read from database
				$query = "UPDATE customers SET address = '$address' WHERE id = 1";
				$result = mysqli_query($con, $query);

				if($result)
				{
					if($result && mysqli_num_rows($result) > 0)
					{
						alert_popup("Updated successfully");
					}
					else
					{
						alert_popup("Failed to update address");
					}
				}
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
	<!-- Navigation Bar -->
	<div class="navbar">
		<img src="images/logo-petros.png" id="logo" alt="logo">
		<a href="index.html">Home</a>
		<a href="login.html">Login</a>
		<a href="register.html">Sign Up</a>
	</div>
	
	<form action="edit_customer_details.php" class="edit_cusdetails_form">
		<p>
			<label for="username"><b>Username: </b></label>
			<input type="text" name="username">
		</p>
			
		<p>
			<label for="gender"><b>Gender: </b></label>
			<input type="radio" name="male" value="Male">
			<label for="male">Male</label>
			<input type="radio" name="female" value="Female">
			<label for="female">Female</label>
		</p>

		<p>
			<label for="ic_num"><b>IC Number: </b></label>
			<input type="text" name="ic_num" pattern="[0-9]{7}[1][3][0-9]{4}">
		</p>
			
		<p>
			<label for="phone_num"><b>Phone Number: </b></label>
			<input type="tel" name="phone_num" pattern="[0-9]{3}[0-9]{0-9}">
		</p>
			
		<p>
			<label for="email"><b>Email: </b></label>
			<input type="email" name="email">
		</p>
			
		<p>
			<label for="address"><b>Address: </b></label>
			<textarea name="address" rows="5" cols="50"></textarea>
		</p>
		
		<p>
			<button type="submit" name="submit_btn">Submit</button>
		</p>
			
	</form>
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
