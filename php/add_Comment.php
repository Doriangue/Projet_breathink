<?php
session_start();
require_once 'connexion.php';
include 'includes/header.php';
if (!isset($_SESSION['prenom'])){
    header('Location:login.php?error=Dfghj');
}
$requete = "SELECT
  `id`, 
  `prenom`, 
  `comment` 
FROM 
  `comments`
 ORDER BY 
 `id`
 DESC
;";
$stmt = $conn->prepare($requete);
$stmt->execute();
?>

    <h1 class="perso-titre" style="color: #50E2C1; font-size: 3.2rem; text-align: center; padding-top:30px">Personnalisation</h1>
    <div class="webgl-content" style="display: flex; justify-content: center; margin-top: 25px">
        <div id="gameContainer" style="width: 1024px; height: 576px"></div>

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


    <form action="do_addComment.php" class="add" method="post">
        <div class="add-container">
            <input type="text" placeholder="Ajoutez un commentaire" name="comment" style="border: none;width: 900px;border-bottom: 1px grey solid;outline: none;font-family: 'Copperplate'">
            <button type="submit">Ajouter</button>
        </div>
    </form>

    <section class="clients">

        <?php while(false !== $row = $stmt -> fetch(PDO::FETCH_ASSOC)):?>
            <section class="view">
                <div class="viewContainer" style="width: 80%; margin: 0 auto">
                    <div class="viewFlex" style="width: 17%; margin: 10%">
                        <div class="viewContent">
                            <p class="viewCelebrities" style="font-size: 2rem; text-align: center;"><?=$row['prenom'] ?></p>
                            <div class="viewFamous" style="width: 235px; height: 130px; border: #50E2C1 solid 1px; position: relative; padding-top: 50px">
                                <div class="viewStars" style="text-align: center;">
                                    <img class="viewStarsImg" style="width: 100px; height: 18px" src="./assets/imgs/shoppingBagStars.png" alt="">
                                </div>
                                <p class="viewText" style="position: absolute; width: 350px;margin-left: -35px;font-size: 1.4rem"><?=$row['comment'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    </section>
</body>
</html>

<?php
    include 'includes/footer.php'
?>