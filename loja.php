<?php

require_once "word.php";
require_once "ndihmat.php";
 
$letters = range("a","z");
 
$params = (object) $_REQUEST;
 
if (isset($params->guess)) {
  $answer = $params->answer;
  $word   = $params->word;
  $letter = $params->letter; 
  $answer = replaceMatchingPositionsByLetters($answer, $word, $letter); 
} 
else {
  $word = $words[rand( 0, count($words)-1 )]; 
  $answer = stars($word);
  $params->letter = "";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Loja Word Guess</title>
<style type="text/css">
body { padding: 20px; 
 background-size: cover;
background-image:url(shk.jpg);
background-repeat:no-repeat;}
form { margin: 10px 0; }
.spacing {
  letter-spacing: .5em;
}
div{
	text-align:center;
	background-image:url(word.png);
	width:300px;
	height:280px;
	margin-top: 90px;
    margin-left: 180px;
    margin: 0 auto;
    margin-top: 90px;
	background-size: cover;

}
input[type=submit],button{
	background-color: #F29839;
  border: none;
  color: white;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  font-size:18px;
  box-shadow:2px 2px #F2B439;

}

</style>
</head>
<body>
 <div>
<br><br><br>
<h2 style="color:#F29839;">Gjej fjalen </h2>
<p class='spacing'><?php echo $answer ?></p>
 
<form action="loja.php" method="post">
  <input type="hidden" name="answer" value="<?php echo $answer?>" />
  <input type="hidden" name="word" value="<?php echo $word?>" />
 
 <p style="font-weight:bold;color:#F29839;font-size:20px;"> Zgjedh shkronjat:</p>
  <select name="letter">
  <?php foreach ($letters as $value): ?>
    <option <?php if ($value == $params->letter) echo "selected" ?>  
       ><?php echo $value?></option>
  <?php endforeach ?>
  </select>
  <input type="submit" name="guess" value="Zgjedh" />
</form>
<form action="loja.php" method="get">
<button type='submit'>Loje e re</button>
</form>
 
 </div>
</body>
</html>
