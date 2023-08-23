<!-- <?php

        require('../db.php');
        $sql = "SELECT id, nomfournisseur FROM fournisseur";
        $stmt = $db->prepare($sql);
        $stmt->execute();
    
        $fournisseurs = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    ?>
<!DOCTYPE html>
<html>
<head>
    <title>Fournisseur</title>
    <link rel="stylesheet" href="modal.css">
</head>

<body>

<form>
        <label for="fournisseur">Sélectionnez un fournisseur :</label>
        <select id="fournisseur updateDiv"  name="fournisseur">
            <option value=""></option>
            <?php foreach ($fournisseurs as $fournisseur) : ?>
                <option value="<?= $fournisseur['id'] ?>"><?= $fournisseur['nomfournisseur'] ?> <br></option>
            <?php endforeach; ?>
        </select>
       
    </form>
<button id="openModalBtn">Fournisseur Vaovao</button>
    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close" id="closeModalBtn">&times;</span>
            <h2>Ajouter un fournisseur</h2>

            <form action="back.php" method="post">
                NomFournisseur <input type="text" name="nom"><br>
                Adresse: <input type="text" name="adressF"><br>
                Numéro: <input type="text" name="numeroF"><br>
                <input type="submit" value="Ajouter">
            </form>
        </div>
    </div>


    
    <script>
        // Affiche la modal
        document.getElementById("openModalBtn").addEventListener("click", function() {
            document.getElementById("modal").style.display = "block"; 
        });

        // Cache la modal
        document.getElementById("closeModalBtn").addEventListener("click", function() {
            document.getElementById("modal").style.display = "none"; 
        });
        // Ferme la modal 
        window.addEventListener("click", function(event) {
            if (event.target === document.getElementById("modal")) {
                document.getElementById("modal").style.display = "none"; 
            }
        });

    </script>
</body>
</html> -->
<?php
require('../db.php');

$sql = "SELECT id, nomfournisseur FROM fournisseur";
$result = $db->query($sql);

if ($result) {
    echo "<h1>Liste des Fournisseurs</h1>";
    echo "<ul>";
    foreach ($result as $row) {
        echo "<li><a href='../factCrea/index.php?id={$row['id']}'>{$row['nomfournisseur']}</a></li>";
    }
    echo "</ul>";

    $result->free();
} else {
    echo "Erreur lors de la récupération des données.";
}
?>
