<?php 
session_start();

	include("connection.php");
	include("functions.php");
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

	<input type="text" id="search_input" onkeyup="search_customer()" placeholder="Search for names..." title="Type in a name">
	
	<table>
		<tr>
			<th>Name</th>
			<th>Gender</th>
			<th>IC Number</th>
			<th>Phone Number</th>
			<th>Email</th>
			<th>Address</th>
		</tr>
		<?php
			$query = "SELECT * from customer ORDER BY user_name ASC";
			$result = mysqli_query($con, $query);

			//Fetch data from rows
			while($rows = mysqli_fetch_assoc($result))
			{
		?>
		<tr>
			<!-- Fetching data from each row of every column -->
			<td><?php echo $rows['user_name']; ?></td>
			<td><?php echo $rows['gender']; ?></td>
			<td><?php echo $rows['ic_num']; ?></td>
			<td><?php echo $rows['phone_num']; ?></td>
			<td><?php echo $rows['email']; ?></td>
			<td><?php echo $rows['address']; ?></td>
		</tr>
		<?php } ?>
	</table>

	<script type="text/javascript">
		function search_customer()
		{
			var input, sensitive;


		}
	</script>
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
