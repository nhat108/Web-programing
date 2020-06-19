<?php
    if(isset($_COOKIE['user'])){
        $username=$_COOKIE['user'];
        echo $username;
    }else{
        header("location:login.html");
    }
    require 'connect.php';
    $conn->set_charset('utf8');
    $data=$conn->query("SELECT username,avatar,job,gender,favourite
    FROM User where username='$username'");
    $result=$data->fetch_assoc();
    echo "<table>
    <tr>
        <td>Username</td>
        <td>$result[username]</td>
        <td>Avatar</td>
        <td>$result[avatar]</td>
        <td>Job</td>
        <td>$result[job]</td>
    </tr>
</table>";
?>

<html>
    <h1>Info</h1>
    
</html>