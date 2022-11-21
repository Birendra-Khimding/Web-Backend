<?php
include('../Backend/header.php')

?>
        <!-----Display Section------->
        <div class="sub-categories single-product" >
            <div class="row">
                <div class="col-2">
                <img src="../images/Smothies%20and%20Juices.webp" width="100%" id="productimg">
                 <div class="small-img-row">
                     <div class="small-img-col">
                         <img src="../images/Mocktails--1.jpg" width="100%" class="small-img">
                     </div>
                     <div class="small-img-col">
                        <img src="../images/soda.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="../images/Cocktails.jpg" width="100%" class="small-img">
                    </div>
                   <div class="small-img-col">
                        <img src="../images/beers.jpg" width="100%" class="small-img">
                    </div>
                 </div>
                </div>
                <div class="col-2">
                    <h1>Beverages</h1>
                    <h3>About</h3>
                    <br>
                    <p>The ingredients of health and long life, are great temperance, open air, easy labor, and little care.</p>
                        <a href="cart2.php" class="btn">Buy Now &#8594;</a>
                </div>
            </div>
        </div>
        <hr>
      
<!-----Menu section------->
<div class="sub-categories">
<div class="row row-2">
    <h2>Beverages</h2>
  
</div>
<div class="row">
        <div class="col-4">
            <img src="../images/Smothies%20and%20Juices.webp">
            <h3>Smothiee</h3>
            <p>$9.99</p>
            <a href="cart2.php">
                <button class="btn shop-item-button"type="button">Buy Now &#8594;</button>
            </a>
        </div>
        <div class="col-4">
            <img src="../images/Mocktails--1.jpg">
            <h3>Mockatils</h3>
            <p>$10.99</p>
            <a href="cart2.php">
                <button class="btn shop-item-button"type="button">Buy Now &#8594;</button>
            </a>
        </div>
        <div class="col-4">
            <img src="../images/soda.jpg">
            <h3>Sodas</h3>
            <p>$1.99</p>
            <a href="cart2.php">
                <button class="btn shop-item-button"type="button">Buy Now &#8594;</button>
            </a>
        </div>
        <div class="col-4">
            <img src="../images/Cocktails.jpg">
            <h3>Cocktails</h3>
            <p>15.99</p>
            <a href="cart2.php">
                <button class="btn shop-item-button"type="button">Buy Now &#8594;</button>
            </a>
        </div>
        <div class="col-4">
            <img src="../images/beers.jpg">
            <h3>Beers</h3>
            <p>$5.99</p>
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