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
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    
    <title>Women Gallery</title>
    <style type="text/css">
       @font-face {
             font-family: clock;
             src: url(digital-7.ttf);
                  }

       #time{
             width: 100%;
             margin: 0 auto;
             font-family: clock;
             font-size: 20px;

                  }
  </style>
    
  </head>

  <body>
     <?php include("menuu.php"); ?>

  <span style="color: white;"  id="time"> 00:00:00 AM </span>


  <div class="ekipet">
<ol style="color:red">
<li><a href="pic.php" >
<?php class Myclass1
 {
// Declaring three private variables
 private $font_size;
 private $font_color;
 private $string_value;
// Declarte construct method which accepts three parameters and the method customize_print()
 function __construct($font_size,$font_color,$string_value)
 {
 $this->font_size = $font_size;
 $this->font_color = $font_color;
 $this->string_value = $string_value;
 $this->customize_print();
 }
// Declare a method for customize print 
 function customize_print()
 {
 echo "<p style=font-size:".$this->font_size.";color:".$this->font_color.";>".$this->string_value."</p>";
 } 
 }
// Create a new object and passes three parameters 
$f = new MyClass1('20px','white','First team');

 ?></a></li>
	<li><a href="women.php " >
	<?php

class Myclass2
{

private $font_size;
private $font_color;
private $string_value;

function __construct($font_size,$font_color,$string_value)
{
$this->font_size = $font_size;
$this->font_color = $font_color;
$this->string_value = $string_value;
$this->customize_print();
}

function customize_print()
{
echo "<p style=font-size:".$this->font_size.";color:".$this->font_color.";>".$this->string_value."</p>";
} 
}

$f = new MyClass2('20px','white','Women');

?></a></li>
	<li> <a href="rinia.php" style="color:white;" ><?php

class Myclass3
{

private $font_size;
private $font_color;
private $string_value;

function __construct($font_size,$font_color,$string_value)
{
$this->font_size = $font_size;
$this->font_color = $font_color;
$this->string_value = $string_value;
$this->customize_print();
}

function customize_print()
{
echo "<p style=font-size:".$this->font_size.";color:".$this->font_color.";>".$this->string_value."</p>";
} 
}

$f = new MyClass3('20px','white','Under 23s and 18s');

?></a> </li>
	
	<li> <a href="legjendat.php" style="color:white;" ><?php

class Myclass4
{

private $font_size;
private $font_color;
private $string_value;

function __construct($font_size,$font_color,$string_value)
{
$this->font_size = $font_size;
$this->font_color = $font_color;
$this->string_value = $string_value;
$this->customize_print();
}

function customize_print()
{
echo "<p style=font-size:".$this->font_size.";color:".$this->font_color.";>".$this->string_value."</p>";
} 
}

$f = new MyClass4('20px','white','Legends');

