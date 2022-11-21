<?php
include('../Backend/header.php')

?>
<?php
            if(isset($_SESSION["userid"])){
             echo " <h2 style= 'text-align:center;margin-bottom:30px;margin-top:30px;'>Name: ".$_SESSION["name"]."</h2>";
             echo " <h2 style= 'text-align: center;margin-bottom:30px;margin-top:30px;'>User Name: ".$_SESSION["uname"]."</h2>";
             echo " <h2 style= 'text-align: center;margin-bottom:30px;margin-top:30px;'>Email: ".$_SESSION["email"]."</h2>";
   
                 
               }
?>

<?php
   include ('../Backend/footer.php')
   ?>