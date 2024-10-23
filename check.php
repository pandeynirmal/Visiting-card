 <?php
 include'config.php';
 session_start();
 if(isset($_POST['submit']))
 {
     $username=$_POST['fname'];
     $password=$_POST['pas'];

     $check="SELECT * FROM userinfo WHERE email='$username' AND password='$password'";
     if($run=(mysqli_query($conn,$check)))
     {
         if(mysqli_num_rows($run)==1)
         {
             echo"Login successful";
             $row=mysqli_fetch_array(($run));
             if($row['usertype']==1)
             {  
                 $_SESSION['username']=$username;
                 header("location:userhome.php");
                }
                if($row['usertype']==0){
                 $_SESSION['username']=$username;
                header("location:adminhome.php");
             }
             exit();
         }
         else{
             echo" Login Unsuccessful/ Incorrect Username or Password";
             exit();
         }
     }
 }
 ?>