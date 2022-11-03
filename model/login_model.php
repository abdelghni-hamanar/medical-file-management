<?php
require_once("connect.php");
session_start();

function passwordHash($p){

    return password_hash($p, PASSWORD_DEFAULT);
}
function login($userm,$userp){
    $dbh = dbconnect();
        $sth = $dbh->prepare('SELECT * FROM user WHERE usercin= ? ORDER BY usercin DESC LIMIT 1');
        $sth->bindParam(1, $userm, PDO::PARAM_STR);
        $sth->execute();
        $user = $sth->fetch();
        if (password_verify($userp, $user['userpassword']))
        {
            return 1;
        } else {
            return 0;
        }
    }
function loginaccess($id){
    $dbh = dbconnect();
    $dt = date('Y-m-d H:i:s');
    $sth = $dbh->prepare('UPDATE user SET useraccess=?
                                WHERE usercin=?');
    $sth->bindParam(1, $dt, PDO::PARAM_STR);
    $sth->bindParam(2, $id, PDO::PARAM_STR);
    $sth->execute();
}
function getOneColumn($userm,$co){
    $dbh = dbconnect();
    $sth = $dbh->prepare('SELECT * FROM user WHERE usercin= ? ORDER BY usermail DESC LIMIT 1');
    $sth->bindParam(1, $userm, PDO::PARAM_STR);
    $sth->execute();
    $user = $sth->fetch();
    return $user[$co];
}
function logout(){
    session_unset();
    session_destroy();
}
?>