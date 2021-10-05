<html>
    <body>
        <?php
            $op;
            $x;
            $y;
            echo "Quelle operation voulez vous effectuer ?<br>
                  1- +<br>
                  2- -<br>
                  3- *<br>
                  4- /<br><br>";
            do {
                $op = trim (fgets(STDIN));
            } while ($op >= 5 && $op <= 0);
            echo "<br><br>Veuillez choisir 2 nombres :<br><br>";
            $x = readline ("");
            $y = trim (fgets(STDIN));
            function calculator ($op, $x, $y) {
                $r;
                if ($op == 1) $r = $x + $y;
                if ($op == 2) $r = $x - $y;
                if ($op == 3) $r = $x * $y;
                if ($op == 4) $r = $x / $y;
                return $r;
            }
            echo "<br><br>Le resultat est ".calculator($op, $x, $y).".";
        ?>
    </body>
</html>