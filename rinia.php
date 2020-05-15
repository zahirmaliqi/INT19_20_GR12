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
   <?php include("menuu.php"); ?>



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
		     
			  <img src="1mat.jpg" alt="lojtar" style="width:350px;height:300px">
			<div class="bottom-left">
				<h1 id="numri">51 </h1>
				<h1 style="text-decoration:overline;
				text-decoration-color: red;">MATEJ</h1>
				<h1>KOVAR</h1></div>
		     
			
		</div>
			<div class="flip-box-back" >
			 	<?php
				
				function rinia1($appearances, $year,$age,$sheets,$join) {
					echo " Appearances:$appearances<br> Born in $year<br>Age: $age<br>Clean Sheets:$sheets <br>Joined:$join<br>";
				}

				rinia1("380","1990","29","131","2 Jul 2011");

				?></div>
			  
			
			</div></div>
		</div>
		  <div class="flip-box"  style="margin-top:0px; margin-right: 20px;" >
			<div class="flip-box-inner">
			  <div class="flip-box-front">
				
				<img src="2dean.jpg" alt="lojtar" style="width:350px;height:300px;"   >
			  <div class="bottom-left" style="margin-top:-130px;">
				  <h1 id="numri">-- </h1>
				  <h1 style="text-decoration:overline;
				  text-decoration-color: red;">DEAN</h1>
				  <h1>HENDERSON</h1></div>
				  
			  
		  </div>
			  <div class="flip-box-back" >
					<?php
				
				function rinia2($appearances, $year,$age,$sheets,$join) {
					echo " Appearances:$appearances<br> Born in $year<br>Age: $age<br>Clean Sheets:$sheets <br>Joined:$join<br>";
				}

				rinia2("380","1990","29","131","2 Jul 2011");

				?></div>
				
			</div>
			  
			</div>
			<div class="flip-box" style="margin-top:0px; margin-right: 20px;" >
				<div class="flip-box-inner">
				  <div class="flip-box-front">
				   
					<img src="3ond.jpg" alt="lojtar" style="width:350px;height:300px">
				  <div class="bottom-left" style="margin-top:-130px;">
					  <h1 id="numri">-- </h1>
					  <h1 style="text-decoration:overline;
					  text-decoration-color: red;">ONDREJ</h1>
					  <h1>MASTNY</h1></div>
					  
				  
			  </div>
				  <div class="flip-box-back">
						<?php
				
				function rinia3($appearances, $year,$age,$sheets,$join) {
					echo " Appearances:$appearances<br> Born in $year<br>Age: $age<br>Clean Sheets:$sheets <br>Joined:$join<br>";
				}

				rinia3("380","1990","29","131","2 Jul 2011");

				?></div>
					
				</div>
				  
				</div>

				<div class="flip-box" style="margin-top:0px; margin-right: 20px;" >
					<div class="flip-box-inner">
					  <div class="flip-box-front">
					  
						<img src="4jacob.jpg" alt="lojtar" style="width:350px;height:300px">
					  <div class="bottom-left" style="margin-top:-130px;">
						  <h1 id="numri">--- </h1>
						  <h1 style="text-decoration:overline;
						  text-decoration-color: red;">JACOB</h1>
						  <h1>CARNEY</h1></div>
						  
					  
				  </div>
					  <div class="flip-box-back">
							<?php
				
				function rinia4($appearances, $year,$age,$sheets,$join) {
					echo " Appearances:$appearances<br> Born in $year<br>Age: $age<br>Clean Sheets:$sheets <br>Joined:$join<br>";
				}

				rinia4("380","1990","29","131","2 Jul 2011");

				?></div></div>
						
					  
					  
					
					 
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
		 
		  <img src="5ted.jpg" alt="lojtar" style="width:350px;height:300px">
		<div class="bottom-left">
			<h1 id="numri">71 </h1>
			<h1 style="text-decoration:overline;
			text-decoration-color: red;">TEDEN</h1>
			<h1>MENGI</h1></div>
		 
		
	</div>
		<div class="flip-box-back">
			<?php
				
				function rinia6($appearances, $year,$age,$sheets,$join) {
					echo " Appearances:$appearances<br> Born in $year<br>Age: $age<br>Clean Sheets:$sheets <br>Joined:$join<br>";
				}

				rinia6("380","1990","29","131","2 Jul 2011");

				?></div>
		  
		
		</div></div>
	</div>
	  <div class="flip-box"  style="margin-top:0px; margin-right: 20px;" >
		<div class="flip-box-inner">
		  <div class="flip-box-front">
			
			<img src="6calen.jpg" alt="lojtar" style="width:350px;height:300px;"   >
		  <div class="bottom-left" style="margin-top:-130px;">
			  <h1 id="numri">--- </h1>
			  <h1 style="text-decoration:overline;
			  text-decoration-color: red;">CALEN</h1>
			  <h1>GALLAGHER</div>
			  
		  
	  </div>
		  <div class="flip-box-back" >
				<?php
				
				function rinia5($appearances, $year,$age,$sheets,$join) {
					echo " Appearances:$appearances<br> Born in $year<br>Age: $age<br>Clean Sheets:$sheets <br>Joined:$join<br>";
				}

				rinia5("380","1990","29","131","2 Jul 2011");

				?></div>
			
		</div>
		  
		</div>
		<div class="flip-box" style="margin-top:0px; margin-right: 20px;" >
			<div class="flip-box-inner">
			  <div class="flip-box-front">
			   
				<img src="7ethan.jpg" alt="lojtar" style="width:350px;height:300px">
			  <div class="bottom-left" style="margin-top:-130px;">
				  <h1 id="numri">41 </h1>
				  <h1 style="text-decoration:overline;
				  text-decoration-color: red;">ETHAN</h1>
				  <h1>LAIRD</h1></div>
				  
			  
		  </div>
			  <div class="flip-box-back">
				<p>Age: <big>18</big> </p>
				<p>COUNTRY ENGLAND </p>
				
				<p>DATE OF BIRTH
					21 FEB 2001</p>
				<p>JOINED 1 Jul 2018</p></div>
				
			</div>
			  
			</div>

			<div class="flip-box" style="margin-top:0px; margin-right: 20px;" >
				<div class="flip-box-inner">
				  <div class="flip-box-front">
				  
					<img src="8max.jpg" alt="lojtar" style="width:350px;height:300px">
				  <div class="bottom-left" style="margin-top:-130px;">
					  <h1 id="numri">51 </h1>
					  <h1 style="text-decoration:overline;
					  text-decoration-color: red;">MAX</h1>
					  <h1>TAYLOR</h1></div>
					  
				  
			  </div>
				  <div class="flip-box-back">
					<p>Age: <big>19</big> </p>
					<p>COUNTRY ENGLAND </p>
					
					<p>DATE OF BIRTH 5 MAR  2000</p>
					<p>JOINED 5 AUG 2019</p></div></div>
	</div>
	
	
