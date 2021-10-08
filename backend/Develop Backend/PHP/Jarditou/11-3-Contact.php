<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>CONTACT</title>
</head>

<body>
  <div class='container'>
    <header>
      <div class="container-fluid">
        <div class="d-none d-lg-flex justify-content-between align-items-center">
          <img class="col-2" src="jarditou_photos/jarditou_logo.jpg" alt="logo" title="logo">
          <h1 class="pr-5" style="color: green">La qualité depuis 70 ans</h1>
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
            <li class="nav-item active">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="11-4-Listes.php">Listes des produits</a>
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

    <!--Formulaire -->
    <div class="row">
      <div class="col-12">
        <form action="script.php" method="POST" id="formulaire" name="formulaire" onsubmit="">
          <fieldset>
            <p>* Ces zones sont obigatoire</p>
            <h1>Vos coordonnées</h1>
            <!-- Nom -->

            <label for="nom">Nom*</label>
            <input type="text" class="form-control" id="nom" name="nom" placeholder="Veuillez saisir votre nom">
            <span id="erreur1" style="color:red;"></span>
            <br>

            <!-- Prénom -->
            <label for="prenom">Prénom*</label>
            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Veuillez saisir votre prénom">
            <span id="erreur2" style="color:red;"></span>
            <br>

            <!-- Sexe -->
            <br>
            <label for="radio">Sexe*:</label><br>
            <div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sexe" id="sexe_féminin" value="féminin" onclick="sexe()">
                <label class="form-check-label" for="feminin">Féminin</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sexe" id="sexe_masculin" value="masculin">
                <label class="form-check-label" for="masculin">Masculin</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sexe" id="sexe_neutre" value="neutre">
                <label class="form-check-label" for="neutre"> Neutre </label>
              </div>
            </div>
            <span id="erreur3" style="color:red;"></span>
            <br>
            <!-- Date De Naissance -->
            <br>
            <label for="date_de_naissance">Date de Naissance*</label>
            <div class="input-group">
              <input type="date" class="form-control" id="ddn" name="ddn">
              <span class="input-group-text" id="date_de_naissance"><img width="auto" height="20" src="jarditou_css/src/img/calendar.svg"></span>
            </div>
            <span id="erreur4" style="color:red;"></span>

            <!-- Code Postal -->
            <div class="form-group"><br>
              <label for="code_postal">Code Postal*</label>
              <input type="text" class="form-control" id="codepostal" name="codepostal" placeholder="*****">
              <span id="erreur5" style="color:red;"></span>
            </div>
            <!-- Address -->
            <div class="form-group">
              <label for="adresse">Adresse</label>
              <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Votre adresse">
            </div>
            <!-- Ville -->
            <div class="form-group">
              <label for="ville">Ville</label>
              <input type="text" class="form-control" id="ville" name="ville" placeholder="Nom de votre ville">
            </div>
            <!-- Email -->
            <div class="form-group">
              <label for="email">Email*</label>
              <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="rude-mail@afpa.fr">
              <small id="emailHelp" class="form-text text-muted"></small>
              <span id="erreur6" style="color:red;"></span>
            </div>
            <!-- Texte -->
            <h1>Votre demande</h1>
            <!-- Demande -->
            <label for="radio">Sujet*:</label>
            <label for="metiers2"></label>
            <select class="form-control form-control-lg" name="sujet">
              <option value="selectionner_un_sujet" selected disabled="">Veillez séléctionner un sujet</option><br>
              <option value="mes commandes">Mes commandes</option><br>
              <option value="question sur un produit">Question sur un produit</option><br>
              <option value="réclamation">Réclamation</option><br>
              <option value="autre">Autre</option><br>
            </select>
            <span id="erreur7" style="color:red;"></span>
            <br>
            <br>
            <div class="form-group">
              <label for="question" name="question">Votre question*:</label>
              <textarea class="form-control" id="question" name="question" rows="3" placeholder="Veuillez-nous adressez votre question ici"></textarea>
              <span id="erreur8" style="color:red;"></span>
              <br>
              <br>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="validation" name="validation">
                <label class="form-check-label" for="validation" name="validation" id="validation"> J'accepte le traitement de ce formulaire.</label>
              </div><br>
              <!-- Bouton Envoyer / Annuler -->
              <button type="submit" class="btn btn-dark" name="envoyer">Envoyer</button>
              <button type="reset" class="btn btn-dark" name="annuler">Annuler</button>
          </fieldset>
        </form>
      </div>
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
  < <script src="script.js">
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>