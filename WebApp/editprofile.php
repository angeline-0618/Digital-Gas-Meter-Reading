<html>
<head>
	<meta charset="utf-8">
	<title>ProfilePage</title>
	<link rel = "stylesheet" href = "style.css">
</head>

<body>
	<div class = "topnav">
		<a href = "index.php">Logo</a>
		<a href = "index.php">Home</a>
		<a href = "paybill.php">Pay Bill</a>
		<a href = "trans.php">Transaction History</a>
		<a href = "reading.php">Current Meter Reading</a>
		<a href = "profile.php">Profile</a>
	</div>
	
	<br>
	
	<div class = "forming">
		<form class = "form" action = "profile.php" method = "get">
			
			<div class = "profilepic">
				<img src = "">
			</div>
			
			<div class = "name">
				<label for = "name">Name: </label>
				<input type = "text" name = "name" id = "name">
			</div>

			
			<!--
			<div class = "gender">
				<label for = "gender">Gender: </label>
				<select class = "gender">
					<option value = "male">Male</option>
					<option value = "female">Female</option>
				</select>
			</div>
			-->
			
			<br>
			<br>
		
			<div class = "phonenum">
				<label for = "phonenum">Phone Number: </label>
				<input type = "tel" name  = "phonenum" id = "phonenum" pattern = "[0-9]{3}-[0-9]{3}-[0-9]{4}">
			</div>
			<br>
			<br>
			
			<div class = "email">
				<label for = "email">Email: </label>
				<input type = "email" name = "email" id = "email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
			</div>
			
			
			<br>
			<br>
			
			<div class = "address">
				<label for = "address">Address: </label>
				<input type = "text" name = "address" id = "address">
			</div>
			
			<br>
			<br>
			
			<input type = "submit" value = "Confirm">
		</form>
	</div>
	
	<footer class = "footer">
		<p>2022 @ Sarawak Gas Distribution Sdn Bhd</p>
	</footer>
	
</body>
</html>