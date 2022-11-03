<?php
    require_once("../model/vaccinatedclass.php");

    $vac = new Vaccinated;
    $vac->_idvaccinated;
    $vac->_vaccinationdate;
    $vac->_user_usercin = $_POST['user_usercin'];
    $vac->_vaccination_idvaccination = $_POST['vaccination_idvaccination'];
    

    $vac->addVaccinated();


    

?>