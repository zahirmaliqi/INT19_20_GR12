<?php
	 ini_set("display_errors", 1);
    error_reporting(E_ALL);
 $nameErr=$lastErr = $numberErr = $emailErr = $codeErr = $termsErr =$buyErr="";
$name=$lastname = $number = $email = $code =$terms=$buy="";

if(isset($_POST['add'])) {
	
	include("dataconfi.php");
	$error = false;
  if (empty($_POST["username"])) {
    $nameErr = "*Name is required";
	$error=true;
  } else {
    $name =$_POST["username"];
	if(!preg_match('/^[A-Za-z]+/',$name))
{
	$nameErr ="*Name is in a wrong format";
}
  }
  
  if (empty($_POST["lastname"])) {
    $lastErr = "*Lastname is required";
	$error=true;
  } else {
    $lastname = $_POST["lastname"];
	if(!preg_match('/^[A-Za-z]+/',$lastname))
{
	$lastErr ="*Name is in a wrong format";
}
  }
  if (empty($_POST["number"])) {
    $numberErr = "*Phone number is required";
	$error=true;
  }
   else {
    $number =$_POST["number"];
	if(!preg_match('/[0-9]{3}-[0-9]{3}-[0-9]{4}$/',$number))
{
	$numberErr ="*Number is in a wrong format";
}
}
 
if (empty($_POST["code"])) {
    $codeErr = "*A code is required";
	$error=true;
  } 
else if(strlen($_POST["code"])<6||strlen($_POST["code"])>20){
	  $codeErr="Your code should be between 6 and 20 characters";
	  $error=true;
  }	

  if (empty($_POST["email"])) {
  $emailErr = "*Email is required";
  $error=true;}
 else {
    $email = $_POST["email"];
if(!preg_match('/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/',$email))
{
	$emailErr ="*Email is in a wrong format";
}
  }
  if (empty($_POST["buy"])) {
    $buyErr = "*Select what to buy!";
	$error=true;
  } 
  
  if (empty($_POST["vehicle1"])) {
    $termsErr = "*You have to accept terms and conditions to continue";
	$error=true;
  } 
 
  else {
	  $name=$_POST["username"];
	  $lastname=$_POST["lastname"];
	  $number=$_POST["number"];
	  $email=$_POST["email"];
	  $code=hash('md5',$_POST["code"]);
	  $buy=$_POST["buy"];
          $terms = $_POST["vehicle1"];  
          $buy=$_POST['buy'];
   $sel_query = "SELECT * FROM users WHERE email='".$email."' and password='".$code."' and emri='".$name."'";
   $results = mysqli_query($db,$sel_query);
   $row = mysqli_num_rows($results);
   if ($row==""){
   echo "This user is not registered<br>Please check your name, email or password!";
   }
 else{
if($stmt = mysqli_prepare($db,"INSERT INTO tiketa(username,lastname,code,email,phonenumber,buy) VALUES (?,?,?,?,?,?)") );
{
  mysqli_stmt_bind_param($stmt,"ssssss",$name,$lastname,$code,$email,$number,$buy); 

  if(!mysqli_stmt_execute($stmt))
  {
	  die("nuk jan konfiguru te dhenat ".mysqli_error($db));
  }
echo "You are registered successfully $name $lastname <br> To get your $buy please email us at rrezeartathaqi@hotmail.com";

}
 }
}
mysqli_close($db);
}

?>
<html lang="en" manifest="example.appcache">
<head>
  <meta http-equiv="content-type" content="text/html"; charset="utf-8"/>
    <title>Login Form</title>
    <link href="buyticket.css" rel="stylesheet" type="text/css"/>
<style>
.error{
	
	color:red;
}
</style>
    </head>
    <body>
		
    <div class="tiketa" style="height:650px;width:250px;">

         <form name="myForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		 
        <h3 style="color:#fff;"><?php
            $txt = "Buy Tickets or T-shirt";
            //output text and a variable
            echo "You need to $txt?";
            ?></h3>
        <h7 style="color:white">Fill the details below accurately and we will contact you soon.</h7>
            <input type="text" name="username" placeholder=" Name">
            <span class="error"><?php echo $nameErr;?></span>
            <br><br>
            <input type="text" name="lastname" placeholder="Last Name">
            <br><br>
            <input type="tel" name="number" placeholder="Phone number">			
	    <span class="error"><?php echo $numberErr;?></span>
           <br><br>
           <input type="password" name="code" placeholder="Your code">
	   <span class="error"><?php echo $codeErr;?></span>	   
	   <br><br>
            <input type="email" name="email" placeholder="Email address" autocomplete="off" />
	   <span class="error"><?php echo $emailErr;?></span>
           <br><br>
             <input type="checkbox" name="vehicle1" value="Bike"> I accept terms and condition.</input>
			  <span class="error"><?php echo $termsErr;?></span>
			  <br><br>
              <select name="buy" class="sty">
  <option value="Select">Select:</option>
  <option value="T-Shirt">T-Shirt</option>
  <option value="Ticket">Ticket</option>
               </select>
	    <span class="error"><?php echo $buyErr;?></span>
               <br>  
        </br>
            <input type="submit" formmethod="post" value="BUY NOW" name="add"/><br><br>
            <h7>Please fill out all the information asked in this form!</h7>                  
        </form>
        </div>
    </body>
</html>
