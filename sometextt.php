
<!DOCTYPE html>
<html lang="en" manifest="example.appcache">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="style1.css">
	 <link rel="stylesheet" href="titulli.css">
	<link rel="stylesheet" type="text/css" href="zahirmaliqi.css">
	
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Document</title>
   
  </head>

  <body>
<?php include("menuu.php"); ?>
<div style="background-color:white;padding:120px;font-size:20px;line-height:1.5;text-align:justify;">
<?php
$myfile = fopen("sometextt.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("sometext.txt"));
fclose($myfile);
?>
</div>
<?php include("menuu1.php"); ?>
</body>
</html>
