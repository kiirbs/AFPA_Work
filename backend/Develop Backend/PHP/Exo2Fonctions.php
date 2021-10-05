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
        $t = array(11, 7, 2, 19, 1, 8, 10);
        function somme ($t) {
            $somme = 0;
            for ($i = 0 ; $i < count($t) ; $i++) {
                $somme += $t[$i];
            }
            return $somme;
        }
        $total = somme($t);
        for ($j = 0 ; $j < count($t) ; $j++) {
            if ($j < count($t)-1) echo $t[$j]."+";
            if ($j = count($t)-1) echo $t[$j]."=";
        }
        echo $total."<br>";
    ?>
</body>
</html>