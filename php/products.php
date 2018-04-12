<?php
session_start();
include_once 'includes/header.php';
?>

<section class="products">
    <a class="productsLink" href="add_Comment.php">Personnaliser ici votre cigarette.</a>
    <section class="productsItem gecko">
        <div class="productsItemImg">
            <p class="productsItemTitle">Gecko</p>
            <img class="productsImg" src="assets/imgs/gecko.jpg" alt="yeh">
        </div>
        <div class="productsItemDesc">
            <p class="productsItemPrice">69 €</p>
            <div class="productsItemText-all">
                <p class="productsItemText-high">La cigarette la plus apprécié selon nos utilisateurs.</p>
                <div class="productsImgContainer">
                    <img class="productStars" src="assets/imgs/star.png" alt="">
                    <img class="productStars" src="assets/imgs/star.png" alt="">
                    <img class="productStars" src="assets/imgs/star.png" alt="">
                    <img class="productStars" src="assets/imgs/star.png" alt="">
                    <img class="productStars" src="assets/imgs/starwhite.png" alt="">
                </div>
                <p class="productsItemText-low">Gecko est un concentré de performance et de design concentré dans un micro setup de moins de 10 cm.</p>
            </div>
            <div class="productsItemButton"><button class="productsItemAdd" type="button" name="button">Ajouter aux panier</button></div>
        </div>
</section>

    <section class="productsItem gecko">
        <div class="productsItemImg ImgVaporesso">
            <p class="productsItemTitle TitleVaporesso ">Vaporesso</p>
            <img class="productsImg" src="assets/imgs/vaporesso.png" alt="yeh">
        </div>
        <div class="productsItemDesc DescVaporesso">
            <p class="productsItemPrice">99 €</p>
            <div class="productsItemText-all">
                <p class="productsItemText-high TextVaporesso">500+ utilisateurs ont acheter cette cigarette</p>
                <div class="productsImgContainer">
                    <img class="productStars" src="assets/imgs/star.png" alt="">
                    <img class="productStars" src="assets/imgs/star.png" alt="">
                    <img class="productStars" src="assets/imgs/star.png" alt="">
                    <img class="productStars" src="assets/imgs/star.png" alt="">
                    <img class="productStars" src="assets/imgs/star.png" alt="">
                </div>
                <p class="productsItemText-low TextVaporesso">Le Kit Attitude s'adresse ainsi aux vapoteurs à la recherche d'un appareil offrant un niveau de contrôle supérieur sans avoir à passer par de la programmation informatique.</p>
            </div>
            <div class="productsItemButton"><button class="productsItemAdd BtnVaporesso" type="button" name="button">Ajouter aux panier</button></div>
        </div>
    </section>


        <section class="productsItem gecko">
            <div class="productsItemImg">
                <p class="productsItemTitle">Passy</p>
                <img class="productsImg" src="assets/imgs/passy.jpg" alt="yeh">
            </div>
            <div class="productsItemDesc">
                <p class="productsItemPrice">149 €</p>
                <div class="productsItemText-all">
                    <p class="productsItemText-high">Des stars comme Rihanna on acheté cette cigarette.</p>
                    <div class="productsImgContainer">
                        <img class="productStars" src="assets/imgs/star.png" alt="">
                        <img class="productStars" src="assets/imgs/star.png" alt="">
                        <img class="productStars" src="assets/imgs/star.png" alt="">
                        <img class="productStars" src="assets/imgs/star.png" alt="">
                        <img class="productStars" src="assets/imgs/starwhite.png" alt="">
                    </div>
                    <p class="productsItemText-low">La nouvelle Passy avec l'atomiseur Mini Atlas V2 embarqué procure une vape généreuse et conséquente.Le meilleur du tout-en-un au creux de la main.</p>
                </div>
                <div class="productsItemButton"><button class="productsItemAdd" type="button" name="button">Ajouter aux panier</button></div>
            </div>
        </section>
</section>
<?php
    include_once 'includes/footer.php';
?>

<script src="js/loginModal.js"></script>
<script src="js/bagMarketModal.js"></script>

</body>
</html>