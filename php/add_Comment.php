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

  <section class="modelisation">
      <div class="modelisationTitle">personnalisation</div>
      <div class="modelisationContainer"></div>
  </section>

    <form action="do_addComment.php" class="add" method="post">
      <div class="add-container">
          <textarea placeholder="Ajoutez un commentaire" name="comment"></textarea>
  <button type="submit">Ajouter</button>
  </div>
  </form>

    <section class="clients">

      <?php while(false !== $row = $stmt -> fetch(PDO::FETCH_ASSOC)):?>
        <div class="clients-container">
            <p class="clients-name"><?=$row['prenom']?></p>
            <div class="clients-imgContainer">
                <img src="" alt="" class="clients-img">
            </div>
            <p class="clients-date">14 mars 2018</p>
            <p class="clients-text"><?=$row['comment'] ?></p>
        </div>
        <?php endwhile; ?>
    </section>
</body>
</html>

<?php
    include 'includes/footer.php'
?>