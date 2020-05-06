<!DOCTYPE html>
<html manifest="cache.appache">
	<head>
		<title>Signup</title>
		
		<link rel="stylesheet" type="text/css" href="signup.css">

		<script>
			function myFunction() {
				  var x, text;

				  // Get the value of the input field with id="numb"
				  x = document.getElementById("phone").value;

				  // If x is Not a Number or less than one or greater than 10
				  if (isNaN(x)) {
				    text = "Input not valid";
				  } else {
				    text = "Input OK";
				  }
				  document.getElementById("sub").innerHTML= text;
				}
		</script>


	</head>
	<body>
		
			<div class="simple-form">

				<form id="registration">

					<input type="text" name="fname" placeholder="First name" id="button" required><br><br>
					<input type="text" name="lname" placeholder="Last name" id="button" required><br><br>
					<input type="email" name="email" placeholder="Email" id="button" required><br><br>
					<input type="password" name="password" placeholder="Password" id="button" required><br><br>
					<select id="ph"><datalist><option>+383</option><option>+386</option><option>+377</option></datalist>
				</select>
				<input  name="num" placeholder="Enter your phone number" id="phone" pattern="\d{8}" required><br><br>
				<input type="radio" name="gender" id="rd">&nbsp;&nbsp;&nbsp;&nbsp;<span id="but">Male</span>
				<input type="radio" name="gender" id="rd">&nbsp;&nbsp;&nbsp;&nbsp;<span id="but">Female</span><br><br>
				<p style="color: white;">By creating an account you agree to our <br><a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
				<input type="submit" value="Sign up" id="butto" onclick="myFunction()"><br><br>
				<p id="sub" style="color: white;"></p>
				<p style="color: white;">Already have an account? &nbsp;<a href="login1.php" id="log">Log In</a></p>
			</form>
		</div>
	</body>
</html>
