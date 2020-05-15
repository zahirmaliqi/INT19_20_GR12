<?php 

session_start();

if (isset($_POST['submit']) ) {
	$color=htmlentities($_POST['color'], ENT_QUOTES);

	if(strlen($color) !== 6 ) 
	{
		echo "Six characters please";
	} else if (preg_match('#[^0-9a-f]#i',$color))
	{
		echo "Only letter a to f (A to F) and numbers";
	} else {
		 $_SESSION['color'] = $color;
	} 
		
	
} 


 ?>




<!DOCTYPE html>
<html lang="en" manifest="example.appcache">
<link rel="stylesheet" type="text/css" href="pjesa2.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style1.css">
	 
	 <link rel="stylesheet" type="text/css" href="zahirmaliqi.css">
	 
<head>
	<title></title>
	<script src="exjs.js"></script>
	<script src="jscript.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
  $(document).ready(function(){
  $(".fontshadow").css("color", "#FFA500");
});
	$(document).ready(function(){
    $(".krye").click(function(){
        $(this).slideUp();
    });
});
	$(document).ready(function(){
    $(".up-btn").click(function(){
        $(".f1").slideUp(1000);
       
    });
    
   
    $(".down-btn").click(function(){
        $(".f1").slideDown("fast");
        
    });
});
$("document").ready(function(){
	$(".js-ajax-php-json").submit(function(){
		var data = {
			"action": "test"
		};
		data = $(this).serialize() + "&" + $.param(data);
		$.ajax({
			type: "POST",
			dataType: "json",
			url: "response.php",
			data: data,
			success: function(data) {
				$(".the-return").html(
					"Legend:" + data["Legend"] + "<br />League:" + data["League"] + "<br />Goal: " + data["Goal"]
				);

			}
		});
		return false;
	});
});
</script>
<style type="text/css">
.the-return {
	background: #800000;
	padding: 10px;
	margin-left:300px;
	border-radius:10%;
	margin-right:300px ;}
	
.custom-select {
  position: relative;
  font-family: Arial;
}

.custom-select select {
  display: none;
}

.custom-select {
  background-color:#B22222;
}

.custom-select:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}
	
.custom-select:after {

border-color: transparent transparent #fff transparent;
top: 7px;
}

.custom-select{
color:#ffffff;
padding: 8px 16px;
border:1px solid transparent;
border-color: transparent transparent rgba(0,0,0,0.1) transparent;
cursor: pointer;
}

.custom-select:hover{
	background-color: #800000;
}

body{
	background-color:black;
}
</style>
</head>
 <?php include("menuu.php"); ?>
<body >
<!-- Shikojm nese lidhja me internet egziston nese ekziston shohim ngjyren "green" ndersa nese nuk egziston" No internet"-->
<?php
$host_name = 'www.google.com';
$port_no = '80';

$st = (bool)@fsockopen($host_name, $port_no, $err_no, $err_str, 10);
if ($st) {
    echo "<img  src='greenlight.gif' style='width:35px;height:35px;' />";
} else {
    echo "<img  src='no_int.gif' style='width:100px;height:100px;' />";
}
?>
	<p class="tittleani" >
	<!--substr() - përdor parametrat e fillimit dhe gjatësisë e krejt stringut deri ku ekzekutohet -->	
	<?php
		echo substr("WE WIN TOGETHER  WE LOSE TOGETHER WE ARE UNITED FOREVER",0,34)."<br>";
	?>
	<form method="post" action=""  style="text-align: center;">
		<label for="color">Background color: </label>
		<input type="text" name="color"/>
		<input type="submit" name="submit" value="Change color">

	</form>	
	
	</p>
	
<div class="con">
  <img src="manfirstteam.jpeg" alt="First team" class="img1"  >
	<a href="pic.php">
  <button class="center">FIRST TEAM<br>VIEW PROFILES&nbsp;&rarr;</button>
		</a>
</div>


<div class="row1">
	<div>
         <img src="mangirls.png" class="woman" >
		<a href="women.php" >
         <button class="buttonstyle" id="buttonstyle">WOMEN<br>VIEW PROFILES&nbsp;&rarr;</button>
		</a>
    </div>
    <div>
         <img src="under18.jpeg" class="u18">
	    <a href="rinia.php" >
         <button class="buttonstyle" id="buttonstyle1">UNDER-18S<br>VIEW PROFILES&nbsp;&rarr;</button>
	    </a>
   </div>
</div>

<div class="row1">
	<div>
		<img src="under23.jpeg" class="woman">
		<a href="rinia.php" >
		<button class="buttonstyle" id="buttonstyle2">UNDER-23S<br>VIEW PROFILES&nbsp;&rarr;</button>
		</a>

	</div>
	<div>
		<img src="legends.jpeg" class="u18">
		<a href="legjendat.php" >
		<button class="buttonstyle" id="buttonstyle3">LEGEND<br>VIEW PROFILES&nbsp;&rarr;</button>
		</a>
		
	</div>
	
