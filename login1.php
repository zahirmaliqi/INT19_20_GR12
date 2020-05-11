<?php
include_once("index.php");
?>
<?php
if(isset($_COOKIE['email']) and isset($_COOKIE['pass'])) {
    $email = $_COOKIE['email'];
    $pass = $_COOKIE['pass'];
    echo "<script>
    document.getElementById('email').value = '$email';
    document.getElementById('pass').value = '$pass';
    </script>";
}
?>
<html>
    <head>
    <link href="login1.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">

    </head>
    <body>
    <div class="signin">
        <form method="post" action="validate.php">
        <h2 style="color: white">Log In</h2>
            <input type="text" name="email" id="email" placeholder="Username">
            <input type="password" name="password" id="pass" placeholder="Password"><br><br>
                   
                   <input type="submit"  value="Login" name="login" ></a><br>
                   <input type="checkbox" name="remember" value="1">Remember Me<br>
       <h4>or</h4>
	 <?php echo $output; ?>
        </form>
</div>
    </body>
</html>

