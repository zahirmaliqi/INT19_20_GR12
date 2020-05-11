<?php
include_once("index.php");
?>

<?php
   include("dataconfi.php");
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	else
    {
        session_destroy();
        session_start(); 
    }
  // session_destroy();
   if(isset($_POST['login'])) {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['email']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM users WHERE email ='".$myusername."' and password =md5('".$mypassword."')";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        // session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: Faqja1.php");
      }
	  else {
         echo "Your Login Email or Password is invalid";
      }
   }
?>
<html>
    <head>
    <link href="login1.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">

    </head>
    <body>
    <div class="signin">
        <form method="post" action="">
        <h2 style="color: white">Log In</h2>
            <input type="email" name="email" id="email" placeholder="Email">
            <input type="password" name="password" id="pass" placeholder="Password"><br><br>
                   
                   <input type="submit" value="Login" name="login" ></a><br>
				  <input type="checkbox" name="remember" value="1">Remember Me<br>
     
	 <h4>or</h4>
	 <?php echo $output; ?>
        </form>
		<h5 style="padding:10px;">  Don't have an account? <a href="signup.php">Sign up!</a></h5>
	
</div>

    </body>
</html>