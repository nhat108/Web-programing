<?php
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $avatarPath='.img/'.$username.'-'.$_FILES['avatar']['name'];
    $gender=$_POST['gender'];
    $job=$_POST['job'];
    
    $favourite="";
    if(!empty($_POST['favourite'])){
        foreach($_POST['favourite'] as $value){
            echo $value;
            $favourite=$favourite.$value.", ";
        }
        $favourite=substr($favourite,0,-2);
    }
    //connect to database
    require 'connect.php';
    $conn->set_charset('utf8');
    $sql="INSERT INTO User(username,pwd,avatar,job,gender,favourite) 
    VALUES('$username','$password','$avatarPath','$job','$gender','$favourite')";
    $conn->query($sql);
    move_uploaded_file($_FILES['avatar']['name'],$avatarPath);
    $conn->close();
?>
<html>
    <body>
    <h1>Register account successfully</h1>
    <form action="login.html">
        <input type="submit" value="Back to login">
    </form>
    </body>
    
</html>