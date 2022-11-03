<?php
    
    require_once("connect.php");

    class vaccin 
    {
        public $_idvaccin;
        public $_label;
        public $_vaccindesc;

        function addVaccin(){
            $dbh = dbconnect();
            $sth = $dbh->prepare('INSERT INTO vaccination (label,vaccinationdescription) 
                                    VALUES (?,?)');
            $sth->bindParam(1, $this->_label, PDO::PARAM_STR);
            $sth->bindParam(2, $this->_vaccindesc, PDO::PARAM_STR);
            $sth->execute();
            header('Location: ../view/dashboard.php?view=vaccin');
        }
        
        function updateVaccin($id){
            $dbh = dbconnect();
            $sth = $dbh->prepare('UPDATE vaccination SET label=?, vaccinationdescription=? WHERE idvaccination =?');
            $sth->bindParam(1, $this->_label, PDO::PARAM_STR);
            $sth->bindParam(2, $this->_vaccindesc, PDO::PARAM_STR);
            $sth->bindParam(3, $id, PDO::PARAM_INT);
            $sth->execute();
            header('Location: ../view/dashboard.php?view=vaccin');
        }
    }

?>