  <?php
define('SEARCHBOX', 'txtSearch');
function getSearchFor() {     
$value = "";  
 if (isset($_GET[SEARCHBOX])) {     
 $value = $_GET[SEARCHBOX];    }  
 return $value;  }
function getDB() {   

$conn=new PDO("mysql:host=".servername.";dbname=lajmet",username,password);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
return $conn; }
function getResults() {    
 try {  
 
$db = getDB();
    
	  $searchFor = '%' . getSearchFor() . '%';
      $sql = "SELECT * FROM lajmet WHERE titullilink LIKE ?";   
	  $statement = $db->prepare($sql);      
	  $statement->bindValue(1, $searchFor);     
	  $statement->execute();     
	  return $statement;   }   
	  catch (PDOException $e) {     
	  die($e->getMessage());   } } ?>

	  <?php include('session.php');?>

<header style="width: 100%">

<div class="ikonat" style="float: left;">
		
		<a href="https://www.linkedin.com/" class="fa fa-linkedin"></a>
		<a href="http://twitter.com" class="fa fa-twitter"></a>
		<a href="http://pinterest.com" class="fa fa-pinterest"></a>
		<a href="http://google.com" class="fa fa-google"></a>
		<a href="https://rss.com/" class="fa fa-rss"></a>
  </div>
	
<div style="clear:both;">
  <div style="float:left;text-align:center;">
 <h4 style="color:red;">Welcome <?php echo $login_session; ?><a href = "logouti.php" style="margin-left:20px;">Sign Out</a> </h4></div><br>
	
  <div style="float: right">
    <form method="get" action="pamja.php">
	<input type="search" style="color:white" name="<?php echo SEARCHBOX; ?>"     
	  placeholder="Search Our Website..." value="<?php echo getSearchFor(); ?>" class="search" />
          
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
                            <li><a href="Faqja1.php" >HOMEPAGE</a></li>
                            <li> <a href="Historyandcuriosities.php">HISTORY AND CURIOSITIES</a> </li>
			    <li><a href="pjesa2.php">PLAYERS</a>  </li>
                            <li>  <a href="pic.php">GALLERY</a></li>
                            <li> <a href="Tickets.php">FIXTURES</a> </li>
                            <li> <a href="Game.php">GAME</a> </li>
                       </ul> 
          </nav>