?>
</a></li></ol></div>
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
				//function with two arguments ($fname and $year)
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
			   //Sort Array in Descending Order
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
				  <div class="flip-box-back">
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
					  
						<img src="fran4.jpg" alt="lojtar" style="width:350px;height:300px">
					  <div class="bottom-left" style="margin-top:-130px;">
						  <h1 id="numri">22 </h1>
						  <h1 style="text-decoration:overline;
						  text-decoration-color: red;">FRAN</h1>
						  <h1>BENTLEY</h1></div>
						  
					  
				  </div>
					  <div class="flip-box-back">
					  <?php
			   
					$notes = array("Age : 23", "Appearances : 3", "Clean sheets : 3", "DATE OF BIRTH 28 Jun 1996","JOINED 1 Jul 2012");
					rsort($notes);

					$clength = count($notes);
					for($x = 0; $x < $clength; $x++) {
						echo $notes[$x];
						echo "<br>";
					}
					?></div></div>
						
					  
					  
					
					 
                    </div> </div></div>
                    <div >
                        
                            
                            
                        <div class="row1">
                    <div class="column1">
                    <div class="flip-box"  >
                        <div class="flip-box-inner">
                          <div class="flip-box-front">
                           
                            <img src="bent5.jpg" alt="lojtar" style="width:350px;height:300px">
                          <div class="bottom-left" style="margin-top:-130px;">
                              <h1 id="numri">27 </h1>
                              <h1 style="text-decoration:overline;
                              text-decoration-color: red;">MARY</h1>
                              <h1>EARPS</h1></div>
                              
                          
                      </div>
                          <div class="flip-box-back">
						  <?php
			   
					$notes = array("Age : 32", "Appearances : 51", "Clean sheets : 32", "DATE OF BIRTH 28 Jun 1996","JOINED 1 Jul 2012");
					rsort($notes);

					$clength = count($notes);
					for($x = 0; $x < $clength; $x++) {
						echo $notes[$x];
						echo "<br>";
					}
					?></div>
                            
                        </div>
                          
                        </div>
		</div>
		
		
    </div>
    
	
	</div>
	</div>
	<p id="klasa1">DEFENDERS</p>	
	
	<div >
	
		
		
		<div class="row1">
	<div class="column1">
	
	
	<div class="flip-box">
	  <div class="flip-box-inner">
		<div class="flip-box-front">
		 
		  <img src="martha6.jpg" alt="lojtar" style="width:350px;height:300px">
		<div class="bottom-left">
			<h1 id="numri">2 </h1>
			<h1 style="text-decoration:overline;
			text-decoration-color: red;">MARTHA </h1>
			<h1>HARRIS</h1></div>
		 
		
	</div>
		<div class="flip-box-back">
		<?php
			   
					$notes = array("Age : 23", "Appearances : 3", "Clean sheets : 3", "DATE OF BIRTH 28 Jun 1996","JOINED 1 Jul 2012");
					rsort($notes);

					$clength = count($notes);
					for($x = 0; $x < $clength; $x++) {
						echo $notes[$x];
						echo "<br>";
					}
					?></div>
		  
		
		</div></div>
	</div>
	  <div class="flip-box"  style="margin-top:0px; margin-right: 20px;" >
		<div class="flip-box-inner">
		  <div class="flip-box-front">
			
			<img src="lotta7.jpg" alt="lojtar" style="width:350px;height:300px;"   >
		  <div class="bottom-left" style="margin-top:-130px;">
			  <h1 id="numri">3 </h1>
			  <h1 style="text-decoration:overline;
			  text-decoration-color: red;">LOTTA</h1>
			  <h1>OKVIST</h1></div>
			  
		  
	  </div>
		  <div class="flip-box-back" >
		  <?php
			   
					$notes = array("Age : 23", "Appearances : 3", "Clean sheets : 3", "DATE OF BIRTH 28 Jun 1996","JOINED 1 Jul 2012");
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
			   
				<img src="amy8.jpg" alt="lojtar" style="width:350px;height:300px">
			  <div class="bottom-left" style="margin-top:-130px;">
				  <h1 id="numri">4 </h1>
				  <h1 style="text-decoration:overline;
				  text-decoration-color: red;">AMY</h1>
				  <h1>TURNER</h1></div>
				  
			  
		  </div>
			  <div class="flip-box-back">
			  <?php
			   
					$notes = array("Age : 23", "Appearances : 3", "Clean sheets : 3", "DATE OF BIRTH 28 Jun 1996","JOINED 1 Jul 2012");
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
				  
					<img src="abbi9.jpg" alt="lojtar" style="width:350px;height:300px">
				  <div class="bottom-left" style="margin-top:-130px;">
					  <h1 id="numri">5 </h1>
					  <h1 style="text-decoration:overline;
					  text-decoration-color: red;">ABBIE</h1>
					  <h1>MCMANUS</h1></div>
					  
				  
			  </div>
				  <div class="flip-box-back">
				  <?php
			   
					$notes = array("Age : 23", "Appearances : 3", "Clean sheets : 3", "DATE OF BIRTH 28 Jun 1996","JOINED 1 Jul 2012");
					rsort($notes);

					$clength = count($notes);
					for($x = 0; $x < $clength; $x++) {
						echo $notes[$x];
						echo "<br>";
					}
					?></div></div>
					
				  
				  
				
				 
				</div>
	</div>
	
	
</div>
<div >
	
		
		
	<div class="row1">
