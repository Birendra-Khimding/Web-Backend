<?php
include('../Backend/header.php')

?>
        <!-----Display Section------->
        <div class="sub-categories single-product" >
            <div class="row">
                <div class="col-2">
                 <img src="../images/Gado-Gado.jpg" width="100%" id="productimg">
                 <div class="small-img-row">
                     <div class="small-img-col">
                         <img src="../images/Ayam-kareme.jpg" width="100%" class="small-img">
                     </div>
                     <div class="small-img-col">
                        <img src="../images/Bawal%20Bakar.webp" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="../images/Beef%20Rendang.webp" width="100%" class="small-img">
                    </div>
                   <div class="small-img-col">
                        <img src="../images/Gulai%20Kambing.webp" width="100%" class="small-img">
                    </div>
                 </div>
                </div>
                <div class="col-2">
                    <h1>Main Course</h1>
                    <h3>About</h3>
                    <br>
                    <p>Indonesian food is one of the most vibrant and colourful cuisines in the world, 
                        full of intense flavour. Over the centuries many different cultures have visited 
                        and left their stamp on the cuisine – Indian, Chinese, Arab, Portuguese, Spanish, English and Dutch</p>
                        <a href="cart2.php" class="btn">Buy Now &#8594;</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="sub-categories">
            <div class="row row-2">
        
            </div>
        </div>
<!-----Menu Section------->
<div class="sub-categories">
<div class="row row-2">
    <h2>Main Course</h2>
</div>
    <div class="row">
        <div class="col-4">
            <img src="../images/Gado-Gado.jpg">
            <h3>Gado-Gado</h3>
            <p>$15.99</p>
            <a href="cart2.php">
                <button class="btn shop-item-button"type="button">Buy Now &#8594;</button>
            </a>
        </div>
        <div class="col-4">
            <img src="../images/Ayam-kareme.jpg">
            <h3>Ayam-kareme</h3>
            <p>$16.99</p>
            <a href="cart2.php">
                <button class="btn shop-item-button"type="button">Buy Now &#8594;</button>
            </a>
        </div>
        <div class="col-4">
            <img src="../images/Bawal%20Bakar.webp">
            <h3>Bawal Bakar</h3>
            <p>$16.99</p>
            <a href="cart2.php">
                <button class="btn shop-item-button"type="button">Buy Now &#8594;</button>
            </a>
        </div>
        <div class="col-4">
            <img src="../images/Beef%20Rendang.webp">
            <h3>Beef Rendang</h3>
            <p>$14.99</p>
            <a href="cart2.php">
                <button class="btn shop-item-button"type="button">Buy Now &#8594;</button>
            </a>
        </div>
        <div class="col-4">
            <img src="../images/Gulai%20Kambing.webp">
            <h3>Gulai Kambing</h3>
            <p>$12.99</p>
            <a href="cart2.php">
                <button class="btn shop-item-button"type="button">Buy Now &#8594;</button>
            </a>
        </div>
        <div class="col-4">
            <img src="../images/Soto%20Mie.webp">
            <h3>Soto Mie</h3>
            <p>$14.99</p>
            <a href="cart2.php">
                <button class="btn shop-item-button"type="button">Buy Now &#8594;</button>
            </a>
        </div>
        <div class="col-4">
            <img src="../images/Steak%20Cumi.webp">
            <h3>Steak Cumi</h3>
            <p>$18.99</p>
            <a href="cart2.php">
                <button class="btn shop-item-button"type="button">Buy Now &#8594;</button>
            </a>
        </div>
        <div class="col-4">
            <img src="../images/Steak%20Jawa.webp">
            <h3>Steak Jawa</h3>
            <p>$18.99</p>
            <a href="cart2.php">
                <button class="btn shop-item-button"type="button">Buy Now &#8594;</button>
            </a>
        </div>
        
    </div>
</div>
<!-----Footer------->
<script>
    var productimg = document.getElementById("productimg");
        var smallimg = document.getElementsByClassName("small-img");
         smallimg[0].onclick=function(){
             productimg.src = smallimg[0].src;
         }
         smallimg[1].onclick=function(){
             productimg.src=smallimg[1].src;
         }
         smallimg[2].onclick=function(){
             productimg.src=smallimg[2].src;
         }
         smallimg[3].onclick=function(){
             productimg.src=smallimg[3].src;
         }

</script>
<?php
   include ('../Backend/footer.php')
   ?>