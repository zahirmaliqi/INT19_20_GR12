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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
	$(document).ready(function(){
    var d = new Date();
    var n = d.getHours();
    if (n > 19 || n < 6)
//Nese ora eshte mbas 19:00 ose para 06:00 ,aplikohet class "night" 
      document.body.className = "night";
    else if (n > 16 && n < 19)
  //Nese koha eshte ne mes 16:00 - 19:00 aplikohet class "sunset"
      document.body.className = "sunset";
    else
      //Raste tjera aplikohet class "day"
      document.body.className = "day";
});

	

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

</script>
</head>
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
       <p id="minfont">
	<!--explode() -Kthen nje fjali ne array.Mbas kthimit mundesh te marresh cilin do pjes te ati array  -->
       	<?php
             $string= "The best team in champions league !";
             $vargu = explode(" ", $string);
             echo $vargu[0]." "; 
             echo $vargu[1]." "; 
             echo $vargu[2]." "; 
             echo $vargu[6]." "; 
        ?>
       </p>
      
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

<body >
	<p class="tittleani" >
		
	<?php
		echo substr("WE WIN TOGETHER  WE LOSE TOGETHER WE ARE UNITED FOREVER",0,34)."<br>";
	?>
	
	</p>
	
<div class="con">
  <img src="manfirstteam.jpeg" alt="First team" class="img1"  >
	<a href="pic.html">
  <button class="center">FIRST TEAM<br>VIEW PROFILES&nbsp;&rarr;</button>
		</a>
</div>


<div class="row1">
	<div>
         <img src="mangirls.png" class="woman" >
		<a href="women.html" >
         <button class="buttonstyle" id="buttonstyle">WOMEN<br>VIEW PROFILES&nbsp;&rarr;</button>
		</a>
    </div>
    <div>
         <img src="under18.jpeg" class="u18">
	    <a href="rinia.html" >
         <button class="buttonstyle" id="buttonstyle1">UNDER-18S<br>VIEW PROFILES&nbsp;&rarr;</button>
	    </a>
   </div>
</div>

<div class="row1">
	<div>
		<img src="under23.jpeg" class="woman">
		<a href="rinia.html" >
		<button class="buttonstyle" id="buttonstyle2">UNDER-23S<br>VIEW PROFILES&nbsp;&rarr;</button>
		</a>

	</div>
	<div>
		<img src="legends.jpeg" class="u18">
		<a href="legjendat.html" >
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
			and stewards to search any individual, clothing and other items in their possession, without exception."
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
			<p class="ctr1">&#36;
				
			<!--printf() -Formaton numrin  ne dalje  -->	
			<?php
                           $number = 89;
                           printf("%1\$.2f",$number);
                        ?>
			
			
			</p>
			<p class="ctr1"><a class="t1" href="https://www.adidas.co.uk/manchester_united">Adidas F.C Home</a></p>
			
		</div>
		
		<div class="bor" class="ch2">
			<img src="u2.jpeg" class="allpic">
			<p class="ctr1"><span class="nounder">&#36;160.99</span>&nbsp;&nbsp;&#36;129.99</p>
			<p class="ctr1"><a class="t1" href="https://www.adidas.co.uk/manchester_united">Adidas Manchester United</a></p>
		</div>

		<div class="bor" class="ch3">
			<img src="u3.jpeg" class="allpic">
			<p class="ctr1">
			<script> 
	                       var num=89.59; 
	                       document.write("&#36;" + num.toString());		 
                        </script>  
			</p>
			<p class="ctr1"><a class="t1" href="https://www.adidas.co.uk/manchester_united">Adidas Home 2019/2020</a></p>

		</div>

		<div class="bor" class="ch4">
			<img src="u4.jpeg" class="allpic">
			<p class="ctr1">&#36;<span id="mathpow"></span></p>
			<p class="ctr1"><a  class="t1" href="https://www.adidas.co.uk/manchester_united">Adidas Rashford</a></p>
			<script>
              document.getElementById("mathpow").innerHTML = Math.pow(11,2);
            </script>
		</div>
		
		<div class="bor" class="ch5">
			<img src="u5.jpeg" class="allpic">
			<p class="ctr1">&#36;<span id="mathfunk"></span></p>
			<p class="ctr1"><a class="t1" href="https://www.adidas.co.uk/manchester_united">
				Adidas Paulo Scholesvi&#231;</a></p>
			<script>
             document.getElementById("mathfunk").innerHTML = Math.round(89.9);
            </script>
		</div>

		<div class="bor" class="ch6">
			<img src="u6.jpeg" class="allpic">
			<p class="ctr1"><span class="nounder">&#36;160.99</span>&nbsp;&nbsp;&#36;129.99</p>
			<p class="ctr1" ><a class="t1" href="https://www.adidas.co.uk/manchester_united">Adidas Graphic 2020</a></p>

		</div>



	</div>
	<br>
	<a href="buyticket.html"><button class="btnbuy"  type="button">Buy now</button></a>
	<br>
<hr>
<footer>

	<div >
		<div class="row">

		
			<div class="col">
        <br>
				<p >CONTACT DETAILS</p>
        
				
					<p >The official Manchester United website with <br> 
						fixtures, images, tickets, live match coverage,<br>
						match highlights, player profiles, transfers, shop 
						<br> and more."The Red Devils"-The best sites. <br>
						Location: Manchester, United Kingdom<br>Arena/Stadium: 
						Old Trafford<br>
                                  Tel: <a class="colhref" href="tel:+14258828080">+1 (425) 882-8080</a><br>
					Email:
                                <a class="colhref" href="mailto:info@sportmanutdsoffice.com">info@sportmanutdsoffice.com</a>
				</p>
			</div>

			<div class="col" >
           <br>
				<p  >QUICK LINKS</p>
              
				
				<nav  >
				<a  href="https://www.manutd.com/en/matches/first-team/2019-20/europa-league">Europa League</a><br>
				<hr>
				<a  href="https://store.manutd.com/stores/manutd/en?portal=QYTMF8KF&CMP=PSC-QYTMF8KF">UnitedDirect</a><br>
				<hr>
				<a  href="https://www.espn.com/soccer/team/_/id/360/manchester-united">2019-20 Prem Standings </a><br>
				<hr>
				<a  href="https://www.manchestereveningnews.co.uk/all-about/manchester-united-fc">Manchester Evening news</a>
				<hr>
				</nav>
			</div>


			<div  class="col">
           <br>
				<p >FROM THE BLOG </p>
			
				<p><strong>Post By Admin</strong><br>
				Manchester United Football Club is a professional 
				football club based in Old Trafford, Greater 
				Manchester, England, <br>that competes in the Premier<br>
				 League, the top flight of English football.Nicknamed "the Red Devils"<br></p>
				<span id="readmore"><a  href="https://en.wikipedia.org/wiki/Manchester_United_F.C.">Read More&raquo;</a></span>
			</div>

			<div class="col">
           <br>
				<p>&nbsp;&nbsp;   GRAB OUR NEWSLETTER</p>
				
				<form >
					<input type="text" name="Emri" placeholder="Name"><br>
					<input type="text" name="Email" placeholder="Email"><br>
					<input type="submit" name="Ruaj" value="SUBMIT" id="submit"> 
				</form>


			</div>
		</div>
		<br>
		<hr  >
		<div class="end">
		<div id="cright" > Copyright &copy; 2013 - All Rights Reserved -Part Shop</div>
    <div id="temp" >Template by OS Templates</div>
    </div>
		<br>
		<br>


    </div>
</footer>
	




</body>
</html>
