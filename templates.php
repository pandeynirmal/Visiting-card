<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Templates</title>
    <style>
        *{
            margin: 0px;
        }
        body{
            background: url(back.jpg);
            background-size: cover;
        }
        .header{
            overflow: hidden;
            width: 100%;
            height: 60px;
            background-color: rgba(0, 0, 0, 0.7);
        }
        a{
            text-decoration: none;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            color: aliceblue;
            font-size:x-large;
        }
        .back{
            height: 60px;
            width: 80px;
            padding-left: 20px;
            padding-top: 13px;
            display: inline-block;
            background-color: rgb(4, 127, 127);
        }
        .back:hover{
            background-color: rgb(4, 111, 111);
        }
        .container{
            width: 80%;
            background-color:rgba(4, 127, 127, 0.6);
            height: 430px;
            margin-left: 10%;
            margin-top: 10px;
            padding-top: 20px;
        }
        .one{
            width: 32%;
            background:url(one.jpg);
            background-size: cover;
            height: 200px;
            float: left;
            margin-left: 20px;
        }
        .two{
            width: 32%;
            background-color: black;
            height: 200px;
            float: left;
            margin-left: 5px;
        }
        .three{
            width: 32%;
            background-color: black;
            height: 200px;
            float: left;
            margin-left: 5px;
        }
        .four{
            width: 32%;
            background-color: black;
            height: 200px;
            float: left;
            margin-left: 20px;
            margin-top: 5px;
        }
        .five{
            width: 32%;
            background-color: black;
            height: 200px;
            float: left;
            margin-left: 5px;
            margin-top: 5px;
        }
        .six{
            width: 32%;
            background-color: black;
            height: 200px;
            float: left;
            margin-left: 5px;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="header">
<div class="back"><a href="filedetails.php">Back</a></div>
    </div>
    <div class="container">
<a id="one" href="one.php"><div class="one"><span style="margin-left: 5px;font-size: small;">Rate: 8/-</span></div></a><a href="two.php" id="two"><div class="two"><span style="margin-left: 5px;font-size: small;">Rate: 8/-</span></div></a><a id="three" href="three.html"><div class="three"><span style="margin-left: 5px;font-size: small;">Rate: 8/-</span></div></a>
<a id="four" href="four.html"><div class="four"><span style="margin-left: 5px;font-size: small;">Rate: 8/-</span></div></a><a id="five" href="five.html"><div class="five"><span style="margin-left: 5px;font-size: small;">Rate: 8/-</span></div></a><a  id="six" href="six.html"><div class="six"><span style="margin-left: 5px;font-size: small;">Rate: 8/-</span></div></a>
    </div>
</body>
</html>