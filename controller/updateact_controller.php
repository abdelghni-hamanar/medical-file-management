<?php
    require_once("../model/actclass.php");
    
    $pdf;
    $act = new Act;
    $act->_actdescription = $_POST["actdesc"];
    $act->_hfile_idhfile = $_POST["idhfile"];
    $act->_user_usercin = $_POST["usercin"];
    $act->_idact = $_POST["idact"];

    if(isset($_FILES["pdf_file"]))
{
    $name = $_FILES['pdf_file']['name'];
    $type = $_FILES['pdf_file']['type'];
    $file = $_FILES['pdf_file']['tmp_name'];
    if(!empty($file))
    {
        $data = file_get_contents($_FILES['pdf_file']['tmp_name']);
        $act->updateActf($act->_idact,$data);
        
    }
    else
    {
        $act->updateAct($act->_idact);
    }
}
    
       

    
     





?>