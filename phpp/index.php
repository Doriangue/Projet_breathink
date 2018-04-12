<?php
session_start();
include_once 'includes/header.php';
?>

<section class="promo">

    <div class="login">
        <img src="./assets/imgs/login.svg" alt="" class="loginImg">
        <p class="loginText">Login</p>
    </div>

    <div class="modalLogin">
        <div class="modalLogin-contentLeft">
            <div class="loginBtn"><a href="register.php">S’inscrire</a></div>
            <p class="loginSubText">Smo’tech - inscrivez-vous,
                commandez votre pack et le tour
                est joué !</p>
        </div>
        <div class="modalLogin-contentRight">
            <div class="headTitleRight">
                <p class="loginText">Login</p>
                <img src="./assets/imgs/cross.svg" alt="" class="crossImg">
            </div>

            <form action="do_login.php" class="headFormRight" method="post">
                <label class="loginLabel" for="email">mail</label>
                <input name="email" id="email" type="email" class="loginInput">
                <label class="loginLabel" for="password">mot de passe</label>
                <input name="password" id="password" type="password" class="loginInput">

                <button type="submit" class="loginBtn">
                    confirmer
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
include_once 'includes/footer.php';
?>

