<?php


require "connexion_bdd.php";
$db = connexionBase();
$pro_id = $_GET["pro_id"];

try {
    $requete = "DELETE FROM produits WHERE pro_id=:id";
    $stmt = $db->prepare($requete);
    $stmt->bindParam(':id', $pro_id, PDO::PARAM_INT);
    $stmt->execute();

    header('Location: 11-4-Listes.php');
    exit();
} catch (Exception $e) {
    echo 'Erreur : ' . $e->getMessage() . '<br>';
    echo 'N° : ' . $e->getCode() . '<br>';
    die('Connexion au serveur impossible.');
}
