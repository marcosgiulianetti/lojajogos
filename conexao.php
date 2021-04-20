<?php

$localhost = "localhost";
$user = "root";
$password = "";
$database = "bdprojeto1";

try {
    $pdo = new PDO("mysql:dbname=" . $database . "; host=" . $localhost, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $ex) {
    echo "ERRO! Detalhes: " . $ex->getMessage();
    exit;
}
