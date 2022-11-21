<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="spice.js" async></script>
    <link rel="stylesheet" href="../Frontend/reg.css">
    <link rel="stylesheet" href="../Frontend/start.css">
    <link rel="stylesheet" href="../Frontend/cs.css">
    <link rel="stylesheet" href="../Frontend/payment.css">
</head>
<body>
    <!-----Nav Bar------->
    <div>
        <a href="../Frontend/start.php" id="logo">SPICE</a>
    <nav>
        <ul>
            <li><a href="../Frontend/start.php" >Home</a></li>
            <li><a href="#product" >Menu</a>
            <ul class="nav_nested">
                <li><a href="../Frontend/entree.php" class= "link">Entree</a></li>
                <li><a href="../Frontend/main-menu.php" class= "link">Main Course</a></li>
                <li><a href="../Frontend/beverage.php" class= "link">Beverages</a></li>
            </li>
            </ul>
            <li><a href="../Frontend/ContactUs.php" >Contact</a></li>
            <?php
            if(isset($_SESSION["userid"])){
                echo " <li><a href='../Backend/profile.php' class= 'link'>Profile</a></li>";
                echo " <li><a href='../Backend/logout.php' class= 'link'>Logout</a></li>";
                echo " <a href='../Frontend/cart2.php'><img src='../images/cart-icon.png' width='40px' height='40px'></a>";
                
            }else{
               
                echo "<li><a href='../Backend/signup.php' class= 'link'>Sign Up</a></li>";
                echo "<li><a href='../Backend/login.php' class= 'link'>Login</a></li>";
                echo "<a href='../Frontend/cart2.php'><img src='../images/cart-icon.png' width='40px' height='40px'></a>";
            }
            ?>
            
        </nav>
     