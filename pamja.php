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
    </head> 
	
	<body>
	<?php
	
	include("menuu.php");?>
	<div style="background-color:white;padding:10px;font-size:18px;">
	   <p>Results for "<?php echo getSearchFor(); ?>"</p>
	  <?php if (! empty($_GET[SEARCHBOX]) && $result = getResults() ) { 
	  while ($row = $result->fetch()) { ?>      
	  <h4 style="color:#800000;"><?php echo $row['titullilink']; ?></h4>    
	  <p><?php echo $row['pershkrimi']; ?></p>   
	   <?php    } }  ?>
	  
</div>
	 <?php include("mennu1.php"); ?>

</body>

</html>
