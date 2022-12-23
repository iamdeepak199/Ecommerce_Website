<?php
    $username= $_post['username'];
$password=$_post['password'];

$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
    die('connection failed : ' '.$conn->connect_error');
}else{
    $stmt=$conn->prepare("insert into registration(username,password) values(?,?)");
    $stmt->bind_param("ss",$username,$password);
    $stmt->execute();
    echo "Login Succesfully...";
    $stmt->close();
    $conn->close();
}
?>