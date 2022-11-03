<?php

require_once("connect.php");

class Hfile{

    public $_idhfile;
    public $_hfilename;
    public $_hfiledescription;
    public $_hfilecreated;
    public $_hfileupdated;
    public $_hfilestate;
    public $_user_usercin;
    public $user_usercin1;


    function addHfile(){
        $dbh = dbconnect();
        $dt = date('Y-m-d H:i:s');
        $sth = $dbh->prepare('INSERT INTO hfile (hfilename, hfiledescription, hfilecreated,
                                hfilestate, user_usercin, user_usercin1) 
                                VALUES (?,?,?,?,?,?)');
        $sth->bindParam(1, $this->_hfilename, PDO::PARAM_STR);
        $sth->bindParam(2, $this->_hfiledescription, PDO::PARAM_STR);
        $sth->bindParam(3, $dt, PDO::PARAM_STR);
        $sth->bindParam(4, $this->_hfilestate, PDO::PARAM_STR);
        $sth->bindParam(5, $this->_user_usercin, PDO::PARAM_STR);
        $sth->bindParam(6, $this->_user_usercin1, PDO::PARAM_STR);
        $sth->execute();
        header('Location: ../view/dashboard.php?view=allhfiles');
    }


    function updateHfile($id){
        $dbh = dbconnect();
        $dt = date('Y-m-d H:i:s');
        $sth = $dbh->prepare('UPDATE hfile SET hfilename=? , hfiledescription=? , hfileupdated=? ,  
                                hfilestate=? , user_usercin=? WHERE idhfile =?');
        $sth->bindParam(1, $this->_hfilename, PDO::PARAM_STR);
        $sth->bindParam(2, $this->_hfiledescription, PDO::PARAM_STR);
        $sth->bindParam(3, $dt, PDO::PARAM_STR);
        $sth->bindParam(4, $this->_hfilestate, PDO::PARAM_STR);
        $sth->bindParam(5, $this->_user_usercin, PDO::PARAM_STR);
        $sth->bindParam(6, $id, PDO::PARAM_INT);
        $sth->execute();
        header('Location: ../view/dashboard.php?view=showhfile&id='.$_POST["idhfile"].'&iduser='.$this->_user_usercin);
    }

}


?>