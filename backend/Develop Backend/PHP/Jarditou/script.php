<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact et script</title>
</head>

<body>

<br>

<?php


$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$ddn=$_POST['ddn'];
$code=$_POST['codepostal'];
$address=$_POST['adresse'];
$ville=$_POST['ville'];
$email=$_POST['email'];
$validation=$_POST['validation'];


if (!empty($_POST['validation'])) {
  $validation=$_POST['validation'];
}

if (empty($_POST["nom"])) {
    echo "Le nom doit être renseigné <br>";

}else if(!preg_match("/^[A-zÀ-ž]+$/",$nom)){
    echo "le nom n'est pas valide <br>";

}else{ echo $nom."<br>";}



if (empty($_POST["prenom"])) {
    echo "Le prénom doit être renseigné <br>";

}else if(!preg_match("/^[A-zÀ-ž]+$/",$prenom)){
    echo "le prenom n'est pas valide <br>";

}else{ echo $prenom."<br>";}


if (empty($_POST["ddn"])){
    echo "La date de naissance doit être renseigné <br>";

}else if (!strtotime($_POST["ddn"])){
    echo "La date de naissance n'est pas valide <br>";

}else{ echo $ddn."<br>";}


if (empty($_POST["codepostal"])){
    echo "Le code postal doit être renseigné <br>";

}else if(!preg_match("/^[0-9]{5}$/",$code)){
    echo "Le code postal n'est pas valide <br>";

}else{ echo $code."<br>";}


if (empty($_POST["adresse"])) {
    echo "L'adresse doit être renseigné <br>";

}else if(!preg_match("/^[0-9a-zA-Z ,'-]+$/",$address)){
    echo "L'adresse n'est pas valide <br>";

}else{ echo $address."<br>";}


if (empty($_POST["ville"])) {
    echo "La ville doit être renseigné <br>";

}else if(!preg_match("/^[a-zéèêA-Z '-]+$/",$ville)){
    echo "La ville n'est pas valide <br>";

}else{ echo $ville."<br>";}


if (empty($_POST["email"])) {
    echo "L'adresse mail doit être renseigné <br>";

}else if(!preg_match("/^[0-9a-zA-Z._-]+@[0-9a-zA-Z._-]+[.][a-z]{2,5}$/",$email)){
    echo "L'adresse mail n'est pas valide <br>";

}else{ echo $email."<br>";}

if (empty($_POST['validation'])) {
    echo "Le traitement informatique de ce formulaire n'est pas coché";
}else{
    echo "Le traitement informatique de ce formulaire à été coché";
}
?>

</body>
</html>