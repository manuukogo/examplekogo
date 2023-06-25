<?php
$fullname=$_POST['fname'];
$email=$_POST['email'];
$password=$_POST['pass'];
$phonenumber=$_POST['phone'];
$conn=new mysqli('localhost','root','','class');
if($conn->connect_error)
{
    die('connection failed:'.$conn->connect-error);
}
else{
    $stmt=$conn->prepare("insert into class(fullname,email,password,phonenumber)
    values(?,?,?,?)");
    $stmt->bind_param ("sssi",$fullname,$email,$password,$phonenumber);
    $stmt->execute();
    echo "registration successful";
    $stmt->close();
    $conn->close();
}
?>