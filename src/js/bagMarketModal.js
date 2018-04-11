const modalShopping = document.querySelector('.modalShoppingBag');
const shoppingBagImg = document.querySelector('.shoppingBagImg');

shoppingBagImg.addEventListener('click',function(){
    modalShopping.style.display = 'flex';
});
window.addEventListener('click',function(event){
    if (event.target === modalShopping) {
        modalShopping.style.display = "";
    }
});