<?php
// definimi i variablave dhe vendosja e tyre ne vlera te zbrazeta
$nameErr = $numberErr = $emailErr = $codeErr=$termsErr = "";
$name = $number = $email = $code =$terms= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $nameErr = "*Name is required";
  } else {
    $name = test_input($_POST["username"]);
  }
  
  if (empty($_POST["number"])) {
    $numberErr = "*Phone number is required";
  }
else if(preg_match('/[0-9]{3}-[0-9]{3}-[0-9]{4}$/',$number))
{
	$numberErr ="*Number is in a wrong format";
}

  else {
    $number = test_input($_POST["number"]);
  }
    
  if (empty($_POST["code"])) {
    $codeErr = "*A code is required";
  } else {
    $code = test_input($_POST["code"]);
  }

  if (empty($_POST["email"])) {
  $emailErr = "*Email is required";}
	else if(preg_match('/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/',$email))
{
	$emailErr ="*Email is in a wrong format";
}
  else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["vehicle1"])) {
    $termsErr = "*You have to accept terms and conditions to continue";
  } else {
    $terms = test_input($_POST["vehicle1"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
