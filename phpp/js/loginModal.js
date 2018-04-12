const login = document.querySelector('.login');
const modal = document.querySelector('.modalLogin');
const close = document.querySelector('.crossImg');

login.addEventListener('click',function(){
    modal.style.display = 'flex';
});
window.addEventListener('click',function(event){
    if (event.target === modal) {
        modal.style.display = "";
    }
});
close.addEventListener('click',function () {
    modal.style.display = "";

});