<?php

define("servername","localhost");
define("dbname","lajmet");  //kur krijohet databaza lajmet
define("username","root");
define("password","");
/*vazhdim*/
$conn=mysqli_connect(servername,username,password,dbname);
if(!$conn){
	die("Konektimi i deshtuar".mysql_connect_error());
}

?>