</div>
<br>
	<h3 class="oldeng">
	   <!--implode() -Bashkon elementet e nje array ne nje string -->
           <?php
               $implode = array('There\'s','only one place','you want to play','and that\'s Old Trafford');
               echo implode( " ",$implode)."<br>";
           ?>
	</h3>
	<div class="sip1">
  <img class ="id2" src="old.jpeg" alt="Old Trafford" style="width:100%">
  <div class="sip2">
  <p class="fontshadow">Old Trafford Stadium is the world-famous home of Manchester United.
      <!--explode() -Kthen nje fjali ne array.Mbas kthimit mundesh te marresh cilin do pjes te ati array  -->
      <?php
             $string1= "So,Old Trafford is a football stadium in Old Trafford, Greater Manchester, England, and the home of Manchester United";
             $vargu1= explode(",", $string1);
             echo $vargu1[0]." "; 
             echo $vargu1[1]." "; 
             echo $vargu1[2]." "; 
             echo $vargu1[3]." "; 
      ?>
	  .With a capacity of 74,879, it is the largest club 
	  football stadium in the United Kingdom, and the 
	  <!--implode() -Bashkon elementet e nje array ne nje string -->
	  <?php
          $implode = array('eleventh','largest');
          echo implode( "-",$implode);
          ?>  in Europe.
	  <br>
	  <span class="FirstFont" >
		  
          <!--printf() -Formaton stringun ne dalje  -->	
	  <!--%u kthen ne output numrin ne dec   -->
	  <?php
           $numri = 10;
           $vendi = "Station";
           printf("Old Trafford is located just over %u miles south-west from Manchester’s city centre and just under 3 miles from  %'*8s .",$numri,$vendi);
          ?>
	
	  </span>
	  <p id="text1" class="fontshadow">
          <!--ltrim() -fshin vetem fjalen  ne fillim te stringut (left trim) -->
	  <!--trim()  -fshin vetem fjalen  ne fillim dhe ne fund te stringut  -->
	  <!--rtrim() -fshin vetem fjalen  ne fund  te stringut (right trim) -->
	  <?php
           $trim="Manchester United have won more trophies than any other club in English football , with a record 20 League titles";
           $trim1=ltrim($trim,"Manchester");
           echo $trim1;
      ?>
		  
		  
		  :<span id="textRegEx"></span></p>
<script>
                 text = document.getElementById("text1").innerHTML; 
                 document.getElementById("textRegEx").innerHTML = /20/.test(text);
</script> 
	  <abbr title=" Dialling 
		  code "> D.C </abbr> :0161 <br>
	  <address  class="fontshadow" id="replace">Address:Sir Matt Busby Way,
		  Stretford, Manchester M16 0RA, United Kingdom<button class="videobttn"
		onclick="myFunction()">Click</button></address>
	  <p class="fontshadow">The first match at Old Trafford was
	:<span id="DataObj"></span>between Manchester United and Liverpool</p>

	</p>

<script>
var d = new Date(1910, 10, 19, 15, 33, 30);
document.getElementById("DataObj").innerHTML = d;
</script>
  </div>
  </div>

<br>
			<div class="krye">
	<p class="htx">
	<p class="rt1"> <svg width="25" height="25">
  <circle cx="14" cy="14" r="10"
  stroke="red" stroke-width="1" fill="black" />
Sorry, your browser does not support inline SVG.
</svg>STADIUM RULES AND REGULATIONS <svg width="50" height="50">
  <rect x="0" y="27" rx="5" ry="5" width="22" height="22"
  style="fill:black;stroke:red;stroke-width:1;opacity:1" />
Sorry, your browser does not support inline SVG.
</svg></p>
	<span><img src="fc.jpeg" class="fc"></span>
	 <?php
		$str="1Tickets are assigned to an individual person and are non-transferable,
			except via the procedures outlined by Italian law and the organising
			club. Rules and procedures for ticket transfers can be found at juventus.com.<br>

                      2Entrance to the stadium shall only be authorised upon proof of identity in the form
			of an official document. An identity document is to be shown upon request to the
			stewards in order to verify correspondence between the name on the ticket and the
			name on the document.<br>

                      3The ticket must be kept, and showed upon request, until the end of the event and until 
			departure from the stadium. Fans must comply with the club's procedures when leaving the stadium.<br>

                      4Spectators may only occupy the seat allocated to them by their ticket and must not move to any other part
			of the stadium without the express permission or instruction of a steward or officer from the club.<br>

                      5Spectators may be subjected to security checks by stewards and also by metal detectors in order to ensure
			that no illegal, banned or dangerous materials are brought into the stadium. By purchasing a valid 
			ticket to the stadium, fans acknowledge the right of Juventus and their appointed safety officials 
			and stewards to search any individual, clothing and other items in their possession, without exception.";
			$str=str_replace(array("1","2","3","4","5"),array("*","*","*","*","*"),$str);
			echo "$str";
			?>
