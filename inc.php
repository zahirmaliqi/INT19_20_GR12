<?php

if(isset($_POST['submit'])) {


    $first=$_POST['first'];
    $last=$_POST['last'];
    $email=$_POST['email'];
    $pwd=$_POST['pwd'];

    if(empty($first)|| empty($last)|| empty($email)|| empty($pwd)){
        header("location:signup.php?signup=empty");
        exit();
    }else {
        if(!preg_match("/^[a-zA-Z]*$/",$first)|| !preg_match("/^[a-zA-Z]*$/",$last)){
            header("location:signup.php?signup=char");
            exit();
        }else{

        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            header("location:signup.php?signup=email&first=$first&last=$last");
            exit();

        }else {
            header("location:signup.php?signup=success");
            exit();
        }
    }
}

}else {
    header("Location: ../signup.php");
    exit();
}

?>
