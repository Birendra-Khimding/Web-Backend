<?php
include('../Backend/header.php')

?>
        <!-----Hero section------->
        
            <div class="row">
            <div class="col-2">
            <?php
            if(isset($_SESSION["userid"])){
             echo " <h2> Welcome Back ".$_SESSION["uname"]."</h2>";
   
    
               }
?>
           <h1>Once people get connected to real food<br>they never change back!</h1><br><br>
            <h3>“Food for us comes from our relatives, whether they have wings or fins or roots. 
                hat is how we consider food. Food has a culture. It has a history. It has a story. It has relationships.”
            </h3>
            <a href="#product" class="btn">Explore Now &#8594</a>
            </div>
            <div class="col-2">
                <img src="../images/heroImage.jpg">
            </div>
            </div>

               <!-----House Special------->
            <div class="categories">
                <div class="sub-categories">
                <h1 class="title"> House Special</h1>
                <div class="row">
                    <div class="col-3">
                        <img src="../images/foodItem1.jpg">
                    </div>
                    <div class="col-3">
                        <img src="../images/foodItem2.jpg">
                    </div>
                        <div class="col-3">
                            <img src="../images/foodItem3.jpg">
                        </div>
                            <div class="col-3">
                                <img src="../images/foodItem4.jpg">
                            </div>

                    </div>
                </div>
            </div>
<!-----Featured Dish------->
<div id="product"></div>
<div class="sub-categories">
    <h1 class="title">Featured Dishes</h1>
    <div class="row">
        <div class="col-4">
            <img class="shop-item-image" src="../images/sashimi-1.jpg" >
            <h3 class="shop-item-title">Sashimi</h3>
            <p class="shop-item-price">$13.99</p>
            <a href="cart2.php"><button class="btn shop-item-button"type="button">Buy Now &#8594;</button></a>
        </div>
        <div class="col-4">
            <img class="shop-item-image" src="../images/Tongsang.jpg" >
            <h3 class="shop-item-title">Tongsang</h3>
            <p class="shop-item-price">$12.99</p>
            <a href="cart2.php"><button class="btn shop-item-button"type="button">Buy Now &#8594;</button></a>
        </div>
        <div class="col-4">
            <img class="shop-item-image" src="../images/Gado-Gado.jpg" >
            <h3 class="shop-item-title">Gado-Gado</h3>
            <p class="shop-item-price">$13.99</p>
            <a href="cart2.php"><button class="btn shop-item-button"type="button">Buy Now &#8594;</button></a>
        </div>
    </div>
</div>
<!-----Peoples Choice------->

<div class="sub-categories">
    <h1 class="title">Peoples Choice</h1>
    <div class="row">
        <div class="col-4">
            <img class="shop-item-image" src="../images/Shrimp%20Shumai.webp" >
            <h3 class="shop-item-title">Shrimp Shumai</h3>
            <p class="shop-item-price">$10.99</p>
            <a href="cart2.php"><button class="btn shop-item-button"type="button">Buy Now &#8594;</button></a>
        </div>
        <div class="col-4">
            <img class="shop-item-image" src="../images/Soto%20Mie.webp">
            <h3 class="shop-item-title">Soto Mie</h3>
            <p class="shop-item-price">$14.99</p>
            <a href="cart2.php"><button class="btn shop-item-button"type="button">Buy Now &#8594;</button></a>
        </div>
        <div class="col-4">
            <img class="shop-item-image" src="../images/Gulai%20Kambing.webp">
            <h3 class="shop-item-title">Gulai Kambing<</h3>
            <p class="shop-item-price">$15.99</p>
            <a href="cart2.php"><button class="btn shop-item-button"type="button">Buy Now &#8594;</button></a>
        </div>
        <div class="col-4">
            <img class="shop-item-image" src="../images/Ayam-kareme.jpg" >
            <h3 class="shop-item-title">Ayam-Kareme</h3>
            <p class="shop-item-price">$$16.99</p>
            <a href="cart2.php"><button class="btn shop-item-button"type="button">Buy Now &#8594;</button></a>
        </div>
    </div>
</div>
<hr>
<!-----Offer product section------->
    <div class="offer">
        <div class="sub-categories">
            <div class="row">
                <div class="col-2">
                 <img src="../images/Ketoprak.jpg" class="offer-img">
                </div>
                <div class="col-2">
                    <h1>Chefs Special</h1>
                    <h2>Ketopark</h2><br>
                    <p>
                    Ketoprak is a traditional Indonesian street food dish that's often described as tofu salad. 
                    It's made with a combination of fried tofu, steamed rice cakes, rice vermicelli
                     noodles, bean sprouts, cabbage, and cucumbers. The combination is served in peanut sauce 
                     and sweet soy sauce (kecap manis).</p><br>
                        <a href="cart2.php" class="btn">Buy Now &#8594;</a>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <!-----Brands------->
    <div class="brands">
        <div class="sub-categories"></div>
        <div class="row">
            <div class="col-5">
                <img src="../images/Grubhub.png" >
            </div>
            <div class="col-5">
                <img src="../images/Uber.png" >
            </div>
            <div class="col-5">
                <img src="../images/Doordash.png" >
            </div>
        </div>
    </div>
    
    <!-----Footer------->
   <?php
   include ('../Backend/footer.php')
   ?>