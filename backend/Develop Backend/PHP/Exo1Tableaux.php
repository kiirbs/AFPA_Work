<html>
    <body>
        <?php
            $t = array ("Janvier" => 31, "Fevrier" => 28, "Mars" => 31, "Avril" => 30, "Mai" => 31, "Juin" => 30, "Juillet" => 31, "Aout" => 31, "Septembre" => 30, "Octobre" => 31, "Novembre" => 30, "Decembre" => 31);
            foreach ($t as $key => $v) {
                echo $key." : ".$v."<br>";
            }
            asort ($t);
            echo "<br>";
            foreach ($t as $key => $v) {
                echo $key." : ".$v."<br>";
            }
        ?>
    </body>
</html>