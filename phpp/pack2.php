<?php
require_once 'connexion.php';
session_start();
$requete = "SELECT
  `id`, 
  `price`, 
  `name`,
  `title`
FROM 
  `cart`
WHERE 
`id`= 13
;";
$stmt = $conn->prepare($requete);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./styles/reset.css">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Smok'Tech</title>
</head>
<body>
<section class="novices">
    <section class="novicesFlex">
        <section class="novicesBuy">
            <div class="novicesBuyContent">
                <a href="index.php"><img src="./assets/imgs/left-arrow.png" alt=""></a>
                <p class="novicesBuyPrice"><?= $row['name'] ?><br><br><?= $row['price'] ?></p>
                <p class="novicesBuyText"><?= $row['title'] ?></p>
                <div class="novicesBuyBtn-block">
                    <form method="post" action="add_panier.php">
                        <button class="novicesBuyBtn" type="submit" name="button">Acheter</button>
                    </form>
                </div>
            </div>
        </section>
        <section class="novicesDescription">
            <div class="novicesDescriptionContent">
                <div class="novicesDescriptionFlex">
                    <div><img class="novicesImg" src="./assets/imgs/Pack-moyen.png" alt=""></div>
                    <div><p class="novicesDescriptionSpan">Caractéristiques</p><p class="novicesDescriptionCharacteristic">Hauteur : 128 mm <br><br>Largeur : 27 mm <br><br>Contenance : 4,5 ML <br><br>Type de vape : inhalation directe <br><br>Autonomie : 3000 MAH <br><br>Accu : Batterie intégrée <br><br>Puissance : 1-80W</p></div>
                </div>
                <div class="novicesDescriptionText">
                    <p>Notre Pack Découverte iKuu i80 vous propose une solution complète pour vapoter au quotidien ou se lancer dans la cigarette électronique. Ce Pack Découverte est en effet idéal pour débuter grâce au kit iKuu i80 de Eleaf qui propose une box sans accu performante et un clearomiseur Melo 4 célèbre pour sa facilité d'utilisation et ses qualités de vape en saveur et vapeur. Pour bien débuter, ou juste apprécier nos e liquides, le Pack Découverte propose notre gamme de Classic LPV. Une gamme pleine de saveurs qui a fait ses preuves. </p>
                </div>
            </div>
        </section>
    </section>
</section>
</body>
</html>