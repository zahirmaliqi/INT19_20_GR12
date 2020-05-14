<?php

require_once("dataconf.php");

/* 
$conn=new mysqli(servername,username,password);
if($conn->connect_error){
	
	die("Konektimi ka deshtuar:".$conn->connect_error);
}
echo "Konektimi i suksesshem";

$sql="CREATE DATABASE signupusers";

$conn->query($sql);

if($conn->query($sql)==TRUE){
	echo "Databaza eshte krijuar!";
}
else 
	echo "<br>Databaza nuk eshte krijuar!".$conn->error;


$conn->close(); */
 



 $conn=mysqli_connect(servername,username,password,dbname);

if(!$conn){
	die("Konektimi ka deshtuar ".mysqli_connect_error());
}

/* $sql="CREATE TABLE users (
   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   emri VARCHAR(50) NOT NULL,
   mbiemri VARCHAR(50),
   email VARCHAR(50),
   password VARCHAR(50),
   data_regjistrimit TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
)";*/
$sql="CREATE TABLE temp_reseto (
  `email` varchar(250) NOT NULL,
  `key` varchar(250) NOT NULL,
  `expDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1";
 if(!mysqli_query($conn,$sql)){
	
	die("<br>Tabela nuk mund te krijohet! ".mysqli_error($conn));
	
}
echo "<br>Tabela eshte krijuar!";

mysqli_close($conn);  


?>
