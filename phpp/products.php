<?php
include_once 'includes/header.php';
include_once 'includes/panier.php';
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
  `id`
  BETWEEN  15 AND 17
;";
$stmt = $conn->prepare($requete);
$stmt->execute();
?>

    <section class="products">
<?php while (false !== $row = $stmt -> fetch(PDO::FETCH_ASSOC)):?>
    <a class="productsLink" href="add_Comment.php">Personnaliser ici votre cigarette.</a>
    <section class="productsItem gecko">
    <div class="productsItemImg">
        <p class="productsItemTitle"><?= $row['name'] ?></p>
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
        <div class="productsItemButton">
            <form method="post" action="add_panier.php">
                <button class="productsItemAdd" type="submit" name="button">Ajouter aux panier</button>
            </form>
        </div>
    </div>
<?php endwhile; ?>
    </section>


<?php
include 'includes/footer.php';
?>