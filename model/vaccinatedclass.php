<?php
    require_once("connect.php");

    class Vaccinated{

        public $_idvaccinated;
        public $_vaccinationdate;
        public $_user_usercin;
        public $_vaccination_idvaccination;


        function addVaccinated($cin,$id){
            $dbh = dbconnect();
            $dt = date('Y-m-d H:i:s');
            $sth = $dbh->prepare('INSERT INTO vaccinated (vaccinationdate,user_usercin,vaccination_idvaccination) 
                                    VALUES (?,?,?)');
            $sth->bindParam(1, $dt, PDO::PARAM_STR);
            $sth->bindParam(2, $cin, PDO::PARAM_STR);
            $sth->bindParam(3, $id, PDO::PARAM_INT);
            $sth->execute();
            header('Location: ../view/dashboard.php?view=showuser&id='.$cin);
        }
        
        function updateVaccinated($id){
            $dbh = dbconnect();
            $sth = $dbh->prepare('UPDATE vaccinated SET (user_usercin=?,vaccination_idvaccination=?) WHERE idvaccination =?');
            $sth->bindParam(1, $this->_user_usercin, PDO::PARAM_STR);
            $sth->bindParam(2, $this->_vaccination_idvaccination, PDO::PARAM_INT);
            $sth->bindParam(3, $id, PDO::PARAM_INT);
            $sth->execute();
        }







    }



?>