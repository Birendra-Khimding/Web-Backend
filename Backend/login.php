<?php
include('header.php')

?>
<div class="registration-form">
<form action= "loginlog.php" method = "post">
           <div class="form-group">
               <input type = "text" name = "logName" class="item" placeholder="Username / Email"><br>
           </div>
               <div class="form-group">
               <input type = "password" name = "logPwd" class="item" placeholder="Password"><br>
               </div>
               <div class="form-group">
               <button type = "submit" name = "login" class="create-account" >Login</button>
               </div>
           </form>
</div>
           <?php
           if(isset($_GET["error"])){
            if($_GET["error"] === "invalidlogin"){
                echo "<p style= 'text-align:center;font-weight: bold;front-size:100px;'>Empty Field</p>";
            }
               if($_GET["error"] === "pwdMatch"){
               echo "<p style= 'text-align:center;font-weight: bold;front-size:100px;'>Username doesn't Exist</p>";
           }
           
           }
           ?>
       
    
    <!-----Footer------->
   <?php
   include ('footer.php')
   ?>