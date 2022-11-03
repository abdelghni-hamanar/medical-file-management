<?php


require_once("connect.php");


class User
{
    public $_usercin;
    public $_userpassword;
    public $_userfirstname;
    public $_userlastname;
    public $_usergender;
    public $_userbirth;
    public $_usermail;
    public $_userstatut;
    public $_useradress;
    public $_usercity;
    public $_userphone;
    public $_userpicture;
    public $_usertype;
    public $_userstate;
    public $_usercreated;
    public $_userupdated;
    public $_useraccess;

    function addUser($data){
        $dbh = dbconnect();
        $dt = date('Y-m-d H:i:s');
        $sth = $dbh->prepare('INSERT INTO user (usercin, userpassword, userfirstname, userlastname, 
                                usergender, userbirth, usermail, useradress, usercity, 
                                userphone, userpicture, usertype, userstate, usercreated, userstatut) 
                                VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
        $sth->bindParam(1, $this->_usercin, PDO::PARAM_STR);
        $sth->bindParam(2, $this->_userpassword, PDO::PARAM_STR);
        $sth->bindParam(3, $this->_userfirstname, PDO::PARAM_STR);
        $sth->bindParam(4, $this->_userlastname, PDO::PARAM_STR);
        $sth->bindParam(5, $this->_usergender, PDO::PARAM_INT);
        $sth->bindParam(6, $this->_userbirth, PDO::PARAM_STR);
        $sth->bindParam(7, $this->_usermail, PDO::PARAM_STR);
        $sth->bindParam(8, $this->_useradress, PDO::PARAM_STR);
        $sth->bindParam(9, $this->_usercity, PDO::PARAM_STR);
        $sth->bindParam(10, $this->_userphone, PDO::PARAM_STR);
        $sth->bindParam(11, $data, PDO::PARAM_LOB);
        $sth->bindParam(12, $this->_usertype, PDO::PARAM_STR);
        $sth->bindParam(13, $this->_userstate, PDO::PARAM_INT);
        $sth->bindParam(14, $dt, PDO::PARAM_STR);
        $sth->bindParam(15, $this->_userstatut, PDO::PARAM_INT);
        $sth->execute();
        header('Location: ../view/dashboard.php?view=users');
    }
    
    function updateUser($cin){
        $dbh = dbconnect();
        $dt = date('Y-m-d H:i:s');
        $sth = $dbh->prepare('UPDATE user SET userfirstname=? , userlastname=? , usergender=? , userbirth=? , 
                                usermail=? , useradress=? , usercity=? , userphone=? , usertype=? , userupdated=?, userstatut=?
                                WHERE usercin=?');
        $sth->bindParam(1, $this->_userfirstname, PDO::PARAM_STR);
        $sth->bindParam(2, $this->_userlastname, PDO::PARAM_STR);
        $sth->bindParam(3, $this->_usergender, PDO::PARAM_INT);
        $sth->bindParam(4, $this->_userbirth, PDO::PARAM_STR);
        $sth->bindParam(5, $this->_usermail, PDO::PARAM_STR);
        $sth->bindParam(6, $this->_useradress, PDO::PARAM_STR);
        $sth->bindParam(7, $this->_usercity, PDO::PARAM_STR);
        $sth->bindParam(8, $this->_userphone, PDO::PARAM_STR);
        $sth->bindParam(9, $this->_usertype, PDO::PARAM_INT);
        $sth->bindParam(10, $dt, PDO::PARAM_STR);
        $sth->bindParam(11, $this->_userstatut, PDO::PARAM_INT);
        $sth->bindParam(12, $cin, PDO::PARAM_STR);
        $sth->execute();
        header('Location: ../view/dashboard.php?view=users');
    }

    function updateUserf($cin,$data){
        $dbh = dbconnect();
        $dt = date('Y-m-d H:i:s');
        $sth = $dbh->prepare('UPDATE user SET userfirstname=? , userlastname=? , usergender=? , userbirth=? , 
                                usermail=? , useradress=? , usercity=? , userphone=?, userpicture=? , usertype=? , userupdated=?, userstatut=?
                                WHERE usercin=?');
        $sth->bindParam(1, $this->_userfirstname, PDO::PARAM_STR);
        $sth->bindParam(2, $this->_userlastname, PDO::PARAM_STR);
        $sth->bindParam(3, $this->_usergender, PDO::PARAM_INT);
        $sth->bindParam(4, $this->_userbirth, PDO::PARAM_STR);
        $sth->bindParam(5, $this->_usermail, PDO::PARAM_STR);
        $sth->bindParam(6, $this->_useradress, PDO::PARAM_STR);
        $sth->bindParam(7, $this->_usercity, PDO::PARAM_STR);
        $sth->bindParam(8, $this->_userphone, PDO::PARAM_STR);
        $sth->bindParam(9, $data, PDO::PARAM_LOB);
        $sth->bindParam(10, $this->_usertype, PDO::PARAM_INT);
        $sth->bindParam(11, $dt, PDO::PARAM_STR);
        $sth->bindParam(12, $this->_userstatut, PDO::PARAM_INT);
        $sth->bindParam(13, $cin, PDO::PARAM_STR);
        $sth->execute();
        header('Location: ../view/dashboard.php?view=users');
    }
    

}


?>