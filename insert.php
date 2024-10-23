<?php
include'config.php';
if(isset($_POST['submit']))
{
$username=$_POST['uname'];
$password=$_POST['pass'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$insert="INSERT INTO user (name,email,password,phone) VALUES('$username','$email','$password','$phone')";
$login="INSERT INTO userinfo (email,password) VALUES ('$email','$password')";
if(mysqli_query($conn,$insert))
if(mysqli_query($conn,$login))
{
    echo"Signed Up successfullyy<br><br>";
    header("location:login.html");
    //  echo"<a href='view.php'> Show records</a>";
}
else{
    echo"ERROR: could not load $insert.".mysqli_error($conn);
}
}
?>