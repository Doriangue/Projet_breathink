<?php session_start();
include_once 'includes/header.php';
?>

<section class="promo">

    <div class="login">
        <img src="./assets/imgs/login.svg" alt="" class="loginImg">
        <p class="loginText"><?=$_SESSION['prenom']?></p>
    </div>

    <div class="modalLogin">
        <div class="modalLogin-contentLeft">
            <p class="loginSubText">Bonjour <?=$_SESSION['prenom']?>, bienvenue sur votre espace client </p>
        </div>
        <div class="modalLogin-contentRight">
            <div class="headTitleRight">

                <img src="./assets/imgs/cross.svg" alt="" class="crossImg">
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
            <img src="./assets/imgs/imgSection.jpg" alt="">
        </div>
    </article>

</section>

<section class="citeSection">
    <div class="citeTitle">Smo’tech</div>
    <div class="citeText">Une maison de vente pour cigarette éléctronique pour les clients débutant / intermédiaire et aussi pour les experts.</div>
</section>


<?php
include_once 'includes/packs.php';
include_once 'includes/recommandation.php';
include_once 'includes/footer.php'
?>