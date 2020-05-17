<?php session_start();?>
<!DOCTYPE html
<html>
<head>
  <meta http-equiv="content-type" content="text/html"; charset="utf-8"/>
    <title>Quizzer</title>
    <link href="quizstyle.css" rel="stylesheet" type="text/css"/>


 

</head>
<body style="background-image:url('qkjonashti.jpg');">
<header>
<div class="container">
<h1 style="color:rgb(184, 3, 3)">QUIZZER!</h1>
</div>

</header>
<main>
    <div class="container">
        <h2 style="font-weight: 900;font-size:25px;color:white;">You're Done!</h2>
        <p style="font-weight: 900;font-size:20px;color:white;">Congrats! You have completed the test</p> 
        <p style="font-weight: 900;font-size:20px;color:white;">Final Score:<?php echo $_SESSION['score'];?></p>
        <a href="question.php?n=1" class="start" style="font-family: Impact, Charcoal, sans-serif;font-size:20px;border-radius:40px;">Take Again</a>
        <a href="legjendat.php" class="start" style="font-family: Impact, Charcoal, sans-serif;font-size:20px;border-radius:40px;">GO BACK</a>
    
    
    </div>
</main>


</body>
</html>


