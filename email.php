<html>
<head>
  <meta http-equiv="content-type" content="text/html"; charset="utf-8"/>
    <title>Welcome</title>
    <link href="email.css" rel="stylesheet" type="text/css"/>
<body>
<?php

$to_mail=$_POST["Email"];
$subject="Your Manchester Newsletter";
$body="Hello, we are working on the way to send you a newsletter. Have a nice day!";
$headers="From: Manchester United";

if(mail($to_mail,$subject,$body,$headers)){

echo "<h3><br><br><br><br><br><br><br>Thank you! Now you will receive an email.<br>You are welcome again!</h3>";
}
else{
echo "Email was not sent!";

}

?>
</body>
</html>
