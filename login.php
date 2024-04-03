<!DOCTYPE html>
<html>
<head>

	<title>Login</title>

	<!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

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

	<!-- form to login -->
	<form action="loginprocess.php" method= "POST">
		Username:<input type="text" name="Username"><br>
		Password:<input type="password" value="" name="Pword" id="p"><br>
			<input type="submit" value="Login">	
	</form>

</body>
</html>