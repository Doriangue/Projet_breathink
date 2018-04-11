<?php session_start(); ?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../main.dcae738c.css">
    <title>Smok'Tech</title>
    <script src="../main.dcae738c.js"></script></head>
<body>
<header class="header">
    <nav class="navBar">
        <div class="navBar-left">
            <img src="../navLogo.643fd2a6.svg" alt="" class="navLogo">
        </div>
        <div class="navBar-right">
            <div class="navItems">produits</div>
            <div class="navItems">personnaliser</div>
            <div class="navItems">packs</div>
            <div class="navShoppingBag">
                <img src="../shopping-bag.f857af8e.svg" alt="" class="shoppingBagImg">
            </div>

            <div class="navBurgerMenu">
                <div class="navBurgerLine">
                    <div class="navBurgerLine-item"></div>
                    <div class="navBurgerLine-item middle"></div>
                    <div class="navBurgerLine-item"></div>
                </div>
                <p class="navBurgerText">menu</p>
            </div>

        </div>
    </nav>

</header>

<section class="promo">

    <div class="login">
        <img src="../login.14dcaedb.svg" alt="" class="loginImg">
        <p class="loginText"><?=$_SESSION['prenom']?></p>
    </div>

    <div class="modalLogin">
        <div class="modalLogin-contentLeft">
            <p class="loginSubText">Bonjour <?=$_SESSION['prenom']?>, bienvenue sur votre espace client </p>
        </div>
        <div class="modalLogin-contentRight">
            <div class="headTitleRight">

                <img src="../cross.dc805c73.svg" alt="" class="crossImg">
            </div>

            <form action="deconnexion.php" class="headFormRight" method="post">
                <button type="submit" class="loginBtn">
                    <p>Déconnexion</p>
                </button>
            </form>
        </div>

    </div>

    <article class="articleContainer">
        <div class="article">
            <div class="articleTitle">Cigarette Electronique</div>
            <div class="articleText"> La cigarette électronique est un appareil capable de vaporiser du eliquide arômatisé nicotiné ou non destiné à être inhalé. Ce dispositif produit une vapeur ressemblant visuellement à la fumée produite par la combustion du tabac.</div>
        </div>
        <div class="middlerec"></div>
        <div class="articleImg">
            <img src="../imgSection.293a3fe3.jpg" alt="">
        </div>
    </article>

</section>




<section class="packs">
    <div class="packsContainer">
        <a href="add_Comment.php">
            <div class="packsItem personalized">
                <h1 class="packsItemTitle personalizedTitle">Pack personnalisable</h1>
                <p class="packsItemDesc">Pour les plus créatifs.</p>
                <p class="packsItemPrice"></p>
            </div>
        </a>
        <a href="#">
            <div class="packsItem novice">
                <h1 class="packsItemTitle">Pack débutant</h1>
                <p class="packsItemDesc">Rien de mieux pour un début</p>
                <p class="packsItemPrice">29 €</p>
            </div>
        </a>
        <a href="#">
            <div class="packsItem medium">
                <h1 class="packsItemTitle">Pack Intermédiaire</h1>
                <p class="packsItemDesc">Pour les fumeurs régulier.</p>
                <p class="packsItemPrice">49 €</p>
            </div>
        </a>
        <a href="#">
            <div class="packsItem expert">
                <h1 class="packsItemTitle">Pack Avancé</h1>
                <p class="packsItemDesc">Pour les puristes et experts.</p>
                <p class="packsItemPrice">89 €</p>
            </div>
        </a>
    </div>
</section>



<section class="recommandation">
    <div class="recommandationContainer">

        <h1 class="recommandationTitle"></h1>

        <div class="recommandationItem">
            <img class="recommandationItemImg" src="../e-liquide.40b20027.jpg" alt="img">
            <p class="recommandationItemPrice">19 €</p>
            <div class="recommandationItemDot"></div>
        </div>

        <div class="recommandationItem">
            <img class="recommandationItemImg" src="../e-liquide.40b20027.jpg" alt="img">
            <p>29 €</p>
            <div class="recommandationItemDot"></div>
        </div>

        <div class="recommandationItem">
            <img class="recommandationItemImg" src="../e-liquide.40b20027.jpg" alt="img">
            <p>39 €</p>
            <div class="recommandationItemDot"></div>
        </div>

    </div>
</section>
<script src="../ui.f8b458ad.js"></script>
</body>
</html>