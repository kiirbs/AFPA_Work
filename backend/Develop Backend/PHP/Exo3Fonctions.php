<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $mdp = "TopSecret420";
        function testPassword ($mdp) {
            if ((strlen($mdp) >= 8) && (preg_match('/[A-Z]/', $mdp)) && (preg_match('/[0-9]/', $mdp))) {
                echo "Le mdp est sécurisé !<br>";
            } else {
                echo "Le mdp n'est pas sécurisé !<br>";
            }
        }
        testPassword ($mdp);
    ?>
</body>
</html>