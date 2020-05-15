<?php

require_once("dbshop.php");


/*$conn=new mysqli(servername,username,password);
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
//$conn=mysqli_connect(servername,username,password,dbname);

	 //$query="INSERT INTO product(pname,image,price)
	// VALUES('Adidas F.C Home','m1.jpeg','350')";
	// $query.="INSERT INTO product(pname,image,price)
	 //VALUES('Adidas F.C Home','u2.jpeg','450');"; */
 // $query="INSERT INTO product(pname,image,price)
	//VALUES('Adidas F.C Home','m1.jpeg','350')";
   // $query="INSERT INTO product(pname,image,price)
	//VALUES('Adidas F.C Home','m1.jpeg','350')";

	// $result=mysqli_multi_query($conn,$query);
	// if(!$result){
	//	 die("NUK shtohen tdhenat ".mysqli_error($conn));
	// }
	// echo "Lajmi eshte shtuar";
 


 mysqli_close($conn);

 



 $conn=mysqli_connect(servername,username,password,dbname);

if(!$conn){
	die("Konektimi ka deshtuar ".mysqli_connect_error());
}
$sql="CREATE TABLE product (
  `id` int AUTO_INCREMENT PRIMARY KEY,
  `pname` varchar(250),
  `image` varchar(250),
  `price` double
  
) ENGINE=InnoDB DEFAULT CHARSET=latin1";
 if(!mysqli_query($conn,$sql)){
	
	die("<br>Tabela nuk mund te krijohet! ".mysqli_error($conn));
	
}
echo "<br>Tabela eshte krijuar!";

mysqli_close($conn);


?>
