<?php


session_start();

require_once "../Fonctions_php/connexion.php";

?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/styles/main.scss">

    <title>Breathink</title>
</head>

<body>
<h1 style="text-align: center; font-size: 30px; margin-top: 30px;"> Mon panier</h1>
<div class="flex" style="margin: 30px 30px; display: flex; height: 150px;">
    <?php foreach ($_SESSION['panierStock'] as $item){
        $req = $conn->prepare('SELECT * FROM panier WHERE id = :id');
        $req->execute([':id' => $item]);
        $element = $req->fetch();
        ?>

        <!-- Fill the fields with values returned in $row */ -->
        <div style="margin-left: 20px;">
            <img src="" alt="">
            <h1 style="margin-bottom: 10px;" ><?=$element['nom']?></h1>
            <p><?=$element['description']?></p>
            <img src="" alt="">
            <p><?$=element['prix']?></p>
            <input type="text" name="" value="Supprimer">
            <input type="text" name="" value="Payer">
        </div>
    <?php } ?>
</div>
</body>

</html>
