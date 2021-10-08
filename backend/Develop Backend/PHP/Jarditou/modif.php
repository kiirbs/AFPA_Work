<?php

    require "connexion_bdd.php";
    $db = connexionBase();

    // Requête //
    
    try {

    $pro_id = $_POST['id'];
    $pro_cat_id = $_POST['cat'];
    $pro_ref = $_POST['ref'];
    $pro_libelle = $_POST['lib'];
    $pro_description = $_POST['desc'];
    $pro_prix = $_POST['prix'];
    $pro_stock = $_POST['stock'];
    $pro_couleur = $_POST['color'];
    $pro_bloque = $_POST['bloque'];
    $pro_modif = date("Y-m-d");
    $pro_photo = $_POST['photo'];

    $requete = "UPDATE produits SET pro_ref = '".$pro_ref."', pro_libelle = '".$pro_libelle."', pro_description = '".$pro_description."', pro_prix = '".$pro_prix."', pro_stock = '".$pro_stock."', pro_couleur = '".$pro_couleur."', pro_bloque = '".$pro_bloque."', pro_d_modif = '".$pro_modif."', pro_cat_id = '".$pro_cat_id."' WHERE pro_id = '".$pro_id."'";
var_dump($requete);
    $result = $db->query($requete);

    $produit = $result->fetch(PDO::FETCH_OBJ);

    }
    catch (Exception $e) {

        echo "La connexion à la base de données a échoué ! <br>";
        echo "Merci de bien vérifier vos paramètres de connexion ...<br>";
        echo "Erreur : " . $e->getMessage() . "<br>";
        echo "N° : " . $e->getCode();
        die("Fin du script");
    }
        header("Location: 11-4-Listes.php");
        exit;

    ?>