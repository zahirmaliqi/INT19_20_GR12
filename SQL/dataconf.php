<?php

define("servername","localhost");
define("dbname","signupusers");  //signupusers kur e krijojme databazen me ate emer
define("username","root");
define("password","");

$conn=mysqli_connect(servername,username,password,dbname);
if(!$conn){
	die("Konektimi i deshtuar".mysql_connect_error());
}

?>
