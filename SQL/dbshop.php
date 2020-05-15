<?php

define("servername","localhost");
define("dbname","product_details");  
define("username","root");
define("password","");

$conn=mysqli_connect(servername,username,password,dbname);
if(!$conn){
	die("Konektimi i deshtuar".mysqli_connect_error());
}

?>
