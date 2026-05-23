<!doctype html>
<html>
	<head>
		<meta charset = "utf-8">
		<title>Admin SignUp </title>
		<link rel = "stylesheet" href = "styleSignup.css">
	</head>
	
	<body>
	
		<div class="box">
			<form action="" method="post" name="">
				<p>*fill this form with valid informations!</p>
				
				<input type="text" name="name" placeholder="Name" required>
				<input type="text" name="username" placeholder="Username" required>
				<input type="Password" name="password" placeholder="Password" minlength="8" maxlength="32" required>
				<input type="Password" name="password1" placeholder="Re-type Password" minlength="8" maxlength="32" required>
				<input type="text" name="address" placeholder="Address" required>
				<input type="email" name="email" placeholder="Email" required>
				<input type="tel" name="phone_no" placeholder="Phone Number" required>
				<input type="submit" name="signup" value = "Sign Up">
				<a href="SwiftCart.html">Home</a>
			</form>
		</div>
		
<?php
	include_once("config.php");

	if(isset($_POST['signup'])) {	
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone_no = $_POST['phone_no'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$address = $_POST['address'];
	$signup = $_POST['signup'];

	
				
	$sql = "INSERT  INTO signupworker(name, email, phone_no, username, password, address) 
								VALUES('$name', '$email', '$phone_no', '$username', '$password', '$address')";
	
	$result = mysqli_query($conn, $sql);

	echo header("Location: signupSuccessful.html"); 

	if (!mysqli_query($conn, $sql)) {
    echo "Error: " . mysqli_error($conn);
}
		
	}


?>
	</body>
</html>