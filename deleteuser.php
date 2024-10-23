<?php
include'config.php';
$code=$_GET['code'];
$del="DELETE FROM user WHERE id=$code";
if(mysqli_query($conn,$del))
{
    echo"records deleted successfully";
    header("location:logininfo.php");
    exit();
    
}
else{
    echo"ERROR: cannot be exdtucte $conn".mysqli_error($conn);
}
?>