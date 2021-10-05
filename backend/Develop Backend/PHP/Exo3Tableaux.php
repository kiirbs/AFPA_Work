<html>
    <body>
        <?php
            $d = array(
                "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
                "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
                "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
                "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
            );
            ksort ($d);
            echo "Liste des regions :<br><br>";
            foreach ($d as $key => $v) {
                asort ($d[$key]);
                echo $key." : ";
                foreach ($d[$key] as $v2) {
                    echo $v2."&nbsp&nbsp&nbsp";
                }
                echo "<br>";
            }
            echo "<br>";
            foreach ($d as $key => $v) {
                foreach ($d[$key] as $v2) {
                    echo $v2." : ".$key."<br>";
                }
            }
        ?>
    </body>
</html>