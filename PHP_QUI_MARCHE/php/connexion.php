<?php
$username = 'breathink';
$password = 'breathink';
try {
    $conn = new PDO('mysql:host=127.0.0.1;dbname=breathink',$username, $password);
} catch (PDOException $exception) {
    die($exception -> getMessage());
}