<?php
$host = "localhost";
$username = "root";
$password = "";
$dbName = "myDB";
$conn = mysqli_connect($host, $username, $password, $dbName);

if ($conn->connect_error) {
    die("Connection failed :" . $conn->connect_error);
}
echo "Connect database successfully";
$sql = "CREATE TABLE MyGuests(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(30), 
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if ($conn->query($sql) === true) {
    echo "Table MyGuests created successfully";
} else {
    echo "Create table failed: " . $conn->error;
}
