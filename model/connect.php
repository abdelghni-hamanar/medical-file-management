<?php

function dbconnect(){
    $user = "root";
    $pass = "";
    try {
        $dbco = new PDO('mysql:host=localhost;dbname=projetphp', $user, $pass);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
    }
    return $dbco;
}



?>