<div class="column1">
	
	
	<div class="flip-box">
	  <div class="flip-box-inner">
		<div class="flip-box-front">
		 
		  <img src="smith9.jpg" alt="lojtar" style="width:350px;height:300px">
		<div class="bottom-left">
			<h1 id="numri">20 </h1>
			<h1 style="text-decoration:overline;
			text-decoration-color: red;">KRISY</h1>
			<h1>SMAITH</h1></div>
		 
		
	</div>
		<div class="flip-box-back">
		<?php
			   
					$notes = array("Age : 23", "Appearances : 3", "Clean sheets : 3", "DATE OF BIRTH 28 Jun 1996","JOINED 1 Jul 2012");
					rsort($notes);

					$clength = count($notes);
					for($x = 0; $x < $clength; $x++) {
						echo $notes[$x];
						echo "<br>";
					}
					?></div>
		  
		
		</div></div>
	</div>
	  <div class="flip-box"  style="margin-top:0px; margin-right: 20px;" >
		<div class="flip-box-inner">
		  <div class="flip-box-front">
			
			<img src="mill10.jpg" alt="lojtar" style="width:350px;height:300px;"   >
		  <div class="bottom-left" style="margin-top:-130px;">
			  <h1 id="numri">21 </h1>
			  <h1 style="text-decoration:overline;
			  text-decoration-color: red;">MILLIE</h1>
			  <h1>TURNER</h1></div>
			  
		  
	  </div>
		  <div class="flip-box-back" >
		  <?php
			   
					$notes = array("Age : 23", "Appearances : 3", "Clean sheets : 3", "DATE OF BIRTH 28 Jun 1996","JOINED 1 Jul 2012");
					rsort($notes);

					$clength = count($notes);
					for($x = 0; $x < $clength; $x++) {
						echo $notes[$x];
						echo "<br>";
					}
					?></div>
			
		</div>
		  
		</div>
	
		  
				  
				
				 
				</div>
	</div>
	
	
</div>
<div >
	
		
		
	

<p id="klasa1">MIDFIELDERS</p>	
	
	<div >
	
		
		
		<div class="row1">
	<div class="column1">
	
	
	<div class="flip-box">
	  <div class="flip-box-inner">
		<div class="flip-box-front">
		 
		  <img src="1aimee.jpg" alt="lojtar" style="width:350px;height:300px">
		<div class="bottom-left">
			<h1 id="numri">6 </h1>
			<h1 style="text-decoration:overline;
			text-decoration-color: red;">AMIEE</h1>
			<h1>PALMER</h1></div>
		 
		
	</div>
		<div class="flip-box-back">
		<?php
			   //Sort Array in Descending Order
					$notes = array("Age : 23", "Appearances : 3", "Clean sheets : 3", "DATE OF BIRTH 28 Jun 1996","JOINED 1 Jul 2012");
					rsort($notes);

					$clength = count($notes);
					for($x = 0; $x < $clength; $x++) {
						echo $notes[$x];
						echo "<br>";
					}
					?></div>
		  
		
		</div></div>
	</div>
	  <div class="flip-box"  style="margin-top:0px; margin-right: 20px;" >
		<div class="flip-box-inner">
		  <div class="flip-box-front" ; style="background-color:black;">
			
			<img src="2moll.jpg" alt="lojtar" style="width:350px;height:300px;"   >
		  <div class="bottom-left" style="margin-top:-130px;">
			  <h1 id="numri">8 </h1>
			  <h1 style="text-decoration:overline;
			  text-decoration-color: red;">MOLLIE</h1>
			  <h1>GREEN</h1></div>
			  
		  
	  </div>
		  <div class="flip-box-back" >
		  <?php
			   //Sort Array in Descending Order
					$notes = array("Age : 23", "Appearances : 3", "Clean sheets : 3", "DATE OF BIRTH 28 Jun 1996","JOINED 1 Jul 2012");
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
			  <div class="flip-box-front"; style="background-color:black;">
			   
				<img src="3katie.jpg" alt="lojtar" style="width:350px;height:300px ; ">
			  <div class="bottom-left" style="margin-top:-130px;">
				  <h1 id="numri">10 </h1>
				  <h1 style="text-decoration:overline;
				  text-decoration-color: red;">KATIE</h1>
				  <h1>ZELEM</h1></div>
				  
			  
		  </div>
			  <div class="flip-box-back">
			  <?php
			   //Sort Array in Descending Order
					$notes = array("Age : 23", "Appearances : 3", "Clean sheets : 3", "DATE OF BIRTH 28 Jun 1996","JOINED 1 Jul 2012");
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
				  
					<img src="4hay.jpg" alt="lojtar" style="width:350px;height:300px">
				  <div class="bottom-left" style="margin-top:-130px;">
					  <h1 id="numri">12 </h1>
					  <h1 style="text-decoration:overline;
					  text-decoration-color: red;">HAYLEY</h1>
					  <h1>LADD</h1></div>
					  
				  
			  </div>
				  <div class="flip-box-back">
				  <?php
			   //Sort Array in Descending Order
					$notes = array("Age : 23", "Appearances : 3", "Clean sheets : 3", "DATE OF BIRTH 28 Jun 1996","JOINED 1 Jul 2012");
					rsort($notes);

					$clength = count($notes);
					for($x = 0; $x < $clength; $x++) {
						echo $notes[$x];
						echo "<br>";
					}
					?></div></div>
					
				  
				  
				
				 
				</div>
	</div>
	
	
