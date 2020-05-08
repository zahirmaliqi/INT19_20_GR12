<!DOCTYPE html>
<html manifest="cache.appache">
	<head>
		<title>Signup</title>
		
		<link rel="stylesheet" href="signup.css">
	</head>
	<body>
		
			<div class="simple-form">
             
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
             /* $fullUrl="http: //$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
              
              if(strpos($fullUrl,"signup=empty")== true) {
              echo "<p class='error'>You did not fill in all fields!</p>";
              exit();
              }
            elseif(strpos($fullUrl,"signup=char")== true) {
                echo "<p class='error'>You used an invalid e-mail!</p>";
                exit();
                }
            elseif(strpos($fullUrl,"signup=email")== true) {
                    echo "<p class='error'>You used invalid characters!</p>";
                    exit();
                    }
            elseif(strpos($fullUrl,"signup=success")== true) {
                        echo "<p class='success'>You have been signed up!</p>";
                        exit();
                        }*/

                 
                        
                        if(!isset($_GET['signup'])){

                            exit();
                        }else {
                            $signupCheck = $_GET['signup'];

                            if($signupCheck== "empty") {
                                echo "<p class='error'> You did not fill in all fields!</p>";
                                exit();
                            }
                            elseif($signupCheck== "char") {
                                echo "<p class='error'> You used invalid characters!</p>";
                                exit();

                            }
                            elseif($signupCheck== "email") {
                                echo "<p class='error'> You used an invalid email!</p>";
                                exit();

                            }                  
                            elseif($signupCheck== "success") {
                                echo "<p class='success'> You have been signed up!</p>";
                                exit();
                            }
                        }
                 ?>
			</form>
       
            
        	</div>
	</body>
</html>
