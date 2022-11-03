<?php

require_once("../model/userclass.php");

$user = new User;


$user->_userfirstname=$_POST["userfirstname"];
$user->_userlastname=$_POST["userlastname"];
$user->_usergender=$_POST["usergender"];
$user->_userbirth=$_POST["userbirth"];
$user->_usermail=$_POST["usermail"];
$user->_useradress=$_POST["usera"];
$user->_usercity=$_POST['usercity'];
$user->_userphone=$_POST["userphone"];
$user->_usertype=$_POST["usert"];
$user->_userstatut=$_POST["users"];
$user->_usercin=$_POST["id"];


if(isset($_FILES["image"]))
{
    $name = $_FILES['image']['name'];
    $type = $_FILES['image']['type'];
    $file = $_FILES['image']['tmp_name'];
    if(!empty($file))
    {
        $data = file_get_contents($_FILES['image']['tmp_name']);
        $user->updateUserf($user->_usercin,$data);
    }
    else
    {
        $user->updateUser($user->_usercin);
    }
}


?>