</div>
<div >
	
		
		
	<div class="row1">
<div class="column1">
	
	
	<div class="flip-box">
	  <div class="flip-box-inner">
		<div class="flip-box-front">
		 
		  <img src="5jakc.jpg" alt="lojtar" style="width:350px;height:300px">
		<div class="bottom-left">
			<h1 id="numri">14 </h1>
			<h1 style="text-decoration:overline;
            text-decoration-color: red;">JACKIE</h1>
            <h1>GROENEN</h1>
					  
			</div>
		 
		
	</div>
		<div class="flip-box-back">
		<?php
			   //Sort Array in Descending Order
					$notes = array("Age : 23", "Appearances : 3", "Clean sheets : 3", "DATE OF BIRTH 28 Jun 1996","JOINED 1 Jul 2012");
					rsort($notes);

					$clength = count($notes);
					for($x = 0; $x < $clength; $x++) {
						echo $notes[$x];
						echo "<br>";
					}
					?></div>
		  
		
		</div></div>
	</div>
	  <div class="flip-box"  style="margin-top:0px; margin-right: 20px;" >
		<div class="flip-box-inner">
		  <div class="flip-box-front">
			
			<img src="6lauren.jpg" alt="lojtar" style="width:350px;height:300px;"   >
		  <div class="bottom-left" style="margin-top:-130px;">
			  <h1 id="numri">16 </h1>
			  <h1 style="text-decoration:overline;
			  text-decoration-color: red;">LAUREN</h1>
			  <h1>JAMES</h1></div>
			  
		  
	  </div>
		  <div class="flip-box-back" >
		  <?php
			   //Sort Array in Descending Order
					$notes = array("Age : 23", "Appearances : 3", "Clean sheets : 3", "DATE OF BIRTH 28 Jun 1996","JOINED 1 Jul 2012");
					rsort($notes);

					$clength = count($notes);
					for($x = 0; $x < $clength; $x++) {
						echo $notes[$x];
						echo "<br>";
					}
					?></div>
			
		</div>
			  	</div></div>
					
			
		
			  
			</div>
		</div>
					
				  
				  
				
				 
				</div>
	

