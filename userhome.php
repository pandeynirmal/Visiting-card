<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         /* @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
    } */
    body{
            margin-top: 0px;
        }
    #header{
        background-color: rgb(4 ,127, 127);
        width: 100%;
        margin-top: auto;
        height: 60px;
        margin-bottom: 0px;
        position:relative;
        border-bottom: 1px solid whitesmoke;
        padding-top: 20px;
    }
    .sticky{
        position: fixed;
    }
        .left
    {
        display: block;
        margin-top: 0px;
        width: 250px;
        height: 570px;
        background-color:rgb(4, 127, 127);
        /* margin-left: 7px; */
        align-content:left;
        padding-top: 20px;
        overflow: hidden;
        padding-left:  3px;
        padding-right: 3px;
        float: left;
    }
        #three{
            color: white;
            text-decoration: none;
            font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            /* border-bottom: 2px solid whitesmoke; */
            margin-left: 40px;
            /* margin-right: 10px; */
        }
        #three:hover{
            border-right: 2px solid white;
            padding-right: 3px;

        }
        #four{
            color: white;
            text-decoration: none;
            font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            /* border-bottom: 2px solid whitesmoke; */
            margin-left: 40px;
        }
        #four:hover{
            border-right: 2px solid white;
            padding-right: 3px;
        }
        #five{
            color: white;
            text-decoration: none;
            font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            /* border-bottom: 2px solid whitesmoke; */
            margin-left: 40px;
        }
        #five:hover{
            border-right: 3px solid white;
            padding-right: 3px;
        }
        .body{
            background-image: url('back.jpg');
            background-size: cover;
            height: 590px;
            /* padding-top: 20px; */
        } 
        h3{
            display: inline;
            background-color: rgba(60, 179, 113, 0.7);
            width: 200px;
            padding: 5px 10px 10px 5px;
            color: black;
            font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
        }
        h2{
            color: whitesmoke;
            display: inline;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            /* margin-left: 50px; */
            /* margin-top: 3px; */
            /* background-color: rgba(0 ,0, 0,1); */
          padding: 3px 5px 5px 5px;
          border-radius: 5px;    

          /* margin-top: 50px;    */
        }
        p{
            margin-top: 100px;
            display: inline;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background-color: rgba(255 , 165, 0,1);
          padding: 5px 5px 6px 5px;
          border-radius: 5px;
        }
        #hr1{
            width: 100%;
            background-color: white;
            height: 1px;
            /* margin-top: 25px; */
            /* margin-bottom: 30px; */
            /* position: sticky; */
        }
        #hr2{
            float: left;
            height: 600px;
            width: 3px;
            background-color: white;
            margin-left: 315px;
            margin-top: 0px;
        }
        hr{
            height: 2px;
            background-color: rgb(255, 255, 255);
            margin-top: 10px;
            margin-bottom: 10px;
            border: none;
        }
        #n{
            text-decoration: none;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            color: whitesmoke;
            float: right;
            margin-right: 50px;
            margin-top: 0px;
            margin-bottom: 3px;
        }
        #n:hover{
            color: rgb(242, 85, 85);
        }
    </style>
</head>
<body>
    
    <div class="sticky" id="header"><center> <h2>Welcome</h2><p> <?php echo $_SESSION['username']?></p></center><a id="n" href="logout.php">LOG OUT</a></a></div>
    <div class="body">
    <!-- <hr id="hr1"> -->
    <!-- <hr id="hr2"> -->
    <div class="left"><div>
    <a id="three" href="orderinfouser.php"> ORDER DETAILS</a><br>
    <hr>
    <a id="four" href="filldetails.php" target="_self"> CREATE CARD</a><br>
    <hr>
    <!-- <a id="five" href="questinoform.php"> DELETE ORDER</a><br> -->
    <!-- <hr> -->
</div>
</div>
</body>
</html>