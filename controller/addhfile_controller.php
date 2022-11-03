<?php

    require_once("../model/hfileclass.php");
    
    $Hfile = new Hfile;
    session_start();
    $Hfile->_hfilename=$_POST["hfilename"];
    $Hfile->_hfiledescription=$_POST["hfiledesc"];
    $Hfile->_hfilestate=$_POST["hfilest"];
    $Hfile->_user_usercin1=$_SESSION['mail'];
    $Hfile->_user_usercin=$_POST["usercin"];
    
    $Hfile->addHfile();
    
    
?>