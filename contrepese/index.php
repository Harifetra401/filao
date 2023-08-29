<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // appelle du base de donne, auccun affichage ou valeur a afficher (NB: non styler )
        require('../db.php');

        // cette fonction retourne une liste des facture du base de donnée: integré par un lien (NB: balise "a")
        require('listefacture.php');

        
        require('factureContrePese.php');
    ?>
</body>
</html>