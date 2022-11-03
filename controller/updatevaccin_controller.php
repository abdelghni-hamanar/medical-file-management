<?php
    require_once("../model/vaccinclass.php");
    
    $vaccin = new Vaccin;

    $vaccin->_idvaccin = $_POST['idvaccination'];
    $vaccin->_label = $_POST['label'];
    $vaccin->_vaccindesc = $_POST['vaccinationdescription'];
    $vaccin->updateVaccin($vaccin->_idvaccin);

    
       

    
     





?>