<?php
$rand=rand(191000,22100);
if(isset($_POST["submit"])){

// $quantity=$_POST['quantity'];
$name=$_POST['uname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
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
         .container1{
            display: block;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            width: 580px;
            height: 400px;
            background-color:rgba(0,0, 0, 0.9);
            padding: 30px;
            font-size:medium;
            color: white;
            padding-top: 20px;
            /* border-radius: 20px; */
            margin-top: 30px;
            margin-left: 45px;
            float: left;
        }
         .container{
             display: block;
             width: 580px;
             height: 410px;
             background-color:rgba(0, 0, 0, 0.9);
             margin-left: 50px;
             margin-top: 30px;
             padding: 20px;
             color:rgb(255, 255, 255);
             font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
             font-size: larger;
             float: left;
         }
         .one{
             background-color: black;
             width: 450px;
             height: 250px;
             margin-left: 12%;
             margin-bottom: 30px;
             position: relative;
         }
         select{
             background-color: rgb(255, 255, 255);
             font-family:Verdana, Geneva, Tahoma, sans-serif;
             padding: 4px;
             font-size: large;
             border: none;
             border-radius: 3px;
             /* margin-top: 30pxs; */
             margin-bottom: 10px;
         }
         span{
             margin-left: 70px;
             background-color: rgb(4, 127, 127);
             padding: 4px;
             color: rgb(255, 255, 255);
             font-size: large;
             border: none;
             border-radius: 3px;
         
         }
         .button{
             width: 460px;
             height: 40px;
             margin-left: 70px;
             margin-bottom: 10px;
             background-color: rgb(4, 127, 127);
             border: none;
             color: whitesmoke;
             font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
             font-size: large;
             cursor: pointer;
             border-radius: 3px;
         }
         input[type=text]{
             padding: 5px;
             border: none;
             border-radius: 3px;
         }
         .button:hover{
            background-color: rgb(4, 111, 111);
         }
         
        .name{

font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
.email{
font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
.phone{
font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
input[type=text]{
width: 450px;
padding: 8px;
}
#u{
margin-left: 45px;
margin-bottom: 20px;
}
#p{
margin-left: 16px;
margin-bottom: 20px;
}
#a{
    margin-left: 27px;
margin-bottom: 20px;
}
#d{
    margin-left: 32px;
margin-bottom: 20px;
width: 50px;
}
#e{
margin-left: 48px;
margin-bottom: 20px;
}
#ph{
margin-left: 40px;
margin-bottom: 20px;

}
#btn{
width: 520px;
margin-left: 30px;
margin-bottom: 10px;
padding: 10px;
font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
font-size: medium;
cursor: pointer;
border-radius: 10px;
background-color: rgb(4, 127, 127);
color: white;
}
#btn:hover{
width: 520px;
margin-left: 30px;
padding: 10px;
font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
font-size: medium;
cursor: pointer;
border-radius: 10px;
background-color: rgb(3, 89, 89);
color: white;
}
h1{
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            color: whitesmoke;
            /* margin-left: 340px; */
            font-size:x-large;
            margin: auto;
            margin-bottom: 5px;
            color: lemonchiffon;
        }
        hr{
            margin-bottom: 20px;
            /* color: whitesmoke; */
            background-color: whitesmoke;
        }
        .content{
            height: 100px;
            color: white;
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            font-size:large;
            position: absolute;
            top: 60px;
            left: 110px;
        }
        
        img{
            width: 450px;
            height: 250px;
            border: 1px solid black;

        }
        #f{
    margin-left:2px;
margin-bottom: 20px;
width: 65px;
}
.design{
    float: left;
}
.card_id{
    float: left;
    margin-left: 20px;
}
#code{
            position: absolute;
            /* background-color: black; */
            color: white;
            top: 225px;
            left: 10px;
            opacity: 0.5;
          
        }
    </style>
    <div class="header">
        <div class="back"><a href="filldetails.php">Back</a></div>
            </div>
            </div><div class="container1">
<h1> Fill Your Details Here</h1>
        <hr></hr>
        <form action="create.php" method="POST">
        <div class="name">Name : <input type="text" id="u" name="uname" value="<?php echo@$name?>" required autocomplete="off"></div>
      <div class="email">Email : <input type="text" id="e" name="email" value="<?php echo@$email?>"required autocomplete="off"></div>
      <div class="phone">Phone : <input type="text" id="ph" name="phone" value="<?php echo@$phone?>" required autocomplete="off"></div>
      <div class="address">Address : <input type="text" id="a" name="address" value="<?php echo@$address?>" required autocomplete="off"></div>
      <div class="design">Design : <input type="text" id="d" name="design" value="four"></div>
      <div class="card_id">Card Id: <input type="text" id="f" name="random" value="<?php echo@$rand?>"></div>
     <div class="btn"> <input type="submit" name="submit" id="btn" value="CREATE"></div>
     <div class="btn"> <input type="submit" name="submit" formaction="four.php" id="btn" value="SHOW ON CARD"></div>
    </form>
</div>
    <div class="container">
    <div class="one" id="one">
            <img src="four.jpg" alt="one template">
            <p id="code">Id: <?php echo@$rand?></p>
            <div class="content" id="content">
            <center><p id="name"><?php echo@$name?></p></center><br>
                <center><P id="email"><?php echo@$email?></p></center><br>
                <center><P id="phone">Ph: <?php echo@$phone?>, <?php echo@$address?></P></center><br>
                <!-- <P id="address"></p> -->
                <!-- <P id="address"></p> -->
               
            </div>
        </div>
        <form action="pay.php" class="form" method="POST">
            <span>Select Qualtity:</span> <select name="quantity">
                <option value="100">100</option>
                <option value="500">500</option>
                <option value="1000">1000</option>
                <option value="2000">2000</option>
                <option value="4000" selected>4000</option>
            </select><br>
            <button class="button" name="submit" value="ORDER">ORDER</button>
        </form>
        <button class="button" name="submit" value="ORDER" onclick="myfun()">PRINT</button>

    </div>
    <script type="text/javascript">
        function myfun(){
var divcontent=document.getElementById("one").innerHTML;
document.body.innerHTML=divcontent;
window.print();
}
    </script>