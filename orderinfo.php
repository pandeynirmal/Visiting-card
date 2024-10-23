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
   *{
            margin: 0px;

        }
    body{
            margin-top: 0px;
            scroll-behavior: smooth;
        }
    #header{
        background-color:antiquewhite;
        width: 100%;
        margin-top: auto;
        height: 60px;
        margin-bottom: 0px;
        position:relative;
        border-bottom: 1px solid whitesmoke;
        box-shadow: 0px 5px 8px black;
        padding-top: 20px;
    }
        .left
    {
        display: block;
        margin-top: 0px;
        width: 250px;
        height: 100%;
        background-color:black;
        /* margin-left: 7px; */
        align-content:left;
        padding-top: 20px;
        overflow: hidden;
        padding-left:  3px;
        padding-right: 3px;
        float: left;
    }
        #one{
            color: rgb(186, 182, 182);
            text-decoration: none;
            font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            /* border-bottom: 2px solid whitesmoke; */
            /* float: left; */
            margin-left: 40px;
        }
        #one:hover{
            /* border-bottom: 2px solid whitesmoke; */
            color:blue;
        }
        #two{
            color: rgb(186, 182, 182);
            text-decoration: none;
            font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            /* border-bottom: 2px solid whitesmoke; */
            margin-left: 40px;
        }
        #two:hover{
            color: whitesmoke;
        }
        #three{
            color: rgb(186, 182, 182);
            text-decoration: none;
            font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            /* border-bottom: 2px solid whitesmoke; */
            margin-left: 40px;
        }
        #three:hover{
            color: whitesmoke;

        }
        #four{
            color: rgb(186, 182, 182);
            text-decoration: none;
            font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            /* border-bottom: 2px solid whitesmoke; */
            margin-left: 40px;
        }
        #four:hover{
            color:red;
        }
        #five{
            color: rgb(186, 182, 182);
            text-decoration: none;
            font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            /* border-bottom: 2px solid whitesmoke; */
            margin-left: 40px;
        }
        #five:hover{
            color: whitesmoke;
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
            color: black;
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
            height: 1px;
            background-color: rgb(186, 182, 182);
            margin-top: 10px;
            margin-bottom: 10px;
        }
        #n{
            position: absolute;
            height: 30px;
            width: 70px;
            background-color: red;
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
            width: 71px;
            box-shadow: 1px 1px 3px black;
        }
        .table{
            /* margin-left: 200px; */
            margin-left:  30px;
            margin-top: 55px;
            float: left;
        }
        #table{
            color: white;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background-color: rgba(0, 0, 0, 0.8);
            /* background-color: whitesmoke; */
            border: 1px solid white;
        }
        #heading{
            background-color: rgb(4, 127, 127);
            color: white;
            /* padding: 5px; */
            /* font-weight:normal; */
        }
        th,td{
            padding: 5px;
        }
        #pw{
            color: white;
            margin-top: 0px;
            margin-left: 200px;
            font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 5px;
        }
        a{
            text-decoration: none;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            color: white;
        }
        #edit:hover{
            color: green;
        }
        #delete:hover{
            color: red;
        }
    </style>
</head>
<body>
    
    <div id="header"><center> <h2>Welcome</h2><p> <?php echo $_SESSION['username']?></p></center><a id="n" href="logout.php">LOG OUT</a></a></div>
    <div class="body">
    <div class="left"><div><nav>
    <a id="two" href="logininfo.php">USER INFORMATION</a><br>
    <hr>
    <a id="three" href="orderinfo.php"> ORDER DETAILS</a><br>
    <hr>
</div>
</div>
    <div class="table">
    <?php
include'config.php';
$add='SELECT * FROM orderinfo';
if($view=mysqli_query($conn,$add))
    {
            if(mysqli_num_rows($view)>0)
            {
                echo"<table id='table' border='2px'  border-collapse='collapse'>";
                echo"<tr id='heading'>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>PHONE</th>
                <th>DESIGN</th>
                <th>CARD_ID</th>
                <th colspan='2'>ACTIONS</th>
                </tr>";
                while ($row = mysqli_fetch_array($view)) {
                    // echo "<pre>";
                    // print_r($row);
                    echo "<tr>";
                    echo "<td>$row[id]</td>";
                    echo "<td>$row[name]</td>";
                    echo "<td>$row[email]</td>";
                    echo "<td>$row[phone]</td>";
                    echo "<td>$row[design]</td>";
                    echo "<td>$row[card_id]</td>";
                    // echo "<td>$row[quantity]</td>";
                    // echo "<td><a id='edit' href='edituserform.php?code=$row[id]'>Edit</a></td>";
                    echo "<td><a id='delete' href='deleteorder.php?code=$row[id]'>Delete</a></td>";
                    // echo "<td><a href='role.php?id=$row[Code]'>Add</a></td>";
                    echo "</tr>";
                }
                echo "</table>";
              
            }
            else{
                echo"<h1 id='pw'>No record found</h1>";
            }
        }
?>
</div>  
</div>
</body>
</html>