<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbName='myDB';

    //create connection
    $conn=new  mysqli($servername,$username,$password,$dbName);
    if($conn->connect_error){
        die("Connect failed ".$conn->connect_error);
    }
    echo "Connect to databse successfully<br>";

    $sql="SELECT id,firstname,lastname FROM  MyGuests";
    $results=$conn->query($sql);

    if($results->num_rows>0){
        while($row=$results->fetch_assoc()){
            echo "id: ".$row['id'].", Name: ".$row['firstname']." ".$row['lastname']."<br>";
        }
    }else{
        echo "NO DATA";
    }
