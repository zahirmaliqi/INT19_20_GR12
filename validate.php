<?php 

$myemail = "manutd1@gmail.com";
$mypass = "12345";
if(isset($_POST['login'])) {
    $email=$_POST['email'];
    $pass = $_POST['password'];
    
    if($email==$myemail and $pass==$mypass) {
        if( isset($_POST['remember'])) {
            setcookie('email',$email, time()+60*60*7);
            setcookie('pass',$pass, time()+60*60*7);
            
        }
        session_start();
        $_SESSION['email']=$email;
        header("location:Faqja1.php");
    } else {
        echo "Email or Password is Invailid.<br> click here to <a href='login1.php'>TRY AGAIN</a>";
    }
    } else {
    header ("location:login1.php");
}

?>
