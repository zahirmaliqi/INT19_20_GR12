<?php include 'database.php';?>
<?php session_start();?>
<?php
$number = (int) $_GET['n'];
$query="SELECT * FROM `questions` ";
    
    $results = $mysqli->query($query) or die($mysqli->error.__LINE__);
    $total= $results->num_rows;


$query ="SELECT * FROM questions
            WHERE question_number = $number";
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

$question = $result->fetch_assoc();

$query ="SELECT * FROM choices
            WHERE question_number = $number";
$choices = $mysqli->query($query) or die($mysqli->error.__LINE__);

?>
<!DOCTYPE html
<html>
<head>
  <meta http-equiv="content-type" content="text/html"; charset="utf-8"/>
    <title>Quizzer</title>
    <link href="quizstyle.css" rel="stylesheet" type="text/css"/>

	<link rel="stylesheet" type="text/css" href="zahirmaliqi.css">


     <meta http-equiv="X-UA-Compatible" content="ie=edge">

 

</head>
<body style="background-image:url('qkjonashti.jpg');">
<header>
<div class="container">
<h1 style="color:rgb(184, 3, 3)">QUIZZER!</h1>
</div>

</header>
<main>
    <div class="container">
        <div class="current" style="font-family: Impact, Charcoal, sans-serif;font-size:20px;">Question <?php echo $question['question_number'];?> of <?php echo $total;?></div>
        <p class="question" style="font-family: Impact, Charcoal, sans-serif;font-size:25px;color:white;">
        <?php echo $question['text'];?>
        </p>
        <form method="post" action="process.php">
            <ul class="choices" style="font-size:20px;color:white;font-weight:900;color:white;" >
                <?php while($row = $choices->fetch_assoc()):?>
                    <li style="padding:0px;"><input name="choice" type="radio" style="width:20px;height:20px;"  value="<?php echo $row['id'];?>"/><?php echo $row['text'];?></li> 

                <?php endwhile; ?>
            
                 

            </ul>
            
            <input type="submit" value="Submit" style="color:rgb(184, 3, 3);font-size:25px;font-weight: 900;" />
            <input type="hidden" name="number" value="<?php echo $number; ?>"/>
        </form>
     </div>
</main>
<hr>


	
</body>




</html>

