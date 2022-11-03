<?php
    require_once("../model/connect.php");
    if(!empty(isset($_GET['id']))){
        $dbh = dbconnect();
        $sth = $dbh->prepare('SELECT * from act WHERE idact=?');
        $sth->bindParam(1, $_GET['id'], PDO::PARAM_INT);
        $sth->execute();
        $row = $sth->fetch();
        header("Content-type: application/pdf");  
        header('Content-disposition: inline; filename="'.$row['actfile'].'.pdf"');
        header('Content-Transfer-Encoding: binary');
        header('Accept-Ranges: bytes');
        echo $row['actfile'];
    }
?>