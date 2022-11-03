<?php
    require_once("connect.php");

    class Act
    {
        public $_idact;
        public $_actcreated;
        public $_actupdated;
        public $_actdescription;
        public $_actfile;
        public $_hfile_idhfile;
        public $_user_usercin;


        function addact($data){
            $dbh = dbconnect();
            $dt = date('Y-m-d H:i:s');
            $sth = $dbh->prepare('INSERT INTO act (actcreated ,actdescription ,actfile ,hfile_idhfile ,user_usercin) 
                                    VALUES (?,?,?,?,?)');
            $sth->bindParam(1, $dt, PDO::PARAM_STR);
            $sth->bindParam(2, $this->_actdescription, PDO::PARAM_STR);
            $sth->bindParam(3, $data, PDO::PARAM_LOB);
            $sth->bindParam(4, $this->_hfile_idhfile, PDO::PARAM_STR);
            $sth->bindParam(5, $this->_user_usercin, PDO::PARAM_STR);
            $sth->execute();
            $sth1 = $dbh->prepare('SELECT user_usercin FROM hfile WHERE idhfile=?');
            $sth1->bindParam(1, $this->_hfile_idhfile, PDO::PARAM_STR);
            $sth1->execute();
            $row = $sth1->fetch();
            header('Location: ../view/dashboard.php?view=showhfile&id='.$this->_hfile_idhfile.'&iduser='.$row['user_usercin']);
        }

        function updateAct($id){
            $dbh = dbconnect();
            $dt = date('Y-m-d H:i:s');
            $sth = $dbh->prepare('UPDATE act SET actupdated=? , actdescription=?    WHERE idact  =?');
            $sth->bindParam(1, $dt, PDO::PARAM_STR);
            $sth->bindParam(2, $this->_actdescription, PDO::PARAM_STR);
            $sth->bindParam(3, $id, PDO::PARAM_INT);
            $sth->execute();
            $sth1 = $dbh->prepare('SELECT user_usercin FROM hfile WHERE idhfile=?');
            $sth1->bindParam(1, $this->_hfile_idhfile, PDO::PARAM_STR);
            $sth1->execute();
            $row = $sth1->fetch();
            header('Location: ../view/dashboard.php?view=showhfile&id='.$this->_hfile_idhfile.'&iduser='.$row['user_usercin']);
            
        }

        function updateActf($id,$data){
            $dbh = dbconnect();
            $dt = date('Y-m-d H:i:s');
            $sth = $dbh->prepare('UPDATE act SET actupdated=? , actdescription=? , actfile=?  WHERE idact  =?');
            $sth->bindParam(1, $dt, PDO::PARAM_STR);
            $sth->bindParam(2, $this->_actdescription, PDO::PARAM_STR);
            $sth->bindParam(3, $data, PDO::PARAM_LOB);
            $sth->bindParam(4, $id, PDO::PARAM_INT);
            $sth->execute();
            header('Location: ../view/dashboard.php?view=showhfile&id='.$this->_hfile_idhfile.'&iduser='.$row['user_usercin']);
        }
        




    }




?>