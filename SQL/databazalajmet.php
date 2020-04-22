<?php

require_once("dbconfigi.php");


/* $conn=new mysqli(servername,username,password);
if($conn->connect_error){
	
	die("Konektimi ka deshtuar:".$conn->connect_error);
}
echo "Konektimi i suksesshem";

$sql="CREATE DATABASE lajmet";
//$sql="DROP DATABASE ushtrime";
$conn->query($sql);

if($conn->query($sql)==TRUE){
	echo "Databaza eshte krijuar!";
}
else 
	echo "Databaza nuk eshte krijuar!".$conn->error;


$conn->close();
 */



 $conn=mysqli_connect(servername,username,password,dbname);

	 $query="INSERT INTO lajmet(titullilink,pershkrimi)
	 VALUES('UNITED MAKE CHRISTMAS DREAMS COME TRUE','The Manchester United first-team squad paid a special festive visit...')";
	
	 $result=mysqli_multi_query($conn,$query);
	 if(!$result){
		 die("NUK shtohen tdhenat ".mysqli_error($conn));
	 }
	 echo "Lajmi eshte shtuar";
 


 mysqli_close($conn);



/*  $conn=mysqli_connect(servername,username,password,dbname);

if(!$conn){
	die("Konektimi ka deshtuar ".mysqli_connect_error());
}

$sql="CREATE TABLE lajmet (
   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   titullilink VARCHAR(100) NOT NULL,
   pershkrimi VARCHAR(50),
   data_regjistrimit TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
)";
 


if(!mysqli_query($conn,$sql)){
	
	die("<br>Tabela nuk mund te krijohet! ".mysqli_error($conn));
	
}
echo "<br>Tabela eshte krijuar";

mysqli_close($conn); */


?>
