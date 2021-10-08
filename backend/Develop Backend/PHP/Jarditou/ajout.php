<!-- Connexion Base De Donnée  -->

<?php

require "connexion_bdd.php";
$db = connexionBase();

// Affiche Les Erreurs //

try {

   $extension = substr(strrchr($_FILES["image"]["name"], "."), 1);

   $pro_ref = $_POST['ref'];
   $pro_cat_id = $_POST['cat'];
   $pro_libelle = $_POST['lib'];
   $pro_description = $_POST['desc'];
   $pro_prix = $_POST['prix'];
   $pro_stock = $_POST['stock'];
   $pro_couleur = $_POST['couleur'];
   $pro_bloque = $_POST['bloque'];
   $pro_d_ajout = date("Y-m-d");
   $pro_photo = $extension;

   $erreur = "";

   $aMimeTypes = array("image/gif", "image/jpeg", "image/pjpeg", "image/png", "image/x-png", "image/tiff");
   $finfo = finfo_open(FILEINFO_MIME_TYPE);
   $mimetype = finfo_file($finfo, $_FILES["fichier"]["tmp_name"]);
   finfo_close($finfo);

   // Requête //

   $requete = "INSERT INTO produits (pro_cat_id, pro_ref, pro_libelle, pro_description, pro_prix, pro_stock, pro_couleur, pro_photo, pro_d_ajout, pro_bloque) 
               VALUES ('$pro_cat_id', '$pro_ref', '$pro_libelle', '$pro_description', '$pro_prix', '$pro_stock', '$pro_couleur', '$pro_photo', '$pro_d_ajout', '$pro_bloque')";

   $result = $db->query($requete);
   $id_prod = $db->lastInsertId();


   $categorie = $result->fetch(PDO::FETCH_OBJ);
} catch (Exception $e) {

   echo "La connexion à la base de données a échoué ! <br>";
   echo "Merci de bien vérifier vos paramètres de connexion ...<br>";
   echo "Erreur : " . $e->getMessage() . "<br>";
   echo "N° : " . $e->getCode();
   die("Fin du script");
}

// Photo //

if (!in_array($mimeType, $aMimeTypes)) {
   $errors .= '&eimage';
   header("Location: formulaire_ajout.php?" . $erreur);
}

if ($erreur != NULL) {
   exit;
} else {

   $requete1 = $db->prepare('SELECT pro_id FROM produits WHERE pro_ref = ?');
   $requete1->bindValue(1, $_POST['ref']);
   $resultat = $requete1->fetch(PDO::FETCH_OBJ);

   move_uploaded_file($_FILES["image"]["tmp_name"], "jarditou_photos/" . $id_prod . "." . $extension);

   header("Location: 11-4-Listes.php");
   exit;
}

?>