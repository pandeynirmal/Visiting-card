
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="display.php" method="POST">
    <?php
$random=rand(214578,875126);
?>
        <input type="text"  name="random" value="<?php echo@$random?>">
        <input type="submit" value="submit">
    </form>
</body>
</html>