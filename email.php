<html>
<head>
  <meta http-equiv="content-type" content="text/html"; charset="utf-8"/>
    <title>Welcome</title>
    <link href="email.css" rel="stylesheet" type="text/css"/>
<body>
<?php

$to_mail=$_POST["Email"];
$subject="Your Manchester Newsletter";
$body="
<html>
<body>
<h3 style='font-weight:bold;'>Here are some popular news people have read these days:</h3>
 <span style='color:#800000;font-weight:bold;'>UNITED MAKE CHRISTMAS DREAMS COME TRUE</span><br>
 The Manchester United first-team squad paid a special festive visit to young patients at three local hospitals, to deliver some early Christmas gifts.
Following the United Women's visit on Monday, the players went to Royal Manchester Children Hospital and Francis House Children Hospice.<br><br>
 <span style='color:#800000;font-weight:bold;'>UNITED V AZ ALKMAAR AT OLD TRAFFORD</span><br>
  Manchester United will return to action on Thursday when AZ Alkmaar visit Old Trafford in the UEFA EU League, with the top spot in Group L up for grabs between two sides.
    Ole Gunnar Solskjaer Reds require just a point to secure first place in the pool.
<h4>You can also buy tickets for Manchester matches or buy something from our page. Please stay with us!</h4>
</body>
</html>
";
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';
$headers[] = "From: Manchester United";


if(mail($to_mail,$subject,$body,implode("\r\n", $headers))){

echo "<h3><br><br><br><br><br><br><br>Thank you! Now you will receive an email.<br>You are welcome again!</h3>";
}
else{
echo "Email was not sent!";

}

?>
</body>
</html>
