<?php
$db_host='localhost';
$db_name='quizzer';
$db_user='root';
$db_pass='';
$mysqli = new mysqli($db_host,$db_user,$db_pass,$db_name);



// Check connection
if ($mysqli->connect_error)
  {
  printf("Failed :%s\n " , $mysqli->connect_error);
  exit();
  }
?>
