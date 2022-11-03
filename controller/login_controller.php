<?php
require_once("../model/login_model.php");
require_once("../model/sessions_model.php");

if(!empty(isset($_POST["mail"])) && !empty(isset($_POST["password"])) ){
    if(login($_POST["mail"],$_POST["password"]) == 1){
        startSession();
        $_SESSION["logged"]="1";
        $_SESSION["type"]=getOneColumn($_POST["mail"],"usertype");
        $_SESSION["fname"]=getOneColumn($_POST["mail"],"userfirstname");
        $_SESSION["lname"]=getOneColumn($_POST["mail"],"userlastname");
        $_SESSION["picture"]=getOneColumn($_POST["mail"],"userpicture");
        $_SESSION["mail"]=$_POST["mail"];
        loginaccess($_POST["mail"]);
        header('Location: ../view/dashboard.php');
    }
    else{
        session_destroy();
        startSession();
        $_SESSION["logged"]=0;
        header('Location: ../view/login_view.php');
    }

}



?>