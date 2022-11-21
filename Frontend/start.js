if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}


function ready(){
var removecartitembuttons = document.getElementsByClassName("btn-danger")
console.log(removecartitembuttons)
for(var i = 0; i < removecartitembuttons.length; i++){
    var button = removecartitembuttons[i]
    button.addEventListener('click', removecartitem)
  }
  var quanityinput = document.getElementsByClassName('cart-quantity-input')
  for(var i = 0; i < quanityinput.length; i++){
      var input= quanityinput[i]
      input.addEventListener('change', quantitychanged)
  }
  var addtocartbutton = document.getElementsByClassName('shop-item-button')
  for(var i = 0; i < addtocartbutton.length; i++){
      var button = addtocartbutton[i]
      button.addEventListener('click', addtocartclicked)
  }
  document.getElementsByClassName('btn-purchase')[0].addEventListener('click',purchaseclicked)
}
function purchaseclicked(){
    alert("Continue to Payment")
    var cartitems = document.getElementsByClassName('cart-items')[0]
    while(cartitems.hasChildNodes()){
        cartitems.removeChild(cartitems.firstChild)
    }
    updatecarttotal()

}

function removecartitem(event){
    var buttonClicked = event.target
        buttonClicked.parentElement.parentElement.remove()
        updatecarttotal()

}
function quantitychanged(event){
    var input = event.target
    if(isNaN(input.value) || input.value <= 0){
      input.value= 1
    }
    updatecarttotal()

}

function addtocartclicked(event){
    var button = event.target
    var shopitem = button.parentElement.parentElement
    var title = shopitem.getElementsByClassName('shop-item-title')[0].innerText
    var price = shopitem.getElementsByClassName('shop-item-price')[0].innerText
    var image = shopitem.getElementsByClassName('shop-item-image')[0].src
    console.log(title, price, image)
    additemtocart(title,price,image)
    updatecarttotal()

}
function additemtocart(title, price, image){
    var cartrow = document.createElement('div')
    cartrow.classList.add('cart-row')
    cartrow.innterText = title
    var caritems = document.getElementsByClassName('cart-items')[0]
    var caritemname = caritems.getElementsByClassName('cart-item-title')
    for(var i= 0; i < caritemname.length; i++){
        if(caritemname[i].innerText== title){
            alert('This item is already added to the cart')
            return
        }
    }
    var catrowcontents=`
    <div class="cart-item cart-column">
        <img class="cart-item-image" src="${image}" width="100" height="100">
        <span class="cart-item-title">${title}</span>
    </div>
    <span class="cart-price cart-column">${price}</span>
    <div class="cart-quantity cart-column">
        <input class="cart-quantity-input" type="number" value="1">
        <button class="btn btn-danger" type="button">REMOVE</button>
    </div>`
    cartrow.innerHTML = catrowcontents;

    caritems.append(cartrow)
    cartrow.getElementsByClassName('btn-danger')[0].addEventListener('click',removecartitem)
    cartrow.getElementsByClassName('cart-quantity-input')[0].addEventListener('click',quantitychanged)


}

function updatecarttotal(){
    var cartitemcontainer= document.getElementsByClassName('cart-items')[0]
    var cartrows = cartitemcontainer.getElementsByClassName('cart-row')
    var total = 0
    for(var i = 0; i < cartrows.length; i++){
        var cartrow= cartrows[i]
        var priceelement = cartrow.getElementsByClassName('cart-price')[0]
        var quantityelement = cartrow.getElementsByClassName('cart-quantity-input')
        [0]
        console.log(priceelement,quantityelement)
        var price= parseFloat(priceelement.innerText.replace('$','')) 
        var quantity = quantityelement.value
        total = total + (price * quantity)
    }
    total = Math.round(total * 100) / 100
    document.getElementsByClassName('cart-total-price')[0].innerText= '$'+total
}
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



