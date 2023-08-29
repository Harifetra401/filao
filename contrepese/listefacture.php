<?php
     $selectAllFact = $db -> prepare("SELECT * FROM facture ORDER BY `date` DESC");
     $selectAllFact -> execute();
     $fetchAll = $selectAllFact -> fetchAll();

foreach($fetchAll as $fetch){
    $num_facture = $fetch['id'];
    $id_fou = $fetch['id_fou'];
    $text = $fetch['text'];
    $date = $fetch['date'];

    // ici le css du contenant du tableau
    echo "<a href='?id=$num_facture'>$num_facture $id_fou $text $date </a> <br>";
}
?>
