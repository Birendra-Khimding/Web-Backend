<?php
include('../Backend/header.php')

?>
        <!-----Display Section------->
        <div class="sub-categories single-product" >
            <div class="row">
                <div class="col-2">
                <img src="../images/Sate%20Ayam.webp" width="100%" id="productimg">
                 <div class="small-img-row">
                     <div class="small-img-col">
                         <img src="../images/Udang%20Gulung.webp" width="100%" class="small-img">
                     </div>
                     <div class="small-img-col">
                        <img src="../images/Shrimp%20Shumai.webp" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="../images/Dadar%20Jagung.webp" width="100%" class="small-img">
                    </div>
                   <div class="small-img-col">
                        <img src="../images/Empek-empek.webp" width="100%" class="small-img">
                    </div>
                 </div>
                </div>
                <div class="col-2">
                    <h1>Entree</h1>
                    <h3>About</h3>
                    <br>
                    <p>Indonesian cuisine often demonstrates complex flavour, acquired from certain ingredients and bumbu spices mixture. 
                        Indonesian dishes have rich flavours; most often described as savory, hot and spicy, and also combination of basic t
                        astes such as sweet, salty, sour and bitter.</p>
                        <a href="cart2.php" class="btn">Buy Now &#8594;</a>
                </div>
            </div>
        </div>
        <hr>
<!-----Menu section------->
<div class="sub-categories">
<div class="row row-2">
    <h2>Entree</h2>
   
</div>
    <div class="row">
        <div class="col-4">
            <img src="../images/Sate%20Ayam.webp">
            <h3>Sate Ayam</h3>
            <p>$7.99</p>
            <a href="cart2.php">
                <button class="btn shop-item-button"type="button">Buy Now &#8594;</button>
            </a>
        </div>
        <div class="col-4">
            <img src="../images/Udang%20Gulung.webp">
            <h3>Udang Gulung</h3>
            <p>$7.99</p>
            <a href="cart2.php">
                <button class="btn shop-item-button"type="button">Buy Now &#8594;</button>
            </a>
        </div>
        <div class="col-4">
            <img src="../images/Shrimp%20Shumai.webp">
            <h3>Shrimp Shuami</h3>
            <p>$10.99</p>
            <a href="cart2.php">
                <button class="btn shop-item-button"type="button">Buy Now &#8594;</button>
            </a>
        </div>
        <div class="col-4">
            <img src="../images/Dadar%20Jagung.webp">
            <h3>Dadar Jagun</h3>
            <p>$8.99</p>
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