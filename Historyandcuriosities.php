<!DOCTYPE html>
<html manifest="example.appcache">
<head>
   <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="titulli.css">
   <link rel="stylesheet" href="history.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" type="text/css" href="zahirmaliqi.css">
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<title>History and curiosities</title>
	
<style>
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
<span style="color: white;"  id="time"> 00:00:00 AM </span>
  <script>
        $(document).ready(function(){
        setInterval(function(){
        $('#time').load('time.php')

      },1000)
      });
  </script>

<h2 style="color:red;text-align:center;">History</h2>
<div style="background:-webkit-linear-gradient(right,white,white,white,red);padding:10px;">


  <img src="FotooM.jpg" alt="Early photo" style="width:20%;float:left;margin-top:10px;margin-bottom:10px;margin-left:0;margin-right:15px;" id="img">
  <article>
  <h3>Early Years</h3>
  <p class="pstyle">Manchester United was formed in 1878 as Newton Heath LYR Football Club by the Carriage and Wagon department of the Lancashire and Yorkshire Railway (LYR) 
  depot at Newton Heath. The team initially played games against other departments and railway companies, but on 20 November 1880, they competed in their first 
  recorded match; wearing the colours of the railway company – green and gold – they were defeated 6–0 by Bolton Wanderers' reserve team. By 1888, the club had 
  become a founding member of The Combination, a regional football league. Following the league's dissolution after only one season, Newton Heath joined the newly 
  formed Football Alliance, which ran for three seasons before being merged with The Football League. This resulted in the club starting the 1892–93 season in the First
  Division, by which time it had become independent of the railway company and dropped the "LYR" from its name. After two seasons, the club was relegated to the Second 
  Division.</p>
  <p class="pstyle"> In January 1902, with debts of &pound;2,670 – equivalent to &pound;280,000 in 2019[nb 1] – the club was served with a winding-up order.
  In 1922, three years after the resumption of football following the First World War, the club was relegated to the Second Division, where it remained until regaining 
  promotion in 1925. Relegated again in 1931, Manchester United became a yo-yo club, achieving its all-time lowest position of 20th place in the Second Division in 1934.</p>
	</article>
  <img src="Trophies3.jpg" alt="Trophies" style="height:300px;float:left;margin-top:10px;margin-bottom:10px;margin-left:0;margin-right:15px;" id="img">
  <h3>Present</h3>
	<article>
  <p class="pstyle">Manchester United have won more trophies than any other club in English football, with a record 20 League titles, 12 FA Cups, five League Cups and a record 21 FA 
  Community Shields. United have also won three UEFA Champions Leagues, one UEFA Europa League, one UEFA Cup Winners' Cup, one <b>UEFA Super Cup</b>, one Intercontinental Cup and one 
  FIFA Club World Cup. In 1998–99, the club became the first in the history of English football to achieve the continental European treble. By winning the UEFA Europa League 
  in 2016–17, they became one of five clubs to have won all three main UEFA club competitions.</p>
  <p class="pstyle">In July 2012, the club announced plans to list its IPO on the New York Stock Exchange instead. Shares were originally set to go on sale for between &dollar;16 and &dollar;20 each, but the 
  price was cut to &dollar;14 by the launch of the IPO on 10 August, following negative comments from Wall Street analysts and Facebook's disappointing stock market debut in May. Even after the 
	  cut, Manchester United was valued at <b>&dollar;2.3 billion</b>, making it the most valuable football club in the world.Manchester United was the highest-earning football club in the world for 2016–17, with an annual
	  revenue of <b>&euro;676.3 million</b>, and the world's third most valuable football club in 2019, valued at <b>&pound;3.15 billion</b> (&dollar;3.81 billion). As of June 2015, it is the world's most valuable football brand, estimated 
	  to be worth <b>&dollar;1.2 billion.</b></p>
	</article>
  <br>
</div>

<h2 style="color:red;text-align:center;">Curiosities</h2>
<div class="row">
  <div class="column">
    <div class="content">

      <img src="Foto5.jpg" alt="Players" style="width:100%;" id="img2">
      <h3>UEFA champions league</h3>
      <p>In past, there have been many big English teams who had won one of the biggest European league, the champions league.
As there are many big English leagues who has conquered the leaguManchesterhester united were the first ever club in the league to be the winner of UEFA champions league.
</p>
    </div>
  </div>

  <div class="column">
    <div class="content">
    <img src="Foto6.jpg" alt="Symbol" style="width:100%" id="img2">
      <h3>Named Red Devils</h3>
      <p>As the United is known as red devils but Have you ever thought what makes the team having the name “red devil”.
As under management of sir matt burly the United took the nickname “Red devil” from Salford rugby club who loved France under the same name also wearing red shirts.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="Foto7.jpg" alt="Goal scorers" style="width:100%;" id="img2">
      <h3>Goal scorers</h3>
      <p>We all know there have been many top scorers in past years in the champions league. As Ronaldo has been all time top scorer of UEFA champions league.
