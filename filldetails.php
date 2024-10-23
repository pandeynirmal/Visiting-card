<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <style>
        *{
            margin: 0px;
        }
        body{
            scroll-behavior: smooth;
        }
        /* @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;}
        .left{
              width: 5%;
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
            /* position:fixed; */
            border-bottom: 1px solid whitesmoke;
            padding-top: 20px;
        }
        .sticky{
            position: fixed;
        }
            .left
        {
            display: block;
            margin-top: 81px;
            width: 250px;
            height: 100%;
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
                background-image: url('ground.jpg');
                background-size: cover;
                height: 1500px;
                background-attachment: fixed;
                background-repeat: repeat-y;
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
            hr{
                height: 2px;
                background-color: rgb(255, 255, 255);
                margin-top: 10px;
                margin-bottom: 10px;
                border: none;
            }
            #n{
            position: absolute;
            text-decoration: none;
            height: 30px;
            width: 75px;
            background-color: red;
            font-family: sans-serif;
            padding: 5px;
            top: 30px;
            right: 30px;
            border-radius: 5px;
            transition: smooth;
            transition-duration: 0.1s;
            color: black;
        }
        #n:hover{
            height: 31px;
            width: 76px;
            box-shadow: 1px 1px 3px black;
        }
            
        .container{
            width: 80%;
            /* background-color:rgba(4, 127, 127, 0.6); */
            height: 880px;
            margin-left: 10%;
            margin-top: 90px;
            padding-top: 20px;
            float: right;
        }
        .one{
            width: 450px;
            background:url('oneimg.jpg');
            background-size: cover;
            height: 250px;
            float: left;
            margin-left: 50px;
        }
        .two{
            width: 450px;
            /* background-color: black; */
            background: url('two.jpg');
            background-size: cover;
            height: 250px;
            float: left;
            margin-left: 30px;
        }
        .three{
            width: 450px;
            /* background-color: black; */
            background: url('three.jpg');
            height: 250px;
            float: left;
            margin-left: 50px;
            margin-top: 20px;
        }
        .four{
            width: 450px;
            /* background-color: black; */
            background: url('four.jpg');
            height: 250px;
            float: left;
            margin-left: 30px;
            margin-top: 20px;
        }
        .five{
            width: 450px;
            /* background-color: black; */
            background: url('five.jpg');
            height: 250px;
            float: left;
            margin-left: 50px;
            margin-top: 20px;
        }
        .six{
            width: 450px;
            /* background-color: black; */
            background: url('six.jpg');
            height: 250px;
            float: left;
            margin-left: 30px;
            margin-top: 20px;
        }
        span{
            margin-left: 5px;
            color: white;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size:large;
        }
    </style>
    </head>
    <body>
        <div class="sticky" id="header" class="fixed-top"><center> <h2>Welcome</h2><p> <?php echo $_SESSION['username']?></p></center><a id="n" href="logout.php">LOG OUT</a></a></div>
        <div class="body">
        <!-- <hr id="hr1"> -->
        <!-- <hr id="hr2"> -->
        <div class="left sticky"><div><nav>
        <a id="three" href="orderinfouser.php"> ORDER DETAILS</a><br>
        <hr>
        <a id="four" href="filldetails.php" target="_self"> CREATE CARD</a><br>
        <hr>
    </div>
    </div>
    <div class="container">
<a id="one" href="one.php"><div class="one"><span>Rate: 8/-</span></div></a>
<a href="two.php" id="two"><div class="two"><span>Rate: 8/-</span></div></a>
<a id="three" href="three.php"><div class="three"><span>Rate: 8/-</span></div></a> 
<a id="four" href="four.php"><div class="four"><span>Rate: 8/-</span></div></a>
<a id="five" href="five.php"><div class="five"><span>Rate: 8/-</span></div></a>
<a href="six.php" id="six"><div class="six"><span style="color:black; background-color: white;">Rate: 8/-</span></div></a>
<!-- <h1> Fill Your Details Here</h1>
        <hr></hr>
        <form action="create.php" method="POST">
      <div class="name">Name : <input type="text" id="u" name="uname" placeholder=""></div>
      <div class="email">Email : <input type="text" id="e" name="email" placeholder=""></div>
      <div class="phone">Phone : <input type="text" id="ph" name="phone" placeholder=""></div>
     <div class="btn"> <input type="submit" name="submit" id="btn" value="CREATE"></div>
    </form> -->
</div>
</div>
    
</body>
</html>

