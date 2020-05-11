<?php

use permbajtja;

class Anetari
{
    private $dbConn;

    private $ds;

    function __construct()
    {
        require_once "permbajtja.php";
        $this->ds = new permbajtja();
    }

    function validoAnetarin()
    {
        $valid = true;
        $errorMessage = array();
        foreach ($_POST as $key => $value) {
            if (empty($_POST[$key])) {
                $valid = false;
            }
        }
        
        if($valid == true) {
            if ($_POST['pwd'] != $_POST['confirm_password']) {
                $errorMessage[] = 'Passwords should be same.';
                $valid = false;
            }
		    if(strlen($_POST["pwd"])<6||strlen($_POST["pwd"])>20){
				$errorMessage[] = 'Password length should be between 6 and 20 characters.';
                $valid = false;
			}

            if (!isset($error_message)) {
                if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                    $errorMessage[] = "Invalid email address.";
                    $valid = false;
                }
				
            }
        }
        else {
            $errorMessage[] = "All fields are required.";
        }
        
        if ($valid == false) {
            return $errorMessage;
        }
        return;
    }

    function neseAnetariEkziston($username, $email)
    {
        $query = "select * FROM users WHERE emri = ? OR email = ?";
        $paramType = "ss";
        $paramArray = array($username, $email);
        $memberCount = $this->ds->numRows($query, $paramType, $paramArray);
        
        return $memberCount;
    }

    function insertoRekordet($username, $email,$password)
    {
        $passwordHash = md5($password);
        $query = "INSERT INTO users (emri,email,password) VALUES (?, ?, ?)";
        $paramType = "sss";
        $paramArray = array(
            $username,
			$email,   
            $passwordHash
            
        );
        $insertId = $this->ds->insert($query, $paramType, $paramArray);
        return $insertId;
    }
	function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}}