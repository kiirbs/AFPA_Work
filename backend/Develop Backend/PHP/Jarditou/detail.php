<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>DETAILSDUPRODUITS</title>
</head>
<?php
require "connexion_bdd.php"; // Inclusion de notre bibliothèque de fonctions
$db = connexionBase(); // Appel de la fonction de connexion
$pro_id = $_GET["pro_id"];

try {
  $requete = "SELECT pro_id, pro_ref, pro_cat_id, pro_libelle, pro_description, pro_prix, pro_stock, pro_couleur, pro_bloque, pro_d_ajout, pro_d_modif FROM produits ";
  $requete = $requete . "JOIN categories ON cat_id = pro_cat_id ";
  $requete = $requete . "WHERE pro_id=" . $pro_id;
  $result = $db->query($requete);

  // Renvoi de l'enregistrement sous forme d'un objet
  $produit = $result->fetch(PDO::FETCH_OBJ);
} catch (Exception $e) {
  echo 'Erreur : ' . $e->getMessage() . '<br>';
  echo 'N° : ' . $e->getCode() . '<br>';
  die('Connexion au serveur impossible.');
}
?>

<body>
  <header>
    <div class="container-fluid">
      <div class="d-none d-lg-flex justify-content-between align-items-center">
        <img class="col-2" src="jarditou_photos/jarditou_logo.jpg" alt="logo" title="logo">
        <h1 class="pr-5" style="color: green">Tout le jardin</h1>
      </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">JardiTou.com</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="11-1-Index.php">Accueil <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="11-2-Tableau.php">Tableau</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="11-3-Contact.php">Contact</a>
          <li class="nav-item active">
            <a class="nav-link" href="11-4-Listes.php">Liste des produits</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Votre promotion" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
        </form>
      </div>
    </nav>
    <img src="jarditou_photos/promotion.jpg" class="img-fluid" alt="promotion" tilte="promotion" width="100%">
  </header>

  <div class="row">
    <div class="col-12">
      <form>
        <fieldset>
          <br>
          <div class="form-group">
            <label for="id">ID</label>
            <?php
            echo "<input type='text' class='form-control' id='id' value='" . $produit->pro_id . "' disabled>";
            ?>
          </div>
          <div class="form-group">
            <label for="ref">Référence</label>
            <?php
            echo "<input type='text' class='form-control' id='ref' value='" . $produit->pro_ref . "' disabled>";
            ?>
          </div>
          <div class="form-group">
            <label for="cat">Catégorie</label>
            <?php
            echo "<input type='text' class='form-control' id='cat' value='" . $produit->pro_cat_id . "' disabled>";
            ?>
          </div>
          <div class="form-group">
            <label for="lib">Libellé</label>
            <?php
            echo "<input type='text' class='form-control' id='lib' value='" . $produit->pro_libelle . "' disabled>";
            ?>
          </div>
          <div class="form-group">
            <label for="ref">Description</label>
            <?php
            echo "<input type='text' class='form-control' id='desc' value='" . $produit->pro_description . "' disabled>";
            ?>
          </div>
          <div class="form-group">
            <label for="price">Prix</label>
            <?php
            echo "<input type='text' class='form-control' id='price' value='" . $produit->pro_prix . "' disabled>";
            ?>
          </div>
          <div class="form-group">
            <label for="stock">Stock</label>
            <?php
            echo "<input type='text' class='form-control' id='stock' value='" . $produit->pro_stock . "' disabled>";
            ?>
          </div>
          <div class="form-group">
            <label for="color">Couleur</label>
            <?php
            echo "<input type='text' class='form-control' id='color' value='" . $produit->pro_couleur . "' disabled>";
            ?>
          </div>
          <br>
          <?php
          echo "Produit bloqué : ";

          if ($produit->pro_bloque == 1) {
            echo "<div class='form-check form-check-inline'>";
            echo "<input class='form-check-input' type='radio' name='check' id='oui' value='oui' checked disabled>";
            echo "<label class='form-check-label' for='oui'> Oui";
            echo "</label></div>";
            echo "<div class='form-check form-check-inline'>";
            echo "<input class='form-check-input' type='radio' name='check' id='non' value='non' disabled>";
            echo "<label class='form-check-label' for='non'> Non";
            echo "</label></div>";
          } else {
            echo "<div class='form-check form-check-inline'>";
            echo "<input class='form-check-input' type='radio' name='check' id='oui' value='oui'  disabled>";
            echo "<label class='form-check-label' for='oui'> Oui";
            echo "</label></div>";
            echo "<div class='form-check form-check-inline'>";
            echo "<input class='form-check-input' type='radio' name='check' id='non' value='non' checked disabled>";
            echo "<label class='form-check-label' for='non'> Non";
            echo "</label></div>";
          };

          echo "<br>";
          echo "Date d'ajout : ";
          echo " $produit->pro_d_ajout ";


          echo "<br>";
          echo "Date de modification : ";
          echo " $produit->pro_d_modif ";
          ?>
          <br>
          <br>
          <?php
          echo "<a href='modification.php?pro_id=$produit->pro_id' class='btn btn-warning'>Modifier</button>";
          ?>
          <a href="11-4-Listes.php" class="btn btn-secondary">Retour</a>
          <button type="button" id="btn1" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Supprimer ce produit</button>

        </fieldset>
      </form>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Est-tu sur de vouloir supprimer ce produit?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Tu ne pourras pas revenir en arrière...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Non</button>
          <a href="delete.php?pro_id=<?php echo $produit->pro_id ?>" id="btn1" class="btn btn-danger">Supprimer ce produit</a>
        </div>
      </div>
    </div>
  </div>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>