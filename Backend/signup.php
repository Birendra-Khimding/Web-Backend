<?php
include('header.php')
?>
<div class="registration-form">
  <form action= "signuplog.php" method = "post">
  <div class="form-group">
         <input type = "text" name = "name" class="item" placeholder="Full Name"><br>
         </div>
         <div class="form-group">
         <input type = "text" name = "email" class="item" placeholder="Email"><br>
         </div>
         <div class="form-group">
         <input type = "text" name = "uid" class="item" placeholder="User Name"><br>
         </div>
         <div class="form-group">
         <input type = "password" name = "pwd" class="item" placeholder="Password"><br>
         </div>
         <div class="form-group">
         <input type = "password" name = "pwdrep" class="item" placeholder="ReEnter Password"><br>
         </div>
         <div class="form-group">
         <button type = "submit" name = "submit"  class="create-account">Sign Up</button> 
         </div>
     </form>
</div>
           <br>
           <?php
           if(isset($_GET["error"])){
               if($_GET["error"] == "emptyInputs"){
               echo "<p style= 'text-align:center;font-weight: bold;front-size:100px;'>Empty Fields</p>";
           }
            if($_GET["error"] == "invalidUsername"){
               echo "<p style= 'text-align:center;font-weight: bold;front-size:100px;'>Invalid Username</p>";
           }
            if($_GET["error"] == "invalidEmail"){
            echo "<p style= 'text-align:center;font-weight: bold;front-size:100px;'> Invalid Email</p>";
        }
         if($_GET["error"] == "incorrectPassword"){
            echo "<p style= 'text-align:center;font-weight: bold;front-size:100px;'> assword Match Failed</p>";
        }
         if($_GET["error"] == "usernameTaken"){
            echo "<p style= 'text-align:center;font-weight: bold;front-size:100px;'> Username/Email Taken</p>";
        }
      }
           ?>
    
    <!-----Footer------->
   <?php
   include ('footer.php')
   ?>