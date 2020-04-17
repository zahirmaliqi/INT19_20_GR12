<html lang="en" manifest="example.appcache">
<head>
  <meta http-equiv="content-type" content="text/html"; charset="utf-8"/>
    <title>Login Form</title>
    <link href="buyticket.css" rel="stylesheet" type="text/css"/>


    </head>
    <body>
   
     
    <div class="tiketa">
         <form name="myForm" onsubmit="return validateForm()" action="tedhenat.php" method="GET" >
        <h3 style="color:#fff;">You need to Buy Tickets or T-shirt?</h3>
        <h7 style="color:white">Fill the details below accurately and we will contact you soon.</h7>
            <input  type="text" name="username" placeholder="Name" required autofocus>
            <br><br>
            <input type="text" name="lastname" placeholder="LastName">
            <br><br>
            <input type="tel" name="phonenumber"
                   placeholder="Phone number" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required><br><br>
           <input type="password" name="code"
                   placeholder="Your code"><br><br>
            <input type="email" name="email" placeholder="Email address" autocomplete="off" required><br><br>
              <input type="checkbox" name="vehicle1" value="Bike"> I accept terms and condition.<br><br>
              <select class="buy" name="buy">
  <option value="Select">Select:</option>
  <option value="T-Shirt">T-Shirt</option>
  <option value="Ticket">Ticket</option>
 
               </select>
               <br>
         
        </br>
         
            <input type="submit" formmethod="post" value="BUY NOW" name="add"  /><br><br></a>
      
            
        </form>
        </div>
     
     <script>
function validateForm() {
  var x = document.forms["myForm"]["code"].value;
  if (x == "") {
    alert("You must enter your code to continue.");
    return false;
  }
}
</script>
 
