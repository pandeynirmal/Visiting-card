<script type="text/javascript">
        function myfun(){
var divcontent=document.getElementById("one").innerHTML;
document.body.innerHTML=divcontent;
window.print();
}
    </script>

<div class="one" id="one">
            <img src="oneimg.jpg" alt="one template">
       
            <div class="content" id="content">
            <p id="name"><?php echo@$name?></p><br>
                <P id="email"><?php echo@$email?></p><br>
                <P id="phone">Ph: <?php echo@$phone?>, <?php echo@$address?></P><br>
                <!-- <P id="address"></p> -->
               
            </div>
        </div>
        <button class="button" name="submit" value="ORDER" onclick="myfun()">PRINT</button>

        .content{
            height: 100px;
            color: black;
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            font-size:large;
            position: absolute;
            top: 80px;
            left: 150px;
        }

        img{
            width: 450px;
            height: 250px;
            border: 1px solid black;

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

         .one{
             background-color: black;
             width: 450px;
             height: 250px;
             margin-left: 12%;
             margin-bottom: 30px;
             position: relative;
         }