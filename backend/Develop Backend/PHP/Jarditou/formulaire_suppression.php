<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>FORMSUPPR</title>
</head>
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
                <a class="nav-link" href="#">Liste des produits</a>
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

    <?php 

        require "connexion_bdd.php";
        $db = connexionBase();
        $pro_id = $_GET["pro_id"];

        try 
        {
            $requete = "SELECT pro_id, pro_ref, pro_photo, pro_libelle FROM produits WHERE pro_id='".$pro_id."'";
            $result = $db->query($requete);
            $produit = $result->fetch(PDO::FETCH_OBJ);
            
        } 
        catch (Exception $e) 
        {
            echo 'Erreur : ' . $e->getMessage() . '<br>';
            echo 'N° : ' . $e->getCode() . '<br>';
            die('Connexion au serveur impossible.');
        }

    ?>

        <br>
        <form class="form-group" action="suppression.php" method="POST">
        <input type="hidden" name="pro_id" value="<?php echo $produit->pro_id ?>">

        <?php
        echo "<img src='/jarditou_css/src/img/" . $produit->pro_id . "." . $produit->pro_photo . "' style='display: block; margin-left: auto; margin-right: auto;' />";
        ?>

        <div class="text-center">
        <h1 style="margin-top: 100px;"><strong><?php echo $produit->pro_ref; ?></strong></h1>
        </div>

        <div class="text-center">
            <p style="margin-top: 50px; font-size: 20px;">Êtes vous sûr de vouloir supprimer <strong>"<?php echo $produit->pro_ref; ?>"</strong> de la base de données ?</p>
        </div>

        <div class="text-center">
        <button type="submit" class="btn btn-danger">Supprimer</button>
        <?php
        echo "<a href='detail.php?pro_id=$produit->pro_id' class='btn btn-success'>Annuler</a>";
        ?>
        </div>

        </form>
    
        </div>

        <footer>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark mt-3">
            <!-- Copie de Navbar Ncode -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
            </button>   
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mentions légales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Horaires</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Plan du site</a>
                    </li>
                </ul>
            </div> 
        </nav>
    </footer>
    </div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

</body>
</html>