</div>

	</div>
</div>
</div>

<p id="klasa1">MIDFIELDERS</p>	
	
	<div >
	
		
		
		<div class="row1">
	<div class="column1">
	
	
	<div class="flip-box">
	  <div class="flip-box-inner">
		<div class="flip-box-front">
		 
		  <img src="9arnau.jpg" alt="lojtar" style="width:350px;height:300px">
		<div class="bottom-left">
			<h1 id="numri">47 </h1>
			<h1 style="text-decoration:overline;
			text-decoration-color: red;">ARNAU</h1>
			<h1>PUIGMAL</h1></div>
		 
		
	</div>
		<div class="flip-box-back">
		  <p>Age: <big>18</big> </p>
		  <p>COUNTRY SPAIN</p>
		  
		  <p>DATE OF BIRTH 15 MAR 2001</p>
			<p>JOINED 8 AUG 2017</p></div>
		  
		
		</div></div>
	</div>
	  <div class="flip-box"  style="margin-top:0px; margin-right: 20px;" >
		<div class="flip-box-inner">
		  <div class="flip-box-front" ; style="background-color:black;">
			
			<img src="10ethan.jpg" alt="lojtar" style="width:350px;height:300px;"   >
		  <div class="bottom-left" style="margin-top:-130px;">
			  <h1 id="numri">51 </h1>
			  <h1 style="text-decoration:overline;
			  text-decoration-color: red;">ETHAN</h1>
			  <h1>GALBRAITH</h1></div>
			  
		  
	  </div>
		  <div class="flip-box-back" >
			<p>Age: <big>31</big> </p>
			<p>COUNTRY NORTHERN IRELAND </p>
			
			<p>DATE OF BIRTH
				28 APR 2001</p>
			<p>JOINED 25 Jun 2017</p></div>
			
		</div>
		  
		</div>
		<div class="flip-box" style="margin-top:0px; margin-right: 20px;" >
			<div class="flip-box-inner">
			  <div class="flip-box-front"; style="background-color:black;">
			   
				<img src="11zidane.jpg" alt="lojtar" style="width:350px;height:300px ; ">
			  <div class="bottom-left" style="margin-top:-130px;">
				  <h1 id="numri">-- </h1>
				  <h1 style="text-decoration:overline;
				  text-decoration-color: red;">ZIDANE</h1>
				  <h1>IQBAL</h1></div>
				  
			  
		  </div>
			  <div class="flip-box-back">
				<p>Age: <big>16</big> </p>
				
				<p>COUNTRY ENGLAND </p>
				<p>DATE OF BIRTH
					15 DEC 2003</p>
				<p>JOINED 1 Jul 2019</p></div>
				
			</div>
			  
			</div>

			<div class="flip-box" style="margin-top:0px; margin-right: 20px;" >
				<div class="flip-box-inner">
				  <div class="flip-box-front">
				  
					<img src="12maxh.jpg" alt="lojtar" style="width:350px;height:300px">
				  <div class="bottom-left" style="margin-top:-130px;">
					  <h1 id="numri">-- </h1>
					  <h1 style="text-decoration:overline;
					  text-decoration-color: red;">MAX</h1>
					  <h1>HAYGARTH</h1></div>
					  
				  
			  </div>
				  <div class="flip-box-back">
					<p>Age: <big>17</big> </p>
					<p>COUNTRY ENGLAND </p>
					
					<p>DATE OF BIRTH 1 JAN  2002</p>
					<p>JOINED 1 JUL 2019</p></div></div>
					
				  
				  
				
				 
				</div>
	</div>
	
	
