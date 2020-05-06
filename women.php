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
	<link rel="stylesheet" href="stylmac.css">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Document</title>
    
  </head>

  <body>
   <header style="width: 100%">

<div class="ikonat" style="float: left;">
		
		<a href="https://www.linkedin.com/" class="fa fa-linkedin"></a>
		<a href="http://twitter.com" class="fa fa-twitter"></a>
		<a href="http://pinterest.com" class="fa fa-pinterest"></a>
		<a href="http://google.com" class="fa fa-google"></a>
		<a href="https://rss.com/" class="fa fa-rss"></a>

  </div>
  <div style="float: right">
    <form>
	     
           <input type="text" name="text" class="search" placeholder="Search Our Website..."  >
          
           <input type="submit" name="submit" class="submit" value="SEARCH">
       </form>
   </div>
   <br>
   <br>
     </header>

	   <section class="faqja" >
		<nav id="mainMenu">
	   <div class="h6">
		<p id="fresh"><b><big>M</big>ANCHESTER<big>U</big>NITED</b></p>
		<p id="minfont">The best team!</p>
      
       </div>
       <div >
       <img src="mmm.png" alt="Trulli" id="man" style="width:70px; height: 70px; border-radius:50%; " >
       </div>
		
		

                      <ul>
                            <li><a href="Faqja1.html" >HOMEPAGE</a></li>
                            <li> <a href="Historyandcuriosities.html">HISTORY AND CURIOSITIES</a> </li>
			    <li><a href="pjesa2.html">PLAYERS</a>  </li>
                            <li>  <a href="pic.html">GALLERY</a></li>
                            <li> <a href="Tickets.html">FIXTURES</a> </li>
                            <li> <a href="Game.html">GAME</a> </li>
                       </ul> 
          </nav>
</head>
<div class="ekipet">
<ul>
	<li><a href="pic.html" style="color:white;" >First team</a></li>
	<li><a href="women.html" style="color:white;" >Women</a>  </li>
	<li> <a href="rinia.html" style="color:white;" >Under 23s and 18s</a> </li>
	
	<li> <a href="legjendat.html" style="color:white;" >Legends</a> </li>
	
</ul>
 </div>
	<p id="klasa1">GOALKEEPERS</p>
	<div >
	
		
		
			<div class="row1">
		<div class="column1">
		
		
		<div class="flip-box">
		  <div class="flip-box-inner">
			<div class="flip-box-front">
		     
			  <img src="sio1.jpg" alt="lojtar" style="width:350px;height:300px">
			<div class="bottom-left">
				<h1 id="numri">1 </h1>
				<h1 style="text-decoration:overline;
				text-decoration-color: red;">SIOBHAN</h1>
				<h1>CHAMBERLAIN</h1></div>
		     
			
		</div>
			<div class="flip-box-back" >
			  
			  <?php
				
				function familyName($fname, $year) {
					echo "$fname Refsnes. Born in $year <br>";
				}

				familyName("Hege","1975");

				?></div>
			  
			
			</div></div>
		</div>
		  <div class="flip-box"  style="margin-top:0px; margin-right: 20px;" >
			<div class="flip-box-inner">
			  <div class="flip-box-front">
				
				<img src="emi2.jpg" alt="lojtar" style="width:350px;height:300px;"   >
			  <div class="bottom-left" style="margin-top:-130px;">
				  <h1 id="numri">13 </h1>
				  <h1 style="text-decoration:overline;
				  text-decoration-color: red;">EMILY</h1>
				  <h1>RAMSEY</h1></div>
				  
			  
		  </div>
			  <div class="flip-box-back" >
				
				<?php
			   
					$notes = array("Age : 32", "Appearances : 51", "Clean sheets : 32", "DATE OF BIRTH 22 Feb 1987","JOINED 27 Jul 2015");
					rsort($notes);

					$clength = count($notes);
					for($x = 0; $x < $clength; $x++) {
						echo $notes[$x];
						echo "<br>";
					}
					?></div>
				
			</div>
			  
			</div>
			<div class="flip-box" style="margin-top:0px; margin-right: 20px;" >
				<div class="flip-box-inner">
				  <div class="flip-box-front">
				   
					<img src="auro3.jpg" alt="lojtar" style="width:350px;height:300px">
				  <div class="bottom-left" style="margin-top:-130px;">
					  <h1 id="numri">15 </h1>
					  <h1 style="text-decoration:overline;
					  text-decoration-color: red;">AURORA</h1>
					  <h1>MIKALSEN</h1></div>
					  
				  
			  </div>
