<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>TABLEAU</title>
</head>

<body>
    <div class='container'>
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
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Tableau</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="11-3-Contact.php">Contact</a>
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
        <section>
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered mt-3">
                    <thead class="h3">
                        <tr style="background-color: rgba(211, 211, 211, 0.932);">
                            <th>Photo</th>
                            <th>ID</th>
                            <th>Catégorie</th>
                            <th>Libellé</th>
                            <th>Prix</th>
                            <th>Couleur</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="background-color: lightyellow;">
                            <td><img src="jarditou_photos/7.jpg" class="img-fluid" width="100" height="100" alt="photo7"></td>
                            <td>7</td>
                            <td>Barbecues</td>
                            <td>Aramis</td>
                            <td>110.00€</td>
                            <td>Brun</td>
                        </tr>
                        <tr>
                            <td><img src="jarditou_photos/8.jpg" class="img-fluid" width="100" height="100" alt="photo8"></td>
                            <td>8</td>
                            <td>Barbecues</td>
                            <td>Athos</td>
                            <td>249.99€</td>
                            <td>Noir</td>
                        </tr>
                        <tr style="background-color: lightyellow;">
                            <td><img src="jarditou_photos/11.jpg" class="img-fluid" width="100" height="100" alt="photo11"></td>
                            <td>11</td>
                            <td>Barbecues</td>
                            <td>Clatronic</td>
                            <td>135.90€</td>
                            <td>Chrome</td>
                        </tr>
                        <tr>
                            <td><img src="jarditou_photos/12.jpg" class="img-fluid" width="100" height="100" alt="photo12"></td>
                            <td>12</td>
                            <td>Barbecues</td>
                            <td>Camping</td>
                            <td>88.00€</td>
                            <td>Noir</td>
                        </tr>
                        <tr style="background-color: lightyellow;">
                            <td><img src="jarditou_photos/13.jpg" class="img-fluid" width="150" height="100" alt="photo13"></td>
                            <td>13</td>
                            <td>Brouette</td>
                            <td>Green</td>
                            <td>49.00€</td>
                            <td>Verte</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </section>
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