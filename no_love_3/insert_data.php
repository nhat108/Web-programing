<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbName="myDB";

    //create connection
    $conn=mysqli_connect($servername,$username,$password,$dbName);
    if($conn->connect_error){
        die("Connect failed ". $conn->connect_error);
    }
    echo "Connect to database successfully<br>";

    $sql ="INSERT INTO  MyGuests (firstname,lastname,email)
    VALUES('nick','diaz','nick209@gmail.com')
    ";

    if($conn->query($sql)===true){
        $last_id=$conn->insert_id;
       echo "Insert data successfully :$last_id";
    }else{
       echo "Insert data failed";
    }

    $conn->close();
?>