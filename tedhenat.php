<html lang="en" manifest="example.appcache">
<head>


    </head>
    <body>  
    <?php
      $name=$LastName=$phonnumber=$code=$email=$vehicle1="";
      if($_SERVER["REQUEST_METHOD"] == "POST")
      {
        $username = test_input($_POST["username"]);
        $lastname = test_input($_POST["lastname"]);
        $code = test_input($_POST["code"]);
        $email = test_input($_POST["email"]);
        $phonenumber= test_input($_POST["phonenumber"]);
        $buy =$_POST["buy"];

       


      }
      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
       ?>
<html lang="en" manifest="example.appcache">
<head>
  <meta http-equiv="content-type" content="text/html"; charset="utf-8"/>
    <title>Login Form</title>
    <link href="buyticket.css" rel="stylesheet" type="text/css"/>


    </head>
    <body>
<style>
    #tedhenat 
    { 
  width: 420px;
  padding: 70px;
  border-radius:40px;
  
  margin: 200px 470px;
  background-color: black;

    }
    .button {
  background-color: red;
  border-radius:40px;
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
    </style>
 <div id="tedhenat">       
<h2 style="font-family: Times New Roman, Times, serif;"  >Thank you</h2> <?php
echo $username;
echo "<br>";
echo $lastname;
echo "<br>";
echo $phonenumber;
echo "<br>";
echo $email;
echo "<br>";
echo $buy;
echo "<br>";
?>
<h2 style="font-family: Times New Roman, Times, serif;">We will contact you soon!</h2>
<a href="Tickets.php" class="button" style="font-family: Times New Roman, Times, serif;">Back</a> 


</div>



   </body>
        </html>
    <?php
$servername = "localhost";
$username = "root";
$password = "";
//require_once("dbconfig.php");
// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$sql = "CREATE DATABASE myDB";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
    // sql to create table
$sql = "CREATE TABLE tiketa (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
code VARCHAR(256) NOT NULL,
email VARCHAR(50) NOT NULL,
phonenumber VARCHAR(256)NOT NULL,
buy VARCHAR(20)NOT NULL,

reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
    if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
if(isset($_POST['add'])){
$username=$_POST['username'];
$lastname=$_POST['lastname'];
$code=$_POST['code'];
$email=$_POST['email'];
$phonenumber=$_POST['phonenumber'];
$buy=$_POST['buy'];




    ?>