</div>
</div></div>
	
		
		
	

<p id="klasa1">FORWARDS</p>	
	
	<div >
	
		
		
		<div class="row1">
	<div class="column1">
	
	
	<div class="flip-box">
	  <div class="flip-box-inner">
		<div class="flip-box-front">
		 
		  <img src="13anth.jpg" alt="lojtar" style="width:350px;height:300px">
		<div class="bottom-left">
			<h1 id="numri">-- </h1>
			<h1 style="text-decoration:overline;
			text-decoration-color: red;">ANTHONY</h1>
			<h1>ELANGA</h1></div>
		 
		
	</div>
		<div class="flip-box-back">
		  <p>Age: <big>17</big> </p>
		  
		  <p>COUNTRY SWEDEN</p>
		  <p>DATE OF BIRTH 19 DEC 2002</p>
			<p>JOINED 22 JAN 2018</p></div>
		  
		
		</div></div>
	</div>
	  <div class="flip-box"  style="margin-top:0px; margin-right: 20px;" >
		<div class="flip-box-inner">
		  <div class="flip-box-front" ; style="background-color:black;">
			
			<img src="14dill.jpg" alt="lojtar" style="width:350px;height:300px;"   >
		  <div class="bottom-left" style="margin-top:-130px;">
			  <h1 id="numri">-- </h1>
			  <h1 style="text-decoration:overline;
			  text-decoration-color: red;">DILLON</h1>
			  <h1>HOOGEWERF</h1></div>
			  
		  
	  </div>
		  <div class="flip-box-back" >
			<p>Age: <big>16</big> </p>
			
			<p>COUNTRY NETHERLANDS </p>
			<p>DATE OF BIRTH
				5 DEC 2003</p>
			<p>JOINED 1 SEP 2019</p></div>
			
		</div>
		  
		</div>
		<div class="flip-box" style="margin-top:0px; margin-right: 20px;" >
			<div class="flip-box-inner">
			  <div class="flip-box-front"; style="background-color:black;">
			   
				<img src="15dman.jpg" alt="lojtar" style="width:350px;height:300px ; ">
			  <div class="bottom-left" style="margin-top:-130px;">
				  <h1 id="numri">49</h1>
				  <h1 style="text-decoration:overline;
				  text-decoration-color: red;">D'MANI</h1>
				  <h1>MELLOR</h1></div>
				  
			  
		  </div>
			  <div class="flip-box-back">
				<p>Age: <big>19</big> </p>
				<p>COUNTRY ENGLNAD </p>
				
				<p>DATE OF BIRTH
					31 OCT 2000</p>
				<p>JOINED 1 Jul 2017</p></div>
				
			</div>
			  
			</div>

			<div class="flip-box" style="margin-top:0px; margin-right: 20px;" >
				<div class="flip-box-inner">
				  <div class="flip-box-front">
				  
					<img src="16lar.jpg" alt="lojtar" style="width:350px;height:300px">
				  <div class="bottom-left" style="margin-top:-130px;">
					  <h1 id="numri">59 </h1>
					  <h1 style="text-decoration:overline;
					  text-decoration-color: red;">LARGIE </h1>
					  <h1>RAMAZANI</h1></div>
					  
				  
			  </div>
				  <div class="flip-box-back">
					<p>Age: <big>18</big> </p>
					<p>Appearances: <big>28</big></p>
					<p>Total Goals: <big>8</big></p>
					<p>DATE OF BIRTH 1 OCT  2001</p>
					<p>JOINED 1 JUL 2018</p></div></div>
					
				  
				  
				
				 
				</div>
	</div>
	
	
</div>
</div></div>
	<br/>
	
		<br/><br/>


	


		<hr></section>
<?php include("mennu1.php");?>
	
</body>




</html>

