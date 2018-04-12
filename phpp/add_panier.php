<?php
require_once 'connexion.php';
session_start();
if (!isset($_SESSION['prenom'])){
    header('Location:index.php');
}
$requete = "SELECT
  `id`, 
  `price`, 
  `name`,
  `title`
FROM 
  `cart`
;";
$stmt = $conn->prepare($requete);
$stmt->execute();
header('Location: do_addPanier.php')
?>