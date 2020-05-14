<?php
include('dataconf.php');
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
  $error .= '<h2>Invalid Link</h2>
<p>The link is invalid/expired. Either you did not copy the correct link
from the email, or you have already used the key once.</p>
<p><a href="forgot.php">
Click here</a> to reset password.</p>';
 }else{
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
}else{
$error .= "<h2>Link Expired</h2>
<p>The link is expired. You are trying to use the expired link which 
as valid only 24 hours (1 days after request).<br /><br /></p>";
            }
      }
if($error!=""){
  echo "<div class='error'>".$error."</div><br />";
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
$error.= "<p>Password do not match, both password should be same.<br /><br /></p>";
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
 
echo '<div class="error"><p>Congratulations! Your password has been updated successfully.</p>
<p><a href="login1.php">
Click here</a> to Login.</p></div><br />';
   } 
}
?>
