<<?php
session_start();
?>
!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> This is user homepage</h1>
    <h1>Welcome Mr.<?php echo $_SESSION['username']?></h1>
    <div class="nav"><a id="three" href="questinoform.php">Add Question</a></div>
    
    <a href="logout.php"> LOG OUT</a>
</body>
</html>