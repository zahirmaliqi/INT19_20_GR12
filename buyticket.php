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
      <?php include("form.php"); ?>  //validimi i te dhenave te perdoruesit
    <div class="tiketa" style="height:650px;width:250px;">
         <form name="myForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <h3 style="color:#fff;">
          <?php
            $txt = "Buy Tickets or T-shirt";
            //output text and a variable
            echo "You need to $txt?";
            ?>
           </h3>
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
              <select class="sty">
  <option value="Select">Select:</option>
  <option value="T-Shirt">T-Shirt</option>
  <option value="Ticket">Ticket</option>
 
               </select>
               <br>  
        </br>
            <input type="submit" formmethod="post" value="BUY NOW" onclick="myFunction()"/><br><br>
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
