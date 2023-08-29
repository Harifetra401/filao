<?php

function getNomPoisson($id_selector) {
    require('../db.php');
    $getBy = $db -> prepare("SELECT nomFilao FROM poisson WHERE id=$id_selector");
    $getBy -> execute();
    $fetchBy = $getBy -> fetch();
    return $fetchBy["nomFilao"];
}

function show_modal_contre($numero) {
    require('../db.php');
    $select_all_poisson = $db -> prepare("SELECT * FROM detailfilao WHERE NumFac=$numero");
    $select_all_poisson -> execute();
    $fetch_All = $select_all_poisson -> fetchAll();
        ?>
            <div class="modal">
                <form action="" method="post">
                    <h1>Poid apres la contre pessage</h1>
                    <?php
                foreach($fetch_All as $All_poisson){
                    $nom_poisson = getNomPoisson($All_poisson['id_poisson']);
                    $qtt_poisson = $All_poisson['qtt'];
                    $prix_poisson = $All_poisson['prixUnit'];
                    echo 

                    // affichage du nom du poisson
                    "<label>$nom_poisson: </label>".

                    // affichage du champ a remplir pour le nouveau valeur apres contre pesage
                    "<input type='text' name='new_poisson'>".

                    // affichage du valeur du bdd du initial
                    " Qte Initial: $qtt_poisson kg<br>"
                    ;
                } 

                // si les produit pour ce facture est vide
                if(empty($fetch_All)){
                    echo "<i> auccun donnée pour ce facture</i><br>";
                }
                ?>
                <br>
                <button type="sumbit">Sauvegarder</button>
                <button>Annuler</button>
            </form>
            </div>
        <?php
    }

    if(isset($_GET['id'])) {
        $id_facture = $_GET['id'];
        show_modal_contre($id_facture);
    }

?>