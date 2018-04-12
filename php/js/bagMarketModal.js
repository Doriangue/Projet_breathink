const modalShopping = document.querySelector('.modalShoppingBag');
const shoppingBagImg = document.querySelector('.shoppingBagImg');
const closeMarket = document.querySelector('.modalShoppingBag-content .crossImg');

shoppingBagImg.addEventListener('click',function(){
    modalShopping.style.display = 'flex';
});
window.addEventListener('click',function(event){
    if (event.target === modalShopping) {
        modalShopping.style.display = "";
    }
});

closeMarket.addEventListener('click',function(event){
        modalShopping.style.display = "";
});
