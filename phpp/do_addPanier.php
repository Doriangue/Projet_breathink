<?php
require_once 'connexion.php';
session_start();

    $requete = "INSERT INTO 
    `panier`(`name`, `price`, `title`) 
    VALUES (
    :name,
    :price,
    :title
    );";

    $stmt = $conn->prepare($requete);
    $stmt->bindValue(':name',   $_POST['name']);
    $stmt->bindValue(':prenom', $_POST['price']);
    $stmt->bindValue(':prenom', $_POST['title']);
    $stmt->execute();