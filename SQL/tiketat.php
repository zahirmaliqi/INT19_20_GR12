 <?php
require_once "dataconfi.php";

if (!$db) {
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
    if (mysqli_query($db, $sql)) {
    echo "Table tiketa created successfully";
} else {
    echo "Error creating table: " . mysqli_error($db);
}?>
