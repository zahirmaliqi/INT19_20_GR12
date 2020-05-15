<?php include 'database.php';?>
<?php
$query ="SELECT * FROM questions";

$results = $mysqli->query($query) or die($mysqli->error.__LINE__);

$total = $results->num_rows;

?>



<!DOCTYPE html
<html>
<head>
  <meta http-equiv="content-type" content="text/html"; charset="utf-8"/>
    <title>Quizzer</title>
    <link href="quizstyle.css" rel="stylesheet" type="text/css"/>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
   

	<link rel="stylesheet" type="text/css" href="zahirmaliqi.css">
	
	<link rel="stylesheet" href="legjendastyle.css">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">

 
 

</head>
<body style="background-image:url('nal.jpg');background-repeat: repeat-x;" >

<header>
<div class="container">
<h1 style="font-family: Impact, Charcoal, sans-serif;font-size:30px;color:rgb(184, 3, 3)">QUIZZER!</h1>

</div>

</header>
<main>
    <div class="container">
     
        <p style="font-family: Impact, Charcoal, sans-serif;font-size:30px;color:black;">Are you the ultimate Man Utd fan? </p>

        <ul style="font-weight: 900;font-size:20px;">
           <li><strong>Number of questions:</strong><?php echo $total;?></li>
           <li><strong>Type:</strong>Multiple choice</li>
           <li><strong>Estimated Time:</strong><?php echo $total * .5;?> Minutes</li>
        </ul>
        <a href="question.php?n=1" class="start" style="font-weight: 900;font-size:20px;border-radius: 50px;">Start Quiz</a>

     </div>

</main>


	
</body>




</html>