<p id="klasa1">FORWARDS</p>	
	
	<div >
	
		
		
		<div class="row1">
	<div class="column1">
	
	
	<div class="flip-box">
	  <div class="flip-box-inner">
		<div class="flip-box-front">
		 
		  <img src="1elle.jpg" alt="lojtar" style="width:350px;height:300px">
		<div class="bottom-left">
			<h1 id="numri">7 </h1>
			<h1 style="text-decoration:overline;
			text-decoration-color: red;">ELLA</h1>
			<h1>TOONE</h1></div>
		 
		
	</div>
		<div class="flip-box-back">
		<?php
			   //Sort Array in Descending Order
					$notes = array("Age : 23", "Appearances : 3", "Clean sheets : 3", "DATE OF BIRTH 28 Jun 1996","JOINED 1 Jul 2012");
					rsort($notes);

					$clength = count($notes);
					for($x = 0; $x < $clength; $x++) {
						echo $notes[$x];
						echo "<br>";
					}
					?></div>
		  
		
		</div></div>
	</div>
	  <div class="flip-box"  style="margin-top:0px; margin-right: 20px;" >
		<div class="flip-box-inner">
		  <div class="flip-box-front" ; style="background-color:black;">
			
			<img src="2jess.jpg" alt="lojtar" style="width:350px;height:300px;"   >
		  <div class="bottom-left" style="margin-top:-130px;">
			  <h1 id="numri">9 </h1>
			  <h1 style="text-decoration:overline;
			  text-decoration-color: red;">JESS</h1>
			  <h1>SIGSWORTH</h1></div>
			  
		  
	  </div>
		  <div class="flip-box-back" >
		  <?php
			   //Sort Array in Descending Order
					$notes = array("Age : 23", "Appearances : 3", "Clean sheets : 3", "DATE OF BIRTH 28 Jun 1996","JOINED 1 Jul 2012");
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
			  <div class="flip-box-front"; style="background-color:black;">
			   
				<img src="3leah.jpg" alt="lojtar" style="width:350px;height:300px ; ">
			  <div class="bottom-left" style="margin-top:-130px;">
				  <h1 id="numri">11</h1>
				  <h1 style="text-decoration:overline;
				  text-decoration-color: red;">LEAH</h1>
				  <h1>GALTON</h1></div>
				  
			  
		  </div>
			  <div class="flip-box-back">
			  <?php
			   //Sort Array in Descending Order
					$notes = array("Age : 23", "Appearances : 3", "Clean sheets : 3", "DATE OF BIRTH 28 Jun 1996","JOINED 1 Jul 2012");
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
				  
					<img src="4lizz.jpg" alt="lojtar" style="width:350px;height:300px">
				  <div class="bottom-left" style="margin-top:-130px;">
					  <h1 id="numri">17</h1>
					  <h1 style="text-decoration:overline;
					  text-decoration-color: red;">LIZZIE</h1>
					  <h1>ARNOT</h1></div>
					  
				  
			  </div>
				  <div class="flip-box-back">
				  <?php
			   //Sort Array in Descending Order
					$notes = array("Age : 23", "Appearances : 3", "Clean sheets : 3", "DATE OF BIRTH 28 Jun 1996","JOINED 1 Jul 2012");
					rsort($notes);

					$clength = count($notes);
					for($x = 0; $x < $clength; $x++) {
						echo $notes[$x];
						echo "<br>";
					}
					?></div></div>
					
				  
				  
				
				 
				</div>
	</div>
	
	
</div>
<div >
	
		
		
	<div class="row1">
<div class="column1">
	
	
	<div class="flip-box">
	  <div class="flip-box-inner">
		<div class="flip-box-front">
		 
		  <img src="5kri.jpg" alt="lojtar" style="width:350px;height:300px">
		<div class="bottom-left">
			<h1 id="numri">18 </h1>
			<h1 style="text-decoration:overline;
			text-decoration-color: red;">KIRSTY</h1>
			<h1>HANSON</h1></div></div>
		 
		
	</div>
		<div class="flip-box-back">
		<?php
			   //Sort Array in Descending Order
					$notes = array("Age : 23", "Appearances : 3", "Clean sheets : 3", "DATE OF BIRTH 28 Jun 1996","JOINED 1 Jul 2012");
					rsort($notes);

					$clength = count($notes);
					for($x = 0; $x < $clength; $x++) {
						echo $notes[$x];
						echo "<br>";
					}
					?></div>
		  
		
		</div></div>
    
    <div class="flip-box">
        <div class="flip-box-inner">
          <div class="flip-box-front">
           
            <img src="6jane.jpg" alt="lojtar" style="width:350px;height:300px">
          <div class="bottom-left">
              <h1 id="numri">19 </h1>
              <h1 style="text-decoration:overline;
              text-decoration-color: red;">JANE</h1>
              <h1>ROSS</h1></div></div>
           
          
      </div>
          <div class="flip-box-back">
		  <?php
			   //Sort Array in Descending Order
					$notes = array("Age : 23", "Appearances : 3", "Clean sheets : 3", "DATE OF BIRTH 28 Jun 1996","JOINED 1 Jul 2012");
					rsort($notes);

					$clength = count($notes);
					for($x = 0; $x < $clength; $x++) {
						echo $notes[$x];
						echo "<br>";
					}
					?></div>
            
          
          </div></div>
      </div>
    
</div></div></div>
	<br/>
	
		<br/><br/>


		<hr></section>
<?php include("mennu1.php");?>
	
</body>




</html>


