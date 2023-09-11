<?php
    require('../db.php');
    $id_sortie=$_GET['id'];
    $selection = $db -> prepare("SELECT * FROM detailfilaosortie WHERE id_sortie=$id_sortie ORDER BY id DESC");
    $selection -> execute();
    $fetchAll = $selection -> fetchAll();

    function getNomPoisson($id_selector) {
        require('../db.php');
        $getBy = $db -> prepare("SELECT nomFilao FROM poisson WHERE id=$id_selector");
        $getBy -> execute();
        $fetchBy = $getBy -> fetch();
        return $fetchBy["nomFilao"];
    }

    foreach($fetchAll as $fetch){
        $id_poisson = getNomPoisson($fetch['id_poisson']);
        $qtt_poisson = $fetch['qtt'];
        $nombre_sac = $fetch['sac'];


        ?>

<tr>
                                  <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?=$id_poisson?>
                                    </strong></td>
                                  <td><?=$qtt_poisson?></td>
                                  <td>
                                  <?=$nombre_sac?>
                                  </td>
                                  <td>
                                    <div class="dropdown">
                                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                      </button>
                                      <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                            class="bx bx-edit-alt me-1"></i>
                                          Modifier</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                            class="bx bx-trash me-1"></i>
                                          Suprimer</a>
                                      </div>
                                    </div>
                                  </td>
                                </tr>

        <?php

    }
    ?>
    </table>