<?php
function connexionBase()
{
   // Paramètre de connexion serveur
   $host = "localhost";
   $login= "afpa";  // Votre loggin d'accès au serveur de BDD 
   $password="Afpa1234";    // Le Password pour vous identifier auprès du serveur
   $base = "Jarditou";  // La bdd avec laquelle vous voulez travailler 

   try
   {
        $db = new PDO('mysql:host=' .$host. ';charset=utf8;dbname=' .$base, $login, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    } 
    catch (Exception $e) 
    {
        echo 'Erreur : ' . $e->getMessage() . '<br>';
        echo 'N° : ' . $e->getCode() . '<br>';
        die('Connexion au serveur impossible.');
    } 
}
?>