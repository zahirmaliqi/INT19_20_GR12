<?php
include('SQL/dataconf.php');
if (isset($_GET["key"]) && isset($_GET["email"]) && isset($_GET["action"]) 
&& ($_GET["action"]=="reset") && !isset($_POST["action"])){
  $key = $_GET["key"];
  $email = $_GET["email"];
  $curDate = date("Y-m-d H:i:s");
  $query = mysqli_query($conn,
  "SELECT * FROM `temp_reseto` WHERE `key`='".$key."' and `email`='".$email."';"
  );
  $row = mysqli_num_rows($query);
  if ($row==""){
echo "
 <html>
<head>
  <meta http-equiv='content-type' content='text/html'; charset='utf-8'/>
    <title>Fail!</title>
    <link href='signup.css' rel='stylesheet' type='text/css'/>
<body><br><br><h2 style='color:red;text-align:center;'>Invalid Link</h2>
<p style='color:red;,margin-top:50px;text-align:center;'>The link is invalid/expired. Either you did not copy the correct link
from the email, or you have already used the key once.<br>Please try again!</p>
<a href='forgot.php' style='color:red;margin-left:670px;'>
Click here to reset the password.</a></body>
</html>";
 }
else{
  $row = mysqli_fetch_assoc($query);
  $expDate = $row['expDate'];
  if ($expDate >= $curDate){
  ?>
  
  <br />
  <html manifest="cache.appache">
	<head>
		<title>Update password</title>		
		<link rel="stylesheet" href="signup.css">
	</head>
	<body>
	<div class="simple-form">
  <form method="post" action="" name="update">
  <input type="hidden" name="action" value="update" />
  <br /><br />
  <label style="color:blue;"><strong>Enter New Password:</strong></label><br />
  <input type="password" name="pass1" maxlength="15" required id="button" />
  <br /><br />
  <label style="color:blue;"><strong>Re-Enter New Password:</strong></label><br />
  <input type="password" name="pass2" maxlength="15" required id="button"/>
  <br /><br />
  <input type="hidden" name="email" value="<?php echo $email;?>"/>
  <input type="submit" value="Reset Password" id="butto" />
  </form></div>
<?php
}
else{
echo "<html>
<head>
  <meta http-equiv='content-type' content='text/html'; charset='utf-8'/>
    <title>Fail!</title>
    <link href='signup.css' rel='stylesheet' type='text/css'/>
<body><h2 style='color:red;text-align:center;margin-top:50px;'>Link Expired</h2>
<p style='color:red;text-align:center;'>The link has expired. You are trying to use the expired link which 
is valid only 24 hours (1 day after request).<br /><br /></p></body>
</html>";  }
      }
} 
if(isset($_POST["email"]) && isset($_POST["action"]) &&
 ($_POST["action"]=="update")){
$error="";
$pass1 = mysqli_real_escape_string($conn,$_POST["pass1"]);
$pass2 = mysqli_real_escape_string($conn,$_POST["pass2"]);
$email = $_POST["email"];
$curDate = date("Y-m-d H:i:s");
if ($pass1!=$pass2){
$error.= "<html>
<head>
  <meta http-equiv='content-type' content='text/html'; charset='utf-8'/>
    <title>Fail!</title>
    <link href='signup.css' rel='stylesheet' type='text/css'/>
<body><h2 style='color:red;text-align:center;margin-top:50px;'>Sorry you failed to change your password!<br>Go back to the Update Password Page to try again.</h2>
</body>
</html>"; 
  }
  if($error!=""){
echo "<div class='error'>".$error."</div><br />";
}else{
$pass1 = md5($pass1);
mysqli_query($conn,
"UPDATE users SET password='".$pass1."', data_regjistrimit='".$curDate."' 
WHERE `email`='".$email."';"
);
 
mysqli_query($conn,"DELETE FROM `temp_reseto` WHERE `email`='".$email."';");
 
header("Location:login1.php");
   } 
}
?>
