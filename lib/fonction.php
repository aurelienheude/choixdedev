<?php 
    

    function compteur_visite()
    {
    session_start();

    }

    function ajout_choix()
    {
        include "../../panel/config.php";
    }

    function tableau_choix()
    {
        include "../../panel/config.php";

        $req = $sql->prepare("SELECT * FROM choice_table");
                $req->execute(array());
                $data = $req->fetchAll();

        foreach($data as $row)
        {
            ?>
                <ul class='items_tr'>
                    <li class='tab_id'><?php echo $row["id_choice"]; ?></li>
                    <li class='tab_img'><div class='img' style = "background-image: url('../../img/<?php echo $row["img_one_choice"]; ?>');"></div></li>
                    <li class='tab_choice'><?php echo $row["one_choice"]; ?></li>
                    <li class='tab_img'><div class='img' style = "background-image: url('../../img/<?php echo $row["img_two_choice"]; ?>');"></div></li>
                    <li class='tab_choice'><?php echo $row["two_choice"]; ?></li>
                    <li class='tab_verification'><i class='yes far fa-check-circle'><i class='no far fa-times-circle'></i></i></li>
                </ul>
            <?php
        }
    }


?>