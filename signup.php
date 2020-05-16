
<?php

include("Anetari.php");
if (! empty($_POST["regjistro"])) {
    
    $username = filter_var($_POST["first"], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST["pwd"], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_STRING);
    require_once ("Anetari.php");
    $member = new Anetari();
    $errorMessage = $member->validoAnetarin($username, $email, $password);
    
    if (empty($errorMessage)) {
        $memberCount = $member->neseAnetariEkziston($username, $email);
        
        if ($memberCount == 0) {
            $insertId = $member->insertoRekordet($username,$email,$password);
            if (!empty($insertId)) {
                header("refresh:1;url=login1.php");
            }
        } else {
            $errorMessage[] = "User already exists.";
        }
    }
}
?>
<html manifest="cache.appache">
	<head>
		<title>Signup</title>
		
		<link rel="stylesheet" href="signup.css">
	</head>
	<body>
	<div class="simple-form">
<form name="frmRegistration" method="post" action="" id="registration">
			
           
		      <?php
if (! empty($errorMessage) && is_array($errorMessage)) {
    ?>	
            <div style="color:red;font-weight:bold;">
            <?php 
            foreach($errorMessage as $message) {
                echo $message . "<br/>";
            }
            ?>
            </div>
<?php
}
?>
                    <input type="text" name="first" placeholder="First name" id="button"
                        value="<?php if(isset($_POST['first'])) echo $_POST['first']; ?>">
               <br><br>
            
                    <input type="email" name="email" placeholder="Email" id="button"
                        value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>">
                <br><br>
           
             <input type="password" name="pwd" placeholder="Password" id="button" value="">
           <br><br>
            
                    <input type="password" name="confirm_password" placeholder="Confirm password" id="button" value="">
               
            <br><br>
				    <input type="submit" name="regjistro" id="butto"><br><br>
				    <p id="sub" style="color: white;"></p>
				    <p style="color: white;">Already have an account? &nbsp;<a href="login1.php" id="log">Log In</a></p>
       
		  		  
			</form>
      </div>
        	
	</body>
</html>

