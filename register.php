<?php
$firstname = $_POST['fname'];
$lasttname = $_POST['lname'];
$username = $_POST['email'];
$password = $_POST['password'];

//database connection
$conn = new mysqli('localhost','root','','TMS');
if($conn == false)
{
    echo "connection faild";
}
else
{
    $stmt = $conn -> prepare("insert into registration (fname,lname,email,password) 
    values(?,?,?,? )");

    $stmt->bind_param("ssss",$firstname,$lasttname,$username,$password);
    $stmt->execute();
    echo "registration succesfully";
    $stmt->close();
    $conn->close();
}
?>