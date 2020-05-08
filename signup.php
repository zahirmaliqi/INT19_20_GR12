<!DOCTYPE html>
<html manifest="cache.appache">
	<head>
		<title>Signup</title>
		
		<link rel="stylesheet"  href="signup.css">
		<form action="inc.php" method="POST" id="registration" >
                <h2 style="color:white;">Sign up</h2>
                <?php
                if(isset($_GET['first'])){
                    $first=$_GET['first'];
                    echo '<input type="text" name="first" placeholder="First name" id="button value="'.$first.'"><br><br>';
                }
                else {
                    echo '<input type="text" name="first" placeholder="First name" id="button"><br><br>';
                }
                if(isset($_GET['last'])){
                    $last=$_GET['last'];
                    echo '<input type="text" name="last" placeholder="Last name" id="button" value="'.$last.'"><br><br>';
                }
                else {
                    echo '<input type="text" name="last" placeholder="Last name" id="button"><br><br>';
                }
              
                ?>
					<input type="email" name="email" placeholder="Email" id="button"><br><br>
					<input type="password" name="pwd" placeholder="Password" id="button"><br><br>
				    <input type="submit" name="submit" id="butto"><br><br>
				    <p id="sub" style="color: white;"></p>
				    <p style="color: white;">Already have an account? &nbsp;<a href="login1.php" id="log">Log In</a></p>
                    <?php



	</head>
	<body>
		
			<div class="simple-form">

				ref="login1.php" id="log">Log In</a></p>
			</form>
		</div>
	</body>
</html>
