<?php
$username = 'root';
$password = 'root';
try {
    $conn = new PDO('mysql:host=127.0.0.1;dbname=Smo\'tech',$username, $password);
} catch (PDOException $exception) {
    die($exception -> getMessage());
}