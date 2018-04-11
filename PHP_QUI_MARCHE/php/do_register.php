<?php
require_once 'connexion.php';
if (!empty($_POST['nom']) || !empty($_POST['password']) || !empty($_POST['prenom']) || !empty($_POST['adresse'])
    || !empty($_POST['date_naissance']) || !empty($_POST['ville']) || !empty($_POST['email'])) {
    $password = htmlentities($_POST['password']);
    $nom = htmlentities($_POST['nom']);
    $prenom = htmlentities($_POST['prenom']);
    $adresse = htmlentities($_POST['adresse']);
    $date = htmlentities($_POST['date_naissance']);
    $ville = htmlentities($_POST['ville']);
    $email = htmlentities($_POST['email']);
    $requete = "INSERT INTO
                `Users` 
                (`nom`,
                 `prenom`,
                  `adresse`,
                  `date_naissance`,
                  `ville`,
                  `email`,
                  `password`)
                  VALUES
                  (:nom,
                  :prenom,
                  :adresse,
                  :date_naissance,
                  :ville,
                  :email,
                  :password);
                  ";
    $stmt = $conn->prepare($requete);
    $stmt->bindValue(':nom', $nom);
    $stmt->bindValue(':prenom', $prenom);
    $stmt->bindValue(':adresse', $adresse);
    $stmt->bindValue(':date_naissance', $date);
    $stmt->bindValue(':ville', $ville);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':password', password_hash($password, PASSWORD_DEFAULT));
    $stmt->execute();
    header('Location:login.php');
}
?>