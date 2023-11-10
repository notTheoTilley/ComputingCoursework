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
	//print_r($_SESSION);
	if (isset($_SESSION["error"])){
		echo ($_SESSION["error"]);
		unset($_SESSION['error']);
	}
	?>

	<form action="loginprocess.php" method= "POST">
		Surname:<input type="text" name="Username"><br>
		Password:<input type="password" value="" name="Pword" id="p"><br>
			<input type="checkbox" onclick="myFunction()">Show Password<br>
			<input type="submit" value="Login">	
	</form>

	<script>
	function myFunction() {
    	var x = document.getElementbyId("p");
    	if (x.type === "password") {
        	x.type = "text";
    	} else {
        	x.type ="password";
    	}
	}
	</script>



		<!-- <a href="users.php">
			<button>Create Account</button>
		</a>  

 <div class="login-reg-panel">
	
							
		<div class="register-info-box">
			<h2>Don't have an account?</h2>
			<p>Lorem ipsum dolor sit amet</p>
			<label id="label-login" for="log-login-show">Register</label>
			<input type="radio" name="active-log-panel" id="log-login-show">
		</div>
							
		<div class="white-panel">
			<div class="login-show">
				<h2>LOGIN</h2>
				<input type="text" placeholder="Email">
				<input type="password" placeholder="Password">
				<input type="button" value="Login">
				<a href="">Forgot password?</a>
			</div>
			<div class="register-show">
				<h2>REGISTER</h2>
				<input type="text" placeholder="Email">
				<input type="password" placeholder="Password">
				<input type="password" placeholder="Confirm Password">
				<input type="button" value="Register">
			</div>
			<div class="login-info-box">
				<h2>Have an account?</h2>
				<p>Lorem ipsum dolor sit amet</p>
				<label id="label-register" for="log-reg-show">Login</label>
				<input type="radio" name="active-log-panel" id="log-reg-show"  checked="checked">
		</div>
		</div> 
	 </div> -->




</body>
</html>