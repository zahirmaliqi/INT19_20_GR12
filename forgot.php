<?php
include('SQL/dataconf.php');
if(isset($_POST["email"]) && (!empty($_POST["email"]))){
$email = $_POST["email"];
$error="";
 
date_default_timezone_set('Asia/Karachi');
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$email = filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email) {
   $error .="<p>Invalid email address please type a valid email address!</p>";
   }else{
   $sel_query = "SELECT * FROM users WHERE email='".$email."'";
   $results = mysqli_query($conn,$sel_query);
   $row = mysqli_num_rows($results);
   if ($row==""){
   $error .= "<p>No user is registered with this email address!</p>";
   }
  }
   if($error!=""){
   echo "<div class='error'>".$error."</div>
   <br /><a href='javascript:history.go(-1)'>Go Back</a>";
   }else{
   $expFormat = mktime(
   date("H"), date("i"), date("s"), date("m") ,date("d")+1, date("Y")
   );
   $expDate = date("Y-m-d H:i:s",$expFormat);
   $key = md5(2418*2+$email);
   $addKey = substr(md5(uniqid(rand(),1)),3,10);
   $key = $key . $addKey;
// Insert Temp Table
mysqli_query($conn,
"INSERT INTO temp_reseto (`email`, `key`, `expDate`)
VALUES ('".$email."', '".$key."', '".$expDate."');");
 
$output='<p>Dear user,</p>';
$output.='<p>Please click on the following link to reset your password.</p>';
$output.='<p>-------------------------------------------------------------</p>';
$output.='<p><a href="reset.php?
key='.$key.'&email='.$email.'&action=reset" target="_blank">
reset.php
?key='.$key.'&email='.$email.'&action=reset</a></p>'; 
$output.='<p>-------------------------------------------------------------</p>';
$output.='<p>Please be sure to copy the entire link into your browser.
The link will expire after 1 day for security reason.</p>';
$output.='<p>If you did not request this forgotten password email, no action 
is needed, your password will not be reset. However, you may want to log into 
your account and change your security password as someone may have guessed it.</p>';   
$output.='<p>Thanks,</p>';
$output.='<p>ManchesterUnited Team</p>';
$body = $output; 
$subject = "Password Recovery";
 
$to_mail = $email;
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

$headers[] = "From: Manchester United";

if(mail($to_mail,$subject,$body,implode("\r\n", $headers))){

echo "<html>
<head>
  <meta http-equiv='content-type' content='text/html'; charset='utf-8'/>
    <title>Success!</title>
    <link href='signup.css' rel='stylesheet' type='text/css'/>
<body><h3 style='color:red;text-align:center;'>You will receive a link to reset your password!</h3></body>
</html>";
}
else{
echo "Ka deshtuar emaili";

}
   }
}else{
?>
<html manifest="cache.appache">
	<head>
		<title>Update password</title>
		
		<link rel="stylesheet" href="signup.css">
	</head>
	<body>
	<div class="simple-form">
<form method="post" action="" name="reset" id="registration"><br /><br />
<label style="color:red;"><strong>Enter Your Email Address:</strong></label><br /><br />
<input type="email" name="email" placeholder="username@email.com" id="button" />
<br /><br />
<input type="submit" value="Reset Password" id="butto"/>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p></div>
<?php } ?>
