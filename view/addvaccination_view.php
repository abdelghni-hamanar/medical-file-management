<?php
require_once('heading_html.php');



?>

       <div class="wrapper fadeInDown">
       <div class="modal-content">
                <div class="modal-header login-header">
                <h4 class='modal-title'><i class="glyphicon glyphicon-plus"></i><b> Ajouter un vaccin</b></h4>
                </div>
                <div class="modal-body">
                <form action="../controller/addvaccin_controller.php" method="POST" class="well form-horizontal">
                <input id="label" name="label" placeholder="Nom du vaccin" required="true" value="" type="text">
                <input id="vaccinationdescription" name="vaccinationdescription" placeholder="Description" required="true" value="" type="text">
                </div>
                <div class="modal-footer">
                <input class="btn btn-primary btn-md" type="submit" value="Ajouter le vaccin"/></div>
               </form>