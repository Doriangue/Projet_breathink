<?php
session_start();
require_once 'connexion.php';
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

<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>


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