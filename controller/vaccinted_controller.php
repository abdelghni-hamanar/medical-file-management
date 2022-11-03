<?php
    require_once('../model/Services.php');
    require_once('../model/vaccinatedclass.php');

    $vaccinated = new Vaccinated;

    $vaccinated->_user_usercin = $_POST['usercin'];
    $vaccinated->_vaccination_idvaccination=$_POST['idvaccination'];
   

    $vaccinated->addVaccinated($vaccinated->_user_usercin,$vaccinated->_vaccination_idvaccination);


?>