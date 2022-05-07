<?php

//check for login
function check_login($con)
{
	if(isset($_SESSION['user_id']))
	{
		$id = $_SESSION['user_id'];

		$query = "select * from users where user_id = '$id' limit 1";
		$result = mysqli_query($con, $query);

		if($result && mysqli_num_rows($result) > 0)
		{
			$user_data = mysqli_fetch_assoc($result);
			$role = $user_data["role"];

			if($role == "admin")
			{
				alert_popup("You are now logged in as admin");
				return $user_data;
				header("Location: admin.php");
			}
			elseif($role == "meter reader")
			{
				alert_popup("You are now logged in as meter reader");
				return $user_data;
				header("Location: meter_reader.php");
			}
		}
	}
}

//generate random number
function random_num($length)
{
	$text = "";
	if($length < 5)
	{
		$length = 5;
	}

	$len = rand(4,$length);

	for ($i=0; $i < $len; $i++) 
	{ 
		$text .= rand(0,9);
	}

	return $text;
}

//pop up message
function alert_popup($message)
{
	echo "<script>alert('$message');</script>";
}

?>