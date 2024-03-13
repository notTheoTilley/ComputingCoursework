<!DOCTYPE html>
<html>
<head>

	<title>Login</title>

	<link rel="stylesheet" href="login.css">
	<script src="login.js"></script>

</head>


<body>

	<?php
	session_start();
	//Checks to see if there is an error session variable and unsets it if there is.
	//print_r($_SESSION);
	if (isset($_SESSION["error"])){
		echo ($_SESSION["error"]);
		unset($_SESSION['error']);
	}
	?>

	<form action="loginprocess.php" method= "POST">
		Username:<input type="text" name="Username"><br>
		Password:<input type="password" value="" name="Pword" id="p"><br>
			<input type="submit" value="Login">	
	</form>

</body>
</html>