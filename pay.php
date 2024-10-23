<?php
    if(isset($_POST["submit"])){

        $quantity=$_POST['quantity'];
        switch ($quantity)
        {
            case '100':
            $value= 8*100;
            //  echo $value;
            break;

            case '500':
            $value=500*7;
            //  echo $value;
            break;

            case '1000':
            $value=1000*6;
            // echo $value;
            break;

            case '2000':
            $value=2000*5;
            // echo $value;
            break;

            case '4000':
            $value=4000*4;
            // echo $value;
            break;

            default:
            echo'Please select a quantity';
        }
    }
?>       
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
         a{
            text-decoration: none;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            color: aliceblue;
            font-size:x-large;
         }
         .container{
             width: 370px;
             height: 370px;
             background-color:rgba(0, 0, 0, 0.7);
             margin-left: 35%;
             margin-top: 20px;
             padding-top: 20px;
             color:rgb(255, 255, 255);
             font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
             font-size: larger;
         }
         #select{
             margin-left: 70px;
             background-color: rgb(4, 127, 127);
             padding: 2px 4px 8px 4px;
             color: rgb(255, 255, 255);
             font-size: large;
             border: none;
             border-radius: 3px;
             /* float: left; */
             /* margin-top: 5px; */
         
         }
         #text{
             padding: 4px;
             border: none;
             border-radius: 3px;
             /* margin-bottom: px; */
             border: none;
             height: 25px;
             width: 55px;
         }
         .span{
             margin-bottom: 20px;
         }
       img{
           float: left;
           margin-left: 50px;
           margin-bottom: 10px;
       }
       .button{
             width: 350px;
             height: 40px;
             margin-left: 10px;
             margin-bottom: 10px;
             background-color: rgb(4, 127, 127);
             border: none;
             color: whitesmoke;
             font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
             font-size: large;
             cursor: pointer;
             border-radius: 3px;
         }
         .button:hover{
            background-color: rgb(4, 111, 111);
         }
    </style>
    <div class="header">
        <div class="back"><a href="one.php">Back</a></div>
            </div>
    <div class="container">
    <div class="span"><span id="select">Your Total Will Be : <input id="text" type="text" value="<?php echo@$value?> /-"></span></div>
        <div class="one">
            <img src="QR.png" alt="QR code">
        </div>
        <a href="userhome.php"><button class="button" name="submit" value="ORDER">DONE</button></a>
    </div>