</p>
</div>
<br>
<div class="row1">
<div >
  	<div class="ab">
  		<img src="old1.jpeg" id="figold">
  	</div>
<br>
  	<div class="ab1">
        <img src="old2.jpeg" id="figold">
    </div>
  	
   </div>
<div style="text-align:center"> 
  <button class="videobttn" onclick="playPause();clickCounter() ">Play/Pause</button> 
  <button class="videobttn" onclick="makeBig()">Big</button>
  <button class="videobttn" onclick="makeSmall()">Small</button>
  <button class="videobttn" onclick="makeNormal()">Normal</button>
  <br><br>
  <div id="result" style="color: white; font-size: 11.5px;"></div>
  <video id="video1" width="680" >
    <source src="red.mp4" type="video/mp4">
    <source src="red.ogg" type="video/ogg">
    Your browser does not support HTML5 video.
  </video>
</div> 
</div>

<script> 
var myVideo = document.getElementById("video1"); 

function playPause() { 
  if (myVideo.paused) 
    myVideo.play(); 
  else 
    myVideo.pause(); 
} 

function makeBig() { 
    myVideo.width = 700; 
} 

function makeSmall() { 
    myVideo.width = 550; 
} 

function makeNormal() { 
    myVideo.width = 680; 
} 
function clickCounter() {
  if(typeof(Storage) !== "undefined") {
    if (sessionStorage.clickcount) {
      sessionStorage.clickcount = Number(sessionStorage.clickcount)+1;
    } else {
      sessionStorage.clickcount = 1;
    }
    document.getElementById("result").innerHTML = "You have clicked the button Play/Pause " + sessionStorage.clickcount + " time(s) in this session.";
  } else {
    document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
  }
}
</script> 
<br>
	<div class="bstyle" class="ch1" >
	<button type="button"  class="up-btn" id="btn1">Slide Up </button>
		<button type="button" class="down-btn" id="btn2" >Slide Down</button>
		</div>
		<br>
	<div class="f1">
		
		<div class="bor" class="ch2">
			<img src="m1.jpeg" class="allpic">
			<p class="ctr1"><a class="t1" href="https://www.adidas.co.uk/manchester_united">Adidas F.C Home</a></p>
			
		</div>
		
		<div class="bor" class="ch2">
			<img src="u2.jpeg" class="allpic">
			<p class="ctr1"><a class="t1" href="https://www.adidas.co.uk/manchester_united">Adidas Manchester United</a></p>
		</div>

		<div class="bor" class="ch3">
			<img src="u3.jpeg" class="allpic">
			<p class="ctr1"><a class="t1" href="https://www.adidas.co.uk/manchester_united">Adidas Home 2019/2020</a></p>

		</div>

		<div class="bor" class="ch4">
			<img src="u4.jpeg" class="allpic">
			<p class="ctr1"><a  class="t1" href="https://www.adidas.co.uk/manchester_united">Adidas Rashford</a></p>
		</div>
		
		<div class="bor" class="ch5">
			<img src="u5.jpeg" class="allpic">
			<p class="ctr1"><a class="t1" href="https://www.adidas.co.uk/manchester_united">Adidas Paulo Scholesvi&#231;</a></p>
		</div>

		<div class="bor" class="ch6">
			<img src="u6.jpeg" class="allpic">
			<p class="ctr1" ><a class="t1" href="https://www.adidas.co.uk/manchester_united">Adidas Graphic 2020</a></p>

		</div>



	</div>
	<br>
	<a href="shopping.php"><button class="btnbuy"  type="button">Shop now</button></a>
	<br><br>
	
	<div style="text-align:center;">
	  <form style="color: #f94d00; ">
            Choose a color :
                <select style="background-color:#282828 ;color: white" name="cds" onchange="showCD(this.value)">
                   <option value="">color</option>
                   <option value="Red">Red</option>
                   <option value="Black">Black</option>
                   <option value="White">White</option>
                   <option value="Cherry">Cherry</option>
                   <option value="Mahogany">Mahogany</option>
                </select>
         </form>
         <div id="txtHint" style="color: #f94d00"><b>Wait for  your information...</b></div>
	<br>
	<div>
	<form action="return.php" class="js-ajax-php-json" method="post" accept-charset="utf-8">
           <input type="text" name="Legend" value="" placeholder="Legend" />
           <input type="text" name="League" value="" placeholder="League" />
           <select name="Goal" class="custom-select" style="width:100px;">
		   <option value="Goal">Goal</option>
                  <option value="10">10</option>
                  <option value="15">15</option>
                  <option value="30">30</option>
                  <option value="60">60</option>
           </select>
           <input type="submit" name="submit" value="Submit form"  />
        </form>
	<br>
<div class="the-return">
  Know more about legends.
</div>
		</div>
       </div>	
	<hr>
 <?php include("mennu1.php"); ?>


</body>
</html>
