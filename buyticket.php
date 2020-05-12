
    <?php
	
$servername = "localhost";
$username = "root";
$password = "";
$dbname="myDB";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(isset($_POST['add'])){
$username=$_POST['username'];
$lastname=$_POST['lastname'];
$code=$_POST['code'];
$email=$_POST['email'];
$phonenumber=$_POST['number'];
$buy=$_POST['buy'];
if($stmt = mysqli_prepare($conn,"INSERT INTO tiketa(username,lastname,code,email,phonenumber,buy)
VALUES (?,?,?,?,?,?)") )
{
  mysqli_stmt_bind_param($stmt,"ssssss",$username,$lastname,$code,$email,$phonenumber,$buy);
  
  if(!mysqli_stmt_execute($stmt))
  {
	  die("nuk jan konfiguru te dhenat ".mysqli_error($conn));
  }

}
}
mysqli_close($conn);
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
		<?php include("form.php"); ?>
		
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
            <input type="tel" name="number"
                   placeholder="Phone number">			
			<span class="error"><?php echo $numberErr;?></span>
				   <br><br>
           <input type="password" name="code"
                   placeholder="Your code">
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
  <option value="Ticket">Ticket</option>
 
               </select>
               <br>  
        </br>
            <input type="submit" formmethod="post" value="BUY NOW" onclick="myFunction()" name="add"/><br><br>
            <h7>Please fill out all the information asked in this form!</h7>
            <script>
                function myFunction() {
                alert("Are all the requirements fulfilled?");
                                       }
            </script>        
        </form>
        </div>
    </body>
</html>
