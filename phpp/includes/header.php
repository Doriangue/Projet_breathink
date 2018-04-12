<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/reset.css">
    <link rel="stylesheet" href="styles/style.css">
    <script src="Build/UnityProgress.js"></script>
    <script src="Build/UnityLoader.js"></script>
    <script>
        var gameInstance = UnityLoader.instantiate("gameContainer", "Build/LOURD.json", {onProgress: UnityProgress});
    </script>

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
            <div class="login">
                <img src="./assets/imgs/login.svg" alt="" class="loginImg">
                <p class="loginText"><?=$_SESSION['prenom']?></p>
            </div>
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

        </div>
    </nav>

</header>