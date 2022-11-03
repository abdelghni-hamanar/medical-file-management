<?php
    require_once("../model/hfileclass.php");
    
   $hfile = new Hfile;

    $hfile->_idhfile = $_POST['idhfile'];
    $hfile->_hfilename = $_POST['hfilename'];
    $hfile->_hfiledescription = $_POST['hfiledesc'];
    $hfile->_hfilestate = $_POST['hfilest'];
    $hfile->_user_usercin = $_POST['usercin'];

    //var_dump($hfile);
    $hfile->updateHfile($hfile->_idhfile);
    
       

    
     





?>