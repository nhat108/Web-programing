<?php
    $conn= new mysqli("localhost","root","","myDB");
    $sql="CREATE TABLE User(
        id INT(6) AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(30) NOT NULL,
        pwd VARCHAR(100) NOT NULL,
        avatar VARCHAR(100),
        job VARCHAR(50),
        gender VARCHAR(10),
        favourite VARCHAR(100)
    )";

    if($conn->query($sql)===true){
        echo "Table User created successfully";
    }
?>