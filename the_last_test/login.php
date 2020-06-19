<?php
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    require 'connect.php';
    $conn->set_charset('utf8');
    $sql="SELECT username,pwd FROM User WHERE username='$username' AND pwd='$password'";
    $result=$conn->query($sql);
    if($result->num_rows>0){
        echo 'login success';
        setcookie("user",$username,time()+1000);
        header("location:info.php");
    }else{
        echo 'login failed';
        header("location:login.html");
    }
    $conn->close();
?>
<html>
    <h1>fwepofkewp</h1>
</html>