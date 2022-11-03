<?php
require_once('heading_html.php');
require_once('../model/Services.php');
$row = feelvaccin($_GET['id']);


?>

<div class="wrapper fadeInDown">
       <div class="modal-content">
                <div class="modal-header login-header">
                <h4 class='modal-title'><i class="glyphicon glyphicon-plus"></i><b> Modifier un vaccin</b></h4>
                </div>
                <div class="modal-body">
                <form action="../controller/updatevaccin_controller.php" method="POST" class="well form-horizontal">
                <input id="idvaccination" name="idvaccination" placeholder="Nom du vaccin" required="true" <?php echo "value='".$row['idvaccination']."'" ?> type="hidden">
                <input id="label" name="label" placeholder="Nom du vaccin" required="true" <?php echo "value='".$row['label']."'" ?> type="text">
                <input id="vaccinationdescription" name="vaccinationdescription" placeholder="Description" required="true" <?php echo "value='".$row['vaccinationdescription']."'" ?> type="text">
                </div>
                <div class="modal-footer">
                <input class="btn btn-primary btn-md" type="submit" value="Modfier le vaccin"/></div>
               </form>