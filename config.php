
<?php
$conn = mysqli_connect("localhost", "root", "", "visiting"); 
//not used databse because database is not created yet
if ($conn === false){
die("ERROR:could not connect" . mysqli_connect_error()); 
//die terminates the program if not connected
}
else{
//echo"connect successfully. Host info ".mysqli_get_host_info($conn);
}
?>

