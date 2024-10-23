<?php
include'config.php';
if(isset($_POST['submit']))
{
    $name=$_POST['uname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $design=$_POST['design'];
    $card=$_POST['random'];
    $insert="INSERT INTO orderinfo (name,email,phone,design,card_id) VALUES('$name','$email','$phone','$design','$card')";
    if(mysqli_query($conn,$insert))
    {
        echo"Your order has been added. Go back to the page to confirm the Quantity<br><br>";
        // header("location:one.php");
        //  echo"<a href='view.php'> Show records</a>";
    }
    else{
        echo"ERROR: could not load $insert.".mysqli_error($conn);
    }
}
?>