But do you know Wayne Rooney has been highest scoring. An Englishman in UEFA champions league with 29 goals in the league.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="Foto8.jpg" alt="Manager" style="width:100%" id="img2">
      <h3>Non britisher Manager</h3>
      <p>The United are having many famous and international managers. But there is one thing common in every manager of United is that they all were the English man before the signing of Luis van Gaal.
As the Luis van, Gaal becomes the first non Britisher manager of the red devils.</p>
    </div>
</div>

<div class="content">
  <img src="Foto9.jpg" alt="Game" style="width:100%;" id="img2">

  <h3>Clock stopped</h3>
  <p>Manchester United has been one of the most iconic football clubs but do we know that once the whole united team was destroyed.</p>
 <p>As on 6 Feb 1958 when United were coming back from the match against Munich their plane crashed more than half of the player died. Thus, this infamous incidence is called Bayern Munich in disaster. </p>
  <br>
  <h3>Oldest Club</h3>
<p>We all know that Manchester United has been one of the oldest clubs in England. But do we know that how did United gets their name “The Manchester United”.</p>
<p>As the football club was founded as Newton health in late 1878. And then renamed the Manchester United in April 1902 after the club won’t up for the following debts of &pound;2,670.</p>
<br>
<hr>
<br>
 </div> 
		   </div>
	<div style="background:-webkit-linear-gradient(left,white,white,white,red);padding:20px;">
<?php 
  
  class Myclass
  {
   public $font_size ="25px";
   public $font_color = "red";
   public $font_family="Times New Roman, Times, serif";
	  public $string_name = "Here are some songs for Manchester United:";
   
   public function customize_print()
	   {
   echo "<strong><p style=font-size:".$this->font_size.";color:".$this->font_color.";font-family:".$this->font_family.";>".$this->string_name."</p></strong>";
   
   }
  }
  $f = new MyClass;
  echo $f->customize_print();
  ?>
	  
  <audio controls>
  <source src="ManUTDSong.mp3" type="audio/mpeg">
</audio>
 <audio controls>
  <source src="ManUTDGloryGlory.mp3" type="audio/mpeg">
</audio>
<audio controls>
<source src="Manchester2.mp3" type="audio/mpeg">
</audio>
 <audio controls>
 <source src=" Man United Treble Champions.mp3" type="audio/mpeg"> 
  Manchester United and Champions - United - We Love You
</audio>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function getVote(int) {
  if (window.XMLHttpRequest) {
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("poll").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","poll_vote.php?vote="+int,true);
  xmlhttp.send();
}

</script>
		

<div class="grid-container">
<div>
<h3>Here are some links for more curiosities:</h3>


<a href="https://www.sportskeeda.com/football/five-amazing-facts-probably-wouldn-t-know-manchester-united"target="_blank" id="link1">Sportskeeda</a><br>
<a href="https://www.fourfourtwo.com/features/why-juan-matas-decline-a-sign-times-manchester-united"target="_blank" id="link2" >FourFourTwo</a><br>
<a href="https://thebusbyway.com/2012/09/10/10-interesting-facts-about-man-united/"target="_blank" id="link3" >The Busby Way</a><br>
</div>

 <form>
    <div id="poll">
	<h3>Do you like our webpage so far?</h3>

    Yes:
<input type="radio" name="vote" value="0" onclick="getVote(this.value)" style="height:10px;padding:0;margin:0;width:20px;">
<br>No:
<input type="radio" name="vote" value="1" onclick="getVote(this.value)" style="height:10px;padding:0;margin:0;width:20px;">
   
  </form>
</div>

<div>
<?php 
  
  class Myclass2
  {
   public $font_size ="15px";
   public $font_color = "black";
   public $font_family="Times New Roman, Times, serif";
   public $string_name = "Click the button to get your coordinates.";
  
   public function customize_print()
   {
   echo "<strong><p style=font-size:".$this->font_size.";color:".$this->font_color.";font-family:".$this->font_family.";>".$this->string_name."</p></strong>";
   
   }
  }
  $f = new MyClass2;
  echo $f->customize_print();
  ?>


<button onclick="getLocation()" id="button1">Get your coordinates</button>

<p id="lokacioni"></p>
</div>
<div class="popup" onclick="myFunction()"style="font-weight:bold;font-size:20px;margin-left:100px;color:red;">Have a look at Corona Virus Cases Today
<span class="popuptext" id="myPopup"><?php include("corona.php");?></span></div> 

<script>
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>
<script>
var x = document.getElementById("lokacioni");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
}
</script>

 </div>
</section>
 <?php include("mennu1.php"); ?>
</body>
</html>
