<html>
    <body>
        <?php
            $capitales = array(
                "Bucarest" => "Roumanie",
                "Bruxelles" => "Belgique",
                "Oslo" => "Norvège",
                "Ottawa" => "Canada",
                "Paris" => "France",
                "Port-au-Prince" => "Haïti",
                "Port-d'Espagne" => "Trinité-et-Tobago",
                "Prague" => "République tchèque",
                "Rabat" => "Maroc",
                "Riga" => "Lettonie",
                "Rome" => "Italie",
                "San José" => "Costa Rica",
                "Santiago" => "Chili",
                "Sofia" => "Bulgarie",
                "Alger" => "Algérie",
                "Amsterdam" => "Pays-Bas",
                "Andorre-la-Vieille" => "Andorre",
                "Asuncion" => "Paraguay",
                "Athènes" => "Grèce",
                "Bagdad" => "Irak",
                "Bamako" => "Mali",
                "Berlin" => "Allemagne",
                "Bogota" => "Colombie",
                "Brasilia" => "Brésil",
                "Bratislava" => "Slovaquie",
                "Varsovie" => "Pologne",
                "Budapest" => "Hongrie",
                "Le Caire" => "Egypte",
                "Canberra" => "Australie",
                "Caracas" => "Venezuela",
                "Jakarta" => "Indonésie",
                "Kiev" => "Ukraine",
                "Kigali" => "Rwanda",
                "Kingston" => "Jamaïque",
                "Lima" => "Pérou",
                "Londres" => "Royaume-Uni",
                "Madrid" => "Espagne",
                "Malé" => "Maldives",
                "Mexico" => "Mexique",
                "Minsk" => "Biélorussie",
                "Moscou" => "Russie",
                "Nairobi" => "Kenya",
                "New Delhi" => "Inde",
                "Stockholm" => "Suède",
                "Téhéran" => "Iran",
                "Tokyo" => "Japon",
                "Tunis" => "Tunisie",
                "Copenhague" => "Danemark",
                "Dakar" => "Sénégal",
                "Damas" => "Syrie",
                "Dublin" => "Irlande",
                "Erevan" => "Arménie",
                "La Havane" => "Cuba",
                "Helsinki" => "Finlande",
                "Islamabad" => "Pakistan",
                "Vienne" => "Autriche",
                "Vilnius" => "Lituanie",
                "Zagreb" => "Croatie"
            );
            ksort ($capitales);
            foreach ($capitales as $key => $v) {
                echo $key." : ".$v."<br>";
            }
            echo "<br>";
            asort ($capitales);
            foreach ($capitales as $key => $v) {
                echo $v." : ".$key."<br>";
            }
            echo "<br>Ce tableau compte ".count($capitales)." pays.<br><br>";
            foreach ($capitales as $key => $v) {
                if (strpos($v, "B") !== 0) unset ($capitales[$key]);
            }
            foreach ($capitales as $key => $v) {
                echo $v." : ".$key."<br>";
            }
        ?>
    </body>
</html>