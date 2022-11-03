
    <?php

    require_once("../model/vaccinclass.php");
    
    $vaccin = new vaccin;
    
    $vaccin->_idvaccin;
    $vaccin->_label=$_POST["label"];
    $vaccin->_vaccindesc=$_POST["vaccinationdescription"];
    
    $vaccin->addVaccin();
    
    
    ?>
