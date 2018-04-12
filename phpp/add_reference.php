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
`id`= 14
;";
$stmt = $conn->prepare($requete);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
