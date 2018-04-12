<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/reset.css">
    <link rel="stylesheet" href="styles/style.css">
    <title>Smok'Tech</title>
</head>
<body>

<header class="header">
    <nav class="navBar">
        <div class="navBar-left">
            <a href="index.php"><img src="./assets/imgs/navLogo.svg" alt="" class="navLogo"></a>
        </div>
        <div class="navBar-right">
            <div class="navItems"><a href="products.php">produits</a></div>
            <div class="navItems">personnaliser</div>
            <div class="navItems">packs</div>
            <div class="navShoppingBag">
                <img src="./assets/imgs/shopping-bag.svg" alt="" class="shoppingBagImg">
            </div>

            <div class="modalShoppingBag">
                <div class="modalShoppingBag-content">
                    <img src="./assets/imgs/cross.svg" alt="" class="crossImg">
                    <div class="modalShoppingBag-product">
                        <div class="modalShoppingBag-left">
                            <div class="modalShoppingBag-head" >
                                <p class="modalShoppingbag-title">Gecko</p>
                                <img src="./assets/imgs/shoppingBagStars.svg" alt="" class="modalShoppingbag-img">
                            </div>
                            <div class="modalShoppingBag-sub">
                                <div class="modalShoppingBag-textContent">
                                    <p class="modalShoppingBag-text">La cigarette la plus apprécié selon nos utilisateurs.</p>
                                </div>
                                <div class="modalShoppingBag-priceContent"><span class="modalShoppingBag-price">69 €</span></div>
                            </div>
                        </div>
                        <div class="modalShoppingBag-right">
                            <button class="modalShoppingBag-btn">paiement</button>
                            <button class="modalShoppingBag-btn">supprimer</button>
                        </div>
                    </div>

                    <div class="modalShoppingBag-product">
                        <div class="modalShoppingBag-left">
                            <div class="modalShoppingBag-head" >
                                <p class="modalShoppingbag-title">Gecko</p>
                                <img src="./assets/imgs/shoppingBagStars.svg" alt="" class="modalShoppingbag-img">
                            </div>
                            <div class="modalShoppingBag-sub">
                                <div class="modalShoppingBag-textContent">
                                    <p class="modalShoppingBag-text">La cigarette la plus apprécié selon nos utilisateurs.</p>
                                </div>
                                <div class="modalShoppingBag-priceContent"><span class="modalShoppingBag-price">69 €</span></div>
                            </div>
                        </div>
                        <div class="modalShoppingBag-right">
                            <button class="modalShoppingBag-btn">paiement</button>
                            <button class="modalShoppingBag-btn">supprimer</button>
                        </div>
                    </div>
                    <p class="totalPrice">TOTAL : 168 €</p>
                </div>
            </div>

            <div class="navBurgerMenu">
                <div class="navBurgerLine">
                    <div class="navBurgerLine-item"></div>
                    <div class="navBurgerLine-item middle"></div>
                    <div class="navBurgerLine-item"></div>
                </div>
                <p class="navBurgerText">menu</p>
            </div>


    </nav>

</header>

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

    <section class="products">

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

<section class="footer">
    <div class="footerContainer">
        <div class="footerContainer-items">
            <p class="footerText">livraison offerte</p>
            <p class="footerText-sub">À partir de 30 euros</p>
        </div>
        <div class="footerContainer-items">
            <p class="footerText">contactez-nous</p>
            <p class="footerText-sub">01.46.20.02.00</p>
        </div>
        <div class="footerContainer-items">
            <p class="footerText">avis certifiés</p>
            <p class="footerText-sub">
                <img src="./assets/imgs/stars.png" alt="" class="stars">
            </p>
        </div>
    </div>

    <div class="footerCopyright">
        <p class="footerCopyright-mention">Mentions légales</p>
        <p class="footerCopyright-text">Copyright © 2018 - SMO’TECH</p>
    </div>

</section>

<script src="js/loginModal.js"></script>
<script src="js/bagMarketModal.js"></script>

</body>
</html>