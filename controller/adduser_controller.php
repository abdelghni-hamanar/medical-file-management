<?php

require_once("../model/userclass.php");
$data;
$user = new User;
$user->_usercin=$_POST["usercin"];
$user->_userpassword=password_hash($_POST["userpassword"], PASSWORD_DEFAULT);
$user->_userfirstname=$_POST["userfirstname"];
$user->_userlastname=$_POST["userlastname"];
$user->_usergender=$_POST["usergender"];
$user->_userbirth=$_POST["userbirth"];
$user->_usermail=$_POST["usermail"];
$user->_userstatut=$_POST["users"];
$user->_useradress=$_POST["usera"];
$user->_usercity=$_POST["usercity"];
$user->_userphone=$_POST["userphone"];
$user->_usertype=$_POST["usert"];
$user->_userstate;
$user->_usercreated=date('m-d-Y h:i:s a', time());


$name = $_FILES['image']['name'];
$type = $_FILES['image']['type'];
$data = file_get_contents($_FILES['image']['tmp_name']);

$user->addUser($data);


?>