<?php
require_once 'connexion.php';
session_start();

if (!empty($_POST['comment'])) {
    $comment = htmlentities($_POST['comment']);
    $requete = "INSERT INTO 
    `comments`(`prenom`, `comment`) 
    VALUES (
    :prenom,
    :comment);
    ";

    $stmt = $conn->prepare($requete);
    $stmt->bindValue(':comment',  $_POST['comment']);
    $stmt->bindValue(':prenom', $_SESSION['prenom']);
    $stmt->execute();
    header('Location: add_Comment.php');
}
