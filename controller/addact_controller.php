<?php
    require_once("../model/actclass.php");
    session_start();

    $pdf;
    $act = new Act;
    $act->_actdescription = $_POST["actdesc"];
    $act->_hfile_idhfile = $_POST["idhfile"];
    $act->_user_usercin = $_SESSION["mail"];

    $name = $_FILES['pdf_file']['name'];
    $type = $_FILES['pdf_file']['type'];
    $data = file_get_contents($_FILES['pdf_file']['tmp_name']);
    
    $act->addact($data);
    
       

    
     





?>