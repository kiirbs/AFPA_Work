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
        function links ($lien, $name) {
            echo "<a href=".$lien.">".$name."</a>";
        }
        links ("https://www.reddit.com/", "Reddit Hug");
    ?>
</body>
</html>