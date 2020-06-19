<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbName="myDB";

    $conn=new mysqli($servername,$username,$password,$dbName);
    if($conn->connect_error){
        die("Connecte failed". $conn->connect_error);
    }
    $sql="SELECT id,firstname,lastname FROM MyGuests where firstname='nate'";
    $results=$conn->query($sql);
    if($results->num_rows>0){
        while($row=$results->fetch_assoc()){
            echo "id: ".$row['id'].", Name: ".$row['firstname']." ".$row['lastname']; 
        }
    }else{
        echo "NO DATA";
    }
?>